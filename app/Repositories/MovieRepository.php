<?php

namespace App\Repositories;

use App\Movie;

class MovieRepository
{
    public function movieResource()
    {
        $movies = Movie::all();
        return compact('movies');
    }

    public function movie()
    {
        $movies = Movie::where('movie_name','LIKE','%$%')->get();
        return compact('movies');
    }
}
