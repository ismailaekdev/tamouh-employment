<?php

namespace App\Http\Controllers;

class ShowHome extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('front.home');
    }
}
