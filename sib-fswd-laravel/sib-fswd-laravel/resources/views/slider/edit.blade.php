@extends('template.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        Edit Data Slider
                        <form action="{{ url('slider', $slider->id) }}" method="post">
                            @csrf
                            @method('PUT')
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label" for="">Slide</label>
                                <input type="text" id="slide" name="slide" class="form-control"
                                    value="{{ $slider->slide }}">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">url</label>
                                <input type="" id="url" name="url" class="form-control"
                                    value="{{ $slider->url }}">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">Banner</label>
                                <input type="file" id="banner" name="banner" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="control-label" for="">is_active</label>
                                <select name="is_active" id="" class="form-control">
                                    <option value="">--- Pilih is_active ---</option>
                                    <option value="0" @if ($slider->is_active == '0') selected @endif>
                                        0</option>
                                    <option value="1" @if ($slider->is_active == '1') selected @endif>
                                        1</option>
                                </select>
                            </div>
                        </div>
                        <div class=" float-right form-group mt-2"><button type="submit"
                                class="btn btn-primary">Update</button>
                            <a href="{{ url('slider') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
