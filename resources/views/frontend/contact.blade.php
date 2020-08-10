@extends('layouts.front.master')
@section('title','admin')
@section('complain','active')
@section('content')
<div class="static-slider7" style="background-image:url(../assets/images/bg1.jpg);">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-8 align-self-center text-center" data-aos="fade-right" data-aos-duration="1200">
                <h1 class="title text-white typewrite" data-period="2000" data-type='[ "Welcome", "to","Contact" ]'></h1>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="contact1">
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126921.29610390542!2d106.63179800280602!3d-6.225375285052397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb292eae50e7%3A0x5ea57e64ea9ad85d!2sEDU-TECH.ID!5e0!3m2!1sen!2sid!4v1596287312444!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0"></iframe>
        </div>
        <div class="container">
            <div class="spacer">
                <div class="row m-0">
                    <div class="col-lg-8">
                        <div class="p-r-40">
                            <h4 class="title">Quick Contact</h4>
                            <form action="{{route('complain.store')}}" data-aos="fade-left" data-aos-duration="1200" method="POST">
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <select name="subject" id="subject" class="form-control">
                                                <option value="General Inquiriy" {{ old('subject') == 'General Inquiry' ? 'selected' : ''}}>General Inquiry</option>
                                                <option value="Shipping Inquiry" {{old('subject') == 'Shipping Inquiry' ? 'selected' : ''}}>Shipping Inquiry</option>
                                                <option value="Products Inquiry" {{old('subject') == 'Products Inquiry' ? 'selected' : ''}}>Products Inquiry</option>
                                                <option value="Complaint" {{old('subject') == 'Complaint' ? 'selected' : ''}}>Complaint</option>
                                                <option value="Other" {{old('subject') == 'Other' ? 'selected' : ''}}>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mt-3">
                                                <input type="text" name="fullname" id="fullname" class="form-control @error('fullname') is-invalid @enderror" placeholder="Fullname" value="{{old('fullname')}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group @error('phone_complain') is-invalid @enderror">
                                                <input type="text" name="phone_complain" id="" class="form-control" placeholder="Phone Number" value="{{old('phone_complain')}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" rows="5" placeholder="Message" value="{{old('message')}}"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn m-t-20 btn-arrow" style="background-color:#1dc8cd"><span> SUBMIT NOW <i class="ti-arrow-right"></i></span></button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        @foreach ($contacts as $item)
                        <div class="detail-box p-40" style="background-color: #07d79c" data-aos="fade-right" data-aos-duration="1200">
                            <h2 class="text-white">
                                {{$item->name_store}}
                            </h2>
                            <p class="text-white m-t-30 op-8">{{$item->email}}
                            <br>{{$item->phone_global}}
                                <br>
                                Mon - Sun {{$item->office_hours}}</p>
                            <p class="text-white op-8">{{$item->address}}
                                <br> {{$item->city}} {{$item->zipcode}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
