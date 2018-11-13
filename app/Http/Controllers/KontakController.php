<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function getKontak()
    {
      $kon = Kontak::get()->first();
      return view('kontak.getKontak',compact('kon'));
    }

    public function saveKontak(Request $req)
    {
      $kon = Kontak::get()->first();
      $kon->update([
        'telpon' => $req->telpon,
        'email' => $req->email,
        'alamat' => $req->alamat,
        'map' => $req->map
      ]);

      return redirect('/get-kontak')->with('msg','Berhasil disimpan~');
    }
}
