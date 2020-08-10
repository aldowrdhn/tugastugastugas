@extends('layouts.front.master')
@section('title','admin')
@section('complain','active')
@section('content')
<!-- ============================================================== -->
<!-- Slider  -->
<!-- ============================================================== -->
<div id="carouselExampleIndicators" class="carousel slide m-5" style="" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" width="10px" >
        @foreach ($carousels as $item)
        <div class="carousel-item">
          <img src="{{ Storage::url($item->img_carousel)}}" class="d-block w-100 "  >
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- ============================================================== -->
<!-- End Slider 1  -->
<!-- ============================================================== -->

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
@endsection
