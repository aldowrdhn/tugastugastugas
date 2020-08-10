@extends('layouts.back.master')
@section('title','admin')
@section('footer','active')
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
                        <a class="btn btn-info" href="{{route('outlet.create')}}">Add Store</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name Outlets</th>
                                    <th scope="col">Address</th>
                                    <th scope="col"></th>
                                    <th scope="col">Phone</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($outlets as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name_store}}</td>
                                    <td>{!! Illuminate\Support\Str::of($item->address)->limit(20) !!}</td>
                                    <td></td>
                                    <td>{{$item->phone_global}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-primary" class="btn btn-primary" data-toggle="modal" data-target="#modalShow{{$loop->iteration}}"><i class="fas fa-eye" style="color: white"></i></a>
                                        {{-- <a class="btn btn-danger" data-toggle="modal" data-target="#EditPositionmodal{{ $loop->iteration }}"><i class="fas fa-trash" style="color: white"></i></a> --}}
                                        {{-- MODAL SHOW --}}
                                        <div id="modalShow{{$loop->iteration}}" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="modalShowLabel{{$loop->iteration}}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header btn-primary">
                                                        <h4 class="modal-title" id="modalShowLabel{{$loop->iteration}}">Modal Heading</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <table class="table">
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
                                                            </table>
                                                          </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary"
                                                            data-target="#EditModal{{$loop->iteration}}" data-toggle="modal"
                                                            data-dismiss="modal">Edit Information</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <!-- MODAL EDIT -->
                                        <div id="EditModal{{$loop->iteration}}" class="modal fade" tabindex="-1" role="dialog"
                                            aria-labelledby="EditModalLabel{{$loop->iteration}}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="EditModalLabel{{$loop->iteration}}">Edit Information Modal</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="card card-body text-left">
                                                                <form class="form-horizontal " action="{{route('outlet.update',['outlet' => $item->id])}}" method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <label>Name Store</label>
                                                                            <input type="text" class="form-control
                                                                            @error('name_store') is-invalid @enderror" id="name_store" name="name_store" value="{{ old('name_store') ?? $item->name_store }}" >
                                                                            @error('name_store')
                                                                                <div class="text-danger">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="example-email">Email </label>
                                                                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email') ?? $item->email}}" >
                                                                            @error('email')
                                                                                <div class="text-danger">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Address</label>
                                                                            <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address"  rows="3">{{old('address') ?? $item->address}}</textarea>
                                                                            @error('address')
                                                                                <div class="text-danger">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>City</label>
                                                                            <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="city"  value="{{old('city') ?? $item->city}}">
                                                                            @error('city')
                                                                                <div class="text-danger">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Zipcode</label>
                                                                            <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" id="zipcode"  value="{{old('zipcode') ?? $item->zipcode}}">
                                                                            @error('zipcode')
                                                                                <div class="text-danger">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Phone Store</label>
                                                                            <input type="text" class="form-control @error('phone_global') is-invalid @enderror" name="phone_global" id="phone_global" value="{{old('phone_global') ?? $item->phone_global}}">
                                                                            @error('phone_global')
                                                                                <div class="text-danger">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Office Hours</label>
                                                                            <input type="text" class="form-control @error('office_hours') is-invalid @enderror" name="office_hours" id="office_hours"  value="{{old('office_hours') ?? $item->office_hours }}">
                                                                            @error('office_hours')
                                                                                <div class="text-danger">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Url Google Maps</label>
                                                                            <input type="url" class="form-control @error('url') is-invalid @enderror"  name="url" id="url" value="{{old('url') ?? $item->url}}">
                                                                            @error('url')
                                                                                <div class="text-danger">{{ $message }}</div>
                                                                            @enderror
                                                                        </div>
                                                                        <button type="submit" class="btn btn-success" >Save</button>
                                                                        <button type="button" class="btn btn-primary"
                                                                        data-target="#modalShow{{$loop->iteration}}" data-toggle="modal"
                                                                        data-dismiss="modal">Back</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                        <form action="{{ route('outlet.destroy', ['outlet' => $item->id]) }}" method="POST" class="d-inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
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
