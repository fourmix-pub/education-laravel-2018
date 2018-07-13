<?php

namespace App\Repositories;

use App\Note;

class NoteRepository
{
    public function noteResource()
    {
        $notes = Note::published()->get();

        return compact('notes');
    }

    public function myNoteResource()
    {
        $notes = request()->user()->notes;

        return compact('notes');
    }
}
