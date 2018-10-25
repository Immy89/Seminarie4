<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Comment;
use App\Recipe;

class recipesCtrl extends Controller
{
    public function show($id)
    {
        $recipe = Recipe::find($id);
        
        $comments = $recipe->comments;

        return view('recipe',
            ['id'   => $id,
            'title' => $recipe->name, 
            'image' => $recipe->image,
            'ingredients' => $recipe->ingredients,
            'description' => $recipe->description,
            'comments' => $comments]);
    }

    public function postComment(Request $request)
    {
        $this->validate($request, [
            'kommentar'     =>  'required|string|max:1024',
            'id'            =>  'required|integer'
        ]);

        $recipeId = $request->get('id');

        if (Auth::check())
        {
            $comment = new Comment();
            $comment->comment = $request->get('kommentar');
            $comment->recipeId = $recipeId;
            $comment->userId = Auth::user()->getAuthIdentifier();

            $comment->save();
            
            return redirect("/recipe/$recipeId");
        }
    }

    public function deleteComment(Request $request)
    {
        $comment = Comment::find($request->get('cid'));
        $recipeId = $comment->recipeId;

        if (Auth::id() === $comment->user->id)
        {
            $comment->delete();
            return redirect("/recipe/$recipeId");
        }
    }
}