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
                                                    <th>status</th>
                                                    <th p style="text-align: left">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                                <tr>
                                                <th>1</th>
                                                    <th>Lalbag Fort</th>
                                                    <th>Lalbag Fort or Aurangabad is another most famous historical place in Bangladesh. It is situated beside the Buriganga River, in the southwestern part of Dhaka, Bangladesh. It was built by Mudmhammad Azam in 1678. Lalbag Fort represents the incomplete dream of the Mughal prince. The fort remained incomplete after the death of Prince Azam.</th>
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
                                                    <th>Star Mosque</th>
                                                    <th>It is a famous tourist attraction in old Dhaka. The mosque is fully decorated with a mosaic. People also use this mosque for regular praying. Non-muslims are also invited to this mosque outside of prayer time. It was designed by Mughal style and the motifs of stars are the main cause to call this mosque “Star Mosque”.</th>
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
                                                    <th>Ahsan Manzil</th>
                                                    <th>Ahsan Manzil or the Pink Palace, the most meaningful architectural heritage, was built by Nawab Abdul Gani in 1872. This two-story building is now a museum displaying all kinds of objects of the owner of that time. So you can feel the lifestyle of the Nawabs of Bengal. It has 23 galleries displaying historical things.</th>
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
                                                    <th>Mainamati</th>
                                                    <th>Mainamati is the finest archeological structure of the Comilla district which is mainly a ‘ War Cemetery’ surrounded by historical ruins and the main attractions of the place are- Shalban Bihar, Mainamati Museum, Lalmai Hill Ranges, Old Capital Sonargaon & Panama Nagar, so, I think you should visit this place with your family & friends.</th>
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
                                                    <th>Sonargaon</th>
                                                    <th>Sonargaon, known as the oldest capital of Bangladesh, is home to some of the old buildings. This place can attract you by its spanless beauty and by the relics of ancient Bengal. By visiting the Sonargaon Museum you can see things people used to use in their everyday life like furniture, ornaments, arms, boats, musical instruments, and many other things related to the heritage of Bengal.</th>
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