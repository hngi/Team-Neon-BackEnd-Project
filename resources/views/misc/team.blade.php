@extends('layouts.app')

@section('links-hrefs')
    <link rel="stylesheet" href="{{ asset('css/team.css') }}">
@endsection

@section('main-wrapper')
<div class="container py-5">
    <div class="row pb-5" style="justify-content: center">
        <div class="heading-title text-center">
            <h3 class="text-uppercase">Our professionals </h3>
            <p class="p-top-30 half-txt">Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. Nam pulvinar vitae neque et porttitor. Praesent sed nisi eleifend. </p>
        </div>
    </div>

    <div class="row">

        @foreach ($teams as $team)
            
        @php
        $user = $team['firstname'].' '.$team['lastname'];
        if(isset($readUsers) && in_array(strtolower($user), $readUsers))
        continue;
        
        $readUsers[] = strtolower($user);
        @endphp
            <div class="col-lg-3 col-md-6">
                <div class="card team-member">
                    <div class="img-placeholder" style="background-image: url({{$team['image_url']}})">
                        <div class="hover">
                            <div class="desk">
                                <h4 class="mb-1">{{$team['hng_id']}}</h4>
                                <p> From {{$team['country']}} <br> {{$team['email']}}.</p>
                            </div>
                            <div class="s-link">
                                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                                <a href="#"><ion-icon name="logo-github"></ion-icon></a>
                                <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
                            </div>
                        </div>
                    </div>
                    {{-- <img src="https://image.freepik.com/free-photo/man-standing-with-a-black-t-shirt_1187-1045.jpg" class="card-img-top" alt=""> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{$team['firstname'].' '.$team['lastname']}}</h5>
                        <p class="card-text">{{$team['role']}} - {{$team['languages']}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>

@endsection