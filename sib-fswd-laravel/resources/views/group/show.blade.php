@extends('template.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Detail Data Group
                    </div>
                    <div class="card-body">
                        <h4>Nama: {{ $group->nama }}</h4>
                        <p>Role: {{ $group->role }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
