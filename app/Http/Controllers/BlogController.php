<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\Post;
use App\Models\Waktu;
use App\Models\Kontak;
use App\Models\Banner;
use App\Models\Pegawai;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $waks = Waktu::get()->first();
        $pegs = Pegawai::all();
        $kon = Kontak::get()->first();
        $web = Web::get()->first();
        $bans = Banner::all();
        return view('blog.index',compact('posts','waks','pegs','kon','web','bans'));
    }
    public function indexPost()
    {
        return view('blog.index-post');
    }
    public function profilWeb()
    {
      $web = Web::get()->first();
      return view('blog.profilWeb',compact('web'));
    }
    public function pelayanan()
    {
      $web = Web::get()->first();
      return view('blog.daftarPelayanan',compact('web'));
    }
    public function vmm()
    {
      $web = Web::get()->first();
      return view('blog.vmm',compact('web'));
    }
    public function daftarPegawai()
    {
      $pegs = Pegawai::all();
      return view('blog.daftarPegawai',compact('pegs'));
    }
}
