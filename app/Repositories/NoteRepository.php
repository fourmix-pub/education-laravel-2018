<?php

namespace App\Repositories;

use App\Note;

class NoteRepository
{
    public function noteResource()
    {
        $notes = Note::published()->paginate(10);

        return compact('notes');
    }

    public function myNoteResource()
    {
        $notes = request()->user()->notes()->paginate(10);

        return compact('notes');
    }
}
