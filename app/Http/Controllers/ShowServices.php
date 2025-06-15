<?php

namespace App\Http\Controllers;

class ShowServices extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return view('front.services');
    }
}
