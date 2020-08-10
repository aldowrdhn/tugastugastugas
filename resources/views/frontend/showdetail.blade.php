@extends('layouts.front.master')
@section('title','admin')
@section('complain','active')
@section('content')
    <div class="container">
        <div class="row m-t-30">
            {{-- @foreach ($products as $item) --}}
            <div class="col-lg-5">
                <div class="owl-carousel owl-theme image-slide">
                    <div class="item"><img src="{{ Storage::url($products->img_product)}}" class="img-responsive" alt="wrapkit" /></div>
                </div>
            </div>
            <div class="col-lg-6 ml-auto">
                <h4 class="title">{{$products->nama_product}}</h4>
                <h6 class="subtitle">by {{$products->category->name_category}}</h6>
                <h4 class="font-medium m-b-30">Rp. {{ number_format($products->price, 2, ',', '.')}}</h4>
                <div class="form-group">
                    <h6 class="m-t-20">Select Size</h6>
                    <select class="form-control w-50 custom-select">
                        @foreach ($products->size as $item)
                        <option>{{$item->size_global}}</option>
                        @endforeach
                    </select>
                </div>
                @auth
                <form action="{{ action('CartController@store') }}" method="post">
                    @csrf
                    <input type="hidden" name="product" value="{{ $products->id }}">
                    <button type="submit" class="btn btn-info btn-md m-t-20">Add to Cart</button>
                </form>
                @endauth
            </div>
            {{-- @endforeach --}}
        </div>
        <div class="row m-t-40 m-b-40">
            <div class="col-md-12">
                <h5 class="title font-medium">Product Details</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                <table class="table table-bordered m-b-40">
                    <tr>
                        <th colspan="2" class="font-medium text-dark">{{$products->nama_product}}</th>
                    </tr>
                    <tr>
                        <td>Product Dimensions</td>
                        <td class="text-dark">7.3 x 13.8 x 14.8 inches</td>
                    </tr>
                    <tr>
                        <td>Item weight</td>
                        <td class="text-dark">9.4 pounds</td>
                    </tr>
                    <tr>
                        <td>Manufacturer</td>
                        <td class="text-dark">Stadler Form</td>
                    </tr>
                </table>
                <h5 class="title font-medium">Warranty &amp; Support</h5>
                <p>Manufacturer’s warranty can be requested from customer service. <a href="{{route('front.complain.index')}}">Click here</a> to make a request to customer service.</p>
            </div>
        </div>
    </div>
@endsection
