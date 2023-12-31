

@include('layout.header')

<!-- start hero -->
<section class="hero-one position-relative bg-black" id="about"  style="background-image: url(images/personal/main-bg.png); background-size: cover; background-position: center center;">
    <div class="container">
        <div class="row align-items-center justify-content-center py-100">
            <div class="col-lg-7 text-center py-5 text-center">
                <h5 class="head-title py-4" aria-label="Contact"></h5>                        
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
<!-- start resume -->
<section class="section">
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
                                <img src="images/personal/contact.svg" alt="" height="200" class=" mx-auto d-block mb-5">
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
<!-- end resume -->

@include('layout.footer')