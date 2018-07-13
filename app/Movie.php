<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Movie extends Model
{
  public function user()
  {
      return $this->hasOne(User::class, 'id', 'user_id');
  }

  public function scopeFilter($query, Collection $search)
  {
      $query->when($search->get('movie_name'), function ($query, $value) {
        $query->where('movie_name', 'LIKE', '%'.$value.'%');
      });
  }

  public function scopePublished($query)
  {
      return $query->where('is_published', true);
  }

  public function scopeNotPublished($query)
  {
      return $query->where('is_published', false);
  }

  public function comments()
  {
      return $this->hasMany(Comment::class, 'movie_id', 'id');
  }

}
