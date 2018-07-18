<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

  public function recipe()
  {
      return $this->hasOne(Recipe::class, 'id', 'recipe_id');
  }
}
