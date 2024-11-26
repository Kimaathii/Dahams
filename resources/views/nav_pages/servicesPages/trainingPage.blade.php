@extends('welcome')
@section('content')
<div class="content-wrapper">
<section class="service-details-wrap pt-100 pb-75">
    <div class="container">
        <div class="row gx-5">
            <div class="col-xl-8">
                <div class="service-desc">
                    <a class="single-service-img" data-fancybox="gallery" href="assets/img/portfolio/single-portfolio-1.jpg">
                        <img src="{{ asset('assets/img/about/missionimg.png') }}" alt="Image" style="max-width: 80%">
                    </a>
                    <h2>Training</h2>
                    <p>
                        We thrive to attain a high standard of care to our clients/ service users to achieve this, we invest in training of our staff. 
                        
                       </p>
                    
                    <p> We are currently working towards accrediting our centre as a training provider. This will enable our development team to train staffs from other companies / organisation.</p>
                    {{-- <ul class="content-feature-list style2 list-style">
                        <li><i class="ri-checkbox-circle-line"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed diam nonumy eirmod tempor.</li>
                        <li><i class="ri-checkbox-circle-line"></i> Advisory membership elitr, sed diam nonumy eirmod tempor invidunt ut labor et dolore magna.</li>
                        <li><i class="ri-checkbox-circle-line"></i> If you do not have enough time, you will always be able to work and do what you want.</li>
                        <li><i class="ri-checkbox-circle-line"></i>Irmad temporarily involved labor and doll magna alicum erat, sed diam voluptua. Vero Eos and accused and fair.</li>
                        <li><i class="ri-checkbox-circle-line"></i>Labor and Love Magna Aliquam Irat, Sed Diam Valupatua. Vero eos et accusam et justo dolores et ea ribam.</li>
                    </ul> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <a class="single-service-img" data-fancybox="gallery" href="assets/img/portfolio/portfolio-1.jpg">
                                <img src="assets/img/portfolio/portfolio-1.jpg" alt="Image" style="max-width: 80%">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="single-service-img" data-fancybox="gallery" href="assets/img/portfolio/portfolio-6.jpg">
                                <img src="assets/img/portfolio/portfolio-6.jpg" alt="Image" style="max-width: 80%">
                            </a>
                        </div>
                    </div>
                    <p>Unlock your potential in caregiving with our comprehensive training services. From personalized instruction to hands-on experience, we empower you with the skills and knowledge needed to excel in providing compassionate care to those in need. Join us today and embark on a rewarding journey of making a meaningful difference in people's lives.</p>
                    <div class="row align-items-center gx-5">
                    
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <div class="search-box">
                            <div class="form-group">
                                <input type="search" placeholder="Search">
                                <button type="submit"> 
                                    <i class="ri-search-2-line"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="sidebar-widget portfolio-info-widget">
                        <h4>Project Brief</h4>
                        <div class="portfolio-info-item-wrap">
                            <div class="portfolio-info-item">
                                <p><i class="ri-calendar-line"></i>Date:</p>
                               <span>25 Jun, 2022</span>
                            </div>
                            <div class="portfolio-info-item">
                                <p><i class="ri-user-unfollow-line"></i>Client:</p>
                               <span>Willum Smith</span>
                            </div>
                            <div class="portfolio-info-item">
                                <p><i class="ri-map-pin-line"></i>Location:</p>
                               <span>Florida, USA</span>
                            </div>
                            <div class="portfolio-info-item">
                                <p><i class="ri-bookmark-line"></i>Category:</p>
                               <span>Open Heart Surgery</span>
                            </div>
                            <div class="portfolio-info-item">
                                <p><i class="ri-hospital-line"></i>Skills:</p>
                               <span>Surgery</span>
                            </div>
                        </div>
                    </div> --}}
                    <div class="sidebar-widget categories">
                        <h4>Training Courses</h4>
                        <div class="category-box">
                            <ul class="list-style">
                                <li>
                                    <a href="{{ route('pages.await') }}">
                                        Introduction to Caregiving
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.await') }}">
                                        Health and Safety
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.await') }}">
                                        Medication Administration
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.await') }}">
                                        Personal Care Skills
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.await') }}">
                                        Specialized Care Training
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.await') }}">
                                        Communication and Interpersonal Skills
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.await') }}">
                                        And lots More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget tags">
                        <h4>Tags </h4>
                        <div class="tag-list">
                            <ul class="list-style">
                                <li><a href="#">Health</a></li>
                                <li><a href="#">Medicine</a></li>
                                <li><a href="#">training </a></li>
                                <li><a href="#">Domiciliary</a></li>
                                <li><a href="#">staffing</a></li>
                                <li><a href="#">cleaning</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</div>



@endsection