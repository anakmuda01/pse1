<?php

namespace App\Http\Controllers;

use Auth;
use Hash;

use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profilUser');
    }

    public function ubahPass()
    {
      return view('user.ubahPass');
    }

    public function changePassword(Request $request){
      if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
          // The passwords matches
          return redirect()->back()->with("error","Password yang anda masukkan salah. Silahkan ulangi lagi.");
      }
      if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
          //Current password and new password are same
          return redirect()->back()->with("error","Password baru tidak bisa sama dengan yang lama.");
      }
      $validatedData = $request->validate([
          'current-password' => 'required',
          'new-password' => 'required|string|min:6|confirmed',
      ]);
      //Change Password
      $user = Auth::user();
      $user->password = bcrypt($request->get('new-password'));
      $user->save();
      return redirect('/profil-user')->with("success","Password berhasil diubah !");
    }

    public function editNamaUser()
    {
      return view('user.edit-nama-user');
    }

    public function updateNamaUser(Request $request)
    {
      $user = User::find(Auth::user()->id);

      if($user){
        $user->update([
          'name' => ucwords($request->nama)
        ]);

        return redirect('/profil-user')->with('success','Nama berhasil diubah.');
      }else{
        return ('error gan~');
      }
    }
}
