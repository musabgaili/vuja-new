<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function store(Request $request)
    {
        try {
        $contact =new Contact([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "message" => $request->message,
        ]);
        // return $contact;
        $contact->save();
        return 'OK';
        // return response()->json('OK', 200, );
    } catch (\Exception $e) {
        logger("Error " .$e);
     }
        // return response()->json(['msg'=> 'success'], 200, );
    }
}
