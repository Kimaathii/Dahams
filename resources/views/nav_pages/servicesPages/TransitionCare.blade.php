@extends('welcome')
@section('content')

<div class="content-wrapper">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
       <div class="container">
           <div class="breadcrumb-title">
               <h2 style="margin-top: 60px">Transition Care</h2>
           </div>
       </div>
   </div>
   <!-- Breadcrumb End -->
   <section class="about-wrap style2 ptb-100">
       <div class="container">
           <div class="row">
               <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 aos-init" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                   <div class="section-title style1 text-center mb-40">
                   
                       <h2>Transition Care: Home from Hospital</h2>
                      
                   </div>
               </div>
           </div>
           <div class="row gx-5 align-items-center">
               <div class="col-lg-6 aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                   <div class="about-img-wrap">
                       <img src="{{ asset('assets/img/about/Caregiverssss.png') }}" alt="Image" class="about-img-one">
                       <img src="{{ asset('assets/img/about/SeniorCaregiver.png') }}" alt="Image" class="about-img-two">
                       <div class="about-promo-box">
                           <span class="promo-icon"><i class="flaticon-medical-operation"></i></span>
                           <h2>70+ <span> professionals</span></h2>
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
                                   <p>Ensure a smooth and seamless transition from hospital to home with our compassionate hospital-to-home care service. Our skilled caregivers provide personalised support and assistance tailored to your specific needs, facilitating your recovery and helping you regain independence. With our dedicated team by your side, you can focus on healing in the comfort and familiarity of your own home, reducing the risk of complications and enhancing your overall well-being during this critical time.</p>
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