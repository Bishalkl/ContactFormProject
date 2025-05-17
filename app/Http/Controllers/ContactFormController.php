<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactFormController extends Controller
{
    // first for index
    public function index() {
        return view('contactform');
    }
    // first for store
    public function store(ContactFormRequest $request) {
        // return redirect and flashing session data
        return redirect()->route('contact.index')->with('status', 'Contact form is successfully submitted');
    }
}
