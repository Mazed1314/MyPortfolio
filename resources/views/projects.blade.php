

@include('layout.header')

<!-- start hero -->
<section class="hero-one position-relative bg-black" id="about"  style="background-image: url(images/personal/main-bg.png); background-size: cover; background-position: center center;">
    <div class="container">
        <div class="row align-items-center justify-content-center py-100">
            <div class="col-lg-7 text-center py-5 text-center">
                <h5 class="head-title py-4" aria-label="Projects"></h5>                        
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
                    <div class="text-center bg-soft-alt-danger py-5 rounded">
                        <img src="{{asset('public/asset/images/logos/Angular.svg')}}" alt="" class="thumb-xl rounded">
                    </div>
                    <div class="card-body p-4 m-2">
                        <h5 class="text-dark fs-18 fw-medium m-0">Farmer Project</h5>
                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href="#"><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-lg-4 col-md-6 picture-item" data-groups='["bootstrap"]'>
                <div class="card rounded shadow border-0 m-2">
                    <div class="text-center bg-soft-alt-info py-5 rounded">
                        <img src="{{asset('public/asset/images/logos/bootstrap.svg')}}" alt="" class="thumb-xl rounded">
                    </div>
                    <div class="card-body p-4 m-2">
                        <h5 class="text-dark fs-18 fw-medium m-0">ID Scan Project</h5>
                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href="#"><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                    </div><!-- end card-body -->                            
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-lg-4 col-md-6 picture-item" data-groups='["mongodb", "vue", "angular"]'>
                <div class="card rounded shadow border-0 m-2">
                    <div class="text-center bg-soft-alt-success py-5 rounded">
                        <img src="{{asset('public/asset/images/logos/mongodb.svg')}}" alt="" class="thumb-xl rounded">
                    </div>
                    <div class="card-body p-4 m-2">
                        <h5 class="text-dark fs-18 fw-medium m-0">Auto Drive Project</h5>
                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href="#"><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                    </div><!-- end card-body -->                            
                </div><!-- end card -->
            </div><!-- end col --> 
            <div class="col-lg-4 col-md-6 picture-item" data-groups='["vue"]'>
                <div class="card rounded shadow border-0 m-2">
                    <div class="text-center bg-soft-alt-success py-5 rounded">
                        <img src="{{asset('public/asset/images/logos/vue.svg')}}" alt="" class="thumb-xl rounded">
                    </div>
                    <div class="card-body p-4 m-2">
                        <h5 class="text-dark fs-18 fw-medium m-0">Health Application</h5>
                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href="#"><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                    </div><!-- end card-body --> 
                </div><!-- end card -->
            </div><!-- end col -->
            <div class="col-lg-4 col-md-6 picture-item" data-groups='["react", "angular"]'>
                <div class="card rounded shadow border-0 m-2">
                    <div class="text-center bg-soft-alt-primary py-5 rounded">
                        <img src="{{asset('public/asset/images/logos/react.svg')}}" alt="" class="thumb-xl rounded">
                    </div>
                    <div class="card-body p-4 m-2">
                        <h5 class="text-dark fs-18 fw-medium m-0">eCommerce Project</h5>
                        <p class="text-muted mb-0 fs-13">htpps://abcd-Example.com <a href="#"><i class="ti ti-external-link fs-18 text-primary"></i></a></p>
                    </div><!-- end card-body -->                             
                </div><!-- end card -->
            </div><!-- end col -->                    
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end resume -->

@include('layout.footer')