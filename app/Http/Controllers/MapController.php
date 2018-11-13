<?php

namespace App\Http\Controllers;

use Mapper;

use App\Models\Kontak;

use Illuminate\Http\Request;

class MapController extends Controller
{
  public function kontak()
  {
    Mapper::map(-3.2808706,115.0270264);

    $kon = Kontak::get()->first();

    return view('blog.kontak',compact('kon'));
  }
}
