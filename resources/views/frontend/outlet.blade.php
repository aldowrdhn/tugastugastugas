@extends('layouts.front.master')
@section('title','admin')
@section('complain','active')
@section('content')
@foreach ($outlets as $item)
<hr>
<div class="feature16">
    <div class="row wrap-feature-16">
        <div class="col-lg-6 with-bg" style="background-image:url(../assets/images/outlets.jpg)"></div>
        <div class="col-lg-6 text-white" style="background-color: #1dc8cd">
            <div class="with-text">
                <h2 class="text-white m-t-30 m-b-30">{{$item->name_store}}
                <br>
                <p class="op-7" style="font-size:16px">{{$item->office_hours}}</p>
                </h2>
                <ul class="list-block m-b-30">
                    <li>
                        <span>
                            {{$item->email}}
                        <br>
                            {{$item->address}}
                        <br>
                            {{$item->city}} {{$item->zipcode}}
                        <br>
                            {{$item->phone_global}}
                        </span>
                    </li>
                </ul>
                <a class="btn btn-outline-light btn-md btn-arrow" data-toggle="collapse" href="{{$item->url}}"><span>View Location <i class="ti-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
