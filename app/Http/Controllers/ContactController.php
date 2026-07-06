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
            $recipients = ['portfolio@avantycapital.com'];
            Mail::to($recipients)->send(new NewContactSubmission($contactMessage));
        } catch (\Exception $e) {
            // If the email fails, log the real reason so you can fix it, 
            // but DO NOT crash the user's form submission.
            Log::error('Contact Form Email Failed: ' . $e->getMessage());
        }

        // 3. Always return success to the frontend if the DB save worked
        return response()->json([
            'success' => true, 
            'message' => 'Your message has been sent successfully.'
        ]);
    }
}