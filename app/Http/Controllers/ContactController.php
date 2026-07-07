<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Mail\NewContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\JsonResponse;

class ContactController extends Controller
{
    public function submit(Request $request): JsonResponse
    {
        // Diagnostic Log 1: Confirm the request actually reached the controller
        Log::info('Form submission started on localhost.');

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // 1. Save to Database (Filament Panel)
        $contactMessage = ContactMessage::create($validated);

        // 2. Try to Send Email via one.com SMTP
        try {
            // Updated to exclusively send to your business email
            $recipients = ['orpon.pciu@gmail.com'];
            
            Mail::to($recipients)->send(new NewContactSubmission($contactMessage));
            
            // Diagnostic Log 2: Confirm the email was actually handed off to the SMTP server
            Log::info('Email successfully handed over to One.com from localhost.');
            
        } catch (\Throwable $e) { 
            // CRITICAL FIX: Changed \Exception to \Throwable to catch ALL fatal PHP errors
            Log::error('Contact Form Email Failed: ' . $e->getMessage());
        }

        // 3. Always return success to the frontend if the DB save worked
        return response()->json([
            'success' => true, 
            'message' => 'Your message has been sent successfully.'
        ]);
    }
}