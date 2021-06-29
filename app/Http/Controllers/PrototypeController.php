<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PrototypeRequest;

use App\Models\Prototype;
use App\Models\Comment;
class PrototypeController extends Controller
{
    //
    public function index() {
        // withを使うことでN+1問題を解消する
        $prototypes = Prototype::with('user')->get();
        return view('prototypes.index', compact('prototypes'));
    }

    public function create() {
        $prototype = new Prototype;
        $action = 'store';
        return view('prototypes.create', compact('prototype', 'action'));
    }

    public function store(PrototypeRequest $request) {
        $prototype = new Prototype;
        $prototype = $this->prototypeParams($request, $prototype);
        $prototype->save();

        return redirect('/');
    }

    public function show($id) {
        $prototype = Prototype::find($id);
        $comments = Comment::with('user')->get()->where('prototype_id', $prototype->id);
        return view('prototypes.show', compact('prototype', 'comments'));
    }

    public function edit($id) {
        $prototype = Prototype::find($id);
        $action = 'update';
        return view('prototypes.edit', compact('prototype', 'action'));
    }

    public function update(PrototypeRequest $request, $id) {
        $prototype = Prototype::find($id);
        $prototype = $this->prototypeParams($request, $prototype);
        $prototype->save();
        return redirect('prototypes/' . $id);
    }

    public function destroy($id) {
        $prototype = Prototype::find($id);
        $prototype->delete();

        return redirect('/');
    }

    private function prototypeParams($request, $prototype) {
        $prototype->title = $request->input('title');
        $prototype->catch_copy = $request->input('catch_copy');
        $prototype->concept = $request->input('concept');
        // ログインしているユーザーのIDを保存する
        $prototype->user_id = Auth::id();
        return $prototype;
    }
}
