<?php

namespace App\Repositories;

use App\Movie;

class MovieRepository
{
    public function movieResource()
    {
        $search = request('search', []);
        $movies = Movie::filter(collect($search))->get();
        return compact('movies', 'search');
    }
}
