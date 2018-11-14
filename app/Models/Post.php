<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
      'user_id','judul','slug_judul','gambar','isi','tanggal'
  ];

  public function tags()
  {
    return $this->belongsToMany('App\Models\Tag');
  }

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }

  public function komentars()
  {
    return $this->hasMany('App\Models\Komentar');
  }
}
