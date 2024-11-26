
@extends('welcome')
@section('content')

<div class="content-wrapper">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-2">
       <div class="container">
           <div class="breadcrumb-title">
               <h2 style="margin-top: 60px">Respite Care</h2>
           </div>
       </div>
   </div>
   <!-- Breadcrumb End -->
   <section class="about-wrap style2 ptb-100">
       <div class="container">
           <div class="row">
               <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 aos-init" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                   <div class="section-title style1 text-center mb-40">
                   
                       <h2>Respite Care</h2>
                      
                   </div>
               </div>
           </div>
           <div class="row gx-5 align-items-center">
               <div class="col-lg-6 aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                   <div class="about-img-wrap">
                       <img src="{{ asset('assets/img/serviceimg/repiteone.jpg') }}" alt="Image" class="about-img-one">
                       <img src="{{ asset('assets/img/serviceimg/respitetwo.jpg') }}" alt="Image" class="about-img-two">
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
                                   <p>Feeling overwhelmed or in need of a break from caregiving? Our respite care services provide compassionate and capable support to your loved ones while you take some much-deserved time for yourself. Don't let feelings of guilt or worry hold you back—entrust your loved ones to our skilled and dedicated care professionals, knowing they will receive top-quality care tailored to their needs. Take comfort in our commitment to maintaining a warm, safe environment where your loved ones will thrive, giving you peace of mind during your well-deserved respite.</p>
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