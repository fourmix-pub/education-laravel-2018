<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  protected $casts = [
      'is_published' => 'boolean',
  ];

  public function status(): string
  {
      if ($this->is_published === true) {
          return '公開中';
      }

      return '未公開';
  }

  public function user()
  {
      return $this->hasOne(User::class, 'id', 'user_id');
  }

  public function comments()
  {
    return $this->hasMany(Comment::class, 'note_id', 'id');
  }

  public function scopePublished($query)
  {
      return $query->where('is_published', true);
  }

}