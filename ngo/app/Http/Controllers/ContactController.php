<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|string|max:50',
            'occupation' => 'required|string|max:100',
            'mobile_no' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);

        // Store the contact data
        Contact::create([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'occupation' => $request->input('occupation'),
            'mobile_no' => $request->input('mobile_no'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        // Redirect to the thank you page
        return redirect()->route('contact.thankyou');
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
