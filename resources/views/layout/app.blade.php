<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from mannatthemes.com/selfown/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 07:06:34 GMT -->
<head>
        <meta charset="utf-8" />
        <title>MyPortfolio - Responsive Personal page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Premium Bootstrap 5 Template" />
        <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
        <meta content="Mannatthemes" name="author" />
        <!-- favicon -->'
        <link rel="shortcut icon" href="{{asset('public/asset/images/favicon.ico')}}" />

        <!-- css -->
        <link href="{{asset('public/asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/asset/css/style.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- colors -->
        <link href="{{asset('public/asset/css/colors/default.css')}}" rel="stylesheet" type="text/css" id="color-opt" />
    </head>

    <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="80" >
        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
            <div class="container">
                <a href="index.html" class="navbar-brand">
                    <img src="{{asset('public/asset/images/logo-sm.png')}}" class="logo-sm" alt="" height="24" />
                    <img src="{{asset('public/asset/images/logo-light.png')}}" class="logo-light" alt="" height="16" />
                    <img src="{{asset('public/asset/images/logo-dark.png')}}" class="logo-dark" alt="" height="16" />
                </a><!--end navbar-brand-->
                <a href="javascript:void(0)" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
                </a><!--end navbar-toggler-->

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto navbar-center mt-lg-0 mt-2">
                        <li class="nav-item">
                            <a class="nav-link active" href="">Home</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="services">Services</a>
                        </li><!--end nav-item-->                        
                        <li class="nav-item">
                            <a class="nav-link" href="resume">Resume</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="projects">Projects</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="blogs">Blogs</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li><!--end nav-item-->
                    </ul><!--end navbar-nav-->
                    <a href="#" class="btn btn-sm nav-btn text-primary mb-4 mb-lg-0">Hire Me! <i class="icon-xxs ms-1" data-feather="chevrons-right"></i></a>
                </div><!-- end #navbarNav -->
            </div><!-- end container -->
        </nav>
        <!-- end navbar -->

        <!-- start hero -->
        <section class="hero-one position-relative main-bg" id="home"  style="background-image: url(images/personal/main-bg.png); background-size: cover; background-position: center center;">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    
                    <div class="col-lg-5  mx-auto mt-5"> 
                        <img src="{{asset('public/asset/images/personal/1-6.png')}}" alt="Abdul Mazed" class="img-fluid ml-lg-5">
                    </div><!--end col--> 
                    <div class="col-lg-7 text-center px-0 px-xl-4 mt-5 mt-lg-0 pt-5 pt-lg-0">
                        <h5 class="d-inline-block py-1 px-3 rounded text-muted font-secondary">Hi, I'm Abdul Mazed</h5>
                        <h1 class="hero-title mb-4 font-secondary fo">I'm a <mark><span class="fw-medium typewrite" data-period="2000" data-type='["Laravel", "Codiegniter"]'></span></mark> Developer</h1>   
                        <span class="wrap"></span>                     
                        <div class="mb-5 mb-lg-0">                           
                            <div class="d-inline-block">
                                <a href="#" class="btn btn-primary">Download CV</a>
                            </div>
                        </div>
                    </div><!--end col-->                  
                </div><!--end row-->             
            </div><!-- end container -->
        </section>
        <!-- end hero -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- start about -->
        <section class="section" id="about">
            <div class="container">
                <div class="row align-items-center">                
                    <div class="col-lg-6 align-self-center">
                        <h5 class="fs-24 text-dark fw-medium"><mark>Personal Details</mark></h5>       
                        <h4 class="fw-normal lh-base text-gray-700 mb-4 fs-20">It is a long established fact 
                            that a reader will be distracted by the readable content of a page when looking at its layout. 
                        </h4>
                        <div class="social">
                            <a href="#">
                                <i class="lab la-github github me-1"></i>
                            </a>
                            <a href="#">
                                <i class="lab la-twitter twitter me-1"></i>
                            </a>
                            <a href="#">
                                <i class="lab la-google google me-1"></i>
                            </a>
                            <a href="#">
                                <i class="lab la-linkedin-in linkedin me-1"></i>
                            </a>
                        </div>
                    </div><!--end col--> 
                    <div class="col-lg-5 ms-auto align-self-center">
                        <div class="mb-5 mb-lg-0">
                            <p class="mb-2">
                                <span class="personal-detail-title">Date of birth</span> 
                                <span class="personal-detail-info">06 june 1989</span>
                            </p>
                            <p class="mb-2">
                                <span class="personal-detail-title">Spoken Langages</span> 
                                <span class="personal-detail-info">English - French - German</span>
                            </p>
                            <p class="mb-2">
                                <span class="personal-detail-title">Nationality</span> 
                                <span class="personal-detail-info">USA</span>
                            </p>
                            <p class="mb-2">
                                <span class="personal-detail-title">Interest</span> 
                                <span class="personal-detail-info">Music, Reading, journey</span>
                            </p>
                        </div>
                    </div><!--end col-->
                    <div class="col-12 mt-5">
                        <div class="d-flex flex-wrap justify-content-center  mt-4 mt-md-5">
                            <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                                <div class="d-flex align-items-center">
                                    <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                        <img src="images/logos/android.svg" alt="" class="" height="34">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium text-gray-700">Android</h6>
                                        <p class="text-muted mb-0 fs-12">2 Year Experience</p>
                                    </div>
                                </div>                           
                            </div><!--/div-->
                            <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                                <div class="d-flex align-items-center">
                                    <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                        <img src="images/logos/Angular.svg" alt="" class="" height="34">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium text-gray-700">Angular</h6>
                                        <p class="text-muted mb-0 fs-12">1 Year Experience</p>
                                    </div>
                                </div>                           
                            </div><!--/div-->
                            <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                                <div class="d-flex align-items-center">
                                    <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                        <img src="images/logos/bootstrap.svg" alt="" class="" height="34">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium text-gray-700">Bootstrap</h6>
                                        <p class="text-muted mb-0 fs-12">3 Year Experience</p>
                                    </div>
                                </div>                           
                            </div><!--/div-->
                            <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                                <div class="d-flex align-items-center">
                                    <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                        <img src="images/logos/vue.svg" alt="" class="" height="34">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium text-gray-700">Vue</h6>
                                        <p class="text-muted mb-0 fs-12">2 Year Experience</p>
                                    </div>
                                </div>                           
                            </div><!--/div-->
                            <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                                <div class="d-flex align-items-center">
                                    <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                        <img src="images/logos/react.svg" alt="" class="" height="34">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium text-gray-700">React</h6>
                                        <p class="text-muted mb-0 fs-12">8 Months Experience</p>
                                    </div>
                                </div>                           
                            </div><!--/div-->
                            <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                                <div class="d-flex align-items-center">
                                    <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                        <img src="images/logos/mongodb.svg" alt="" class="" height="34">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium text-gray-700">Mongodb</h6>
                                        <p class="text-muted mb-0 fs-12">3 Months Experience</p>
                                    </div>
                                </div>                           
                            </div><!--/div-->
                            <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                                <div class="d-flex align-items-center">
                                    <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                        <img src="images/logos/laravel.svg" alt="" class="" height="34">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium text-gray-700">Laravel</h6>
                                        <p class="text-muted mb-0 fs-12">1 Year Experience</p>
                                    </div>
                                </div>                           
                            </div><!--/div-->
                            <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                                <div class="d-flex align-items-center">
                                    <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                        <img src="images/logos/nodejs-icon.svg" alt="" class="" height="34">
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-medium text-gray-700">Node.js</h6>
                                        <p class="text-muted mb-0 fs-12">10 Months Experience</p>
                                    </div>
                                </div>                           
                            </div><!--/div-->
                        </div><!-- End div -->
                    </div><!-- End Col -->
                </div><!--end row--> 
            </div><!-- end container -->
        </section>
        <!-- end about -->
        <!-- start services -->
        <section class="section bg-gradient-light-white" id="services">
            <div class="container">                
                <div class="row justify-content-center mb-4">
                    <div class="col-12 col-md-10 col-lg-7 text-center position-relative">
                        <span class="badge badge-lg rounded bg-soft-alt-success fw-normal fs-13 text-uppercase">Services</span>
                        <h2 class="fs-2 fw-medium lh-1 text-dark my-3 position-relative z-i-2">Our Services</h2>
                        <div class="bg-text">
                            <h1 class="fw-bold p-0">Services</h1>
                        </div>
                        <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 lh-lg">
                            We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning .
                        </p>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card rounded shadow border-0">
                            <div class="card-body p-4 m-2">
                                <div class="bg-soft-alt-orange d-flex justify-content-center align-items-center thumb-xl  rounded">
                                    <i data-feather="layers" class="align-self-center svg-orange icon-md"></i>  
                                </div>
                                <h5 class="text-dark fs-22 fw-medium my-4">Awesome Support</h5>
                                <p class="text-muted pb-4">Some quick example text to build on the card title and make up the bulk of the card's content platform.</p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card rounded shadow  border-0">
                            <div class="card-body p-4 m-2">
                                <div class="bg-soft-alt-info d-flex justify-content-center align-items-center thumb-xl  rounded">
                                    <i data-feather="dollar-sign" class="align-self-center svg-info icon-md"></i>  
                                </div>
                                <h5 class="text-dark fs-22 fw-medium my-4">Dynamic Growth</h5>
                                <p class="text-muted pb-4">Credibly brand standards compliant users without extensible services. Anibh euismod tincidunt.</p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card rounded shadow  border-0">
                            <div class="card-body p-4 m-2">
                                <div class="bg-soft-alt-success d-flex justify-content-center align-items-center thumb-xl  rounded">
                                    <i data-feather="check-square" class="align-self-center svg-success icon-md"></i>  
                                </div>
                                <h5 class="text-dark fs-22 fw-medium my-4">Branding Identity</h5>
                                <p class="text-muted pb-4">Separated they live in Bookmarksgrove right at the coast of the Semantics, and large.</p>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end services -->

        
        <!-- start resume -->
        <section class="section" id="resume">
            <div class="container">                
                <div class="row justify-content-center mb-4">
                    <div class="col-12 col-md-10 col-lg-7 text-center">
                        <span class="badge badge-lg rounded bg-soft-alt-success fw-normal fs-13 text-uppercase">Life Time</span>
                        <h2 class="fs-2 fw-medium lh-1 text-dark my-3">Education & Experience</h2>
                        <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 lh-lg">
                            We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning .
                        </p>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-12">
                        <div class="row g-0">
                            <div class="col-lg-4 col-md-6">
                                <div class="card rounded bg-light h-100 border-0">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div class="mx-auto text-center">
                                            <img src="images/personal/school.png" alt="" class="vector-dark" height="150">
                                            <img src="images/personal/school-light.png" alt="" class="vector-light" height="150">
                                            <h5 class="text-dark fs-22 fw-medium my-2">Education</h5>     
                                        </div>                          
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-lg-8 col-md-6">
                                <div class="card rounded bg-white  h-100 border-0">
                                    <div class="card-body p-0">
                                        <div class="accordion accordion-flush" id="Education_accordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="prime">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Education_one" aria-expanded="false">                                                        
                                                        MSc IT Master Degree
                                                        <span class="fw-medium text-primary ms-auto fs-14">2010 - 2012</span>
                                                    </button>
                                                </h2>
                                                <div id="Education_one" class="accordion-collapse collapse show" aria-labelledby="prime" data-bs-parent="#Education_accordion">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-3">Harvard University is an educational institution that offers graduate, 
                                                            professional, and research programs 
                                                            in the fields of and public health.
                                                        </p>
                                                        <p class="fw-medium">Harvard University, Cambridge, MA, United States</p>
                                                    </div>
                                                </div>
                                            </div><!--end accordion-item-->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="second">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Education_two" aria-expanded="false">
                                                    BCA college complete course
                                                    <span class="fw-medium text-primary ms-auto fs-14">2007 - 2010</span>
                                                    </button>
                                                </h2>
                                                <div id="Education_two" class="accordion-collapse collapse" aria-labelledby="second" data-bs-parent="#Education_accordion">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-3">Columbia University is an educational institution that offers graduate, 
                                                            professional, and research programs 
                                                            in the fields of and public health.
                                                        </p>
                                                        <p class="fw-medium">Columbia University, New York, NY, United States</p>
                                                    </div>
                                                </div>
                                            </div><!--end accordion-item-->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="higher">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Education_three" aria-expanded="false">
                                                        High / Higher secondary school
                                                    <span class="fw-medium text-primary ms-auto fs-14">1999 - 2007</span>
                                                    </button>
                                                </h2>
                                                <div id="Education_three" class="accordion-collapse collapse" aria-labelledby="higher" data-bs-parent="#Education_accordion">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-3">Princeton University is an educational institution that offers graduate, 
                                                            professional, and research programs 
                                                            in the fields of and public health.
                                                        </p>
                                                        <p class="fw-medium">Princeton University, Princeton, NJ, United States</p>
                                                    </div>
                                                </div>
                                            </div><!--end accordion-item-->
                                        </div><!--end accordion-->
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->                            
                        </div><!-- end row -->
                        <hr class="hr-dashed">
                        <div class="row g-0">
                            <div class="col-lg-4 col-md-6">
                                <div class="card rounded bg-light h-100 border-0">
                                    <div class="card-body d-flex justify-content-center align-items-center">
                                        <div class="mx-auto text-center">
                                            <img src="{{asset('public/asset/images/personal/job.png')}}" alt="" class="vector-dark" height="150">
                                            <img src="{{asset('public/asset/images/personal/job-light.png')}}" alt="" class="vector-light" height="150">
                                            <h5 class="text-dark fs-22 fw-medium my-2">Experience</h5>     
                                        </div>                          
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-lg-8 col-md-6">
                                <div class="card rounded bg-white  h-100 border-0">
                                    <div class="card-body p-0">
                                        <div class="accordion accordion-flush" id="Experience_accordion">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="first-co">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#Experience_one" aria-expanded="false">
                                                        ABC themes - Web Design IT Company
                                                        <span class="fw-medium text-primary ms-auto fs-14">2020 - 2021</span>
                                                    </button>
                                                </h2>
                                                <div id="Experience_one" class="accordion-collapse collapse show" aria-labelledby="first-co" data-bs-parent="#Experience_accordion">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-1">- Delivered quality code by applying the best development practices</p>
                                                        <p class="fw-medium">A-000 Chambers Street, Suite z-701 New York, NY 10007, United States</p>
                                                        <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-13 text-uppercase mt-2">Angular</span>
                                                        <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-13 text-uppercase mt-2">React</span>
                                                        <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-13 text-uppercase mt-2">Python</span>
                                                    </div>
                                                </div>
                                            </div><!--end accordion-item-->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="second-co">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Experience_two" aria-expanded="false">
                                                    DEF Themes - Creative full stack web design & development
                                                    <span class="fw-medium text-primary ms-auto fs-14">2016 - 2019</span>
                                                    </button>
                                                </h2>
                                                <div id="Experience_two" class="accordion-collapse collapse" aria-labelledby="second-co" data-bs-parent="#Experience_accordion">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-1">- Delivered quality code by applying the best development practices</p>
                                                        <p class="fw-medium">A-000 Chambers Street, Suite z-701 New York, NY 10007, United States</p>
                                                        <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-13 text-uppercase mt-2">Laravel</span>
                                                        <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-13 text-uppercase mt-2">Bootstrap</span>
                                                        <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-13 text-uppercase mt-2">javascript</span>
                                                    </div>
                                                </div>
                                            </div><!--end accordion-item-->
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="third-co">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Experience_three" aria-expanded="false">
                                                       GHI Themes - Web & App IT Company
                                                    <span class="fw-medium text-primary ms-auto fs-14">2013 - 2015</span>
                                                    </button>
                                                </h2>
                                                <div id="Experience_three" class="accordion-collapse collapse" aria-labelledby="third-co" data-bs-parent="#Experience_accordion">
                                                    <div class="accordion-body">
                                                        <p class="text-muted mb-1">- Delivered quality code by applying the best development practices</p>
                                                        <p class="fw-medium">A-000 Chambers Street, Suite z-701 New York, NY 10007, United States</p>
                                                        <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-13 text-uppercase mt-2">Node.js</span>
                                                        <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-13 text-uppercase mt-2">Php.net</span>
                                                        <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-13 text-uppercase mt-2">Django</span>
                                                    </div>
                                                </div>
                                            </div><!--end accordion-item-->
                                        </div><!--end accordion-->
                                    </div><!-- end card-body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!--end row-->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end resume -->
        
        <div class="position-relative"> 
            <div class="shape overflow-hidden text-light"> 
                <svg viewBox="0 0 2880 150" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M110 105L2160 0H2880V150H0V105H110Z" fill="currentColor"></path> </svg>
            </div>
        </div>
        <!--what client says -->
        <section class="section bg-gradient-light-white" id="review">
            <div class="container">  
                <div class="row">
                    <div class="col-lg-12 mx-auto">                       
                        <div class="card rounded shadow ">                            
                            <div class="client-carousel">
                                <div class="row align-items-center">
                                    <div class="col-lg-10 p-5 mx-auto">                                        
                                        <div class="client-carousel">
                                            <div id="demo" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-wrap="true">                                            
                                                <div class="carousel-inner">
                                                    <div class="carousel-item text-center active" data-bs-interval="4000">
                                                        <img src="images/logos/logo-1.svg" alt="" class="my-3" height="70">
                                                        <p class="font-secondary fs-22 fst-italic mb-4 px-4">                                                    
                                                            I feel confident imposing change on myself. 
                                                            It's a lot more fun progressing than looking back. 
                                                            That's why scelerisque pretium dolor, 
                                                            sit amet vehicula erat pelleque need throw curve balls.                                                    
                                                        </p>
                                                        <img src="images/users/user-3.jpg" alt="" class="thumb-lg rounded-circle d-block mx-auto">
                                                        <span class="text-uppercase text-muted fs-14 fw-medium">- John M. Sperry</span>
                                                        <ul class="list-inline mb-0 align-self-center">
                                                            <li class="list-inline-item"><i class="la la-star text-warning fs-16"></i></li>
                                                            <li class="list-inline-item"><i class="la la-star text-warning fs-16 ms-n2"></i></li>
                                                            <li class="list-inline-item"><i class="la la-star text-warning fs-16 ms-n2"></i></li>
                                                            <li class="list-inline-item"><i class="la la-star text-warning fs-16 ms-n2"></i></li>
                                                            <li class="list-inline-item"><i class="la la-star-half-o text-warning fs-16 ms-n2"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="carousel-item text-center" data-bs-interval="4000">
                                                        <img src="images/logos/logo-3.svg" alt="" class="my-3" height="70">
                                                        <p class="font-secondary fs-22 fst-italic mb-4 px-4">                                                    
                                                            I feel confident imposing change on myself. 
                                                            It's a lot more fun progressing than looking back. 
                                                            That's why scelerisque pretium dolor, 
                                                            sit amet vehicula erat pelleque need throw curve balls.                                                    
                                                        </p>
                                                        <img src="{{asset('public/asset/images/users/user-5.jpg')}}" alt="" class="thumb-lg rounded-circle d-block mx-auto">
                                                        <span class="text-uppercase text-muted fs-14 fw-medium">- Larry J. Akins</span>
                                                        <ul class="list-inline mb-0 align-self-center">
                                                            <li class="list-inline-item"><i class="la la-star text-warning fs-16"></i></li>
                                                            <li class="list-inline-item"><i class="la la-star text-warning fs-16 ms-n2"></i></li>
                                                            <li class="list-inline-item"><i class="la la-star text-warning fs-16 ms-n2"></i></li>
                                                            <li class="list-inline-item"><i class="la la-star text-warning fs-16 ms-n2"></i></li>
                                                            <li class="list-inline-item"><i class="la la-star-half-o text-warning fs-16 ms-n2"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>                                            
                                            </div> 
                                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </button>
                                        </div> <!--end client-carousel-->                                        
                                    </div><!--end col-->                                 
                                </div><!-- end row -->                                 
                             </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->            
                </div><!-- end row -->                 
            </div><!-- end container -->
        </section>
        <!-- end what client says -->
        
        <section class="section bg-light cta-pettern" id="cta">
            <div class="container">            
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="pattern-1 position-absolute">
                            <img src="images/p-1.svg" alt="" class="" height="80">
                        </div>
                        <h2 class="text-dark" style="line-height: 1.5; position: relative;">I Am Available For Freelancer.</h2>
                        <p class="text-muted mb-0">Browse hundreds of job offers and find the bestsuitable position.</p>
                    </div><!--end col--> 
                    <div class="col-lg-6 ml-auto">
                        <div class="cta-search">
                            <form class="position-relative">
                                <input type="email" placeholder="Email Address" required="">
                                <button type="submit" class="btn btn-dark">Send Massage</button>
                            </form>
                        </div>
                    </div><!--end col--> 
                </div><!--end row--> 
            </div><!--end container--> 
        </section>
        <!-- start projects -->
        <section class="section" id="projects">
            <div class="container">                
                <div class="row justify-content-center mb-4">
                    <div class="col-12 col-md-10 col-lg-7 text-center">
                        <span class="badge badge-lg rounded bg-soft-alt-success fw-normal fs-13 text-uppercase">Work</span>
                        <h2 class="fs-2 fw-medium lh-1 text-dark my-3">My Projects</h2>
                        <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 lh-lg">
                            We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning .
                        </p>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">                    
                    <div class="col-12 filters-group-wrap">
                        <div class="filters-group mb-5">                            
                            <ul class="mb-0 list-unstyled filter-options filter-tab">
                                <li class="list-inline-item position-relative text-dark active" data-group="all">All</li>
                                <li class="list-inline-item position-relative text-dark" data-group="angular">Angular</li>
                                <li class="list-inline-item position-relative text-dark" data-group="mongodb">Mongodb</li>
                                <li class="list-inline-item position-relative text-dark" data-group="bootstrap">Bootstrap</li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row d-flex  g-1 justify-content-center" id="grid">
                    <div class="col-lg-4 col-md-6 picture-item" data-groups='["angular", "bootstrap"]'>
                        <div class="card rounded shadow border-0 m-2">
                            <div class="card-body p-4 m-2">
                                <div class="media mb-3">
                                    <div class="bg-soft-alt-orange d-flex justify-content-center align-items-center thumb-xl  rounded">
                                        <img src="{{asset('public/asset/images/logos/Angular.svg')}}" alt="" class="thumb-md">
                                    </div>
                                    <div class="media-body ms-3 align-self-center">
                                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href="#"><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                                    </div><!--end media-body-->
                                </div><!--end media-->  
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Angular</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">React</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Jquery</span>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6 picture-item" data-groups='["bootstrap"]'>
                        <div class="card rounded shadow border-0 m-2">
                            <div class="card-body p-4 m-2">
                                <div class="media mb-3">
                                    <div class="bg-soft-alt-info d-flex justify-content-center align-items-center thumb-xl  rounded">
                                        <img src="{{asset('public/asset/images/logos/bootstrap.svg')}}" alt="" class="thumb-md">
                                    </div>
                                    <div class="media-body ms-3 align-self-center">
                                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href="#"><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                                    </div><!--end media-body-->
                                </div><!--end media-->                             
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Bootstrap</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Css</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Javascript</span>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6 picture-item" data-groups='["mongodb", "vue", "angular"]'>
                        <div class="card rounded shadow border-0 m-2">
                            <div class="card-body p-4 m-2">
                                <div class="media mb-3">
                                    <div class="bg-soft-alt-success d-flex justify-content-center align-items-center thumb-xl  rounded">
                                        <img src="{{asset('public/asset/images/logos/mongodb.svg')}}" alt="" class="thumb-md">
                                    </div>
                                    <div class="media-body ms-3 align-self-center">
                                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href="#"><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                                    </div><!--end media-body-->
                                </div><!--end media-->                             
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Mongodb</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Javascript</span>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col --> 
                    <div class="col-lg-4 col-md-6 picture-item" data-groups='["vue"]'>
                        <div class="card rounded shadow border-0 m-2">
                            <div class="card-body p-4 m-2">
                                <div class="media mb-3">
                                    <div class="bg-soft-alt-success d-flex justify-content-center align-items-center thumb-xl  rounded">
                                        <img src="{{asset('public/asset/images/logos/vue.svg')}}" alt="" class="thumb-md">
                                    </div>
                                    <div class="media-body ms-3 align-self-center">
                                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href="#"><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                                    </div><!--end media-body-->
                                </div><!--end media-->                             
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Vue</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Javascript</span>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-6 picture-item" data-groups='["react", "angular"]'>
                        <div class="card rounded shadow border-0 m-2">
                            <div class="card-body p-4 m-2">
                                <div class="media mb-3">
                                    <div class="bg-soft-alt-primary d-flex justify-content-center align-items-center thumb-xl  rounded">
                                        <img src="{{asset('public/asset/images/logos/react.svg')}}" alt="" class="thumb-md">
                                    </div>
                                    <div class="media-body ms-3 align-self-center">
                                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href="#"><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                                    </div><!--end media-body-->
                                </div><!--end media-->                             
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">React</span>
                                <span class="badge badge-lg rounded bg-soft-alt-info fw-normal fs-12 text-uppercase">Javascript</span>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <!-- end projects -->
        
        <!-- our blogs -->
        <section class="section " id="blogs">
            <div class="container pb-5">
                <div class="row justify-content-center mb-4">
                    <div class="col-12 col-md-10 col-lg-7 text-center">
                        <span class="badge badge-lg rounded bg-soft-alt-success fw-normal fs-13 text-uppercase">Blogs</span>
                        <h2 class="fs-2 fw-normal lh-1 text-dark my-3">Latest news & insights</h2>
                        <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 lh-lg">
                            We craft digital, graphic and dimensional thinking, to create category leading brand experiences that have meaning .
                        </p>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow">
                            <img src="{{asset('public/asset/images/personal/1.jpg')}}" alt="" class="img-fluid rounded-top">
                            <div class="card-body">
                                
                                <a href="blog-detail.html" class="fs-20 my-0 d-block fw-medium">Change the world with small things</a>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="meta-box">
                                        <div class="media">
                                            <img src="{{asset('public/asset/images/users/user-7.jpg')}}" alt="" class="thumb-sm rounded-circle me-2 align-self-center">                                       
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="m-0 fs-14">Charles Woodall</h6>
                                                <p class="mb-0 fs-12 text-muted">14 Feb 2022</p>
                                            </div><!--end media-body-->
                                        </div>                                            
                                    </div><!--end meta-box-->
                                    <div class="align-self-center">
                                        <a href="blog-detail.html" class="fs-14">Read more <i class="ti ti-arrow-right align-self-center"></i></a>
                                    </div>
                                </div>                                                                 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow">
                            <img src="{{asset('public/asset/images/personal/3.jpg')}}" alt="" class="img-fluid rounded-top">
                            <div class="card-body">                                
                                <a href="blog-detail.html" class="fs-20 my-0 d-block fw-medium">With a clean, minimal and professional look</a>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="meta-box">
                                        <div class="media">
                                            <img src="{{asset('public/asset/images/users/user-2.jpg')}}" alt="" class="thumb-sm rounded-circle me-2 align-self-center">                                       
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="m-0 fs-14">Jarvis Owen</h6>
                                                <p class="mb-0 fs-12 text-muted">12 Jan 2022</p>
                                            </div><!--end media-body-->
                                        </div>                                            
                                    </div><!--end meta-box-->
                                    <div class="align-self-center">
                                        <a href="blog-detail.html" class="fs-14">Read more <i class="ti ti-arrow-right align-self-center"></i></a>
                                    </div>
                                </div>                                                                 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->           
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="card shadow">
                            <img src="{{asset('public/asset/images/personal/2.jpg')}}" alt="" class="img-fluid rounded-top">
                            <div class="card-body">                                
                                <a href="blog-detail.html" class="fs-20 my-0 d-block fw-medium">With a clean, minimal and professional look</a>
                                <hr class="hr-dashed">
                                <div class="d-flex justify-content-between">
                                    <div class="meta-box">
                                        <div class="media">
                                            <img src="{{asset('public/asset/images/users/user-2.jpg')}}" alt="" class="thumb-sm rounded-circle me-2 align-self-center">                                       
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="m-0 fs-14">Jarvis Owen</h6>
                                                <p class="mb-0 fs-12 text-muted">12 Jan 2022</p>
                                            </div><!--end media-body-->
                                        </div>                                            
                                    </div><!--end meta-box-->
                                    <div class="align-self-center">
                                        <a href="blog-detail.html" class="fs-14">Read more <i class="ti ti-arrow-right align-self-center"></i></a>
                                    </div>
                                </div>                                                                 
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->            
                </div><!-- end row -->
            </div>
            <!-- end container -->
        </section>
        <!--end projects-->

        <!-- start contact us -->
        <section class="section bg-light" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="card bg-white"  style="background: url(images/personal/testi-pet.png); background-repeat: no-repeat; background-size: 15%; background-position: right bottom;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="fs-2 fw-normal lh-1 text-dark mb-3">Get in touch !</h2>
                                        <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 ">Always available for freelancing if the right project <br> comes along, Feel free to contact me.</p>
                                        <form method="post" name="myForm" onsubmit="return validateForm()">
                                            <span id="error-msg"></span>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label fs-16" for="name">Name</label>
                                                    <input type="text" class="form-control" placeholder="Your name" id="name" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="email">Email</label>
                                                    <input type="email" class="form-control" placeholder="Your email" id="email" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="subject">Subject</label>
                                                    <input type="text" class="form-control" placeholder="your subject" id="subject" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-md-6 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="number">Contact</label>
                                                    <input type="text" class="form-control" placeholder="+00 1234 5678 90" id="number" />
                                                </div>
                                                <!-- end col -->
                                                <div class="col-12 mb-3">
                                                    <label class="fw-medium form-label  fs-16" for="comments">Message</label>
                                                    <textarea class="form-control" id="comments" placeholder="Enter your message..." rows="5"></textarea>
                                                </div>
                                                <!-- end col -->
                                                <div class="col-12">
                                                    <input type="submit" id="submit" name="send" class="btn btn-primary mt-2" value="Send message" />
                                                </div>
                                                <!-- end col -->
                                            </div><!--end row-->
                                        </form><!-- end form -->
                                    </div><!-- end col -->
                                    <div class="col-md-4">
                                        <img src="{{asset('public/asset/images/personal/contact.svg')}}" alt="" height="200" class=" mx-auto d-block mb-5">
                                        <div class="d-flex">
                                            <div class="bg-light d-flex justify-content-center align-items-center thumb-lg  rounded">
                                                <i class="ti ti-phone fs-22"></i>
                                            </div>
                                            <div class="align-self-center ms-3">
                                                <span class="d-block lh-1">+1 234 567 89</span>
                                                <span class="text-muted fs-14 mt-n2">9:00am to 7:00pm</span>
                                            </div>
                                        </div>
                                        <hr class="hr-dashed my-3">
                                        <div class="d-flex">
                                            <div class="bg-light d-flex justify-content-center align-items-center thumb-lg  rounded">
                                                <i class="ti ti-mail fs-22"></i>
                                            </div>
                                            <div class="align-self-center ms-3">
                                                <span class="d-block lh-1">example@example.com</span>
                                                <span class="text-muted fs-14 mt-n2">Monday to Saturday</span>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!-- end row -->  
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!-- end col -->
                </div><!-- end row -->   
            </div><!-- end container -->
        </section>
        <!-- end contact us -->


        <div class="position-relative">
            <div class="shape overflow-hidden bg-footer">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>

        <!-- start footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 border-e-dashed">
                        <a href="layout-one-1.html">
                            <img src="images/logo-sm.png" alt="" height="18" />
                            <img src="images/logo-light.png" alt="" height="16" />
                        </a>
                        <p class="my-4">In an ideal world this text wouldn’t exist, 
                            a client would acknowledge the importance of having web 
                            copy before the design starts.
                        </p>
                        <ul class="list-unstyled footer-social mb-0 mt-sm-0 mt-3">
                            <li class="list-inline-item">
                                <a href="#"> <i class="icon-xs" data-feather="facebook"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"> <i class="icon-xs" data-feather="twitter"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"> <i class="icon-xs" data-feather="github"></i> </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"> <i class="icon-xs" data-feather="instagram"></i> </a>
                            </li>
                        </ul>
                    </div><!-- end col -->
                    <div class="col-lg-6 offset-lg-1">
                        <div class="row">
                            <div class="col-md-4">
                                <h6 class="text-footer mb-4 mt-sm-0 mt-5">Company</h6>
                                <ul class="list-unstyled footer-list">
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#services">services</a></li>
                                    
                                </ul>
                            </div><!-- end col -->
                            <div class="col-md-4">
                                <h6 class="text-footer mb-4 mt-sm-0 mt-4">Information</h6>
                                <ul class="list-unstyled footer-list">
                                    <li><a href="#resume">Resume</a></li>
                                    <li><a href="#review">Client Say</a></li>
                                    <li><a href="#projects">Projects</a></li>                                    
                                    
                                </ul>
                            </div><!-- end col -->
                            <div class="col-md-4">
                                <h6 class="text-footer mb-4 mt-sm-0 mt-4">More info</h6>
                                <ul class="list-unstyled footer-list">
                                    <li><a href="#blogs">Blogs</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                    <li><a href="#">Terms & condition</a></li>
                                </ul>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
            <!-- end container -->
        </footer>
        <!-- end footer -->

        <!-- start footer alter -->
        <div class="footer-alt">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p> &copy; <script>
                            document.write(new Date().getFullYear())
                        </script> Selfown. Created with <i class="las la-heart text-danger"></i> by Mannatthemes</p>
                    </div>
                    <div class="col-sm-6 text-sm-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#">- Terms & condition<sup class="text-danger">*</sup></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer alter -->

        <!-- Style switcher -->
        <div id="style-switcher" onclick="toggleSwitcher()">
            <div>
                <h3 class="fw-medium mb-0">Select Your Choice</h3>
                <hr class="hr-dashed my-3">
                <ul class="pattern">
                    <li>
                        <a class="color1" href="javascript: void(0);" onclick="setColor('default')"></a>
                    </li>
                    <li>
                        <a class="color2" href="javascript: void(0);" onclick="setColor('info')"></a>
                    </li>
                    <li>
                        <a class="color3" href="javascript: void(0);" onclick="setColor('warning')"></a>
                    </li>
                    <li>
                        <a class="color4" href="javascript: void(0);" onclick="setColor('orange')"></a>
                    </li>
                    <li>
                        <a class="color5" href="javascript: void(0);" onclick="setColor('purple')"></a>
                    </li>
                    <li>
                        <a class="color6" href="javascript: void(0);" onclick="setColor('success')"></a>
                    </li>
                </ul>
            </div>
            <div class="bottom">
                <a href="javascript: void(0);" class="settings rounded-end"><i class="las la-paint-brush fs-22"></i></a>
            </div>
        </div>
        <!-- end Style switcher -->

        <script src="{{asset('public/asset/js/bootstrap.bundle.min.js')}}"></script>

        <!-- feather icon -->
        <script src="{{asset('public/asset/js/feather.js')}}"></script>
        <script src="{{asset('public/asset/js/shuffle.min.js')}}"></script>
        <script src="{{asset('public/asset/js/projects.init.js')}}"></script>
        <script src="{{asset('public/asset/js/typed.js')}}"></script>
        <script src="{{asset('public/asset/js/app.js')}}"></script>
    </body>

<!-- Mirrored from mannatthemes.com/selfown/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 07:07:26 GMT -->
</html>
 