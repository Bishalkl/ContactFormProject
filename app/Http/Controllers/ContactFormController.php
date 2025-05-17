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
        $value = 
    }
}
