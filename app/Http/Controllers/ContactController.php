<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        // Option 1 : sauvegarder dans la base
        Message::create($validated);

        // Option 2 : envoyer un mail (si tu crées un Mailable)
        // Mail::to('support@tonsite.com')->send(new ContactMessage($validated));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
