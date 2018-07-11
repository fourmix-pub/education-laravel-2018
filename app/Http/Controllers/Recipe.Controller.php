<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use App\Repositories\RecipeRepository;

class RecipeController extends Controller
{
  protected $recipeRepository;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct(RecipeRepository $recipeRepository)
  {
      $this->middleware('auth');
      $this->recipeRepository = $recipeRepository;
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recipes.index', $this->recipeRepository->recipeResource());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [  //入力チェック
          'title' => 'required|string|max:25',
          'material' => 'required|string',
          'contents' => 'required|string',
          'is_published' => 'nullable|boolean',
        ]);

        //インサート
        $recipe = new Recipe();
        $recipe->title = $request->input('title');
        $recipe->contents = $request->input('contents');
        $recipe->material = $request->input('material');
        $recipe->is_published = $request->input('is_published', false); //false(boolean)忘れない(公開するか)
        $recipe->user_id = $request->user()->id; //user_id 誰が作成したか
        $recipe->save();

        return redirect()->route('resipes.index')->with('status', '作成しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recipes  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recipe  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        return view('recipes.edit', compact('resipe')); //compact arrayを作ってくれる
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recipe  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
      $this->validate($request, [  //入力チェック
        'title' => 'required|string|max:25',
        'material' => 'required|string',
        'contents' => 'required|string',
        'is_published' => 'nullable|boolean',
      ]);

      $recipe->title = $request->input('title');
      $recipe->contents = $request->input('contents');
      $recipe->material = $request->input('material');
      $recipe->is_published = $request->input('is_published', false);
      $recipe->update();

      return redirect()->route('resipes.show', compact('recipe'))
        ->with('status', '編集しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recipe  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipes.index')
          ->with('status', '削除しました。');
    }
}
