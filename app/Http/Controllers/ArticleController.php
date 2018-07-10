<?php

namespace App\Http\Controllers;

use App\Article;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleRepository;

    /**
     * Create a new controller instance.
     *
     * @param ArticleRepository $articleRepository
     */
    public function __construct(ArticleRepository $articleRepository)
    {
        $this->middleware('auth');
        $this->articleRepository = $articleRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('articles.index', $this->articleRepository->articleResource());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:25',
            'contents' => 'required|string',
            'is_published' => 'nullable|boolean',
        ]);

        $article = new Article();
        $article->title = $request->input('title');
        $article->contents = $request->input('contents');
        $article->is_published = $request->input('is_published', false);
        $article->user_id = $request->user()->id;
        $article->save();

        return redirect()->route('articles.index')->with('status', '作成しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $this->validate($request, [
            'title' => 'required|string|max:25',
            'contents' => 'required|string',
            'is_published' => 'nullable|boolean',
        ]);

        $article->title = $request->input('title');
        $article->contents = $request->input('contents');
        $article->is_published = $request->input('is_published', false);
        $article->update();

        return redirect()->route('articles.show', compact('article'))
            ->with('status', '編集しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article $article
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('status', '削除しました。');
    }
}
