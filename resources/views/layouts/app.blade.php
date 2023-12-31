<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    {{-- <title>Hotelier - Hotel HTML Template</title> --}}
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
  
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap') }}" rel="stylesheet">
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
</head>

<body>
   
       
        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
           
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block" >
                    <a href="/" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        
                        <img src="{{ asset('img/r6.png') }}" alt="image" style="width: 100px; margin-right: 110px;">
                        
                          
                        
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-black d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                               
                            </div> 
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                
                            </div>
                        </div>
                        

                    </div>
                    
                                
                                @include('layouts.navigation')
                         
                        </div>
                    </nav>
                    


                </div>
            </div>
        </div> 
    </div>
    <!-- Header End -->
    

        @yield('content')

 <!-- Footer start -->
 
 <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">

    <div class="container pb-5">

        <div class="row g-5">

            <div class="col-md-6 col-lg-4">

                <div class="bg-dark rounded p-4">

                    
                </div>
            </div>
            <div class="col-md-6 col-lg-3">

                <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@gmail.com</p>
                <div class="d-flex pt-2">

                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">

                <div class="row gy-5 g-4">

                    <div class="col-md-6">

                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Privacy Policy</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
                    </div>
                    <div class="col-md-6">

                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                        <a class="btn btn-link" href="">Food & Restaurant</a>
                        <a class="btn btn-link" href="">Spa & Fitness</a>
                        <a class="btn btn-link" href="">Sports & Gaming</a>
                        <a class="btn btn-link" href="">Event & Party</a>
                        <a class="btn btn-link" href="">GYM & Yoga</a>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>

<div class="container">
    <div class="copyright">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">ROOMZILLA</a>, All Right Reserved. 
                
                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By <a class="border-bottom" href="https://htmlcodex.com">SEFFARI FATIMA EZZAHRA</a>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                    <a href="">Home</a>
                    <a href="">Cookies</a>
                    <a href="">Help</a>
                    <a href="">FQAs</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 <!-- Footer End -->


</body>

</html>