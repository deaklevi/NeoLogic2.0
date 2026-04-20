<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Itt a kulcsoknak egyezniük kell a Vue form objektumával!
        $validated = $request->validate([
            'firstName' => 'required|string|max:255', // first_name helyett
            'lastName'  => 'required|string|max:255', // last_name helyett
            'email'     => 'required|email',
            'company'   => 'nullable|string',
            'message'   => 'required|string',
        ]);

        try {
            // 1. Értesítés NEKED
            Mail::to('neologicsupport@gmail.com')->send(new ContactMail($validated, true));

            // 2. Visszaigazolás az ÜGYFÉLNEK
            Mail::to($validated['email'])->send(new ContactMail($validated, false));

            return response()->json([
                'success' => true,
                'message' => 'Email elküldve'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Hiba történt: ' . $e->getMessage()
            ], 500);
        }
    }
}