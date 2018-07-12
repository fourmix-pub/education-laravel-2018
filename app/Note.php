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
}
