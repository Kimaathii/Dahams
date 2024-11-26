<header class="main-header main-header--one  clearfix">
    <div class="main-header--one__wrapper">
        <div class="auto-container">
            <div class="main-header--one__inner">

                <div class="main-header--one__left">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('assets/images/team/loader.jpg')}}" alt="" style=" width: 173px; height: auto" /></a>
                    </div>


                    <nav class="main-menu main-menu--1">
                        <div class="main-menu__inner">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <div class="stricky-one-logo">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{asset('assets/images/team/loader.jpg')}}"  alt="" style=" width: 173px; height: auto">
                                    </a>
                                </div>
                            </div>

                            <div class="main-header--one__middle">
                                <ul class="main-menu__list">
                                    <li class="dropdown current">
                                        <a href="/">Home</a>
                                    </li>
                                    <li><a href="{{ route('pages.about') }}">About</a></li>
                                    <li class="dropdown">
                                        <a href="{{ route('pages.services') }}">Services</a>
                                        {{-- <ul>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="services-details.html">Services Details</a></li>
                                        </ul> --}}
                                    </li>
                                    {{-- <li class="dropdown">
                                        <a href="#">Page</a>
                                        <ul>
                                            <li><a href="case.html">Case</a></li>
                                            <li><a href="case-v2.html">Case Two</a></li>
                                            <li><a href="case-single.html">Case Single</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="error.html">Error</a></li>
                                        </ul>
                                    </li> --}}
                                    <li class="dropdown">
                                        <a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-v2.html">Blog Two</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
                <div class="main-header--one__right clearfix">
                    <div class="search-box">
                        <a href="#" class="search search-toggler"><span class="icon-search"></span></a>
                    </div>

                    <div class="contact-box">
                        <div class="icon">
                            <span class="icon-call"></span>
                        </div>
                        <div class="text">
                            <p>More info for call us</p>
                            <a href="tel:123456789">(+234) 0803-465-9658</a>
                        </div>
                    </div>

                    <div class="main-header--one__right-btn">
                        <a href="contact.html" class="thm-btn">Get Solution</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>