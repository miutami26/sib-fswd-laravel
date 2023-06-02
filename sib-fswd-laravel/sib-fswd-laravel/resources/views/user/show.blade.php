@extends('template.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Detail Data user
                    </div>
                    <div class="card-body">
                        <h4>Nama: {{ $user->nama }}</h4>
                        <p>Email: {{ $user->email }}</p>
                        <p>Avatar: {{ $user->foto }}</p>
                        <p>Role: {{ $user->role }}</p>
                        <p>No Telepon: {{ $user->no_hp }}</p>
                        <p>Alamat: {{ $user->alamat }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
