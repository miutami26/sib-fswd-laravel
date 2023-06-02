<?php

namespace App\Http\Controllers;



use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PenggunaController extends Controller
{
    public function index ()
    {
        $data['list_pengguna']= Pengguna::all();
        return view('pengguna.index',$data);
    }

    public function create(){
        return view('pengguna.create');
    }

    public function store(Request $request){
        $pengguna= new Pengguna();
        $pengguna->nama=request('nama');
        $pengguna->email=request('email');
        $pengguna->no_hp=request('no_hp');
        $pengguna->alamat=request('alamat');
        $pengguna->role=request('role');
        $pengguna->foto=request('foto');
        if ($request->hasFile('foto')) {
        $image = $request->file('foto');
        $image_path = Storage::disk('public')->put('image', $image);
        $pengguna->foto = $image_path;
        }
        $pengguna->password=request('password');

        $pengguna->save();

        return redirect('pengguna')->with('success','Data berhasil ditambahkan');
    }

    public function show(Pengguna $pengguna){
        $data['pengguna'] = $pengguna;
        return view('pengguna.show', $data);
    }

    public function edit(Pengguna $pengguna){
        $data['pengguna'] = $pengguna;
        return view('pengguna.edit', $data);
    }

    public function update(Pengguna $pengguna){
        $pengguna-> nama = request('nama');
        $pengguna-> email = request('email');
        $pengguna-> no_hp = request('no_hp');
        $pengguna-> alamat = request('alamat');
        $pengguna-> role = request('role');
        $pengguna-> foto = request('foto');
        $pengguna-> password = request('password');
        $pengguna->save();

        return redirect('pengguna')->with('warning','Data berhasil diupdate');
    }

    public function destroy(Pengguna $pengguna){
        $pengguna->delete();
        return redirect('pengguna')->with('danger','Data berhasil dihapus');
    }

}
