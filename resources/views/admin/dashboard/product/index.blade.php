@extends('layouts.back.master')
@section('title','admin')
@section('category','active')
@section('content')
<div class="container-fluid">
    <div class="card border-dark">
        <div class="card-header bg-primary">
            <h4 class="m-b-0 text-white">List Products</h4></div>
            @if (session()->has('pesan'))
                <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{ session()->get('pesan') }}
                </div>
            @endif
            @if (session()->has('update'))
                <div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show"
                    role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ session()->get('update') }}
                </div>
            @endif
            @if (session()->has('delete'))
                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                    role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{ session()->get('delete') }}
                </div>
            @endif
        <div class="card-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-right">
                        <a href="{{route('product.create')}}" class="btn btn-primary">New Product</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table product-overview" id="zero_config">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Name Product</th>
                                    <th>Photo</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Size</th>
                                    <th>Price</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($product as $item)

                                <tr>
                                    <td>{{$item->code_product}}</td>
                                    <td>{{$item->nama_product}}</td>
                                    <td> <img src="{{ Storage::url($item->img_product)}}" alt="" width="80"> </td>
                                    <td>{{$item->category->name_category}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>@foreach ($item->size as $muncul)
                                        {{$muncul->size_global}},
                                    @endforeach</td>
                                    <td>{{$item->price}}</td>
                                    <td class="text-center"><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
