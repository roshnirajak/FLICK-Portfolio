<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Mail\EnrollmentSubmitted;
use Illuminate\Support\Facades\Mail;

class EnrollmentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'user_email' => 'required|email|max:255',
            'mobile_num' => 'required|string',
            'about_user' => 'required|string',
        ]);

        $enrollment = Enrollment::create($validatedData);

        // Send email
        Mail::to('flick@kaizeltech.onmicrosoft.com')->send(new EnrollmentSubmitted($validatedData));

        return redirect()->back()->with('success', 'Your Application has been submitted! We\'ll get back to you later');
    }
}
