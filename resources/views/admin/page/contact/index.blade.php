@extends('layouts.back.master')
@section('title','admin')
@section('footer','active')
@section('content')
<div class="container-fluid">
    <div class="card border-dark">
        <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Contact</h4></div>
            @if (session()->has('update'))
                <div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show"
                    role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ session()->get('update') }}
                </div>
            @endif
        <div class="card-body">
            <div class="text-right">
                {{-- <a href="{{ route('contact.create')}}" class="btn btn-info text-center">Add Product</a> --}}
            </div>
            &nbsp;
            <table class="table">
                @forelse ($contacts as $item)
                <tr>
                    <td class="text-left"><strong>Name Store</strong></td>
                    <td>{{ $item->name_store}}</td>
                </tr>
                <tr>
                    <td class="text-left"><strong>Email</strong></td>
                    <td>{{ $item->email}}</td>
                </tr>
                <tr>
                    <td class="text-left"><strong>Address</strong></td>
                    <td>{{ $item->address}}</td>
                </tr>
                <tr>
                    <td class="text-left"><strong>Phone</strong></td>
                    <td>{{ $item->phone_global}}</td>
                </tr>
                <tr>
                    <td class="text-left"><strong>City</strong></td>
                    <td>{{ $item->city}}</td>
                </tr>
                <tr>
                    <td class="text-left"><strong>Zipcode</strong></td>
                    <td>{{ $item->zipcode}}</td>
                </tr>
                <tr>
                    <td class="text-left"><strong>Office Hours</strong></td>
                    <td>{{ $item->office_hours}}</td>
                </tr>
                <tr>
                    <td class="text-left"><strong>URL Google Maps</strong></td>
                    <td>{{ $item->url}}</td>
                </tr>
                @empty
                <div class=" text-center alert alert-light bg-light text-dark border-0" role="alert">
                    Empty Data
                </div>
                @endforelse
            </table>
            {{-- @foreach ($contacts as $item) --}}
            <a class="btn btn-danger"href="{{ route('contact.edit', $item->id)}}">Edit</a>
            {{-- @endforeach --}}
        </div>
    </div>
</div>
@endsection
