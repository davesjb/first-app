<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function show()
    {
        // if (1 == 1) {
        //     return view("login");
        // } else {
        //     return view("welcome");
        // }
        return view("login");
    }

    public function store()
    {
        return view("store");
    }
}
