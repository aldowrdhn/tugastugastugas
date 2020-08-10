@extends('layouts.back.master')
@section('title','admin')
@section('complain','active')
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

                    <div class="table-responsive">
                        <table class="table product-overview" id="zero_config">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($complains as $item)
                                <tr>
                                    <td>{{$item->subject}}</td>
                                    <td>{{$item->fullname}}</td>
                                    <td> {{$item->email}}</td>
                                    <td>{{$item->phone_complain}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}">
                                        Show Message
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel{{$loop->iteration}}" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-success">
                                                <h5 class="modal-title text-white" id="exampleModalLabel{{$loop->iteration}}">{{$item->subject}}</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body text-white">
                                                {{$item->message}}
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{route('complain.destroy',['complain' => $item->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i class="ti-trash"></i></button>
                                        </form>
                                    </td>
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
