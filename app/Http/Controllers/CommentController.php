<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function store(CommentRequest $request, $id) {
        $comment = new Comment;
        $comment->text = $request->text;
        $comment->prototype_id = $id;
        $comment->user_id = Auth::id();
        $comment->save();
        return redirect('prototypes/' . $id);
    }
}
