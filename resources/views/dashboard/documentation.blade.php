@extends('layouts.app')

@section('main-wrapper')
<div class="sticky-doc-title">
    <div class="container border-bottom pt-4 pb-4" style="border-bottom-color: rgba(0, 0, 0, 0.65);">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <img src="https://hire.andela.com/hs-fs/hubfs/Images_Feb_Folder/Andela-logo-landscape-blue-400px.png?width=3163&height=923&name=Andela-logo-landscape-blue-400px.png" class="img-fluid mx-auto">
        
                    </div>
                    <div class="col-sm-8 d-flex align-items-center">
                        <h4 class="m-0"> Microapi Endpoint 1
                            <small class="d-block mt-2"> By <span>Joemires</span> | Updated a year ago </small>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="stat-sec d-flex">
                <div class="stat">
                    <span> Popularity</span>
                    <span> 0.4 / 10 </span>
                </div>
                <div class="stat">
                    <span> Latency</span>
                    <span> 563ms </span>
                </div>
                <div class="stat">
                    <span> Success Rate</span>
                    <span> - </span>
                </div>
            </div>
    
        </div>
    </div>
    <div class="container border-bottom py-2 mb-4" style="border-bottom-color: rgba(0, 0, 0, 0.65);">
        <ul class="d-flex m-0" style="list-style-type: none">
            <li>Endpoints</li>
            <li class="ml-2">Documentation</li>
        </ul>
    </div>
</div>

<section class="">
    <div class="container">
        <form class="mb-4">
            <div class="form-group col-lg-6">
                <span class="icon-placeholder"> <ion-icon name="search-outline"></ion-icon> </span>
                <input type="text" class="form-control" placeholder="Search enpoints">
            </div>
        </form>
        <div class="endpoints pb-5">
            <div class="d-flex flex-wrap icon-aligner">
                <span class="text-success"> GET </span>
                <span style="flex: 2"> Title of the api goes here </span>
                <span style="flex: 4"> https://montanaflynn-lorem-text-generator.p.rapidapi.com/paragraph </span>
                <button class="btn btn-md text-white btn-success d-flex icon-aligner">
                    <ion-icon slot="icon-only" name="chevron-down-outline" color="success"></ion-icon>
                </button>
            </div>
            <div class="d-flex icon-aligner">
                <span style="color: #d9534f"> DELETE </span>
                <span style="flex: 2"> Title of the api goes here </span>
                <span style="flex: 4"> https://montanaflynn-lorem-text-generator.p.rapidapi.com/paragraph </span>
                <button class="btn btn-md text-white btn-success d-flex icon-aligner">
                    <ion-icon name="chevron-down-outline" color="light"></ion-icon>
                </button>
            </div>
            <div class="d-flex icon-aligner">
                <span style="color: #0275d8"> POST </span>
                <span style="flex: 2"> Title of the api goes here </span>
                <span style="flex: 4"> https://montanaflynn-lorem-text-generator.p.rapidapi.com/paragraph </span>
                <button class="btn btn-md text-white btn-success d-flex icon-aligner">
                    <ion-icon name="chevron-down-outline" color="light"></ion-icon>
                </button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('jumbotron-sec', '')