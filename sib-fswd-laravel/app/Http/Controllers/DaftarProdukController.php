<?php

namespace App\Http\Controllers;

use App\Models\DaftarProduk;
use App\Models\Kategory;
use Illuminate\Http\Request;

class DaftarProdukController extends Controller
{
    public function index ()
    {
        $data['pn'] = Kategory::get();
        $data['list_daftarproduk'] = DaftarProduk::with('kategory')->get();
        return view('daftarproduk.index',$data);
    }

    public function create(){
        $data['pn'] = Kategory::get();
        return view('daftarproduk.create', $data);

    }

    public function store(Request $request){
        $daftarproduk= new DaftarProduk;
        $daftarproduk->id_kategories=request('id_kategories');
        $daftarproduk-> nama = request('nama');
        $daftarproduk-> deskripsi = request('deskripsi');
        $daftarproduk-> harga = request('harga');
        $daftarproduk-> status = request('status');
        $daftarproduk->save();

        return redirect('daftarproduk')->with('success','Data berhasil ditambahkan');
    }

    public function show(DaftarProduk $daftarproduk){
        $data['pn'] = Kategory::get();
        $data['daftarproduk'] = $daftarproduk;

        return view('daftarproduk.show', $data);
    }

    public function edit(DaftarProduk $daftarproduk){
        $data['daftarproduk'] = $daftarproduk;
        $data['pn'] = Kategory::get();
        return view('daftarproduk.edit', $data);
    }

    public function update(DaftarProduk $daftarproduk){
        $daftarproduk->id_kategories=request('id_kategories');
        $daftarproduk-> nama = request('nama');
        $daftarproduk-> deskripsi = request('deskripsi');
        $daftarproduk-> harga = request('harga');
        $daftarproduk-> status = request('status');
        $daftarproduk->save();

        return redirect('daftarproduk')->with('warning','Data berhasil diupdate');
    }

    public function destroy(DaftarProduk $daftarproduk)
    {
        $daftarproduk->delete();
        return redirect('daftarproduk')->with('danger', 'Data berhasil dihapus');
    }
}
