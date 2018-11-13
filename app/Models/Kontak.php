<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
  protected $fillable = [
      'telpon', 'email', 'alamat', 'map'
  ];
}
