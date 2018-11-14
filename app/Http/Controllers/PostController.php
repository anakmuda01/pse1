<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Tag;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $id = Auth::user()->id;
      $posts = Post::with('tags')->where('user_id',$id)->get();
      return view('posts.posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('posts.tambahPost', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'judul' => 'required|unique:posts|min:5|max:150',
        'tanggal' => 'required',
        'isi_post' => 'required|max:60000',
      ]);

      $request->kategori = array_diff($request->kategori, [99]);
      if(empty($request->kategori)){
        return redirect('/posts/create')->withInput($request->input())->with('tag_error','Silahkan pilih Kategori Post');
      }

      $post = Post::create([
        'user_id' => Auth::user()->id,
        'judul' => $request->judul,
        'slug_judul' => str_slug($request->judul,'-'),
        'gambar' => $request->gambar,
        'isi' => $request->isi_post,
        'tanggal' => $request->tanggal
      ]);

      $post->tags()->attach($request->kategori[0]);

      return redirect('/posts')->with('msg','Berhasil ditambahkan~');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($slug)
    // {
    //   $tags = Tag::with('posts')->get();
    //   $post = Post::with('tags')->where('slug_judul',$slug)->first();
    //
    //   if($post){
    //
    //   }else{
    //     abort(404);
    //   }
    //   return view('posts.single-post',compact('post','tags'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::with('tags')->findorfail($id);
        $tags = Tag::all();
        return view('posts.editPost',compact('post','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'judul' => 'required|max:150',
        'tanggal' => 'required',
        'isi_post' => 'required|max:60000'
      ]);

      $request->kategori = array_diff($request->kategori, [99]);
      if(empty($request->kategori)){
        return redirect('/posts/create')->withInput($request->input())->with('tag_error','Silahkan pilih Kategori Post');
      }

      $post = Post::findorfail($id);
      $post->update([
        'judul' => $request->judul,
        'slug_judul' => str_slug($request->judul,'-'),
        'gambar' => $request->gambar,
        'isi' => $request->isi_post,
        'tanggal' => $request->tanggal
      ]);

      $post->tags()->sync($request->kategori[0]);

      return redirect('/posts')->with('msg','Berhasil diubah~');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorfail($id);
        $post->delete();
        return redirect('/posts')->with('msg','Berhasil dihapus~');
    }
}
