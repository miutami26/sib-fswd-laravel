@extends('template.base')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Data Pengguna
                        <a href="{{ url('pengguna/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"> Tambah
                                Data</i></a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th>Role</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_pengguna as $pengguna)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pengguna->nama }}</td>
                                        <td>{{ $pengguna->email }}</td>
                                        <td>{{ $pengguna->no_hp }}</td>
                                        <td>{{ $pengguna->alamat }}</td>
                                        <td>{{ $pengguna->role }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $pengguna->foto) }}" class="rounded"
                                                style="width: 50px " alt="{{ $pengguna->foto }}">
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('pengguna', $pengguna->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('pengguna', $pengguna->id) }}/edit"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('pengguna', $pengguna->id),
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
