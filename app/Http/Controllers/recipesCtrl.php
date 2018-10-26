<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class recipesCtrl extends Controller
{
    public function show($id)
    {
        $recipe = Recipe::find($id);

        return view('recipe',
            ['id'           => $id,
            'title'         => $recipe->name, 
            'image'         => $recipe->image,
            'ingredients'   => $recipe->ingredients,
            'description'   => $recipe->description
            ]);
    }
}