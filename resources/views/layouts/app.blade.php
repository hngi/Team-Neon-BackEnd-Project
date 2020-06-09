<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{url('')}}">
    <meta charset="UTF-8">
    <html lang="{{ app()->getLocale() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - @yield('docTitle', 'Page Title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, mobile template, cordova, phonegap, mobile, html, responsive" />
    
    <link rel="stylesheet" href="assets/vendor/css/line-awesome.css">
    <link rel="stylesheet" href="assets/vendor/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-custom.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/rtl.css">
</head>
<body>
    <nav class="nav-wrap bg-dark fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark px-lg-0">
                <a class="navbar-brand mr-3 swap-link" href="index.html">{{ config('app.name', 'Laravel') }} <span class="text-light font-weight-bold">Services</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item swap-link"> <a href="index.html" class="nav-link">Home</a> </li>
                        <li class="nav-item swap-link"> <a href="pricing.html" class="nav-link">API</a> </li>
                        <li class="nav-item swap-link"> <a href="pricing.html" class="nav-link">Documentation</a> </li>
                        <li class="nav-item swap-link"> <a href="pricing.html" class="nav-link">Our Team</a> </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link no-arrow" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="las la-user mr-2" style="font-size:22px;"></i></a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary swap-link text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Sign up</a>
                            </li>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
    <main role="main">
        <div class="warpper">
            @section('main-wraper')
                
            @show
        </div>

        @section('show-footer-tx')
        <div class="bg-dark">
            <section class="cta-big section">
                <div class="container">
                    <div class="cta-big-content bg-primary py-5 px-5 mt-4 rounded text-white position-relative">
                        <img alt="bg image" class="bg-image" src="assets/img/bg-3.png">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-lg-8 col-md-7">
                                <h3 class="h1">Empowering creative people to make a living doing what they love!</h3>
                                <p class="subtitle">Sign-up today </p>
                            </div>
                            <div class="col-lg-3 offset-lg-1 col-md-5 align-self-center">
                                <img src="assets/img/illustrations/03.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @show
    </main>

    <footer class="section-footer bg-dark position-relative">
        
    </footer>

    <!-- build:js -->
    <script src="assets/vendor/js/jquery.js"></script>
    <script src="assets/vendor/js/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/js/swiper.min.js"></script>
    <script src="assets/vendor/js/prism.min.js"></script>

    <script src="assets/js/custom.js"></script>

    @section('optJSFiles')
        {{-- Additional Optional JS File --}}
        
    @endsection
</body>
</html>