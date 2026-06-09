<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
    $request->validate([
        'name'=>'required',
        'surname'=>'required',
        'email' => 'required|email|unique:contacs,email',
        'subject'=>'required',
        'message'=>'required',
    ]);         


    Contact::create([
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
    ]);
        return redirect()->route('products')->with('success', 'Successfully submitted contact form');
}

}
