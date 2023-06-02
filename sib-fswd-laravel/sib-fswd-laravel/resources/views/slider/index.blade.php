@extends('template.base')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Data Slide
                        <a href="{{ url('slider/create') }}" class="btn btn-dark float-right"><i class="fa fa-plus"> Tambah
                                Data</i></a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table">
                            <thead>
                                <tr>
                                    <th width="50px">No</th>
                                    <th>Slide</th>
                                    <th>Url</th>
                                    <th>Banner</th>
                                    <th>is_active</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_slider as $slider)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $slider->slide }}</td>
                                        <td>{{ $slider->url }}</td>
                                        <td>
                                            <img src="{{ asset('storage/' . $slider->banner) }}" class="rounded"
                                                style="width: 50px " alt="{{ $slider->banner }}">
                                        </td>
                                        <td>{{ $slider->is_active }}</td>

                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('slider', $slider->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('slider', $slider->id) }}/edit" class="btn btn-warning"><i
                                                        class="fa fa-edit"></i></a>
                                                @include('template.utils.delete', [
                                                    'url' => url('slider', $slider->id),
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
