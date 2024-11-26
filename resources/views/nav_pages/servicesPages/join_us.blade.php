@extends('welcome')
@section('content')
<div class="content-wrapper">
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap bg-f br-2">
    <div class="container">
        <div class="breadcrumb-title">
            <h2>Join Us</h2>
            <ul class="breadcrumb-menu list-style">
                <li><a href="/">Home</a></li>
                <li style="color: white">Join Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<section class="wh-wrap style3 ptb-100 bg-chathamas">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 order-lg-1 order-md-2 order-2 aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-content">
                    <div class="content-title style2">
                        
                        <h2>Current Vacancies</h2>
                        <ul class="content-feature-list style2 list-style" id="vancyId">
                            <li><i class="ri-checkbox-circle-line"></i>Support Workers.</li>
                            <li><i class="ri-checkbox-circle-line"></i>Home-care Assistants.</li>
                            <li><i class="ri-checkbox-circle-line"></i>Healthcare Assistant</li>
                            <li><i class="ri-checkbox-circle-line"></i>RMNs</li>
                            <li><i class="ri-checkbox-circle-line"></i> RGNs</li>
                        </ul>
                        <p>Are you an experienced RMN, RGN, healthcare assistant or support worker,  that is compassionate, kind, want to work when you are free, contact us for a pre-assessment. or download the application form below, fill it and send to us. At cyncare health you are not just a staff but part of our family and you will get all the support you  need.</p>
                    </div>
                    {{-- <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Mental Health Solution</h3>
                                <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque .</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Rapid Improvement Patient</h3>
                                <p>Vestibulum ac diam sit amet quam vehicula elemen tum sed sit amet dui praesent sapien pellen tesque.</p>
                            </div>
                        </div>
                    </div> --}}
                    <h6 style="color: white">Benefit of working with Cyncare Health</h6>
                    <ul class="content-feature-list style2 list-style" id="vancyId">
                    <li><i class="ri-checkbox-circle-line"></i>Flexible working hours</li>
                    <li><i class="ri-checkbox-circle-line"></i>you can work as much or just for few hours</li>
                    <li><i class="ri-checkbox-circle-line"></i>24 hours support from Manager</li>
                    <li><i class="ri-checkbox-circle-line"></i>and so much more.....</li>
                    </ul>

                    <a href="{{ route('pages.viewPdf') }}" class="btn style1">Apply now</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-2 order-md-1 order-1 aos-init" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-img-wrap">
                    <div class="wh-bg-3 bg-f"></div>
                    {{-- <div class="about-doctor-box">
                        <div class="doctor-img">
                            <img src="{{ asset('assets/img/about/Friendship.png') }}" alt="Image">
                        </div>
                        <div class="doctor-info">
                            <h5>Dr. Kate Winslet</h5>
                            <span>Radiology</span>
                        </div>
                        <button type="button" class="btn">Select</button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
</div>



@endsection