<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
    $contact = $request->only(['name1','name2','gender','email','tel', 'address', 'building', 'type', 'content']);
    return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
    $contact = $request->only(['name1','name2','gender','email','tel', 'address', 'building', 'type', 'content']);
    }

    // public function thanks()
    // {
    //     return view('thanks');
    // }
}
