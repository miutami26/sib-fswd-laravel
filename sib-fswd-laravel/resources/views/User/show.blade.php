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
                        <h4>Nama: {{ $user->name }}</h4>
                        <p>Email: {{ $user->email }}</p>
                        <p>Avatar: {{ $user->avatar }}</p>
                        <p>Role: {{ $user->role }}</p>
                        <p>No Telepon: {{ $user->phone }}</p>
                        <p>Alamat: {{ $user->address }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
