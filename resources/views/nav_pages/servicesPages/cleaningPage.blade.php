@extends('welcome')
@section('content')
<div class="content-wrapper">
<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap bg-f br-5">
    <div class="container">
        <div class="breadcrumb-title">
            <h2>Our Cleaning Services</h2>
            <ul class="breadcrumb-menu list-style">
                <li style="color: white">We will take care of your property like it was ours. we pay attention to every thing with quality assurance</li>
                {{-- <li>Cleaning Services</li> --}}
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

 <!-- Portfolio Section Start -->
 <section class="portfolio-wrap ptb-100">
    <div class="container">
        <div class="section-title style1 text-center mb-40">
            {{-- <span>Our Portfolio</span> --}}
            <h2>What We Do</h2>
        </div>
       
    </div>
    <div class="portfolio-slider-two owl-carousel">
        <div class="portfolio-card style2" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
            <img src="{{ asset('assets/img/cleaning/cleaning1.png') }}" alt="Image">
            <div class="portfolio-info">
                <a href="#" class="portfolio-cat">Office</a>
                <h3><a href="portfolio-details.html"> Cleaning</a></h3>
            </div>
        </div>
        <div class="portfolio-card style2" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">
            <img src="{{ asset('assets/img/cleaning/cleaning2.png') }}" alt="Image">
            <div class="portfolio-info">
                <a href="#" class="portfolio-cat">Domestic</a>
                <h3><a href="portfolio-details.html">Cleaning</a></h3>
            </div>
        </div>
        <div class="portfolio-card style2" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400">
            <img src="{{ asset('assets/img/cleaning/cleaning3.png') }}" alt="Image">
            <div class="portfolio-info">
                <a href="#" class="portfolio-cat">End of Tenancy </a>
                <h3><a href="portfolio-details.html">Cleaning</a></h3>
            </div>
        </div>
        <div class="portfolio-card style2" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="500">
            <img src="{{ asset('assets/img/cleaning/cleaning4.png') }}" alt="Image">
            <div class="portfolio-info">
                <a href="#" class="portfolio-cat">After Building</a>
                <h3><a href="portfolio-details.html">Cleaning</a></h3>
            </div>
        </div>
        <div class="portfolio-card style2" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="600">
            <img src="{{ asset('assets/img/cleaning/cleaning5.png') }}" alt="Image">
            <div class="portfolio-info">
                <a href="#" class="portfolio-cat">Carpet</a>
                <h3><a href="portfolio-details.html">Cleaning</a></h3>
            </div>
        </div>
        <div class="portfolio-card style2" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="700">
            <img src="{{ asset('assets/img/cleaning/cleaning6.png') }}" alt="Image">
            <div class="portfolio-info">
                <a href="" class="portfolio-cat">Oven</a>
                <h3><a href="portfolio-details.html">Cleaning</a></h3>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Section End -->



</div>


@endsection