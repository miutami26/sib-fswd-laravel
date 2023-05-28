@extends('template.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Detail Data Pengguna
                    </div>
                    <div class="card-body">
                        <h4>Nama: {{ $pengguna->nama }}</h4>
                        <p>Email: {{ $pengguna->email }}</p>
                        <p>Avatar: {{ $pengguna->foto }}</p>
                        <p>Role: {{ $pengguna->role }}</p>
                        <p>No Telepon: {{ $pengguna->no_hp }}</p>
                        <p>Alamat: {{ $pengguna->alamat }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
