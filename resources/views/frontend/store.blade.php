@extends('layouts.front.master')
@section('title','admin')
@section('complain','active')
@section('content')
<div class="static-slider7" style="background-image:url(../assets/images/store.jpg);">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                <h1 class="title text-white typewrite" data-period="2000" data-type='[ "Welcome", "to","Contact" ]'></h1>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="feature24">
    <div class="container">
        <!-- Row -->
        <!-- Row -->
        <div class="row wrap-feature-24">
            @foreach ($categories as $item)
            <div class="col-lg-4 col-md-6">
                <div class="card card-shadow">
                    <a href="javascript:void(0)" class="service-24"> <i class="icon-Skate-Shoes"></i>
                        <h6 class="ser-title">{{$item->name_category}}</h6>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="spacer">
    <div class="container">
        <div class="row m-t-30">
            <!-- column  -->
            <div class="col-lg-12">

                <div class="row shop-listing">
                    <!-- column  -->
                    @foreach ($products as $item)
                    <div class="col-lg-4">
                        <div class="card shop-hover">
                            <img src="{{ Storage::url($item->img_product)}}" alt="wrapkit" class="img-fluid" />
                            <div class="card-img-overlay align-items-center">
                                <a href="/store/detail/{{$item->id}}"><button class="btn btn-md btn-info-gradiant">Show Detail</button></a>
                            </div>
                        </div>
                        <div class="card">
                            <h6><a href="#" class="link">{{$item->nama_product}} </a></h6>
                            <h6 class="subtitle">by {{$item->category->name_category}}</h6>
                            <h5 class="font-medium m-b-30">Rp {{ number_format($item->price)}}</h5>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{$products->links()}}
            </div>
            <!-- column  -->
        </div>
    </div>
</div>
@endsection
