<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use App\Comment;
use App\Repositories\CommentRepository;


class CommentController extends Controller
{
  protected $commentRepository;

  /**
   * Create a new controller instance.
   *
   * @return void
   */
   public function create(Recipe $recipe)
   {
       return view('recipes.comment' ,compact('recipe'));
   }

  public function store(Request $request, Recipe $recipe)
  {
      $this->validate($request, [  //入力チェック
        'name' => 'required|string|max:25',
        'content' => 'required|string',
      ]);

      //インサート
      $comment = new Comment();
      $comment->name = $request->input('name');
      $comment->content = $request->input('content');
      $comment->recipe_id = $recipe->id;
      $comment->save();

      return redirect()->route('all.recipes.show', compact('recipe'))->with('status', 'コメントしました。');

  }
}
