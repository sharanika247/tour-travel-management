@extends('backend.master')
@section('main')
<div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-title">
                                    <div class="d-flex justify-content-between">
                                        <h4>Add New Place Informations</h4>
                                        <a href="{{route('package.alllist')}}" class="btn btn-danger"> <i class="ti-angle-left"></i> Back</a>
                                    </div>
                                </div>
                                <div class="card-body">

                                                                                                    <div class="basic-form">
                                        <form method="post" action="{{route('all.store')}}">
                                        @csrf
                                           
                                        <div class="form-group ">
                                                <p class="text-muted m-b-15 f-s-12">Place Name</p>
                                                <input type="text" name="placename" class="form-control input-default " placeholder="Plz enter place name">
                                                <span style="color:red;">
                                                    <strong></strong>
                                                </span>
                                                
                                            </div> 
                                            <div class="form-group ">
                                                <p class="text-muted m-b-15 f-s-12">Place Details</p>
                                                <input type="text" name="placedetails" class="form-control input-default " placeholder="Plz enter place details">
                                                <span style="color:red;">
                                                    <strong></strong>
                                                </span>
                                            </div>
                                            <div class="form-group ">
                                                <p class="text-muted m-b-15 f-s-12">Package Start Date</p>
                                                <input type="date" name="packagstartdate" class="form-control input-default " placeholder="plz enter start package date">
                                                
                                            </div>

                                            <div class="form-group ">
                                                <p class="text-muted m-b-15 f-s-12">Package End Date</p>
                                                <input type="date" name="packagenddate" class="form-control input-default " placeholder="plz enter end package date">
                                                
                                            </div>

                                            <div class="form-group ">
                                                <p class="text-muted m-b-15 f-s-12">Status</p>
                                                <select name="status" class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">active</option>
                                                <option value="0">Deactive</option>
                                                
                                                </select>
                                                
                                            </div>


                                            <!-- <div class="form-group ">
                                                <p class="text-muted m-b-15 f-s-12">Confrim PassWord</p>
                                                <input type="password" name="password_confirmation" class="form-control input-default " placeholder="Plz enter confrimpassword">
                                                <span style="color:red;">
                                                    <strong></strong>
                                                </span>
                                            </div> -->
                                            <div>
                                                <button type="submit" class="btn btn-success">Submit Now</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                    @endsection            