<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
  protected $fillable = [
      'nama', 'nip', 'tempat_lahir','tanggal_lahir','profesi','status','telpon','alamat','foto'
  ];
}
