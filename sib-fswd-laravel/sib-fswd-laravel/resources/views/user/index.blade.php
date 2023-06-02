@extends('template.base')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Data Pengguna
                        <a href="{{ url('admin/user/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"> Tambah
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
                                @foreach ($list_user as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->no_hp }}</td>
                                        <td>{{ $user->alamat }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $user->foto) }}" class="rounded"
                                                style="width: 50px " alt="{{ $user->foto }}">
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/user', $user->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('admin/user', $user->id) }}/edit"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('user', $user->id),
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
