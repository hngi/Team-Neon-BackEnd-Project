@extends('layouts.app')

@section('main-wraper')
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
      {{-- {{dd($data)}} --}}
      @foreach ($data as $key => $value)


        <div class="col-md-3 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="api-box align-middle">
                        <img src="{{$value['image_url']}}" class="img-fluid">
                    <h4 class="">  {{$value['firstname']}} {{$value['middlename'] ?? ' '}}  {{$value['lastname']}} </h4>
                       <p>{{$value['country']}}</p>
                       <br>   <br>   <br>
                       EMAIL :{{$value['email']}}
                        <div class="block text-left">
                            <span> <i>{{$value['languages']}}</i> <i> <ion-icon name="checkmark-outline"></ion-icon> </i> </span>
                        </div>
                        <div class="icons-stat">
                            <span>
                                <ion-icon name="trending-up-outline"></ion-icon> 9.8
                            </span>
                            <span>
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


      @endforeach


    </div>
    <hr class="divider divider-fade">

</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="info-box p-4">
                    <h6 class="text-primary">Get paid for your work</h6>
                    <h3>
                        Sell your work to a global community of art lovers
                    </h3>
                    <p class="lead">Create your MarketSpot account and start selling your your work today.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-box p-4">
                    <h6 class="text-primary">Customers</h6>
                    <h3>
                        UI assets for startup owners & busy designers
                    </h3>
                    <p class="lead">Find the perfect creative asset to
                        bring your project to life.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info-box p-4">
                    <h6 class="text-primary">Partnership</h6>
                    <h3>
                        Earn up to 75% selling your work with us !
                    </h3>
                    <p class="lead">We pay commissions to our partners for over 7 years already.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
