<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request): RedirectResponse
    {
        $messages = [
            'required' => __('site.contact.validation.required'),
            'email' => __('site.contact.validation.email'),
        ];

        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['nullable', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone_code' => ['required', 'string', 'max:5'],
            'phone' => ['required', 'string', 'max:30'],
            'budget' => ['required', 'string', 'max:255'],
        ], $messages);

        $validated['full_name'] = trim($validated['first_name'] . ' ' . ($validated['last_name'] ?? ''));
        $validated['phone_full'] = $validated['phone_code'] . ' ' . $validated['phone'];

        Mail::to(config('mail.contact_to'))->send(new ContactFormMail($validated));

        return back()->with('contact_success', true);
    }
}
