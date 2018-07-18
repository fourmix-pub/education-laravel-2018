<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RecipeRepository;
use App\Recipe;

class AllHomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RecipeRepository $recipeRepository)
    {
        return view('all_home', $recipeRepository->recipeResource());
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.all_show', compact('recipe'));
    }
}
