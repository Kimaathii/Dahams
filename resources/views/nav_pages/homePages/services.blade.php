@extends('welcome')
@section('content')
<section class="page-header clearfix" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
    <div class="shape1"><img src="assets/images/shapes/page-header-shape1.png" alt=""></div>
    <div class="shape2"><img src="assets/images/shapes/page-header-shape2.png" alt=""></div>
    <div class="shape3 zoominout"></div>
    <div class="shape4"></div>
    <div class="container">
        <div class="page-header__wrapper text-center clearfix">
            <div class="page-header__title services">
                <h2>Services</h2>
            </div>
            <ul class="thm-breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>
</section>

{{-- start services --}}
{{-- <section class="services-one">
    <div class="shape1 zoominout"></div>
    <div class="shape2 zoominout"><img src="assets/images/shapes/services-v1-shape1.png" alt=""></div>
    <div class="shape3 float-bob-y"><img src="assets/images/shapes/services-v1-shape2.png" alt=""></div>
    <div class="shape4 rotate-me"><img src="assets/images/shapes/services-v1-shape3.png" alt=""></div>
    <div class="shape5 float-bob-y"><img src="assets/images/shapes/services-v1-shape4.png" alt=""></div>
    <div class="container">
        <div class="sec-title text-center">
            <span class="sec-title__tagline">Our Services</span>
            <h2 class="sec-title__title">We Are A Full-Stack Digital Creative <br><span>Consulting</span> Agency
            </h2>
        </div>
        <div class="row">
            <!--Start Single Services One-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <div class="services-one__single text-center">
                    <div class="icon">
                        <span class="icon-move"></span>
                    </div>
                    <h2><a href="services-details.html">Website Design</a></h2>
                    <p>Need Something Changed Or Is There Something Not Quite Working Aellentesque Porttitor
                        Lacus </p>
                    <div class="services-one__single-btn">
                        <a href="services-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->

            <!--Start Single Services One-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <div class="services-one__single style1 text-center">
                    <div class="icon">
                        <span class="icon-development"></span>
                    </div>
                    <h2><a href="services-details.html">Website Development</a></h2>
                    <p>Need Something Changed Or Is There Something Not Quite Working Aellentesque Porttitor
                        Lacus </p>
                    <div class="services-one__single-btn">
                        <a href="services-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->

            <!--Start Single Services One-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <div class="services-one__single style2 text-center">
                    <div class="icon">
                        <span class="icon-digital-marketing-1"></span>
                    </div>
                    <h2><a href="services-details.html">Digital Marketing</a></h2>
                    <p>Need Something Changed Or Is There Something Not Quite Working Aellentesque Porttitor
                        Lacus </p>
                    <div class="services-one__single-btn">
                        <a href="services-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->
        </div>
        <div class="row">
            <!--Start Single Services One-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <div class="services-one__single text-center">
                    <div class="icon">
                        <span class="icon-move"></span>
                    </div>
                    <h2><a href="services-details.html">Website Design</a></h2>
                    <p>Need Something Changed Or Is There Something Not Quite Working Aellentesque Porttitor
                        Lacus </p>
                    <div class="services-one__single-btn">
                        <a href="services-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->

            <!--Start Single Services One-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <div class="services-one__single style1 text-center">
                    <div class="icon">
                        <span class="icon-development"></span>
                    </div>
                    <h2><a href="services-details.html">Website Development</a></h2>
                    <p>Need Something Changed Or Is There Something Not Quite Working Aellentesque Porttitor
                        Lacus </p>
                    <div class="services-one__single-btn">
                        <a href="services-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->

            <!--Start Single Services One-->
            <div class="col-xl-4 col-lg-4 wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                <div class="services-one__single style2 text-center">
                    <div class="icon">
                        <span class="icon-digital-marketing-1"></span>
                    </div>
                    <h2><a href="services-details.html">Digital Marketing</a></h2>
                    <p>Need Something Changed Or Is There Something Not Quite Working Aellentesque Porttitor
                        Lacus </p>
                    <div class="services-one__single-btn">
                        <a href="services-details.html"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services One-->
        </div>

        <div class="services-one__bottom">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="services-one__bottom__wrapper">
                        <div class="services-one__bottom-text">
                            <h2>We work with forward-thinking companies to<br> craft and produce impactful
                                solutions </h2>
                        </div>
                        <div class="services-one__bottom-btn">
                            <a href="services.html" class="thm-btn">More Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section> --}}
{{-- end services --}} 
{{-- start service two --}}
<section class="services-two">
    <div class="services-two__left-bg float-bob-y"><img src="assets/images/backgrounds/services-v2-left-bg.png" alt=""></div>
    <div class="services-two__right-bg"><img src="assets/images/backgrounds/services-v2-right-bg.png" alt=""></div>
    <div class="shape1 float-bob-y"><img src="assets/images/shapes/services-v2-shape1.png" alt=""></div>
    <div class="shape2 float-bob-y"><img src="assets/images/shapes/services-v2-shape2.png" alt=""></div>
    <div class="shape3 rotate-me"><img src="assets/images/shapes/services-v2-shape3.png" alt=""></div>
    <div class="shape4 float-bob-y"><img src="assets/images/shapes/thm-shape1.png" alt=""></div>
    <div class="shape5 zoominout"></div>
    <div class="shape6 zoominout"></div>
    <div class="shape7 zoominout"></div>
    <div class="shape8 zoominout"></div>
    <div class="container">
        <div class="sec-title text-center">
            <span class="sec-title__tagline">Our Services</span>
            <h2 class="sec-title__title">We Are A Full-Stack Digital Creative <br><span>Consulting</span> Agency
            </h2>
        </div>
        {{-- <div class="sec-title">
            <span class="sec-title__tagline">Our  Services</span>
            <h2 class="sec-title__title">Our journey together starts by <br>asking what success looks and feels<br> like for you</h2>
        </div> --}}
        <div class="row">
            <!--Start Single Services Two-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="services-two__single">
                    <div class="services-two__single-icon">
                        <img src="assets/images/icon/services-v2-icon1.png" alt="">
                    </div>
                    <h2 class="services-two__single-title"><a href="services-details.html">Brand Marketing and Advertising Solutions</a></h2>
                    <p class="services-two__single-text">Offering comprehensive brand marketing and advertising solutions that effectively promote brands to a wide range of target audiences, ensuring maximum visibility and engagement</p>
                    <div class="services-two__single-btn">
                        <a href="services-details.html">See more<span class="icon-right"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services Two-->

            <!--Start Single Services Two-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="services-two__single">
                    <div class="services-two__single-icon">
                        <img src="assets/images/icon/services-v2-icon2.png" alt="">
                    </div>
                    <h2 class="services-two__single-title"><a href="services-details.html">Scripting</a></h2>
                    <p class="services-two__single-text">Crafting creative and customized scr ipt s that deeply connect with our clients' target audience, ensuring compelling narratives for diverse communication needs.</p>
                    <div class="services-two__single-btn">
                        <a href="services-details.html">See more<span class="icon-right"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services Two-->

            <!--Start Single Services Two-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="services-two__single">
                    <div class="services-two__single-icon">
                        <img src="assets/images/icon/services-v2-icon3.png" alt="">
                    </div>
                    <h2 class="services-two__single-title"><a href="services-details.html">Translation &amp; Transcription</a></h2>
                    <p class="services-two__single-text">Expertly translating and transcribing content in multiple languages, offering a versatile solution for global communication requirements.
                    </p>
                    <div class="services-two__single-btn">
                        <a href="services-details.html">See more<span class="icon-right"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services Two-->

            <!--Start Single Services Two-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="services-two__single">
                    <div class="services-two__single-icon">
                        <img src="assets/images/icon/services-v2-icon4.png" alt="">
                    </div>
                    <h2 class="services-two__single-title"><a href="services-details.html">Dubbing Service</a></h2>
                    <p class="services-two__single-text">Providing professional dubbing services for movies and TV series, seamlessly adapting content in to multiple languages to broaden its global appeal.</p>
                    <div class="services-two__single-btn">
                        <a href="services-details.html">See more<span class="icon-right"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services Two-->

            <!--Start Single Services Two-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="services-two__single">
                    <div class="services-two__single-icon">
                        <img src="assets/images/icon/services-v2-icon5.png" alt="">
                    </div>
                    <h2 class="services-two__single-title"><a href="services-details.html">Television Commercials</a></h2>
                    <p class="services-two__single-text">Strategically curating and executing Television Commercials (TVCs) that not only align with our clients' vision but also resonate powerfully with their intended audience.</p>
                    <div class="services-two__single-btn">
                        <a href="services-details.html">See more<span class="icon-right"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services Two-->
                <!--Start Single Services Two-->
                <div class="col-xl-4 col-lg-4 wow animated fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="services-two__single">
                        <div class="services-two__single-icon">
                            <img src="assets/images/icon/services-v2-icon5.png" alt="">
                        </div>
                        <h2 class="services-two__single-title"><a href="services-details.html">Voice-over Services</a></h2>
                        <p class="services-two__single-text">Producing high-quality audio content with exceptional voice-over services, creating a polished and immersive experience that captivates the audience.</p>
                        <div class="services-two__single-btn">
                            <a href="services-details.html">See more<span class="icon-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--End Single Services Two-->
                    <!--Start Single Services Two-->
            <div class="col-xl-4 col-lg-4 wow animated fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="services-two__single">
                    <div class="services-two__single-icon">
                        <img src="assets/images/icon/services-v2-icon5.png" alt="">
                    </div>
                    <h2 class="services-two__single-title"><a href="services-details.html">Primary Goal</a></h2>
                    <p class="services-two__single-text">At Daham Global Consult, our primary objective is to deliver captivating and data-driven entertainment to our clients and viewers.</p>
                    <div class="services-two__single-btn">
                        <a href="services-details.html">See more<span class="icon-right"></span></a>
                    </div>
                </div>
            </div>
            <!--End Single Services Two-->
                <!--Start Single Services Two-->
                <div class="col-xl-4 col-lg-4 wow animated fadeInUp animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="services-two__single">
                        <div class="services-two__single-icon">
                            <img src="assets/images/icon/services-v2-icon5.png" alt="">
                        </div>
                        <h2 class="services-two__single-title"><a href="services-details.html">Target Audience</a></h2>
                        <p class="services-two__single-text">Our focus is on creating exciting and factual entertainment that resonates with diverse audiences. We tailor our services to meet the unique requirements of each client.</p>
                        <div class="services-two__single-btn">
                            <a href="services-details.html">See more<span class="icon-right"></span></a>
                        </div>
                    </div>
                </div>
                <!--End Single Services Two-->

            <div class="col-xl-4">

            </div>
        </div>

        <div class="services-two__bottom">
            <div class="row">
                <div class="col-xl-8 col-lg-12">
                    <div class="services-two__bottom-content">
                        <div class="services-two__bottom-content-title">
                            <h2>Giving your business some original ideas and grow your business with our team  </h2>
                        </div>

                        <div class="services-two__bottom-btn">
                            <a href="services.html" class="thm-btn">More Services</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: hidden; animation-duration: 2500ms; animation-delay: 100ms; animation-name: none;">
                    <div class="services-two__bottom-img float-bob-y">
                        <img src="assets/images/services/services-v2-img1.png" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
{{-- end service two --}}


@endsection