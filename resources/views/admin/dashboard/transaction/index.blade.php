@extends('layouts.back.master')
@section('title','admin')
@section('dashboard','active')
@push('css')
<style>
    .status-order:hover,
    .status-order:active,
    .status-order:focus {
        cursor: pointer;
    }
</style>
@endpush
@push('js')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    function proses(e) {
        const data = $(e).data('proses')
        axios.put(`/admin/recentorder/${data}`, {
            status: 'Diproses'
        }).then(res => {
            window.location.href = '/admin/recentorder'
        }).catch(err => {
            console.log(err)
        })
    }
    function sampai(e) {
        const data = $(e).data('proses')
        axios.put(`/admin/recentorder/${data}`, {
            status: 'Telah Sampai'
        }).then(res => {
            window.location.href = '/admin/recentorder'
        }).catch(err => {
            console.log(err)
        })
    }
</script>
@endpush
@section('content')
<div class="container-fluid">
    <div class="card border-dark">
        <div class="card-header bg-primary">
            <h4 class="m-b-0 text-white">List Of <i class="mdi mdi-compass-outline:"></i></h4></div>
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
                    {{-- <div class="card-body text-right">
                        <a href="" class="btn btn-primary">New Product</a>
                    </div> --}}
                    <div class="table-responsive">
                        <table class="table product-overview" id="zero_config">
                            <thead>
                                <tr>
                                    <th>Customer</th>
                                    <th>Product</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    {{-- <th>Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $item)
                                <tr>
                                    <td>{{$item->user->name}}</td>
                                    <td>
                                        @foreach ($item->finalcheckout as $products)
                                        <span class="label label-success">{{ $products->qty }} Pcs. {{ $products->product->nama_product }}</span>
                                        @endforeach
                                    </td>
                                    <td>{{ date('l, M Y', strtotime($item->created_at)) }}</td>
                                    <td><span class="label status-order label-success font-weight-100" onclick="{{ $item->status == 'Dikonfirmasi' ? 'proses(this)' : 'sampai(this)' }}" data-proses="{{ $item->id }}">{{ $item->status }}</span></td>
                                    {{-- <td><a href="javascript:void(0)" class="text-inverse p-r-10" data-toggle="tooltip" title="Edit"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="text-inverse" title="Delete" data-toggle="tooltip"><i class="ti-trash"></i></a></td> --}}
                                </tr>
                                @empty
                                <td colspan="6" class="text-center">Empty Data</td>
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
