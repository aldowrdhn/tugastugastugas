@extends('layouts.back.master')
@section('title','admin')
@section('carousel','active')
@section('content')
<div class="container-fluid">
    <div class="card border-dark">
        <div class="card-header bg-primary">
            <h4 class="m-b-0 text-white">List Outlets</h4></div>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">New Image</button>
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog text-left">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Add New Image</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('carousel.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-lg-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h4 class="card-title">Image Carousel</h4>
                                                                <div class="input-group mb-3">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input @error('img_carousel') is-invalid @enderror" id="img_carousel" name="img_carousel">
                                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th class="text-center" scope="col">Image Carrousel</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($carousel as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td class="text-center"><img src="{{ Storage::url($item->img_carousel)}}" alt="image carousel" width="200px"></td>
                                    <td class="text-right">
                                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$loop->iteration}}">Edit</button>
                                            <div id="myModal{{$loop->iteration}}" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel{{$loop->iteration}}" aria-hidden="true">
                                                    <div class="modal-dialog text-left">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{route('carousel.update',$item->id)}}" method="POST">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input @error('img_carousel') is-invalid @enderror" id="img_carousel" name="img_carousel">
                                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light"
                                                                    data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal --> --}}
                                        <form action="{{ route('carousel.destroy', ['carousel' => $item->id]) }}" method="POST" class="d-inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <td colspan="3" class="text-center">Empty Data</td>
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
