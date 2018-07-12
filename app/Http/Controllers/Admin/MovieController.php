<?php

namespace App\Http\Controllers\Admin;

use App\Movie;
use Illuminate\Http\Request;
use App\Repositories\MovieRepository;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    protected $movieRepository;

    public function __construct(MovieRepository $movieRepository)
    {
        $this->middleware('auth');
        $this->movieRepository = $movieRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', $this->movieRepository->movieResource());
    }

    public function draft()
    {
        return view('admin.draft', $this->movieRepository->movieResource());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
          'movie_name' => 'required|string|max:25',
          'contents' => 'required|string',
          'is_published' => 'nullable|boolean',
      ]);

      $movie = new Movie();
      $movie->title = $request->input('title');
      $movie->movie_name = $request->input('movie_name');
      $movie->contents = $request->input('contents');
      $movie->is_published = $request->input('is_published', false);
      $movie->user_id = $request->user()->id;
      $movie->save();

      return redirect()->route('admin.index')->with('status', '作成しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('admin.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Movie $movie)
     {
         $movie->delete();
         return redirect()->route('admin.index')->with('status', '削除しました。');
     }
}
