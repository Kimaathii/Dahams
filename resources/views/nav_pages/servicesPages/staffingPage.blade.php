@extends('welcome')
@section('content')
<div class="content-wrapper">
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap bg-f br-2">
    <div class="container">
        <div class="breadcrumb-title">
            <h2 style="margin-top: 60px">Temporary Staffing</h2>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<section class="about-wrap style2 ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 aos-init" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="section-title style1 text-center mb-40">
                
                    <h2>Temporary Staffing</h2>
                   
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
                                <h2>We provide</h2>
                                <h3>Nurses</h3>
                                <p>fulfill a crucial role in providing direct patient care, conducting assessments, educating patients and families, advocating for patient needs, collaborating with healthcare teams, continuing education, and responding to emergencies. </p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Healthcare Assistant</h3>
                                <p>Our Healthcare assistants (HCAs) support patient with daily tasks, monitoring vital signs, aiding in procedures, providing emotional support, assisting with rehabilitation, maintaining cleanliness, transporting patients, facilitating communication, observing and reporting changes in patient condition, and undergoing training for professional development.
                                </p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Supportworker</h3>
                                <p>Support workers that provide essential assistance and care to individuals with diverse needs, including daily living activities, emotional support, medication administration, rehabilitation assistance, monitoring health and safety, household support. Their role is pivotal in ensuring the well-being, independence, and quality of life of the individuals they support.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="about-content">
                        <div class="content-title style1">
                            <p>they cover shifts be it in the hospital, Nursing Home etc. we have all grade / band of staff that can cover any emergency, short term, long term or even on a rolling contract.      
                                Open a corporate account with us today and  you are sure when you need staffs to cover your shift we will provide well trained staffs for you. You can be rest assured that our office will be there for you from 7am to 11pm daily to pick your calls and match you with the right staff.</p>
                        </div>
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