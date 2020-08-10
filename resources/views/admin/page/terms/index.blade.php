@extends('layouts.back.master')
@section('title','admin')
@section('footer','active')
@section('content')
<div class="container-fluid">
    <div class="card border-dark">
        <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Terms and Condition</h4></div>
        <div class="card-body">
            @foreach ($terms as $item)
            <p class="card-text">
                {!! $item->desc_terms !!}
            </p>
            <a href="{{ route('terms.edit',$item->id) }}" class="btn btn-danger">Edit</a>
            @endforeach
        </div>
    </div>
</div>

@endsection
