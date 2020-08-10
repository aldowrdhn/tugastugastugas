
<div class="header5 bg-dark clearfix">
    <div class="container po-relative">
        <nav class="navbar navbar-expand-lg h5-nav-bar">
            <a href="{{route('front.index')}}" class="navbar-brand"><img
                    src="/assets/images/logos/green-text-logo-trans.png" alt="wrapkit" /></a>
                <button class="navbar-toggler text-white" type="button" data-toggle="collapse"
                data-target="#h5-info" aria-controls="h4-info" aria-expanded="false"
                aria-label="Toggle navigation"><span class="ti-menu"></span></button>
            <div class="collapse navbar-collapse text-uppercase" id="h5-info">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item"><a href="{{route('front.index')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item"><a href="{{route('front.store')}}" class="nav-link">Store</a>
                    </li>
                    <li class="nav-item"><a href="{{route('front.outlet')}}" class="nav-link">outlets</a>
                    </li>
                    <li class="nav-item"><a href="{{route('front.complain.index')}}" class="nav-link">CONTACT</a>
                    </li>
                </ul>
                <div class="rounded-button">
                    @auth
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endauth
                    @guest
                    <a href="/login">Login</a> - OR - <a href="/register">Register</a>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</div>
