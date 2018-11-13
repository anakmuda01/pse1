<?php

namespace App\Http\Controllers;

use App\Models\Tag;

use Illuminate\Http\Request;

class TagController extends Controller
{
  public function saveTag(Request $request)
  {
    $validator = \Validator::make($request->all(), [
      'nama' => 'required',
    ]);

    if ($validator->fails())
    {
        return response()->json(['errors'=>$validator->errors()->all()]);
    }else{
      $tag = Tag::create([
        'nama_tag' => $request->nama,
        'slug_tag' => str_slug($request->nama,'-'),
      ]);
      return response()->json(['respon' => 'sukses','id'=>$tag->id ,'nama_tag' => $request->nama]);
    }
  }

  public function getTag()
  {
    $tag = Tag::all();
    return response()->json($tag->toArray());
  }

  public function delTag(Request $req)
  {
    $tag = Tag::find($req->id);

    if(!$tag->posts->count() > 0){
      $tag->delete();
      return response()->json(['success' => "OK",'id' => $tag->id, 'nama_tag'=>$tag->nama_tag]);
    }else{
      return response()->json(['success' => 'NO']);
    }
  }

}
