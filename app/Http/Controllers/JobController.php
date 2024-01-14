<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPosting;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string|max:255',
            'user_email' => 'required|string',
            'budget' => 'required|string|max:10',
        ]);

        JobPosting::create($validatedData);

        Mail::to('flick@kaizeltech.onmicrosoft.com')->send(new JobPosted($validatedData));

        return redirect()->back()->with('success', 'Job posted successfully!');
    }
}
