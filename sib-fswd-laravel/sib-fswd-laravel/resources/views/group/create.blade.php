@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Tambah Data Group
                        <form action="{{ url('group') }}" method="post">
                            @csrf
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label" for="">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">Role</label>
                                <select name="role" id="" class="form-control">
                                    <option value="">--- Pilih Role ---</option>
                                    <option value="admin">Admin</option>
                                    <option value="staff">Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class=" float-right form-group mt-2"><button type="submit"
                                class="btn btn-primary">Simpan</button>
                            <a href="{{ url('group') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
