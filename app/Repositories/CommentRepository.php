<?php

namespace App\Repositories;

use App\Comment;
use App\Movie;

class CommentRepository
{
  public function movieCommentResource(Movie $movie)
  {
    $comments = movie()->comments()->coments;
    return compact('comments');
  }
}
