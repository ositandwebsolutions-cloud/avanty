<?php

namespace App\Http\Controllers;

use App\Models\AboutPageSetting;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // Fetch the first settings row (if it exists)
        $settings = AboutPageSetting::first();
        
        // Fetch all team members ordered by your Filament sorting field
        $teamMembers = TeamMember::orderBy('sort_order', 'asc')->get();

        // Format the dynamic team member data for the JavaScript slider
        $jsBioData = [];
        foreach ($teamMembers as $member) {
            $jsBioData[$member->slug] = [
                'name' => $member->name,
                'title' => $member->title,
                'sections' => $member->bio_sections ?? []
            ];
        }

        return view('frontend.aboutus', compact('settings', 'teamMembers', 'jsBioData'));
    }
}