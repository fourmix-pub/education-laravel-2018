<?php

namespace App\Repositories;

use App\Note;

class NoteRepository
{
    public function noteResource()
    {
        $notes = Note::all();

        return compact('notes');
    }
}
