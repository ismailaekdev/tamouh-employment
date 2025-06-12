<?php

namespace App\Http\Controllers;

class ShowContact extends Controller
{

    public function __invoke()
    {
        return view('front.contact');
    }
}
