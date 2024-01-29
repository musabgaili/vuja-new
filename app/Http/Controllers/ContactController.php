<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function store(Request $request)
    {
        try {
            $contact = new Contact([
                "name" => $request->name,
                "email" => $request->email,
                "phone" => $request->phone,
                "message" => $request->message,
            ]);

            $contact->save();
            return 'OK';
        } catch (\Exception $e) {
            logger("Error " . $e);
        }
    }
}
