

@include('layout.header')


<!-- start hero -->
<section class="hero-one position-relative bg-black" id="about"  style="background-image: url(images/personal/main-bg.png); background-size: cover; background-position: center center;">
    <div class="container">
        <div class="row align-items-center justify-content-center py-100">
            <div class="col-lg-7 text-center py-5 text-center">
                <h5 class="head-title py-4" aria-label="About Me"></h5>                        
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
<section class="section">
    <div class="container">
        <div class="row align-items-center">                
            <div class="col-lg-5 align-self-center">
                <img src="{{asset('public/asset/images/personal/2.png')}}" alt="" class="img-fluid ml-lg-5">
            </div><!--end col--> 
            <div class="col-lg-6 ms-auto align-self-center">
                <h5 class="fs-24 text-dark fw-medium mb-3"><mark>Personal Details</mark></h5>       
                <h4 class="fw-normal lh-base text-gray-700 mb-5 fs-20">It is a long established fact 
                    that a reader will be distracted by the readable content of a page when looking at its layout. 
                </h4>
                
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
                <div class="social mt-5">
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
            <div class="col-12 mt-5">
                <div class="d-flex flex-wrap justify-content-center  mt-4 mt-md-5">
                    <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                        <div class="d-flex align-items-center">
                            <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                <img src="{{asset('public/asset/images/logos/android.svg')}}" alt="" class="" height="34">
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
                                <img src="{{asset('public/asset/images/logos/Angular.svg')}}" alt="" class="" height="34">
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
                                <img src="{{asset('public/asset/images/logos/bootstrap.svg')}}" alt="" class="" height="34">
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
                                <img src="{{asset('public/asset/images/logos/vue.svg')}}" alt="" class="" height="34">
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
                                <img src="{{asset('public/asset/images/logos/react.svg')}}" alt="" class="" height="34">
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
                                <img src="{{asset('public/asset/images/logos/mongodb.svg')}}" alt="" class="" height="34">
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
                                <img src="{{asset('public/asset/images/logos/laravel.svg')}}" alt="" class="" height="34">
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
                                <img src="{{asset('public/asset/images/logos/nodejs-icon.svg')}}" alt="" class="" height="34">
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

@include('layout.footer')