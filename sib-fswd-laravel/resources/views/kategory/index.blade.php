@extends('template.base')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Data Kategory
                        <a href="{{ url('kategory/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"> Tambah
                                Data</i></a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_kategory as $kategory)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $kategory->name }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('kategory', $kategory->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('kategory', $kategory->id) }}/edit"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('kategory', $kategory->id),
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
