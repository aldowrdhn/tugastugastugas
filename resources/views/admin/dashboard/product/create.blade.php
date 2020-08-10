@extends('layouts.back.master')
@section('title','admin')
@section('dashboard','active')
@section('content')
<div class="container-fluid">
    <div class="card border-dark">
        <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Create Product</h4></div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card card-body">
                        <form class="form-horizontal mt-4" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Code Product</label>
                                <input type="text" class="form-control
                                @error('code_product') is-invalid @enderror" id="code_product" placeholder="#29929" name="code_product" value="{{ old('code_product') }}">
                                @error('code_product')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="example-email">Nama Product </label>
                                <input type="text" id="nama_product" name="nama_product" class="form-control @error('nama_product') is-invalid @enderror" value="{{old('nama_product')}}" placeholder="Name Product">
                                @error('nama_product')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="category_id">Category Product</label>
                                        <select name="category_id" id="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="">Image Product</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input @error('img_product') is-invalid @enderror" id="img_product" name="img_product">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>Price</label>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="1231">
                                        @error('price')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Quantity</label>
                                <input type="number" class="form-control @error('qty') is-invalid @enderror" name="qty" id="qty" placeholder="4">
                                @error('qty')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="size">Size</label>
                                <br>
                                <select class="js-example-placeholder-multiple js-states form-control" multiple="multiple" name="size_global[]">
                                    @foreach ($sizes as $item)
                                        <option value="{{ $item->id  }}">{{ $item->size_global }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2"></div>
    </div>
</div>
<div class="container-fluid">

</div>
</div>
@endsection
