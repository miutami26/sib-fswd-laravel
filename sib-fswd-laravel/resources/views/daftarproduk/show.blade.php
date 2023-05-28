@extends('template.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Detail Data Daftar Produk
                    </div>
                    <div class="card-body">
                        <h4>Nama: {{ $daftarproduk->nama }}</h4>
                        <p>Katagori: {{ $daftarproduk->kategory[0]->name }}</p>
                        <p>Deskripsi: {{ $daftarproduk->deskripsi }}</p>
                        <p>harga: Rp. {{ $daftarproduk->harga }}</p>
                        <p>Status: {{ $daftarproduk->status }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
