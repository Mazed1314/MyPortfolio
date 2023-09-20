<body>  
    
    <div class="position-relative"> 
        <div class="shape overflow-hidden text-light"> 
            <svg viewBox="0 0 2880 150" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M110 105L2160 0H2880V150H0V105H110Z" fill="currentColor"></path> </svg>
        </div>
    </div>
    
    <!-- start footer -->
    <section class="section bg-light cta-pettern">
        <div class="container">            
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="pattern-1 position-absolute">
                        <img src="{{asset('public/asset/images/p-1.svg')}}" alt="" class="" height="80">
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


    <div class="position-relative">
        <div class="shape overflow-hidden bg-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 border-e-dashed">
                    <a href="layout-one-1.html">
                        <img src="{{asset('public/asset/images/logo-sm.png')}}" alt="" height="18" />
                        <img src="{{asset('public/asset/images/logo-light.png')}}" alt="" height="16" />
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
    <script src="{{asset('public/asset/js/simplebar.min.html')}}"></script>

    <script src="{{asset('public/asset/js/feather.js')}}"></script>

    <script src="{{asset('public/asset/js/app.js')}}"></script>
</body>