<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriModelController extends Controller
{

    public function index()
    {
        $data['list_kategori'] = KategoriModel::all();
        return view ('kategori.index',$data);

    }


    public function create()
    {
        return view('kategori.create');
    }


    public function store(Request $request)
    {
        $kategori= new KategoriModel();
        $kategori-> name = request('name');
        $kategori->save();

        return redirect('kategori')->with('success','Data berhasil ditambahkan');

    }


    public function show(KategoriModel $kategoriModel)
    {
        $data['kategori'] = $kategoriModel;
        return view('kategori.show', $data);
    }


    public function edit(KategoriModel $kategoriModel)
    {
        $data['kategori'] = $kategoriModel;
        return view('kategori.edit', $data);
    }

    public function update(Request $request, KategoriModel $kategoriModel)
    {
        $kategoriModel-> name = request('name');
        $kategoriModel->save();

        return redirect('kategori')->with('warning','Data berhasil diupdate');

    }

    public function destroy(KategoriModel $kategoriModel)
    {
        $kategoriModel->delete();
        return redirect('kategori')->with('danger','Data berhasil dihapus');
    }
}
