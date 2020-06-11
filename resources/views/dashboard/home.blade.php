@extends('layouts.app')

@section('main-wrapper')
<div class="container">
    <div class="intro-2 poition-relative">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-8">
                <h1 class="intro-title">
                    API access for startup owners &amp; busy developers
                </h1>
                <p class="lead">
                    Find the prefect api endpoint to <br />
                    bring your project to life
                </p>
                <div class="row">
                    <div class="col-md-7">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-0 bg-white" placeholder="Search properties ..." aria-label="search" aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <a href="search-page.html" class="btn btn-primary" type="button"><i class="las la-search"></i></a>
                            </div>
                        </div>
                        <ul class="nav search-links">
                            <li class="nav-item">
                                <a class="nav-link text-body-color" href="search-page.html">Try all:</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="search-page.html">Authenication</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="search-page.html">SMS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="search-page.html">Weather</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-none d-sm-block">
                <img class="card-img-top opacity-8" src="assets/img/theme-illustration.png" alt="image" />
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mb-4 mt-5 d-flex justify-content-between align-items-center">
        <div class="col-md-8">
            <h5 class="mb-0">Popular </h5>
        </div>
        <div class="col-md-4"> <a class="btn btn-link float-right" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Refine Search <i class="las la-plus"></i> </a> </div>
    </div>
    <div class="collapse multi-collapse refine-search-wrap" id="multiCollapseExample1">
        <form class="card">
            <div class="card-body">
                <div class="card border-0">
                    
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="api-box align-middle">
                        <img src="assets/img/520x400.png" class="img-fluid">
                        <h4> <a href="documentation.php"> Microapi Name </a> </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore placeat aut rem repudiandae. Quasi mollitia culpa obcaecati velit blanditiis odio, rem provident? Sint et neque, libero voluptas ex nulla dolorum. </p>
                        <div class="block text-left">
                            <span> <i>Verified</i> <i> <ion-icon name="checkmark-outline"></ion-icon> </i> </span>
                        </div>
                        <div class="icons-stat">
                            <span>
                                <ion-icon name="trending-up-outline"></ion-icon> 9.8
                            </span>
                            <span class="d-md-none">
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                            <span>
                                <ion-icon name="fitness-outline"></ion-icon> 98%
                            </span>
                            <span>
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="api-box align-middle">
                        <img src="assets/img/520x400.png" class="img-fluid">
                        <h4> <a href="documentation.php"> Microapi Name </a> </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore placeat aut rem repudiandae. Quasi mollitia culpa obcaecati velit blanditiis odio, rem provident? Sint et neque, libero voluptas ex nulla dolorum. </p>
                        <div class="block text-left">
                            <span> <i>Verified</i> <i> <ion-icon name="checkmark-outline"></ion-icon> </i> </span>
                        </div>
                        <div class="icons-stat">
                            <span>
                                <ion-icon name="trending-up-outline"></ion-icon> 9.8
                            </span>
                            <span class="d-md-none">
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                            <span>
                                <ion-icon name="fitness-outline"></ion-icon> 98%
                            </span>
                            <span>
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="api-box align-middle">
                        <img src="assets/img/520x400.png" class="img-fluid">
                        <h4> <a href="documentation.php"> Microapi Name </a> </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore placeat aut rem repudiandae. Quasi mollitia culpa obcaecati velit blanditiis odio, rem provident? Sint et neque, libero voluptas ex nulla dolorum. </p>
                        <div class="block text-left">
                            <span> <i>Verified</i> <i> <ion-icon name="checkmark-outline"></ion-icon> </i> </span>
                        </div>
                        <div class="icons-stat">
                            <span>
                                <ion-icon name="trending-up-outline"></ion-icon> 9.8
                            </span>
                            <span class="d-md-none">
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                            <span>
                                <ion-icon name="fitness-outline"></ion-icon> 98%
                            </span>
                            <span>
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="api-box align-middle">
                        <img src="assets/img/520x400.png" class="img-fluid">
                        <h4> <a href="documentation.php"> Microapi Name </a> </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore placeat aut rem repudiandae. Quasi mollitia culpa obcaecati velit blanditiis odio, rem provident? Sint et neque, libero voluptas ex nulla dolorum. </p>
                        <div class="block text-left">
                            <span> <i>Verified</i> <i> <ion-icon name="checkmark-outline"></ion-icon> </i> </span>
                        </div>
                        <div class="icons-stat">
                            <span>
                                <ion-icon name="trending-up-outline"></ion-icon> 9.8
                            </span>
                            <span class="d-md-none">
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                            <span>
                                <ion-icon name="fitness-outline"></ion-icon> 98%
                            </span>
                            <span>
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="api-box align-middle">
                        <img src="assets/img/520x400.png" class="img-fluid">
                        <h4> <a href="documentation.php"> Microapi Name </a> </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore placeat aut rem repudiandae. Quasi mollitia culpa obcaecati velit blanditiis odio, rem provident? Sint et neque, libero voluptas ex nulla dolorum. </p>
                        <div class="block text-left">
                            <span> <i>Verified</i> <i> <ion-icon name="checkmark-outline"></ion-icon> </i> </span>
                        </div>
                        <div class="icons-stat">
                            <span>
                                <ion-icon name="trending-up-outline"></ion-icon> 9.8
                            </span>
                            <span class="d-md-none">
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                            <span>
                                <ion-icon name="fitness-outline"></ion-icon> 98%
                            </span>
                            <span>
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="api-box align-middle">
                        <img src="assets/img/520x400.png" class="img-fluid">
                        <h4> <a href="documentation.php"> Microapi Name </a> </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore placeat aut rem repudiandae. Quasi mollitia culpa obcaecati velit blanditiis odio, rem provident? Sint et neque, libero voluptas ex nulla dolorum. </p>
                        <div class="block text-left">
                            <span> <i>Verified</i> <i> <ion-icon name="checkmark-outline"></ion-icon> </i> </span>
                        </div>
                        <div class="icons-stat">
                            <span>
                                <ion-icon name="trending-up-outline"></ion-icon> 9.8
                            </span>
                            <span class="d-md-none">
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                            <span>
                                <ion-icon name="fitness-outline"></ion-icon> 98%
                            </span>
                            <span>
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="api-box align-middle">
                        <img src="assets/img/520x400.png" class="img-fluid">
                        <h4> <a href="documentation.php"> Microapi Name </a> </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore placeat aut rem repudiandae. Quasi mollitia culpa obcaecati velit blanditiis odio, rem provident? Sint et neque, libero voluptas ex nulla dolorum. </p>
                        <div class="block text-left">
                            <span> <i>Verified</i> <i> <ion-icon name="checkmark-outline"></ion-icon> </i> </span>
                        </div>
                        <div class="icons-stat">
                            <span>
                                <ion-icon name="trending-up-outline"></ion-icon> 9.8
                            </span>
                            <span class="d-md-none">
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                            <span>
                                <ion-icon name="fitness-outline"></ion-icon> 98%
                            </span>
                            <span>
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="api-box align-middle">
                        <img src="assets/img/520x400.png" class="img-fluid">
                        <h4> <a href="documentation.php"> Microapi Name </a> </h4>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore placeat aut rem repudiandae. Quasi mollitia culpa obcaecati velit blanditiis odio, rem provident? Sint et neque, libero voluptas ex nulla dolorum. </p>
                        <div class="block text-left">
                            <span> <i>Verified</i> <i> <ion-icon name="checkmark-outline"></ion-icon> </i> </span>
                        </div>
                        <div class="icons-stat">
                            <span>
                                <ion-icon name="trending-up-outline"></ion-icon> 9.8
                            </span>
                            <span class="d-md-none">
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                            <span>
                                <ion-icon name="fitness-outline"></ion-icon> 98%
                            </span>
                            <span>
                                <ion-icon name="time-outline"></ion-icon> 665ms
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="divider divider-fade">
    <div class="row d-flex justify-content-center">
        <div class="col-7 text-center mt-3"> <a href="#" class="btn btn-white "><i class="las la-redo-alt mr-2"></i>Load more...</a> </div>
    </div>
</div>
<section class="pt-7 pb-sm-3">
    <div class="container">
        <div class="client-logos-1 d-none d-sm-block text-center">
            <div class="container">
                <h2 class="text-center h5 mb-5 text-gray font-weight-light">Featured in:</h2>
                <div class="row d-flex align-items-center justify-content-md-center flex-wrap justify-content-sm-between">
                    <div class="col-sm-3 col-md-2">
                        <img class="mx-auto img-fluid" src="https://pbs.twimg.com/profile_images/1083303099886985222/4vHpZnpa_400x400.jpg" alt="Image description">
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <img class="mx-auto img-fluid" src="https://hire.andela.com/hs-fs/hubfs/Images_Feb_Folder/Andela-logo-landscape-blue-400px.png?width=3163&height=923&name=Andela-logo-landscape-blue-400px.png" alt="Image description">
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <img class="mx-auto img-fluid" src="https://blogapi.uber.com/wp-content/uploads/2018/11/Logo_lockup-1.png" alt="Image description">
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <img class="mx-auto img-fluid" src="https://codebase.berkeley.edu/assets/codebase-text-logo.png" alt="Image description">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="customer-review-section p-4">
            <div class="row justify-content-around align-items-center flex-md-row-reverse">
                <div class="col-md col-lg-6 space-2-bottom">
                    <div class="d-flex mb-4"> <i class="icon_star_alt text-warning mr-1"></i>
                        <i class="las la-star text-success mr-1"></i>
                        <i class="las la-star text-success mr-1"></i>
                        <i class="las la-star text-success mr-1"></i>
                        <i class="las la-star text-success mr-1"></i>
                    </div>
                    <!-- end: Rating icons -->
                    <span class="h2 d-block">“Their skill and expertise in digital design and development is self evident.A true partnership that's taken our digital business to the next level..”</span>
                    <footer class="step-up h5">
                        <span class="text-primary">Gavin Feilding – Digital Manager, dusk Australia</span>
                    </footer>
                </div>
                <div class="col-4 mt-md-4 mt-lg-0">
                    <div class="image-wrap">
                        <img class="d-none d-md-block img-fluid postion-relative mr-auto" src="assets/img/08.png" alt="Image">
                    </div>
                    <!-- end:Image wrap -->
                </div>
            </div>
        </div>
    </div>
</section>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="info-box p-4">
                    <h6 class="text-primary">Accessibility</h6>
                    <h3>
                        Flexible and simple UI to work you through
                    </h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit, Laboriosam voluptatum.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-box p-4">
                    <h6 class="text-primary">Documentation</h6>
                    <h3>
                        Easy to follow API documentation on the dack
                    </h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit, Laboriosam voluptatum.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-box p-4">
                    <h6 class="text-primary">Integrate</h6>
                    <h3>
                        Seamless integration into projects getting cool
                    </h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit, Laboriosam voluptatum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection