@extends('backend.master')
@section('main')
                   
  

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                   

                
<div class="row justify-content-center">
    <div class="col-lg-10">
    <div class="card">
                                <div class="card-title">
                                   <div class="d-flex justify-content-between">
                                   <h4>User Booking List
                                                                           <span class="text-primary"> 16</span>
                                                                      
                                </h4>
                                   <!-- <a href="http://127.0.0.1:8000/dashboard/users/create" class="btn btn-primary"> <i class="ti-plus"></i> Add new User</a> -->
                                   </div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Package Name</th>
                                                    <th>Time</th>
                                                    <th p style="text-align: left">Booking Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                <tr>
                                                <th>1</th>
                                                    <th>Sharanika Das</th>
                                                    <th>kothamonydas@gmail.com</th>
                                                    <th>Cox's Bazar</th>
                                                    <th>22 - Sep - Sun || 16 : 55 : 45 pm</th>
                                                    <th>
                                                        <a href="" class="btn btn-primary">Add</a>
                                
                                                        <a href="" class="btn btn-primary">Cancle</a>
                                                    </th>
                                                    <!-- <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th> -->
                                                </tr>
                                                                                                <tr>
                                                <th>2</th>
                                                    <th>Sharanika Das</th>
                                                    <th>sharanikadas12@gmail.com</th>
                                                    <th>Shundarban</th>
                                                    <th>22 - Sep - Sun || 09 : 27 : 19 am</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary">Add</a>
                                
                                                        <a href="" class="btn btn-primary">Cancle</a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>3</th>
                                                    <th>kothamony das</th>
                                                    <th>sharanikadas344@gmail.com</th>
                                                    <th>SajekValley</th>
                                                    <th>22 - Sep - Sun || 09 : 28 : 35 am</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary">Add</a>
                                
                                                        <a href="" class="btn btn-primary">Cancle</a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>4</th>
                                                    <th>Tonmoy Das</th>
                                                    <th>Tonmoydas@gmail.com</th>
                                                    <th>Mainamati</th>
                                                    <th>22 - Sep - Sun || 09 : 29 : 32 am</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary">Add</a>
                                
                                                        <a href="" class="btn btn-primary">Cancle</a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>5</th>
                                                    <th>Tanmoy Ghosh</th>
                                                    <th>tanmoyghosh12@gmail.com</th>
                                                    <th>Mahasthangar</th>
                                                    <th>22 - Sep - Sun || 09 : 30 : 20 am</th>
                                                    
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary">Add</a>
                                
                                                        <a href="" class="btn btn-primary">Cancle</a>
                                                    </th>
                                                
                                                </tr>
                                                                                            </tbody>
                                            
                                        </table>
                                        <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/dashboard/users?page=2">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/dashboard/users?page=3">3</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/dashboard/users?page=4">4</a></li>
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="http://127.0.0.1:8000/dashboard/users?page=2" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                </li>
                    </ul>
    </nav>

                                    </div>
                                </div>
                            </div> 
    </div>
</div>         

                </section>
            </div>
        </div>
    </div>


@endsection                           