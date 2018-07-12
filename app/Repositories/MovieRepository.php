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
}
