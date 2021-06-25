<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePrototype;

use App\Models\Prototype;
class PrototypeController extends Controller
{
    //
    public function index() {
        // withを使うことでN+1問題を解消する
        $prototypes = Prototype::with('user')->get();
        return view('prototypes.index', compact('prototypes'));
    }

    public function create() {
        return view('prototypes.create');
    }

    public function store(StorePrototype $request) {
        $prototype = new Prototype;

        $prototype->title = $request->input('title');
        $prototype->catch_copy = $request->input('catch_copy');
        $prototype->concept = $request->input('concept');
        // ログインしているユーザーのIDを保存する
        $prototype->user_id = Auth::id();

        $prototype->save();

        return redirect('/');
    }

    public function show($id) {
        $prototype = Prototype::find($id);
        return view('prototypes.show', compact('prototype'));
    }

    public function edit($id) {
        $prototype = Prototype::find($id);
        return view('prototypes.edit', compact('prototype'));
    }
}
