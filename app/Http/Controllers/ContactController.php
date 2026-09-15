<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name'  => ['required', 'string', 'max:100'],
            'telephone'  => ['nullable', 'string', 'max:30'],
            'email'      => ['required', 'email', 'max:255'],
            'comments'   => ['required', 'string', 'max:5000'],
            'consent'    => ['accepted'],
        ]);

        Mail::send('emails.contact', [
            'data' => $validated,
        ], function ($message) use ($validated) {
            $message
                ->to(config('mail.contact_to'))
                ->replyTo(
                    $validated['email'],
                    $validated['first_name'] . ' ' . $validated['last_name']
                )
                ->subject(
                    'Website Enquiry - ' .
                    $validated['first_name'] . ' ' .
                    $validated['last_name']
                );
        });

        return back()->with(
            'success',
            'Thank you. Your enquiry has been sent successfully.'
        );
    }
}