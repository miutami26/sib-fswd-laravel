@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Edit Data Produk
                        <form action="{{ url('daftarproduk', $daftarproduk->id) }}" method="post">
                            @csrf
                            @method('PUT')
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Kategori</label>
                                <select name="id_kategories" id="" class="form-control">
                                    <option value="">--- Pilih kategori ---
                                    </option>
                                    @foreach ($pn as $x)
                                        <option value="{{ $x->id }}"
                                            @if ($daftarproduk->id == $x->id) selected @endif>
                                            {{ $x->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control"
                                    value="{{ $daftarproduk->nama }}">
                            </div>

                            <div class="col-md-6">
                                <label class="control-label" for="">harga</label>
                                <input type="text" id="harga" name="harga" class="form-control"
                                    value="{{ $daftarproduk->harga }}">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="">--- Pilih Status ---</option>
                                    <option value="diterima" @if ($daftarproduk->status == 'diterima') selected @endif>
                                        Diterima</option>
                                    <option value="ditolak" @if ($daftarproduk->status == 'ditolak') selected @endif>
                                        Ditolak</option>
                                    <option value="menunggu" @if ($daftarproduk->status == 'menuggu') selected @endif>
                                        Menunggu</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <label for="">Deskripsi</label>
                                    <textarea class="form-control" value="{{ $daftarproduk->deskripsi }}" placeholder="Deskripsi Produk" id="deskripsi"
                                        name="deskripsi" style="height: 100px"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class=" float-right form-group mt-2"><button type="submit"
                                class="btn btn-primary">Update</button>
                            <a href="{{ url('daftarproduk') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
