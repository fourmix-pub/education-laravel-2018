<?php

namespace App\Repositories;

use App\Recipe;

class RecipeRepository
{
    public function recipeResource()
    {
        $recipes = Recipe::all();

        return compact('recipes');
    }

    public function commentResource($recipe)
    {

        $comments = $recipe->comments;

        return compact('comments', 'recipe');
    }
}
