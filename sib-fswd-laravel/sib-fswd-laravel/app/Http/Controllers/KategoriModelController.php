<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriModelController extends Controller
{

   function index(){
   $data['list_kategori'] = KategoriModel::all();
   return view('kategori.index', $data);
   }
   function create(){
   return view('kategori.create');
   }
   function store(){
   $kategori= new KategoriModel();
   $kategori-> nama = request('nama');
   $kategori->save();

   return redirect('kategori')->with('success','Data berhasil ditambahkan');
   }
   function show(KategoriModel $kategori){
   $data['kategori'] = $kategori;
   return view('kategori.show', $data);
   }
   function edit(KategoriModel $kategori){
   $data['kategori'] = $kategori;
   return view('kategori.edit', $data);
   }
   function update(KategoriModel $kategori){
   $kategori-> name = request('name');
   $kategori->save();

   return redirect('kategori')->with('warning','Data berhasil diupdate');
   }
   function destroy(KategoriModel $kategori){
   $kategori->delete();
   return redirect('kategori')->with('danger','Data berhasil dihapus');
   }
}
