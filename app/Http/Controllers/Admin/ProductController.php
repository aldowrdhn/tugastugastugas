<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\ProductRepository;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Size;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new ProductRepository;
    }
    public function index()
    {
        $product = Product::all();
        return view('admin.dashboard.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $sizes = Size::all();
        return view('admin.dashboard.product.create', compact('categories', 'sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->store($request);

        return redirect()->route('product.index');
        // $validateData = $request->validate([
        //     'code_product' => 'required|unique:products',
        //     'nama_product' => 'required|min:3|max:50',
        //     'category_id' => 'required',
        //     'price' => 'required',
        //     'qty' => 'required',
        //     'img_product' => 'file'
        // ]);

        // $products = $request->all();
        // // dd($request);
        // $request->$validateData['img_product'] = $request->file('img_product')->store(
        //     'assets/images/products',
        //     'public'
        // );
        // $products = Product::create($validateData);
        // // dd($products);
        // // $products->size()->attach($request->size_global);
        // $request->session()->flash('pesan', "Client {$validateData['img_product']} has been successfully added");
        // return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
