<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Waktu;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // public function __construct()
     // {
     //     $this->middleware('auth');
     // }

    public function index()
    {
        $posts = Post::with('tags')->get();
        $tags = Tag::with('posts')->get();
        return view('admin.dashboard',compact('posts','tags'));
    }

    public function filter($tag)
    {
        $tot = Post::get()->count();
        $posts = Post::whereHas('tags',function($q) use ($tag){
            $q->where('slug_tag',$tag);
        })->get();
        $tags = Tag::with('posts')->get();
        return view('admin.dashboardfilter',compact('posts','tags','tot'));
    }

    public function webProfil()
    {
      $web = Web::get()->first();

      return view('admin.webProfil', compact('web'));
    }

    public function updateWebProfil(Request $request)
    {
      $this->validate($request,[
        'web_profil' => 'required|max:60000'
      ]);

      $web = Web::get()->first();

      if($web){
        $web->update([
          'profil' =>$request->web_profil
        ]);
      }

      return redirect('/web-profil')->with('msg','Halaman Profil Berhasil disimpan.');
    }

    public function getWaktu()
    {
      $waks = Waktu::get()->first();
      return view('waktu.waktu',compact('waks'));
    }

    public function updateWaktu(Request $req)
    {
      $this->validate($req,[
        'senin_kamis' => 'required|min:10|max:50',
        'jumat' => 'required|min:10|max:50',
        'sabtu' => 'required|min:10|max:50',
      ]);

      $waks = Waktu::get()->first();
      if($waks){
        $waks->update([
          'waktu_1' => $req->senin_kamis,
          'waktu_2' => $req->jumat,
          'waktu_3' => $req->sabtu
        ]);

        return redirect('/waktu')->with('success','Waktu Pelayanan berhasil disimpan~');
      }else{
        dd('error gan~');
      }
    }

    public function getLayanan()
    {
      $web = Web::get()->first();
      return view('admin.inputLayanan', compact('web'));
    }

    public function updateLayanan(Request $request)
    {
      $this->validate($request,[
        'layanan_pkm' => 'required|max:60000'
      ]);

      $web = Web::get()->first();

      if($web){
        $web->update([
          'layanan' =>$request->layanan_pkm
        ]);
      }

      return redirect('/edit-layanan')->with('msg','Halaman Pelayanan Berhasil disimpan.');
    }

    public function getVM()
    {
      $web = Web::get()->first();
      return view('admin.visimisimotto', compact('web'));
    }

    public function updateVM(Request $request)
    {
      $this->validate($request,[
        'visi_misi_motto' => 'required|max:60000'
      ]);

      $web = Web::get()->first();

      if($web){
        $web->update([
          'visi_misi_motto' =>$request->visi_misi_motto
        ]);
      }

      return redirect('/edit-visi-misi-motto')->with('msg','Halaman Pelayanan Berhasil disimpan.');
    }

    public function hpsPost($id)
    {
        $post = Post::findorfail($id);
        $post->delete();
        return redirect('/dashboard')->with('msg','Berhasil dihapus~');
    }
}
