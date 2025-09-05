<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create(){
        return view('contact_form');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        Contact::create($request->only('name', 'email'));
        return back()->with('success', 'Kayit eklendi');
    }
}
