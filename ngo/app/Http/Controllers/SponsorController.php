<?php

namespace App\Http\Controllers;

use App\Models\Sponsorship;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'gender' => 'required|string',
            'age' => 'required|string',
            'childName' => 'nullable|string|max:255',
            'amount' => 'required|string',
            'message' => 'nullable|string|max:500',
        ]);

        // Store the sponsorship data
        Sponsorship::create([
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'childName' => $request->input('childName'),
            'amount' => $request->input('amount'),
            'message' => $request->input('message'),
        ]);

        // Redirect to the confirmation page
        return redirect()->route('sponsor.confirmation');
    }

    public function confirmation()
    {
        return view('confirmation'); // Display QR code page
    }
}
