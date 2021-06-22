<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Prototype;

class PrototypeController extends Controller
{
    //
    public function index() {
        return view('prototypes.index');
    }

    public function create() {
        return view('prototypes.create');
    }

    public function store(Request $request) {
        $prototype = new Prototype;

        $prototype->title = $request->input('title');
        $prototype->catch_copy = $request->input('catch_copy');
        $prototype->concept = $request->input('concept');
        // ログインしているユーザーのIDを保存する
        $prototype->user_id = Auth::id();

        $prototype->save();

        return redirect('/');
    }
}
