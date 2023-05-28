@extends('template.base')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Data Daftar Produk
                        <a href="{{ url('daftarproduk/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus">
                                Tambah
                                Data</i></a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Katagori</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_daftarproduk as $daftarproduk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $daftarproduk->kategory[0]->name }}</td>
                                        <td>{{ $daftarproduk->nama }}</td>
                                        <td>{{ $daftarproduk->deskripsi }}</td>
                                        <td>Rp. {{ $daftarproduk->harga }}</td>
                                        <td>{{ $daftarproduk->status }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('daftarproduk', $daftarproduk->id) }}"
                                                    class="btn btn-dark"><i class="fa fa-info"></i></a>
                                                <a href="{{ url('daftarproduk', $daftarproduk->id) }}/edit"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('daftarproduk', $daftarproduk->id),
                                                ])
                                            </div>

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
