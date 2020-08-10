@extends('layouts.front.master')
@section('title','admin')
@section('complain','active')
@section('content')
<div class="static-slider7" style="background-image:url(../assets/images/bg1.jpg);">
    <div class="container">
        <!-- Row  -->
        <div class="row justify-content-center ">
            <!-- Column -->
            <div class="col-md-8 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                <h1 class="title text-white typewrite" data-period="2000" data-type='[ "Welcome", "to","Privacy Policy" ]'></h1>
            </div>
        </div>
    </div>
</div>
<div class="spacer">
    @foreach ($privacies as $item)
        {!! $item->desc_priv !!}
    @endforeach
</div>
@endsection
