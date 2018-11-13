<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\Banner;

use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function getBanner()
    {
      $ban = Web::get()->first();
      return view('banner.kosong',compact('ban'));
    }

    public function saveKosong(Request $req)
    {
      $this->validate($req,[
        'kosong' => 'required|max:60000'
      ]);

      $ban = Web::get()->first();
      $ban->update([
        'banner' => $req->kosong
      ]);
      return redirect('/banner-kosong')->with('msg','Berhasil disimpan~');
    }

    public function indexBanner()
    {
      $bans = Banner::all();
      return view('banner.daftar-banner',compact('bans'));
    }

    public function addBanner()
    {
      return view('banner.addBanner');
    }

    public function editBanner($id)
    {
      $ban = Banner::findorfail($id);
      return view('banner.editBanner',compact('ban'));
    }

    public function saveBanner(Request $req)
    {
      $this->validate($req, [
        'nama' => 'required|unique:banners|max:150',
      ]);

      $ban = Banner::create([
        'nama' => $req->nama,
        'slug_nama' => str_slug($req->nama,'-'),
        'banner' => $req->gambar,
        'deskripsi' => $req->deskripsi
      ]);

      return redirect('/daftar-banner')->with('msg','Berhasil ditambahkan~');
    }

    public function updateBanner(Request $r, $id)
    {
      $this->validate($r, [
        'nama' => 'required|max:150',
      ]);

      $ban = Banner::findorfail($id);
      $ban->update([
        'nama' => $r->nama,
        'slug_nama' => str_slug($r->nama,'-'),
        'banner' => $r->gambar,
        'deskripsi' => $r->deskripsi
      ]);
      return redirect('/daftar-banner')->with('msg','Berhasil diubah~');
    }

    public function deleteBanner($id)
    {
      $ban =  Banner::findorfail($id);
      $ban->delete();
      return redirect('/daftar-banner')->with('msg','Data dari '.$ban->nama.' Berhasil dihpus~');
    }

    public function theBanner($slug)
    {
      $ban = Banner::where('slug_nama',$slug)->first();

      return view('banner.singleBanner',compact('ban'));
    }

}
