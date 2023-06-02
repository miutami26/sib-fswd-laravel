@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Tambah Data Produk
                        <form action="{{ url('daftarproduk') }}" method="post">
                            @csrf
                    </div>
                    <div class="card-body ">
                        <div class="row">

                            <div class="col-md-6">
                                <label class="control-label" for="">Katagori</label>
                                @error('id_kategories')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror

                                <select name="id_kategories" id="id_kategories" class="form-control">
                                    <option value="">---Pilih kategori---</option>
                                    @foreach ($pn as $x)
                                        <option value="{{ $x->id }}">{{ $x->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">Nama</label>
                                @error('nama')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                                <input type="text" id="nama" name="nama" class="form-control">

                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">harga</label>
                                @error('harga')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                                <input type="text" id="harga" name="harga" class="form-control">

                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">Status</label>
                                @error('status')
                                    <div class="text-danger"> {{ $message }} </div>
                                @enderror
                                <select name="status" id="" class="form-control">
                                    <option value="">--- Pilih Status ---</option>
                                    <option value="diterima">Diterima</option>
                                    <option value="ditolak">Ditolak</option>
                                    <option value="menunggu">Menunggu</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <label for="">Deskripsi</label>
                                    @error('deskripsi')
                                        <div class="text-danger"> {{ $message }} </div>
                                    @enderror
                                    <textarea class="form-control" placeholder="Deskripsi Produk" id="deskripsi" name="deskripsi" style="height: 100px"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class=" float-right form-group mt-2"><button type="submit"
                                class="btn btn-primary">Simpan</button>
                            <a href="{{ url('daftarproduk') }}" class="btn btn-secondary">Batal</a>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
