<?php

namespace App\Http\Controllers;

use App\Models\Kategory;
use Illuminate\Http\Request;

class KategoryController extends Controller
{
    public function index ()
    {
        $data['list_kategory']= Kategory::all();
        return view('kategory.index',$data);
    }

    public function create(){
        return view('kategory.create');
    }

    public function store(Request $request){
        $kategory= new Kategory();
        $kategory->name=request('name');
        $kategory->save();

        return redirect('kategory')->with('success','Data berhasil ditambahkan');
    }

    public function show(Kategory $kategory){
        $data['kategory'] = $kategory;
        return view('kategory.show', $data);
    }

    public function edit(Kategory $kategory){
        $data['kategory'] = $kategory;
        return view('kategory.edit', $data);
    }

    public function update(Kategory $kategory){
        $kategory-> name = request('name');
        $kategory->save();
        return redirect('kategory')->with('warning','Data berhasil diupdate');
    }

    public function destroy(Kategory $kategory)
    {
        $kategory->delete();
        return redirect('kategory')->with('danger', 'Data berhasil dihapus');
    }

}
