<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
  protected $fillable = [
      'nama','banner','deskripsi','slug_nama'
  ];
}
