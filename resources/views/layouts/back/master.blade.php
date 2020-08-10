<div id="main-wrapper">

    @include('layouts.back.header')

    @include('layouts.back.sidebar')

        <div class="page-wrapper">
            @yield('content')
            @include('layouts.back.footer')
        </div>
    </div>
