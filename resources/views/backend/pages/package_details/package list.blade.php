@extends('backend.master')
@section('main')
<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Tour Packages</h1>
                <a href="{{route('all.store')}}"  class="btn btn-primary" class="right"> <i class="ti-plus"></i> Add new place</a>
     
            </div>
            <div class="row">
                 @foreach($package as $pckg) 
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                    <a href="{{route('coxbazar')}}">
                    <img src="{{asset('image/coxbazar.jpg')}}"alt="image" width="350" height="240">
                    </a>

                       
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>CoxBazar</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="{{route('coxbazar')}}">You want to know CoxBazar Tourist Spots & Hotel Rent.This Site only for you.Cox's Bazar is a tourist city located in the southest of the country.</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">BDT 10,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach 
                
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                    <a href="{{route('coxbazar')}}">
                    <img src="{{asset('image/coxbazar.jpg')}}"alt="image" width="350" height="240">
                    </a>

                       
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>CoxBazar</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="{{route('coxbazar')}}">You want to know CoxBazar Tourist Spots & Hotel Rent.This Site only for you.Cox's Bazar is a tourist city located in the southest of the country.</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">BDT 10,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                    <a href="{{route('sundarban')}}">
                    <img src="{{asset('image/sundarban.jpg')}}"alt="image" width="350" height="240">
                    </a>

                        <!-- <img class="h5 text-decoration-none" button href="{{route('sundarban')}}" class="img-fluid" img src="{{asset('image/sundarban.jpg')}}" alt="image" width="360" height="240"> -->
                      
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sundarban</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="{{route('sundarban')}}">It is the largest Tiger Reserve and National Park. Apart from being a unique largest mangrove eco-system of the world.</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">BDT 14,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                    <a href="{{route('sajekvalley')}}">
                    <img src="{{asset('image/sajek.jpg')}}"alt="image" width="350" height="240">
                    </a>
                        <!-- <img class="img-fluid"  img src="{{asset('image/sajek.jpg')}}" alt="image" width="360" height="50"> -->
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sajek Valley</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>3 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="{{route('sajekvalley')}}">It has attracted visitors and tourist from home and abroad.Sajek valley is known as the Queen of Hills.</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">BDT 15,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                    <a href="{{route('mainamati')}}">
                    <img src="{{asset('image/mainamati1.jpeg')}}"alt="image" width="350" height="240">
                    </a>
                        <!-- <img class="img-fluid" img src="{{asset('image/mainamati1.jpeg')}}" alt="image" width="360" height="150"> -->
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Mainamati</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>1 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>4 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="{{route('mainamati')}}">Mainamati an isolated ridge of low hills in the eastern margins of deltaic Bangladesh.</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">BDT 4,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                    <a href="{{route('mahasthangar')}}">
                    <img src="{{asset('image/mohasthangor.jpg')}}"alt="image" width="350" height="240">
                    </a>    
                    <!-- <img class="img-fluid" img src="{{asset('image/mohasthangor.jpg')}}" alt="image" width="350" height="50"> -->
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Mahasthangarh</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>1 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="{{route('mahasthangar')}}">Mahasthangarh is the oldest archaeological site in Bangladesh.</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">BDT 6,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                    <a href="{{route('sonargaon')}}">
                    <img src="{{asset('image/sonargoan.jpg')}}"alt="image" width="350" height="240">
                    </a>   
                        <!-- <img class="img-fluid" img src="{{asset('image/sonargoan.jpg')}}" alt="image" > -->
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Sonargoan</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>1 days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="{{route('sonargaon')}}">Sonargaon was an ancient center of muslin production and textile manufacturing.</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">BDT 5,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection