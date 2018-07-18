<?php

namespace App\Repositories;

use App\Comment;

class CommentRepository
{
    public function commentResource()
    {
        $comment = Comment::all();

        return compact('comments');
    }
}
