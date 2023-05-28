<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index ()
    {
        $data['list_slider']= Slider::all();
        return view('slider.index',$data);
    }

    public function create()
    {
         return view('slider.create');
    }

   public function store(Request $request)
   {
   $slider= new Slider();
   $slider->slide=request('slide');
   $slider->url=request('url');
   $slider->banner=request('banner');
   if ($request->hasFile('banner')) {
   $image = $request->file('banner');
   $image_path = Storage::disk('public')->put('image', $image);
   $slider->banner = $image_path;
   }

   $slider->is_active=request('is_active');
   $slider->save();
  return redirect('slider')->with('success', 'Data berhasil ditambahkan');
   }

    public function show(Slider $slider)
    {
        $data['slider'] = $slider;
        return view('slider.show', $data);
    }

    public function edit(Slider $slider)
    {
        $data['slider'] = $slider;
        return view('slider.edit', $data);
    }

    public function update(Slider $slider){
        $slider->slide=request('slide');
        $slider->url=request('url');
        $slider->banner=request('banner');
        $slider->is_active=request('is_active');
        $slider->save();

     return redirect('slider')->with('warning','Data berhasil diupdate');
    }

    public function destroy(Slider $slider){
        $slider->delete();
        return redirect('slider')->with('danger','Data berhasil dihapus');
    }
}
