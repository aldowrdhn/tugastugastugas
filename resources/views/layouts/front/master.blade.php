<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <title>Wrapkit - The awesome and beautiful ui kit</title>
    <!-- Bootstrap Core CSS -->
    <link href="/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- This is for the animation CSS -->
    <link href="/assets/node_modules/aos/dist/aos.css" rel="stylesheet">
    <link href="/assets/node_modules/prism/prism.css" rel="stylesheet">
    <link href="/assets/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- Custom CSS -->
    <link href="/css/headers/headers1-10.css" rel="stylesheet">
    <link href="/css/sliders/slider1.css" rel="stylesheet">
    <link href="/css/sliders/static-slider1-10.css" rel="stylesheet">
    <link href="/css/shop/shop.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

        <div id="main-wrapper">
            <div class="page-wrapper">
                <div class="container-fluid">
                    @include('layouts.front.header')
                    <div class="container">
                        @yield('content')
                    </div>
                    @include('layouts.front.footer')
                </div>
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="/assets/node_modules/popper/dist/popper.min.js"></script>
    <script src="/assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- This is for the animation -->
    <script src="/assets/node_modules/aos/dist/aos.js"></script>
    <script src="/assets/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Jquery touchSwipe -->
    <script src="/js/jquery.touchSwipe.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/type.js"></script>
    <script src="/assets/node_modules/prism/prism.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="/assets/node_modules/bootstrap-touch-slider/bootstrap-touch-slider.js"></script>
    @stack('js')
    {{-- <script type="text/javascript">
    $('#slider1').bsTouchSlider();
    $(".carousel .carousel-inner").swipe({
    swipeLeft: function (event, direction, distance, duration, fingerCount) {
        this.parent().carousel('next');
    }
    , swipeRight: function () {
        this.parent().carousel('prev');
    }
    , threshold: 0
});
    </script> --}}
    <script>
        document.querySelectorAll('.carousel-item').forEach((e,i)=> {
            if(i == 0){
                e.classList.add('active');
            }
        });
    </script>
</body>

</html>
