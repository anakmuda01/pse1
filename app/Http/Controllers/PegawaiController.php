<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegs = Pegawai::all();
        return view('pegawai.indexPegawai',compact('pegs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai.tambahPegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'alamat' => 'required|max:88|'
      ]);

      $stat = array_diff($request->status, [99]);
      if(empty($stat)){
        return redirect('pegawai/create')->withInput($request->input())->with('msg','Silahkan pilih status !');
      }

        $peg = Pegawai::create([
          'nama' => ucwords($request->nama),
          'nip' => $request->nip,
          'tempat_lahir' => ucwords($request->tempat_lahir),
          'tanggal_lahir' => $request->tanggal_lahir,
          'profesi' => ucwords($request->profesi),
          'status' => $request->status[0],
          'telpon' => $request->telpon,
          'alamat' => $request->alamat,
          'foto' => $request->gambar
        ]);

        return redirect('/pegawai')->with('msg','Data Pegawai dari '.$request->nama.' telah disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peg = Pegawai::findorfail($id);

        return view('pegawai.editPegawai',compact('peg'));
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
      $this->validate($request,[
        'alamat' => 'required|max:88|'
      ]);
      
      $stat = array_diff($request->status, [99]);
      if(empty($stat)){
        return redirect('pegawai/'.$id.'/edit')->withInput($request->input())->with('msg','Silahkan pilih status !');
      }

      $peg = Pegawai::findorfail($id);

      $peg->update([
        'nama' => $request->nama,
        'nip' => $request->nip,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'profesi' => $request->profesi,
        'status' => $request->status[0],
        'telpon' => $request->telpon,
        'alamat' => $request->alamat,
        'foto' => $request->gambar
      ]);

      return redirect('/pegawai')->with('msg','Data Pegawai dari '.$request->nama.' telah disimpan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = Pegawai::findorfail($id);
        $peg->delete();

        return redirect('/pegawai')->with('msg','Data Pegawai dari '.$peg->nama.' telah dihapus.');
    }
}
