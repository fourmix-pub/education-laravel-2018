<?php

namespace App\Repositories;

use App\Article;

class ArticleRepository
{
    public function articleResource()
    {
        $articles = Article::published()->paginate(10);
        return compact('articles');
    }
}