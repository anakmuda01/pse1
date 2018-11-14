<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
  protected $fillable = [
      'name', 'komentar','post_id'
  ];

  public function post()
  {
    return $this->belongsTo('App\Models\Post');
  }
}
