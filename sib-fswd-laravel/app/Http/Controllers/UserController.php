<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    $users = User::all();
    return view('user.index', compact('users'));
    }

    public function create(){
    return view('user.create');
    }

    public function store(Request $request) {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'role' => 'required',
        'avatar' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'password' => 'required|min:8',]);
        User::create($request->all());
        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    public function show(User $user){
        return view('user.show', compact('user'));
    }

    public function edit(User $user){
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user){
        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'role' => 'required',
        'avatar' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'password' => 'nullable|min:8', ]);
        $user->update($request->all());
        return redirect()->route('user.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully.');
    }
}
