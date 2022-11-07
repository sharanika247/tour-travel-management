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
                                   <h4>Package List
                                                                           <span class="text-primary"> 16</span>
                                                                      
                                </h4>
                                   <a href="http://127.0.0.1:8000/dashboard/users/create" class="btn btn-primary"> <i class="ti-plus"></i> Add new place</a>
                                   </div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#ID</th>
                                                    <th>Place Name</th>
                                                    <th>Place Details</th>
                                                    <th>Package Date</th>
                                                    <th>Status</th>
                                                    <th p style="text-align: left">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                <tr>
                                                <th>1</th>
                                                    <th>Sundarbans</th>
                                                    <th>Sundarbans has declared World Heritage Site by UNESCO which is the largest Mangrove Forest situated between two countries. It is the kingdom of Royal Bengal tiger and you will find various kinds of species of birds, animals & plants and I think you should visit the tranquilizing beauty of Sundarbans once in your life.</th>
                                                    <th>29 - Oct - Sun || 02 - Nov - Tue</th>
                                                    <th>active</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>2</th>
                                                    <th>Chittagong Hill Tracks</th>
                                                    <th>Hills are always enchanting to the tourist and as a tourist, you should obviously visit Chittagong Hill Tracks once which is the home of many tribal and you can discover yourself in the amazing green view. Chittagong Hill Tracks is the best place for making an adventurous tour and for this you have to take permission from the authority</th>
                                                    <th>29 - Oct - Sun || 02 - Nov - Tue</th>
                                                    <th>active</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>3</th>
                                                    <th>Srimagal</th>
                                                    <th>The Capital of tea in Bangladesh is Srimagal which is situated in the north-eastern part of the country where you will find lush greenery fields all around. It is one of the best places in Bangladesh where you can really have the place & clam environment and there are two more visiting places too, Lawachhara National Park & Hamham Waterfalls.</th>
                                                    <th>29 - Oct - Sun || 02 - Nov - Tue</th>
                                                    <th>active</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>4</th>
                                                    <th>Rangamati</th>
                                                    <th>The District of Chittagong Hill Tracks area in Rangamati, a place full of natural amusement and here, here, you can find a man-made lake surrounded by Hill called Kaptai Lake where you can take a ride by boat all over the day, a Buddhist Monastery here named Rajban Bihara, a high-quality handicrafts market made by the tribal of Rangamati.</th>
                                                    <th>29 - Oct - Sun || 02 - Nov - Tue</th>
                                                    <th>active</th>
                                                    
                                                    <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th>
                                                </tr>
                                                                                                <tr>
                                                <th>5</th>
                                                    <th>Paharpur</th>
                                                    <th>Paharpur is the most impressive archeological site of Bangladesh which is known as Sompuri Maharabihara which has declared World Heritage Site by UNESCO and it is situated in the northwestern part of the country. In the initial period, it was the best Buddhist Monastery where people came for higher study from all over the world.</th>
                                                    <th>29 - Oct - Sun || 02 - Nov - Tue</th>
                                                    <th>active</th>
                                                    <th>
                                                        <a href="" class="btn btn-primary"><span class="ti-plus"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="" class="btn btn-primary"><span class="ti-trash"></span></a>
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