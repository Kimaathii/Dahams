@extends('welcome')
@section('content')

<div class="content-wrapper">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
       <div class="container">
           <div class="breadcrumb-title">
               <h2 style="margin-top: 60px">One-to-One Support Care</h2>
           </div>
       </div>
     </div>
   <!-- Breadcrumb End -->
   <section class="about-wrap style2 ptb-100">
       <div class="container">
           <div class="row">
               <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 aos-init" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                   <div class="section-title style1 text-center mb-40">
                   
                       <h2>One-to-One Support Care</h2>
                      
                   </div>
               </div>
           </div>
           <div class="row gx-5 align-items-center">
               <div class="col-lg-6 aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                   <div class="about-img-wrap">
                       <img src="{{ asset('assets/img/serviceimg/repiteone.jpg') }}" alt="Image" class="about-img-one">
                       <img src="{{ asset('assets/img/serviceimg/supportone.jpg') }}" alt="Image" class="about-img-two">
                       <div class="about-promo-box">
                           <span class="promo-icon"><i class="flaticon-medical-operation"></i></span>
                           <h2>70+ <span>Professionals</span></h2>
                       </div>
                   </div>
               </div>
               <div class="col-lg-6 aos-init" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                   
                       <div class="feature-item-wrap">
                           <div class="feature-item">
                               <div class="feature-icon">
                                   <i class="ri-check-line"></i>
                               </div>
                               <div class="feature-text">
                                   <h2></h2>
                                   <p>Enjoy personalised attention and tailored assistance with our one-to-one support care service. Our devoted caregivers work closely with you to understand your unique needs, preferences, and goals, creating a custom care plan that promotes your independence, well-being, and overall satisfaction. With a dedicated professional by your side, you'll experience the comfort and reassurance that comes from knowing you have a reliable, compassionate ally in achieving your personal care objectives.</p>
                               </div>
                           </div>
                           
                        
                       </div>
                       <div class="about-content">
                     
                           <div class="option-item">
                               <a href="{{ route('pages.contact') }}" class="btn style1">Book Appointment</a>
                           </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   
</div>
   
@endsection