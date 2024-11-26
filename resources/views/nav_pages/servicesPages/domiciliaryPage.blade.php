@extends('welcome')
@section('content')

<div class="content-wrapper">
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap" style="background-color: rgba(1, 50, 31, 0.5);">
    <div class="container">
        <div class="breadcrumb-title">
            <h2>Domicilary Care</h2>
            <ul class="breadcrumb-menu list-style">
                <li><a href="/">Home</a></li>
                <li style="color: white">Domicilary Care</li>
            </ul>
        </div>
    </div>
</div>

<video  autoplay muted loop id="myVideo">
    <source src="https://video.wixstatic.com/video/7346bf_81b359195a1f43bc87e4e1a117f986e8/1080p/mp4/file.mp4" type="video/mp4">

        
</video>



<!-- Breadcrumb End -->
<section>


</section>
<section class="service-wrap style2 ptb-100">

    <div class="container">
        <div class="row">
            <div class="">
                <div class="section-title style2 text-center mb-40">
                  
                    <h2>What is Domiciliary Care</h2>
                    <p>This is define as the different care services offered to support an individual to help individuals maintain their independence and quality of life in the comfort of their home rather than in a care facility such as care home or residential home. 
                        Domiciliary care can be referred to as homecare. This type of care services may vary from personal care to food shopping.
                    </p>
                </div>
            </div>
        </div>
        <div class="service-slider-one style2 owl-carousel owl-loaded owl-drag">
            
            
            
            
        <div class="owl-stage-outer owl-height" style="height: 442.5px;"><div class="owl-stage" style="transform: translate3d(-1140px, 0px, 0px); transition: all 1.3s ease 0s; width: 3804px;"><div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;"><div class="service-card style2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                <div class="service-img">
                    <img src="{{ asset('assets\img\domic\domic1.png') }}" alt="Image" style="max-height: 50%">
                    <span class="service-icon"><i class='bx bx-plus-medical'></i></span>
                </div>
                <div class="service-info">
                    <h3><a href="#">Visiting Care</a></h3>
                    <p>Receive extra support  bespoke to your needs while maintaining your independence and dignity</p>
                    <a href="#" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
        <div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;"><div class="service-card style2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                <div class="service-img">
                    <img src="{{ asset('assets\img\domic\domic2.png') }}" alt="Image">
                    <span class="service-icon"><i class='bx bx-plus-medical'></i></span>
                </div>
                <div class="service-info">
                    <h3><a href="#">Live  in Care</a></h3>
                    <p>A care professional moves into the client's home and provide practical support throughout the day</p>
                    <a href="#" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
        </div>
        <div class="owl-item cloned" style="width: 355.333px; margin-right: 25px;"><div class="service-card style2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="500">
                <div class="service-img">
                    <img src="{{ asset('assets\img\domic\domic3.png') }}" alt="Image">
                    <span class="service-icon"><i class='bx bx-plus-medical'></i></span>
                </div>
                <div class="service-info">
                    <h3><a href="#">Night Care</a></h3>
                    <p>We will match you with the right staff, well trained and experiences. </p>
                    <a href="#" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
            </div>
        <div class="owl-item active" style="width: 355.333px; margin-right: 25px;"><div class="service-card style2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="service-img">
                    <img src="{{ asset('assets\img\domic\domic4.png') }}" alt="Image">
                    <span class="service-icon"><i class='bx bx-plus-medical'></i></span>
                </div>
                <div class="service-info">
                    <h3><a href="#">
                        Hospital to Home care</a></h3>
                    <p>It is a long established fact that reader will content of page when looks layout.</p>
                    <a href="#" class="link style2" style="margin-top: 26px">Read More<i class="fa fa-hospital-o" aria-hidden="true"></i></a>
                </div>
            </div></div>

        </div></div>
        <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev"><i class="ri-arrow-left-s-line"></i>
            </button>
            <button type="button" role="presentation" class="owl-next"><i class="ri-arrow-right-s-line"></i>
            </button>
        </div>
            <div class="owl-dots disabled"></div></div>
    </div>
</section>

<section class="wh-wrap style3 ptb-100 bg-chathamas">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class=" aos-init" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class=""></div>
                <div class="wh-content">
                    <div class="content-title style2">
                        {{-- <span>Why Choose us</span> --}}
                        <h2>Benefit of Home Care</h2>
                        {{-- <section class="wh-wrap style3 pb-100 bg-chathamas"> --}}
                            <div class="container">
                                <div class="row gx-5 align-items-center">
                                    <div class="col-lg-6 order-lg-1 order-md-2 order-2 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                                        <ul class="content-feature-list style2 list-style" id="vancyId">
                                            <li><i class="ri-checkbox-circle-line"></i>Homecare allows you to continue to stay in your own home in the surroundings you are familiar with., which means there is minimal  distribution to your normal routine and you receive extra care and support</li>
                                            <li><i class="ri-checkbox-circle-line"></i>Staying in familiar surroundings is vital for Dementia.</li>
                                            <li><i class="ri-checkbox-circle-line"></i>Homecare  provides one to one  undivided attention care and support that is bespoke to your needs and wishes.</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 order-lg-2 order-md-1 order-1 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                                        <ul class="content-feature-list style2 list-style" id="vancyId">
                                            <li><i class="ri-checkbox-circle-line"></i>Homecare promotes your independence and dignity and because it is a on e to one care it provides significant benefit to one's well being</li>
                                            <li><i class="ri-checkbox-circle-line"></i>Family and friends can participate and there is no visiting restriction for them and also not separated from pets.</li>
                                            <li><i class="ri-checkbox-circle-line"></i>In homecare you pay for what you use.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        {{-- </section> --}}
                        {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste cupiditate sit debitis, aut, perferendis praesentium alias, asperiores similique veniam vitae veritatis.</p> --}}
                       
                    </div>
                    <div >
                        <h2 style="color: white">Homecare can be funded through</h2>
                    </div>
                    <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                               
                                <h3>NHS Funded</h3>
                                <p>This is sometimes part of an ongoing health treatment.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Local Authority </h3>
                                <p>You will need to contact them and an assessment will be done to found out <br> if you are  eligible and what   kind of care package you need.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Self Funded </h3>
                                <p>You will be responsible for the payment of your care</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn style1">Get More info</a>
                </div>
            </div>
            
        </div>
    </div>
</section>
 <!-- Breadcrumb Start -->
 <div class="breadcrumb-wrap bg-f br-3">
    <div class="container">
        <div class="breadcrumb-title">
            <h2 style="text-align: start">Our Domiciliary care</h2>
            <p style="color: white; text-align:start">As we are different so are our needs, here at Cyncare Health, our staffs pride themselves in providing high quality care <br> in your own home as well as attending to your wishes, You are always in control. Our home care team provides the following services:</p>

            <ul class=" list-style">
                <li><i class='bx bx-checkbox-minus'></i>Personal care</li>
                <li><i class='bx bx-checkbox-minus'></i>Companionship care which is a vital service for services users mental and physical wellbeing and it also prevents loneliness and  <a style=" margin-left:20px" href="https://www.nhs.uk/mental-health/advice-for-life-situations-and-events/loneliness-in-the-elderly/" >isolation in elderly </a></li>
                <li><i class='bx bx-checkbox-minus'></i> Dementia care </li>
                <li><i class='bx bx-checkbox-minus'></i> 24 hours care</li>
                <li><i class='bx bx-checkbox-minus'></i> Hospital to Home care </li>
                <li><i class='bx bx-checkbox-minus'></i> Specialist care  (Respite care, palliative care etc)</li>
                <li><i class='bx bx-checkbox-minus'></i> Caring for Adults over 65 years</li>
                <li><i class='bx bx-checkbox-minus'></i> Caring for Adults under 65 years</li>
                <li><i class='bx bx-checkbox-minus'></i> Eating disorders</li>
                <li><i class='bx bx-checkbox-minus'></i> Mental health conditions</li>
                <li><i class='bx bx-checkbox-minus'></i> Sensory impairments</li>
                <p style="color: white; text-align:start">Our Family member app, will provide you and your family the peace of mind that your loved ones are being given the best they deserve on a daily basis.</p>
                <p style="color: white; text-align:start">
                    Our home care staffs have gone through rigorous checking processes before starting work at Cyncare Health.  You will be given the name of the home care assistant and he or she will be wearing a uniform with a photo identification card. </p>
                <p style="color: white; text-align:start">Give us a call to arrange an assessment or alternatively click on book an assessment and fill out the short form and a staff will give you a call. </p>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<section class="wh-wrap style3 ptb-100 bg-chathamas">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class=""></div>
                <div class="wh-content">
                    <div>
                        <h2 style="color: white">How it works</h2>
                    </div>
                    <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                               
                                <h3 style="margin-bottom: 20px"></h3>
                                <p>During the visit a risk assessment will be done with you making all of the decisions.</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                <h3 style="margin-bottom: 20px"></h3>
                                <p>Our home care staff will book an assessment appointment with you</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                <h3 style="margin-bottom: 20px"></h3>
                                <p>After that a clear care plan and package will be offered to you.</p>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
            
        </div>
    </div>
</section>

</div>


@endsection