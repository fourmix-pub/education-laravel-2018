<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Repositories\NoteRepository;


class Home0Controller extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(NoteRepository $noteRepository)
     {
         $this->noteRepository = $noteRepository;
     }
    public function index()
    {
        $notes = Note::all();
        return view('home',  $this->noteRepository->noteResource());
    }
}
