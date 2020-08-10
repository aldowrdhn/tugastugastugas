<?php

namespace App\Http\Controllers\Repository;

use App\Carousel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class CarouselRepository
{
    public function store($request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'img_carousel' => 'required|file'
            ]
        )->validate();

        $carousel = new Carousel();
        $carousel = $request->all();
        $carousel['img_carousel'] = $request->file('img_carousel')->store('assets/images/carousel', 'public');

        $data = Carousel::create($carousel);
        $request->session()->flash('pesan', 'New image carousel has been added');
        return $data;
    }

    public function updateHome($request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'img_carousel' => 'file'
            ]
        )->validate();

        $dataId = Carousel::findOrFail($id);
        $data = $request->all();

        if ($request->img_carousel) {
            Storage::delete('public/' . $dataId->img_carousel);
            $data['img_carousel'] = $request->file('img_carousel')->store('assets/images/carousel', 'public');
        }

        $dataId->update($data);
        $request->session()->flash('edit', 'Data berhasil di edit');
        return $dataId;
    }

    public function hapusHome($request, $id)
    {
        $carousel = Carousel::findOrFail($id);
        Storage::delete('public/' . $carousel->img_carousel);
        $carousel->delete();
        return $carousel;
    }
}
