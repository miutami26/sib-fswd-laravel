@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Edit Data Kategory
                        <form action="{{ url('kategori', $kategori->id) }}" method="post">
                            @csrf
                            @method('PUT')
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label" for="">Nama</label>
                            <input type="text" name="name" class="form-control" value="{{ $kategori->name }}">
                        </div>
                        <button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
                        <a href="{{ url('kategori') }}" class="btn btn-secondary">Batal</a>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
