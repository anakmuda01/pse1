<?php

namespace App\Http\Controllers;

use App\Models\Web;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Waktu;
use App\Models\Kontak;
use App\Models\Kersan;
use App\Models\Banner;
use App\Models\Pegawai;
use App\Models\Komentar;

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
        $posts = Post::orderBy('id','desc')->paginate(6);
        $waks = Waktu::get()->first();
        $pegs = Pegawai::all();
        $kon = Kontak::get()->first();
        $web = Web::get()->first();
        $bans = Banner::all();
        return view('blog.index',compact('posts','waks','pegs','kon','web','bans'));
    }
    public function indexPost()
    {
        $tags = Tag::with('posts')->get();
        $acak = Post::inRandomOrder()->paginate(4);
        $posts = Post::orderBy('id','desc')->paginate(8);
        $tot = Post::get()->count();
        return view('blog.index-post',compact('acak','posts','tags','tot'));
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

    public function showPost($slug)
    {
      $tags = Tag::with('posts')->get();
      $post = Post::with('tags')->where('slug_judul',$slug)->first();
      $acak = Post::inRandomOrder()->paginate(4);
      $postkats = Post::whereHas('tags',function($q) use ($post){
        $q->where('nama_tag',$post->tags[0]->nama_tag);
      })->inRandomOrder()->paginate(3);
      if($post){
        return view('posts.single-post',compact('post','tags','acak','postkats'));
      }else{
        abort(404);
      }
    }
    public function filterByTag($tag)
    {
        $tot = Post::get()->count();
        $posts = Post::whereHas('tags',function($q) use ($tag){
            $q->where('slug_tag',$tag);
        })->paginate(8);
        $tags = Tag::with('posts')->get();
        $acak = Post::inRandomOrder()->paginate(4);
        return view('blog.indexPostTag',compact('posts','tags','acak','tot'));
    }

    public function getKersan()
    {
      $kersans = Kersan::orderBy('id','desc')->paginate(25);

      return view('blog.kersan',compact('kersans'));
    }
    public function cari(Request $request)
    {
      $cari = urldecode($request->input('cari'));
      $trim_cari= trim($cari);
      if(!empty($trim_cari)){
        $posts = Post::where('judul', 'like', '%'.$trim_cari.'%')
                            ->orderBy('id','desc')
                            ->paginate(8);
        $tags = Tag::with('posts')->get();
        $acak = Post::inRandomOrder()->paginate(4);
        $tot = Post::get()->count();
        return view('blog.index-post',compact('posts','tags','acak','tot'));
      } else {
        abort(404);
      }
    }
}
