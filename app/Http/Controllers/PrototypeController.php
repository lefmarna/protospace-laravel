<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrototypeController extends Controller
{
    //
    public function index() {
        return view('prototypes.index');
    }
}
