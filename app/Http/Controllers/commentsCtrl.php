<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use Validator;

class commentsCtrl extends Controller
{
    public function getAllComments(Request $request)
    {
        $recipeId = $request->input('recipeId');
        $comments = Comment::where('recipeId', $recipeId)->get();
        $comments->load('user');
        return $comments->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function postComment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment'       =>  'required|string|max:1024',
            'rid'           =>  'required|integer',
            'uid'           =>  'required|integer'
        ], [
            'comment.required'  => "Du måste skriva en kommentar.",
            'comment.max'       => "Din kommentar får inte innehålla mer än 1024 tecken."
        ]);

        if ($validator->fails()) {
            return response($validator->messages(), 200);
        }

        $comment = new Comment();
        $comment->comment = $request->get('comment');
        $comment->recipeId = $request->get('rid');
        $comment->userId = $request->get('uid');

        $comment->save();

        $comment->load('user');

        return response($comment->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), 201);
    }

    public function deleteComment(Request $request)
    {
        $comment = Comment::find($request->get('cid'));
        $recipeId = $comment->recipeId;

        $comment->delete();

        return response('success', 202);
    }
}
