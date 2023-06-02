@extends('template.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Detail Data Slider
                    </div>
                    <div class="card-body">
                        <h4>Slider: {{ $slider->slide }}</h4>
                        <p>Url: {{ $slider->url }}</p>
                        <p>Banner: {{ $slider->banner }}</p>
                        <p>is_active: {{ $slider->is_active }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
