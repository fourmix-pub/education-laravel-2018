<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\MovieRepository;

class HomeController extends Controller
{
     protected $movieRepository;

     public function __construct(MovieRepository $repository)
     {
       $this->movieRepository = $repository;
     }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         return view('index', $this->movieRepository->topMovieResource());
     }
}
