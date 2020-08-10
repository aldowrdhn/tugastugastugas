@extends('layouts.back.master')
@section('title','admin')
@section('footer','active')
@section('content')
<div class="container-fluid">
    <div class="card border-dark">
        <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Contact</h4></div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card card-body">
                        <form class="form-horizontal mt-4" action="{{route('contact.update', $contact->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label>Name Store</label>
                                <input type="text" class="form-control
                                @error('name_store') is-invalid @enderror" id="name_store" placeholder="Hoops Point" name="name_store" value="{{ old('name_store') ?? $contact->name_store }}">
                                @error('name_store')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="example-email">Email </label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email') ?? $contact->email}}" placeholder="Email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="" rows="3" placeholder="Jalan kenangan">{{old('address') ?? $contact->address}}</textarea>
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" id="city" placeholder="Bandung, Indonesia" value="{{old('city') ?? $contact->city}}">
                                @error('city')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Zipcode</label>
                                <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" id="zipcode" placeholder="1231" value="{{old('zipcode') ?? $contact->zipcode}}">
                                @error('zipcode')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Phone Store</label>
                                <input type="text" class="form-control @error('phone_global') is-invalid @enderror" name="phone_global" id="phone_global" placeholder="1231" value="{{old('phone_global') ?? $contact->phone_global}}">
                                @error('phone_global')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Office Hours</label>
                                <input type="text" class="form-control @error('office_hours') is-invalid @enderror" name="office_hours" id="office_hours" placeholder="10:00 - 21:00" value="{{old('office_hours') ?? $contact->office_hours}}">
                                @error('office_hours')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Url Google Maps</label>
                                <input type="url" class="form-control @error('url') is-invalid @enderror" placeholder="http://" name="url" id="url" value="{{old('url') ?? $contact->url}}">
                                @error('url')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2"></div>
    </div>
</div>
<div class="container-fluid">

</div>
</div>
@endsection
