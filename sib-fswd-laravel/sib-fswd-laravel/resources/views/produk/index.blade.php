@extends('template.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Data Kategory
                        <a href="{{ url('kategori/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"> Tambah
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
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($list_kategori as $kategori)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $kategori->name }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('kategori', $kategori->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('kategori', $kategori->id) }}/edit"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('kategori', $kategori->id),
                                                ])
                                            </div>

                                        </td>

                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
