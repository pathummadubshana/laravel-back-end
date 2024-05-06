<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //

    public function index()
    {
        return view('owner.owner');

    }

    public function manager()
    {
        return view('maneger.manage');

    }

    public function cash()
    {
        return view('cashier.cashier');
    }
}
