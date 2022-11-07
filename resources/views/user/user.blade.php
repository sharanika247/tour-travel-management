<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TRAVELER - Free Travel Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('frontend')}}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="{{asset('frontend')}}/preconnect" href="https://fonts.gstatic.com">
    <link href="{{asset('frontend')}}/https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="{{asset('frontend')}}/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('frontend')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">
</head>

<body>
    
@include('user.pages.topbar')
@include('user.pages.navbar')
<img src="{{asset('image/tour.jpg')}}" alt="image" width="1700" height="900">
<!-- @include('user.pages.booking')-->

 <section id="main-content">
                    {{-- main body --}}
                    @yield('main')
                    {{--  main body end --}}

                     {{-- footer start --}}
                    @include('user.pages.footer')
                    {{-- footer end --}} 
                </section> 


<!-- @include('user.pages.about')  
@include('user.pages.feature')  
@include('user.pages.packages')  
@include('user.pages.registration') 
@include('user.pages.team') 
@include('user.pages.footer') --> 
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="{{asset('frontend')}}/https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{asset('frontend')}}/https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('frontend')}}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{asset('frontend')}}/lib/tempusdominus/js/moment.min.js"></script>
    <script src="{{asset('frontend')}}/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="{{asset('frontend')}}/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('frontend')}}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{asset('frontend')}}/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('frontend')}}/js/main.js"></script>
</body>

</html>