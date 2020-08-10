<?php

namespace App\Http\Controllers\Repository;

use App\Product;
use App\Category;
use App\Size;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ProductRepository
{
    public function store($request)
    {
        $validateData = Validator::make(
            $request->all(),
            [
                'code_product' => 'required|unique:products',
                'nama_product' => 'required|min:3|max:50',
                'category_id' => 'required',
                'price' => 'required',
                'qty' => 'required',
                'img_product' => 'file'
            ]
        )->validate();

        $validateData['img_product'] = $request->file('img_product')->store('assets/images/catalog', 'public');
        $product = Product::create($validateData);

        $product->size()->attach($request->size_global);
        $request->session()->flash('pesan', 'New product has been added');
        return $product;
    }
}
