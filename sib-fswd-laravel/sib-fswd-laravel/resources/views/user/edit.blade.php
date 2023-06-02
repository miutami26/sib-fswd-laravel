@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Edit Data user
                        <form action="{{ url('admin/user', $user->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label" for="">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control"
                                    value="{{ $user->nama }}">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">Email</label>
                                <input type="email" id="email" name="email" class="form-control"
                                    value="{{ $user->email }}">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">No_HP</label>
                                <input type="text" id="no_hp" name="no_hp" class="form-control"
                                    value="{{ $user->no_hp }}">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">Role</label>
                                <select name="role" id="" class="form-control">
                                    <option value="">--- Pilih Role ---</option>
                                    <option value="admin" @if ($user->role == 'admin') selected @endif>
                                        Admin</option>
                                    <option value="staff" @if ($user->role == 'staff') selected @endif>
                                        Staff</option>
                                    <option value="user" @if ($user->role == 'user') selected @endif>
                                        User</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label" for="">Foto</label>
                                <input type="file" id="foto" name="foto" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <label for="">Alamat</label>
                                    <textarea class="form-control" placeholder="Masukkan Alamat Anda" id="alamat" name="alamat" style="height: 100px"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class=" float-right form-group mt-2"><button type="submit"
                                class="btn btn-primary">Update</button>
                            <a href="{{ url('admin/user') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
