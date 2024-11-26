@extends('welcome')
@section('content')


<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Contact Us</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="/">Home </a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div> 
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Us section Start -->
    <section class="contact-us-wrap ptb-100">
        <div class="container">
            <div class="row justify-content-center pb-75">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class='bx bx-current-location'></i>
                        </span>
                        <div class="contact-info">
                            <h3>Address</h3>
                            <p>11 Hollingbury Place, Brighton BN1 7GE, East Sussex
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class='bx bxs-envelope' ></i>
                        </span>
                        <div class="contact-info">
                            <h3>Send An Email</h3>
                            <a href="#"><span class="__cf_email__" >admin@cyncarehealth.co.uk</span></a>
                            <a href="#"><span class="__cf_email__" >accounts@cyncarehealth.co.uk</span></a>
                            <a href="#"><span class="__cf_email__" >recruitment@cyncarehealth.co.uk</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class='bx bxs-phone-call' ></i>
                        </span>
                        <div class="contact-info">
                            <h3>Call Center</h3>
                            <a href="tel:01273973957">01273 973 957</a>
                            <a href="tel:012723097440">012723097440</a>
                            {{-- <span>For out of hours emergency and including Safeguard matter</span> --}}
                            <a href="tel:07359397227">Emergency - 07359397227</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-5">
                <div class="col-xl-8 col-lg-7 col-12">
                    <div class="contact-form">
                        <h3>Send Us A Message</h3>
                        <form class="form-wrap" id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name*" id="name"
                                            required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required
                                            placeholder="Email*" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" name="phone" id="phone" required
                                            placeholder="Phone Number*" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" placeholder="Subject*" id="msg_subject" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group v1">
                                        <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check checkbox">
                                        <input
                                            name="gridCheck"
                                            value="I agree to the terms and privacy policy."
                                            class="form-check-input"
                                            type="checkbox"
                                            id="gridCheck"
                                            required
                                        >
                                        <label class="form-check-label" for="gridCheck">
                                            I agree to the <a class="link style1" href="terms-of-service.html">terms &amp; conditions</a> and <a class="link style1" href="privacy-policy.html">privacy policy</a>
                                        </label>
                                        <div class="help-block with-errors gridCheck-error"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn style1">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12">
                    <div class="comp-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.305043538145!2d-0.1332258234194748!3d50.84403527166995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa33c40b5203c70d9%3A0xeba755412dfd80bd!2sCyncare%20Health%20Agency%20Ltd!5e0!3m2!1sen!2sng!4v1708090511544!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us section End -->

</div>
<!-- Content wrapper end -->




@endsection