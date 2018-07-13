<?php

namespace App\Repositories;

use App\Comment;

class CommentRepository
{
    public function commentResource()
    {
        $comments = Comment::all();

        return compact('comments');
    }
}
