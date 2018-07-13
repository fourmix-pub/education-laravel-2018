<?php

namespace App\Repositories;

use App\Movie;

class MovieRepository
{
    public function movieResource()
    {
        $search = request('search', []);
        $movies = Movie::published()->filter(collect($search))->latest()->get();
        return compact('movies', 'search');
    }

    public function userMovieResource()
    {
      $movies = request()->user()->movies;
      return compact('movies');
    }

    public function topMovieResource()
    {
      $movies = Movie::published()->latest()->limit(3)->get();
      return compact('movies');
    }
}
