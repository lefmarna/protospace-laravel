<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($id) {
        $user = User::with('prototypes')->find($id);
        return view('users.show', compact('user'));
    }
}
