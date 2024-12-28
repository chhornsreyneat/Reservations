<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
       

        return view('zendo-welcome');
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
