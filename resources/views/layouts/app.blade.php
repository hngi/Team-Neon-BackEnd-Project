<!DOCTYPE html>
<html lang="en">
<head>
    <base href="">
    <meta charset="UTF-8">
    <html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Microapi - Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    @section('links-hrefs')
        
    @show
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
</head>
<body>
    <nav class="nav-wrap bg-dark fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark px-lg-0">
                <a class="navbar-brand mr-3 swap-link" href="{{route('dashboard.home')}}">Microapi <span class="text-light font-weight-bold">Services</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item swap-link"> <a href="{{route('dashboard.home')}}" class="nav-link">Home</a> </li>
                        <li class="nav-item swap-link"> <a href="" class="nav-link">API</a> </li>
                        <li class="nav-item swap-link"> <a href="" class="nav-link">Documentation</a> </li>
                        <li class="nav-item swap-link"> <a href="{{route('dev.team')}}" class="nav-link">Our Team</a> </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link no-arrow" href="#" role="button" data-toggle="dropdown" aria-expanded="false"><i class="las la-user mr-2" style="font-size:22px;"></i></a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary swap-link text-white" href="#" role="button" data-toggle="dropdown" aria-expanded="false">Account</a>
                            </li>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
    <main role="main">
        <div class="warpper">
            @section('main-wrapper')
            
            @show
        </div>

        @section('jumbotron-sec')
        <div class="bg-dark">
            <section class="cta-big section">
                <div class="container">
                    <div class="cta-big-content bg-primary py-5 px-5 mt-4 rounded text-white position-relative">
                        <img alt="bg image" class="bg-image" src="{{ asset('assets/img/bg-3.png') }}">
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
        <section class="footer py-5">
            <div class="container">
                <div class="row pb-3">
                    <aside class="col-md-2">
                        <div class="footer-logo">
                            <h4 class="text-white font-weight-bold">Micro<span class="text-muted">api</span></h4>
                        </div>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Company</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">About us</a></li>
                            <li> <a href="#">Career</a></li>
                            <li> <a href="#">Team</a></li>
                            <li> <a href="#">Sitemap</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Help</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#">Contact us</a></li>
                            <li> <a href="#">Usage</a></li>
                            <li> <a href="#">Another</a></li>
                            <li> <a href="#">Another</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">For Developers</h6>
                        <ul class="list-unstyled">
                            <li> <a href="#"> Why Microapi </a></li>
                            <li> <a href="#"> Documentation </a></li>
                            <li> <a href="#"> Dashboard </a></li>
                            <li> <a href="#"> Another </a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6><i class="las la-coffee mr-2"></i>Stay Up-to-Date!</h6>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control bg-dark" placeholder="Subscribe" aria-label="Subscribe.." aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary text-white" type="button" id="button-addon2">@</button>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- row.// -->
            </div>
            <!-- //container -->
        </section>
        <!-- footer-top.// -->
        <section class="pt-3 pb-4">
            <div class="container">
                <div class="footer-cta rounded border-dark">
                    <div class="row no-gutters d-flex justify-content-between align-items-center">
                        <div class="col-5 col-md-4 affiliate d-flex align-items-center">
                            <div class="aff-btn">
                                <a href="/affiliate" class="btn btn-primary btn-sm">
                                    Eye Catching
                                </a>
                            </div>
                            <div>
                                <p class="text-white d-none d-md-block m-0 w-75 small ml-3">
                                    Small description for your eye catching bla
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="d-flex flex-row justify-content-between">
                                <div class="fact">
                                    <h6 class="mb-1">12,961</h6>
                                    <p class="mb-0">Write-up</p>
                                </div>
                                <div class="fact">
                                    <h6 class="mb-1">90</h6>
                                    <p class="mb-0">Write-up</p>
                                </div>
                                <div class="fact">
                                    <h6 class="mb-1">270</h6>
                                    <p class="mb-0">Write-up</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-bottom border-top border-dark white pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span class="pr-2">© 2019 Microapi</span>
                        <span class="pr-2"><a href="#">Privacy policy</a></span>
                        <span class="pr-2"><a href="#">Terms of use</a></span>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="#" class="mr-2"><img src="assets/img/payment/footer-visa.svg" width="42"></a>
                        <a href="#" class="mr-2"><img src="assets/img/payment/footer-mastercard.svg" width="42"></a>
                        <a href="#"><img src="assets/img/payment/footer-paypal.svg" width="42"></a>
                    </div>
                </div>
                <!-- row.// -->
            </div>
            <!-- //container -->
        </section>
    </footer>

    <!-- build:js -->
    <script src="{{ asset('assets/vendor/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/prism.min.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>