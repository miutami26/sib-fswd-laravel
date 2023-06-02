@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Edit Data Group
                        <form action="{{ url('group', $group->id) }}" method="post">
                            @csrf
                            @method('PUT')
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label" for="">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control"
                                    value="{{ $group->nama }}">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">Role</label>
                                <select name="role" id="" class="form-control">
                                    <option value="">--- Pilih Role ---</option>
                                    <option value="admin" @if ($group->role == 'admin') selected @endif>
                                        Admin</option>
                                    <option value="staff" @if ($group->role == 'staff') selected @endif>
                                        Staff</option>
                                </select>
                            </div>
                        </div>

                        <div class=" float-right form-group mt-2"><button type="submit"
                                class="btn btn-primary">Update</button>
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
