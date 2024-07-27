<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
    $contact = $request->only(['name1','name2','gender','email','tel', 'address', 'building', 'type', 'content']);
    return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
    $contact = $request->only(['name1','name2','gender','email','tel', 'address', 'building', 'type', 'content']);
    }
}
