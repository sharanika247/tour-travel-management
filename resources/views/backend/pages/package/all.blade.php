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
                                   <a href="{{route('all.store')}}" class="btn btn-primary"> <i class="ti-plus"></i> Add new place</a>
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
                                                @foreach($types as $type)
                                                
                                                <tr>
                                                    <th>{{$type->id}}</th>
                                                    <th>{{$type->name}}</th>
                                                    <th>{{$type->details}}</th>
                                                    <th>{{$type->package_start_date}} to {{$type->package_end_date}}</th>
                                                    <th>{{$type->status}}</th>
                                                
                                                    <th>
                                                        <!-- <a href="" class="btn btn-primary"><span class="ti-plus"></span></a> -->
                                                        <a href="{{route('all.edit',$type->id)}}" class="btn btn-primary"><span class="ti-pencil"></span></a>
                                                        <a href="{{route('all.delete',$type->id)}}" class="btn btn-primary"><span class="ti-trash"></span></a>
                                                    </th>

                                                </tr>
                                               @endforeach



                                            </tbody>
                                            
                                        </table>
                                        <nav>
        <ul class="pagination">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/package/all?page=2">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/package/all?page=3">3</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="http://127.0.0.1:8000/package/all?page=4">4</a></li>
                                                                        
            
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

<!-- {{-- footer start --}}
                    @include('backend.components.footer')
                    {{-- footer end --}} -->
                </section>
            </div>
        </div>
    </div>

     

@endsection                            