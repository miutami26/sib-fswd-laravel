@extends('template.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Edit Data Pengguna
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ $user->phone }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>Role</label>
                                <select name="role" id="" class="form-control">
                                    <option value="">--- Pilih Role ---</option>
                                    <option value="admin" @if ($user->role == 'admin') selected @endif>
                                        Admin</option>
                                    <option value="staff" @if ($user->role == 'staff') selected @endif>
                                        Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="avatar" class="mb-2">Foto</label>
                                        <input type="file" class="form-control" id="avatar" name="avatar">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" placeholder="Masukkan Alamat Anda" id="address" name="address" style="height: 100px"></textarea>
                        </div>
                        <div class="float-right form-group mt-3"><button type="submit"
                                class="btn btn-warning">Update</button>
                            <a href="{{ route('user.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
