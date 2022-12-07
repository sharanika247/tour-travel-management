@extends('backend.master')
@section('main')
<div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-title">
                                    <div class="d-flex justify-content-between">
                                        <h4>Add New User Informations</h4>
                                        <a href="http://127.0.0.1:8000/dashboard/users" class="btn btn-danger"> <i class="ti-angle-left"></i> Back</a>
                                    </div>
                                </div>
                                <div class="card-body">

                                                                                                    <div class="basic-form">
                                        <form method="post" action="{{route('basic.store')}}">
                                        @csrf
                                           
                                        <div class="form-group ">
                                                <p class="text-muted m-b-15 f-s-12">Type Name</p>
                                                <input type="text" value="" name="typename" class="form-control input-default " placeholder="Plz enter user name">
                                                <span style="color:red;">
                                                    <strong></strong>
                                                </span>
                                                
                                            </div> 
                                            <div class="form-group ">
                                                <p class="text-muted m-b-15 f-s-12">Email</p>
                                                <input type="email" name="email" class="form-control input-default " placeholder="Plz enter email">
                                                <span style="color:red;">
                                                    <strong></strong>
                                                </span>
                                            </div>
                                            <div class="form-group ">
                                                <p class="text-muted m-b-15 f-s-12">Details</p>
                                                <input type="text" name="typedetails" class="form-control input-default " placeholder="type details">
                                                
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