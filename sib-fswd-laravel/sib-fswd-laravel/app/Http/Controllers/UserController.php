<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
       public function index ()
       {
       $data['list_user']= User::all();
       return view('user.index',$data);
       }

       public function create(){
       return view('user.create');
       }

       public function store(Request $request){
       $user= new User();
       $user->nama=request('nama');
       $user->email=request('email');
       $user->no_hp=request('no_hp');
       $user->alamat=request('alamat');
       $user->role=request('role');
       $user->foto=request('foto');
       if ($request->hasFile('foto')) {
       $image = $request->file('foto');
       $image_path = Storage::disk('public')->put('image', $image);
       $user->foto = $image_path;
       }
       $user->password=request('password');

       $user->save();

       return redirect('user')->with('success','Data berhasil ditambahkan');
       }

       public function show(User $user){
       $data['user'] = $user;
       return view('user.show', $data);
       }

       public function edit(User $user){
       $data['user'] = $user;
       return view('user.edit', $data);
       }

       public function update(User $user){
       $user-> nama = request('nama');
       $user-> email = request('email');
       $user-> no_hp = request('no_hp');
       $user-> alamat = request('alamat');
       $user-> role = request('role');
       $user-> foto = request('foto');
       $user-> password = request('password');
       $user->save();

       return redirect('user')->with('warning','Data berhasil diupdate');
       }

       public function destroy(User $user){
       $user->delete();
       return redirect('user')->with('danger','Data berhasil dihapus');
       }
}
