<?php

namespace App\Repositories;

use App\Article;

class ArticleRepository
{
    public function articleResource()
    {
        $articles = Article::all();

        return compact('articles');
    }
}