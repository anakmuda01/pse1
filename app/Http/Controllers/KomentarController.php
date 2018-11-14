<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kersan;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function storeKomen($id, Request $request)
    {
      $komen = new Komentar();
      $komen->nama = $request->nama;
      $komen->komentar = $request->isi_komen;
      $komen->post_id = $id;
      $komen->save();

      return back();
    }

    public function storeKersan(Request $request)
    {
      $kersan = new Kersan();
      $kersan->nama = $request->nama;
      $kersan->body = $request->body;
      $kersan->save();

      return back();
    }


}
