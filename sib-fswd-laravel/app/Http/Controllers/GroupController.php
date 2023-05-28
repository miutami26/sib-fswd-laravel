<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index ()
    {
        $data['list_group']= Group::all();
        return view('group.index',$data);
    }

    public function create(){
        return view('group.create');
    }

    public function store(Request $request){
        $group= new Group();
        $group->nama=request('nama');
        $group->role=request('role');
        $group->save();

        return redirect('group')->with('success','Data berhasil ditambahkan');
    }

    public function show(Group $group){
        $data['group'] = $group;
        return view('group.show', $data);
    }

    public function edit(Group $group){
        $data['group'] = $group;
        return view('group.edit', $data);
    }

    public function update(Group $group){
        $group-> nama = request('nama');
        $group-> role = request('role');
        $group->save();

        return redirect('group')->with('warning','Data berhasil diupdate');
    }

    public function destroy(Group $group){
        $group->delete();
        return redirect('group')->with('danger','Data berhasil dihapus');
    }
}
