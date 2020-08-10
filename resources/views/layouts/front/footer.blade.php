<div class="footer4 ">
    <div class="container">
        <hr>
        <div class="f4-bottom-bar">
            <div class="row">
                <div class="col-md-12 ">
                    <ul class="navbar-nav">
                        <div class="d-flex justify-content-around ">
                        <li class="nav-item "><a class="nav-link" href="{{route('front.terms')}}">Terms & Conditions</a></li>
                        <li class="nav-item "><a class="nav-link" href="{{route('front.privacy')}}">Privacy Policy</a></li>
                        <li class="nav-item "><a class="nav-link" href="{{route('front.refund')}}">Refund Policy</a></li>
                        <li class="nav-item "><a class="nav-link" href="{{route('front.faq')}}">FAQ</a></li>
                        <li class="nav-item "><a class="nav-link" href="{{route('front.complain.index')}}">Contact Us</a></li>
                        </div>
                      </ul>
                </div>
            </div>
        </div>
        <hr>
        @foreach ($contacts as $item)
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 m-b-30">
                <h5 class="m-b-20">Address</h5>
                <p>
                    {{$item->address}}
                    <br>
                    {{$item->city}} {{$item->zipcode}}
                </p>
            </div>
            <div class="col-lg-3 col-md-6 m-b-30">
                <h5 class="m-b-20">Phone</h5>
                <p>Order : {{$item->phone_global}}</p>
            </div>
            <div class="col-lg-3 col-md-6 m-b-30">
                <h5 class="m-b-20">Email</h5>
                <p>Office :  <a href="#" class="link">{{$item->email}}</a></p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="m-b-20">Social</h5>
                <div class="round-social light">
                    <a href="#" class="link"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="link"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="link"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
