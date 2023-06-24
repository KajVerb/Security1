<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        return view('contact.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Contact::create($this->validateRequest($request));
    }

    public function validateRequest(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'description' => 'required|min:20',
        ]);
    }
}
