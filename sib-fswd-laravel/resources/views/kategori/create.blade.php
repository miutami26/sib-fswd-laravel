@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-4">
                    <div class="card-header">
                        Tambah Data Kategori
                        <form action="{{ url('kategory') }}" method="post">
                            @csrf
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="control-label" for="">Nama</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class=" float-right form-group mt-2"><button type="submit"
                                class="btn btn-primary">Simpan</button>
                            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
