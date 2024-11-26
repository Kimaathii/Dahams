@extends('welcome')
@section('content')

<div class="content-wrapper">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
       <div class="container">
           <div class="breadcrumb-title">
               <h2 style="margin-top: 60px">Night Care Service</h2>
           </div>
       </div>
   </div>
   <!-- Breadcrumb End -->
   <section class="about-wrap style2 ptb-100">
       <div class="container">
           <div class="row">
               <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 aos-init" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                   <div class="section-title style1 text-center mb-40">
                   
                       <h2>Night Care Service</h2>
                      
                   </div>
               </div>
           </div>
           <div class="row gx-5 align-items-center">
               <div class="col-lg-6 aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                   <div class="about-img-wrap">
                       <img src="{{ asset('assets/img/serviceimg/nightone.jpg') }}" alt="Image" class="about-img-one">
                       <img src="{{ asset('assets/img/serviceimg/nighttwo.jpg') }}" alt="Image" class="about-img-two">
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
                                   <p>Rest easy with our specialised night care service, designed to provide peace of mind and support throughout the night. Our dedicated caregivers offer personalised assistance tailored to your unique needs, ensuring your comfort, safety, and well-being during the overnight hours. Experience the tranquillity of knowing that help is always at hand when you need it most, allowing you to relax and enjoy a restful night's sleep in the familiar surroundings of your own home.</p>
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