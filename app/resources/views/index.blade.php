@extends('app')

@section('content')
    <div class="container-page">

        <!-- Preloader -->
        <div class="preloader">
            <div class="centrize full-width">
                <div class="vertical-center">
                    <div class="spinner-logo">
                        <img src="assets/images/logo2.png" alt="">
                        <div class="spinner-dot"></div>
                        <div class="spinner spinner-line"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header class="header">
            <div class="header__builder">
                <div class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                        <!-- logo -->
                        <div class="logo">
                            {{-- <a href="index.html">
                            <img width="228" height="38" src="assets/images/logo2.png" alt="">
                        </a> --}}
                        </div>

                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 align-right">

                        <!-- switcher btn -->
                        <a href="#" class="switcher-btn">
                            <span class="sw-before">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                    <path id="Dark_Theme" data-name="Dark Theme" fill="#000"
                                        d="M1759.46,111.076a0.819,0.819,0,0,0-.68.147,8.553,8.553,0,0,1-2.62,1.537,8.167,8.167,0,0,1-2.96.531,8.655,8.655,0,0,1-8.65-8.682,9.247,9.247,0,0,1,.47-2.864,8.038,8.038,0,0,1,1.42-2.54,0.764,0.764,0,0,0-.12-1.063,0.813,0.813,0,0,0-.68-0.148,11.856,11.856,0,0,0-6.23,4.193,11.724,11.724,0,0,0,1,15.387,11.63,11.63,0,0,0,19.55-5.553A0.707,0.707,0,0,0,1759.46,111.076Zm-4.5,6.172a10.137,10.137,0,0,1-14.29-14.145,10.245,10.245,0,0,1,3.38-2.836c-0.14.327-.29,0.651-0.41,1.006a9.908,9.908,0,0,0-.56,3.365,10.162,10.162,0,0,0,10.15,10.189,9.776,9.776,0,0,0,3.49-.62,11.659,11.659,0,0,0,1.12-.473A10.858,10.858,0,0,1,1754.96,117.248Z"
                                        transform="translate(-1737 -98)" />
                                </svg>
                            </span>
                            <span class="sw-after">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22.22" height="22.313"
                                    viewBox="0 0 22.22 22.313">
                                    <path id="Light_Theme" data-name="Light Theme" fill="#fff"
                                        d="M1752.49,105.511a5.589,5.589,0,0,0-3.94-1.655,5.466,5.466,0,0,0-3.94,1.655,5.61,5.61,0,0,0,3.94,9.566,5.473,5.473,0,0,0,3.94-1.653,5.643,5.643,0,0,0,1.65-3.957A5.516,5.516,0,0,0,1752.49,105.511Zm-1.06,6.85a4.1,4.1,0,0,1-5.76,0,4.164,4.164,0,0,1,0-5.788A4.083,4.083,0,0,1,1751.43,112.361Zm7.47-3.662h-2.27a0.768,0.768,0,0,0,0,1.536h2.27A0.768,0.768,0,0,0,1758.9,108.7Zm-10.35,8.12a0.777,0.777,0,0,0-.76.769v2.274a0.777,0.777,0,0,0,.76.767,0.786,0.786,0,0,0,.77-0.767v-2.274A0.786,0.786,0,0,0,1748.55,116.819Zm7.85-.531-1.62-1.624a0.745,0.745,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.625a0.747,0.747,0,0,0,1.06,0A0.759,0.759,0,0,0,1756.4,116.288ZM1748.55,98.3a0.777,0.777,0,0,0-.76.768v2.273a0.778,0.778,0,0,0,.76.768,0.787,0.787,0,0,0,.77-0.768V99.073A0.786,0.786,0,0,0,1748.55,98.3Zm7.88,3.278a0.744,0.744,0,0,0-1.06,0l-1.62,1.624a0.758,0.758,0,0,0,0,1.063,0.745,0.745,0,0,0,1.06,0l1.62-1.624A0.758,0.758,0,0,0,1756.43,101.583Zm-15.96,7.116h-2.26a0.78,0.78,0,0,0-.77.768,0.76,0.76,0,0,0,.77.768h2.26A0.768,0.768,0,0,0,1740.47,108.7Zm2.88,5.965a0.745,0.745,0,0,0-1.06,0l-1.62,1.624a0.759,0.759,0,0,0,0,1.064,0.747,0.747,0,0,0,1.06,0l1.62-1.625A0.758,0.758,0,0,0,1743.35,114.664Zm0-11.457-1.62-1.624a0.744,0.744,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.624a0.745,0.745,0,0,0,1.06,0A0.758,0.758,0,0,0,1743.35,103.207Z"
                                        transform="translate(-1737.44 -98.313)" />
                                </svg>
                            </span>
                        </a>

                        <!-- menu btn -->
                        {{-- <a href="#" class="menu-btn">
                            <span></span>
                            <span></span>
                        </a> --}}

                        <!-- Menu Full Overlay -->
                        <div class="menu-full-overlay">
                            <div class="menu-full-container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                                            <!-- menu full -->
                                            <div class="menu-full">
                                                <ul class="menu-full">
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                                            href="/">Home</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                                            href="#services-section">Services</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                                            href="#skills-section">Skills</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                                            href="#works-section">Works</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                                            href="#resume-section">Resume</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                                            href="#testimonials-section">Testimonials</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                                            href="#pricing-section">Pricing</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                                            href="#blog-section">Blog</a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="splitting-text-anim-2" data-splitting="chars"
                                                            href="#contact-section">Contact</a>
                                                    </li>
                                                    <li class="menu-item menu-item-has-children has-children">
                                                        <a class="splitting-text-anim-2" data-splitting="chars">Pages</a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item">
                                                                <a class="splitting-text-anim-1" data-splitting="chars"
                                                                    href="works-list.html">Works (List)</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="splitting-text-anim-1" data-splitting="chars"
                                                                    href="works.html">Works (Grid)</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="splitting-text-anim-1" data-splitting="chars"
                                                                    href="work-single.html">Work Single Page</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class=" splitting-text-anim-1" data-splitting="chars"
                                                                    href="blog.html">Blog</a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="splitting-text-anim-1" data-splitting="chars"
                                                                    href="blog-single.html">Single Post</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- social -->
                                            <div class="social-links"><a target="_blank" rel="nofollow"
                                                    href="https://www.linkedin.com/in/chandan-lohar-67739857/"
                                                    title="LinkedIn"><i aria-hidden="true"
                                                        class="fab fa-linkedin"></i></a><a target="_blank" rel="nofollow"
                                                    href="https://github.com/dearchandan" title="Github"><i
                                                        aria-hidden="true" class="fab fa-github"></i></a><a
                                                    target="_blank" rel="nofollow"
                                                    href="https://api.whatsapp.com/send/?phone=919898363557&amp;text&amp;type=phone_number&amp;app_absent=0"
                                                    title="Whats App"><i aria-hidden="true"
                                                        class="fab fa-whatsapp"></i></a></div>

                                            <div class="v-line-block"><span></span></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-overlay"></div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Section - Hero Started -->
            <section class="lui-section lui-section-hero lui-gradient-top" id="started-section">
                <div class="container">

                    <!-- Hero Started -->
                    <div class="lui-started v-line v-line-left">
                        <div class="section hero-started">
                            <div class="content scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <div class="titles">
                                    <div class="lui-subtitle">
                                        <span> Hello, <b>my name is</b>
                                        </span>
                                    </div>
                                    <h1 class="title splitting-text-anim-1 scroll-animate" data-splitting="chars"
                                        data-animate="active">
                                        <span>
                                            <b>Chandan</b> Lohar </span>
                                    </h1>
                                    <div class="label lui-subtitle"> I am <strong>PHP/Laravel & VueJS Developer</strong>
                                    </div>
                                </div>
                                <div class="description">
                                    <div>
                                        <p>Having 9 years of expertise in Laravel, Vue.js, and REST
                                            API development. Led teams of 10+ developers to deliver 15+ scalable web
                                            applications,
                                            including POS systems and healthcare platforms, serving 500K+ users. </p>
                                    </div>
                                    <div class="social-links"><a target="_blank" rel="nofollow"
                                        href="https://www.linkedin.com/in/chandan-lohar-67739857/"
                                        title="LinkedIn"><i aria-hidden="true"
                                            class="fab fa-linkedin"></i></a><a target="_blank" rel="nofollow"
                                        href="https://github.com/dearchandan" title="Github"><i
                                            aria-hidden="true" class="fab fa-github"></i></a><a
                                        target="_blank" rel="nofollow"
                                        href="https://api.whatsapp.com/send/?phone=919898363557&amp;text&amp;type=phone_number&amp;app_absent=0"
                                        title="Whats App"><i aria-hidden="true"
                                            class="fab fa-whatsapp"></i></a></div>
                                </div>
                                <div class="bts">
                                    <a target="_blank" download href="Chandan-PHP-LARAVEL-8YEARS.pdf" class="btn">
                                        <span>Download CV</span>
                                    </a>
                                    <a href="#skills-section" class="btn-lnk"> My Skills </a>
                                </div>
                            </div>
                            <div class="slide scrolla-element-anim-1 scroll-animate" data-animate="active">
                                <img decoding="async" src="{{ asset('images/chandan.jpg') }}"
                                    alt="&lt;b&gt;Zoé&lt;/b&gt; Miller">
                                <span class="circle circle-1"></span>
                                <span class="circle img-1" style="background-image: url(assets/images/pat-1.png);"></span>
                                <span class="circle img-2" style="background-image: url(assets/images/pat-2.png);"></span>
                                <span class="circle img-3" style="background-image: url(assets/images/pat-2.png);"></span>
                                <div class="info-list">
                                    <ul>
                                        <li>
                                            <span class="num">9 <strong>+</strong>
                                            </span>
                                            <span class="value">Years of <strong>Experience</strong>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="num">25+</span>
                                            <span class="value">Completed <strong>Projects</strong>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="lui-bgtitle">
                            <span> Web Developer </span>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Section - Services -->
            <section class="lui-section lui-gradient-bottom" id="services-section">
                <div class="lui-heading">
                    <div class="container">
                        <div class="m-titles align-center">
                            <h2 class="m-title splitting-text-anim-1 scroll-animate words splitting animate__active animate__animated"
                                data-splitting="words" data-animate="active"
                                style="--word-total: 3; visibility: visible;"><span> <span class="word"
                                        data-word="What" style="--word-index: 0;">What</span><span class="whitespace">
                                    </span><span class="word" data-word="I" style="--word-index: 1;">I</span><span
                                        class="whitespace"> </span><span class="word" data-word="Do"
                                        style="--word-index: 2;">Do</span> </span></h2>
                            <div class="m-subtitle splitting-text-anim-1 scroll-animate words splitting animate__active animate__animated"
                                data-splitting="words" data-animate="active"
                                style="--word-total: 2; visibility: visible;"><span> <span class="word" data-word="my"
                                        style="--word-index: 0;">my</span> <b><span class="word" data-word="Services"
                                            style="--word-index: 1;">Services</span></b></span></div>
                        </div>
                    </div>
                </div>
                <div class="v-line v-line-right">
                    <div class="container">
                        <div class="swiper-container js-services scrolla-element-anim-1 scroll-animate swiper-container-initialized swiper-container-horizontal animate__active animate__animated"
                            data-animate="active" style="visibility: visible;">
                            <div class="swiper-wrapper"
                                style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active"
                                    style="width: 390.667px; margin-right: 40px;">
                                    <div class="services-item">
                                        <div class="lui-subtitle"><span> Web Development </span></div>
                                        <div class="icon"></div>
                                        <h5 class="lui-title"><span> Web Design &amp; Development </span></h5>
                                        <div class="lui-text">
                                            <div> I create modern, responsive, and user-friendly web applications tailored
                                                to your business needs. From frontend UI/UX to backend functionality, I
                                                ensure seamless performance.</div>
                                        </div><a href="#contact-section" class="lnk"> Contact Me </a>
                                        <div class="image" style="background-image:url(/images/pat-2.png);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-visible swiper-slide-next"
                                    style="width: 390.667px; margin-right: 40px;">
                                    <div class="services-item">
                                        <div class="lui-subtitle"><span> APIs </span></div>
                                        <div class="icon"></div>
                                        <h5 class="lui-title"><span> API Development &amp; Integration </span></h5>
                                        <div class="lui-text">
                                            <div>
                                                <p>Need a secure and scalable API? I develop RESTful and WebSocket APIs,
                                                    integrating third-party services to enhance your application's
                                                    capabilities.</p>
                                            </div>
                                        </div><a href="#contact-section" class="lnk"> Contact Me </a>
                                        <div class="image" style="background-image:url(/images/pat-2.png);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-visible"
                                    style="width: 390.667px; margin-right: 40px;">
                                    <div class="services-item">
                                        <div class="lui-subtitle"><span> Database </span></div>
                                        <div class="icon"></div>
                                        <h5 class="lui-title"><span> Database Design &amp; Optimization </span></h5>
                                        <div class="lui-text">
                                            <div> I design efficient, scalable databases that ensure fast performance and
                                                data integrity. Query optimization and indexing strategies are implemented
                                                for seamless operations. </div>
                                        </div><a href="#contact-section" class="lnk"> Contact Me </a>
                                        <div class="image" style="background-image:url(/images/pat-2.png);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 390.667px; margin-right: 40px;">
                                    <div class="services-item">
                                        <div class="lui-subtitle"><span> Integrations </span></div>
                                        <div class="icon"></div>
                                        <h5 class="lui-title"><span> Third-Party Integrations </span></h5>
                                        <div class="lui-text">
                                            <div> I seamlessly integrate third-party services like CRMs, analytics, and
                                                automation tools into your platform, ensuring smooth data flow and enhanced
                                                functionality. </div>
                                        </div><a href="#contact-section" class="lnk"> Contact Me </a>
                                        <div class="image" style="background-image:url(/images/pat-2.png);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 390.667px; margin-right: 40px;">
                                    <div class="services-item">
                                        <div class="lui-subtitle"><span> Payment </span></div>
                                        <div class="icon"></div>
                                        <h5 class="lui-title"><span> Payment Gateway Integration </span></h5>
                                        <div class="lui-text">
                                            <div>
                                                <p>Securely process online payments with Stripe, PayPal, Razorpay, and more.
                                                    I ensure hassle-free transactions with proper security measures in
                                                    place.</p>
                                            </div>
                                        </div><a href="#contact-section" class="lnk"> Contact Me </a>
                                        <div class="image" style="background-image:url(/images/pat-2.png);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 390.667px; margin-right: 40px;">
                                    <div class="services-item">
                                        <div class="lui-subtitle"><span> Notification </span></div>
                                        <div class="icon"></div>
                                        <h5 class="lui-title"><span> SMS &amp; Notification Gateway Integration </span>
                                        </h5>
                                        <div class="lui-text">
                                            <div>
                                                <p>Keep your users informed with real-time SMS and push notifications using
                                                    Twilio, Firebase, or other messaging services for improved engagement.
                                                </p>
                                            </div>
                                        </div><a href="#contact-section" class="lnk"> Contact Me </a>
                                        <div class="image" style="background-image:url(/images/pat-2.png);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 390.667px; margin-right: 40px;">
                                    <div class="services-item">
                                        <div class="lui-subtitle"><span> Cloud </span></div>
                                        <div class="icon"></div>
                                        <h5 class="lui-title"><span> Cloud &amp; Server Deployment </span></h5>
                                        <div class="lui-text">
                                            <div>
                                                <p>I deploy, configure, and manage applications on AWS, DigitalOcean, and
                                                    other cloud platforms, ensuring security, scalability, and uptime.</p>
                                            </div>
                                        </div><a href="#contact-section" class="lnk"> Contact Me </a>
                                        <div class="image" style="background-image:url(/images/pat-2.png);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 390.667px; margin-right: 40px;">
                                    <div class="services-item">
                                        <div class="lui-subtitle"><span> Testing </span></div>
                                        <div class="icon"></div>
                                        <h5 class="lui-title"><span> Testing &amp; Debugging </span></h5>
                                        <div class="lui-text">
                                            <div>
                                                <p>I conduct thorough manual and automated testing to identify and fix
                                                    issues, ensuring your application is bug-free, secure, and
                                                    high-performing.</p>
                                            </div>
                                        </div><a href="#contact-section" class="lnk"> Contact Me </a>
                                        <div class="image" style="background-image:url(/images/pat-2.png);"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide" style="width: 390.667px; margin-right: 40px;">
                                    <div class="services-item">
                                        <div class="lui-subtitle"><span> Consulting </span></div>
                                        <div class="icon"></div>
                                        <h5 class="lui-title"><span> Full-Stack Consulting &amp; Code Review </span></h5>
                                        <div class="lui-text">
                                            <div>
                                                <p>Get expert advice on architecture, scalability, and best practices. I
                                                    provide in-depth code reviews and recommendations to improve your
                                                    project’s efficiency.</p>
                                            </div>
                                        </div><a href="#contact-section" class="lnk"> Contact Me </a>
                                        <div class="image" style="background-image:url(/images/pat-2.png);"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                    role="button" aria-label="Go to slide 1"></span><span
                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                                    tabindex="0" role="button" aria-label="Go to slide 3"></span><span
                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet"
                                    tabindex="0" role="button" aria-label="Go to slide 5"></span><span
                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet"
                                    tabindex="0" role="button" aria-label="Go to slide 7"></span></div><span
                                class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <div class="lui-bgtitle"><span> Services </span></div>
                        <div class="v-line-block"><span></span></div>
                    </div>
                </div>
            </section>

            <!-- Section - Skills -->
            <section class="lui-section lui-gradient-center" id="skills-section">
                <div class="lui-heading">
                    <div class="container">
                        <div class="m-titles align-center">
                            <h2 class="m-title splitting-text-anim-1 scroll-animate words splitting animate__active animate__animated"
                                data-splitting="words" data-animate="active"
                                style="--word-total: 2; visibility: visible;"><span> <span class="word"
                                        data-word="Professional" style="--word-index: 0;">Professional</span><span
                                        class="whitespace"> </span><span class="word" data-word="Skills"
                                        style="--word-index: 1;">Skills</span> </span></h2>
                            <div class="m-subtitle splitting-text-anim-1 scroll-animate words splitting animate__active animate__animated"
                                data-splitting="words" data-animate="active"
                                style="--word-total: 2; visibility: visible;"><span> <span class="word" data-word="my"
                                        style="--word-index: 0;">my</span> <b><span class="word" data-word="Talent"
                                            style="--word-index: 1;">Talent</span></b></span></div>
                        </div>
                    </div>
                </div>
                <div class="v-line v-line-left">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="skills-items">
                                    <div class="skills-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                                        data-animate="active" style="visibility: visible;">
                                        <h6 class="name"><span> Laravel </span></h6>
                                        <div class="text">
                                            <div>
                                                <p>Expertise in building scalable and secure web applications using Laravel,
                                                    including API development and queue management.</p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width:90%;"><span></span></div>
                                        </div>
                                        <div class="value"><span class="num">90 <span>%</span></span></div>
                                    </div>
                                    <div class="skills-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                                        data-animate="active" style="visibility: visible;">
                                        <h6 class="name"><span> Livewire </span></h6>
                                        <div class="text">
                                            <div>
                                                <p>Experience in developing interactive, real-time applications with Laravel
                                                    Livewire, reducing dependency on JavaScript for enhanced user
                                                    experiences.</p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width:75%;"><span></span></div>
                                        </div>
                                        <div class="value"><span class="num">75 <span>%</span></span></div>
                                    </div>
                                    <div class="skills-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                                        data-animate="active" style="visibility: visible;">
                                        <h6 class="name"><span> JavaScript &amp; Frontend </span></h6>
                                        <div class="text">
                                            <div>
                                                <p>Skilled in modern JavaScript, including ES6+, AJAX, and frameworks like
                                                    Vue.js to create interactive and user-friendly interfaces.</p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width:75%;"><span></span></div>
                                        </div>
                                        <div class="value"><span class="num">75 <span>%</span></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="skills-items">
                                    <div class="skills-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                                        data-animate="active" style="visibility: visible;">
                                        <h6 class="name"><span> Vue.js </span></h6>
                                        <div class="text">
                                            <div>
                                                <p>Skilled in creating dynamic, reactive, and high-performance front-end
                                                    applications using Vue.js, Vuex, and Composition API.</p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width:80%;"><span></span></div>
                                        </div>
                                        <div class="value"><span class="num">80 <span>%</span></span></div>
                                    </div>
                                    <div class="skills-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                                        data-animate="active" style="visibility: visible;">
                                        <h6 class="name"><span> PHP </span></h6>
                                        <div class="text">
                                            <div>
                                                <p>Strong command over PHP, writing clean and optimized code to develop
                                                    custom applications, APIs, and backend systems.</p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width:90%;"><span></span></div>
                                        </div>
                                        <div class="value"><span class="num">90 <span>%</span></span></div>
                                    </div>
                                    <div class="skills-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                                        data-animate="active" style="visibility: visible;">
                                        <h6 class="name"><span> DevOps &amp; Deployment</span></h6>
                                        <div class="text">
                                            <div>
                                                <p>Experience in managing servers, CI/CD pipelines, and deployments using
                                                    AWS, DigitalOcean, Docker, and Git for seamless production workflow.</p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width:60%;"><span></span></div>
                                        </div>
                                        <div class="value"><span class="num">60 <span>%</span></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="skills-items">
                                    <div class="skills-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                                        data-animate="active" style="visibility: visible;">
                                        <h6 class="name"><span> CodeIgniter </span></h6>
                                        <div class="text">
                                            <div>
                                                <p>Proficient in lightweight and fast web development using CodeIgniter,
                                                    ensuring efficient MVC architecture and seamless performance.</p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width:80%;"><span></span></div>
                                        </div>
                                        <div class="value"><span class="num">80 <span>%</span></span></div>
                                    </div>
                                    <div class="skills-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                                        data-animate="active" style="visibility: visible;">
                                        <h6 class="name"><span> MySQL </span></h6>
                                        <div class="text">
                                            <div>
                                                <p>Expertise in designing scalable database architectures, query
                                                    optimization, indexing, and performance tuning for high-traffic
                                                    applications.</p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width:85%;"><span></span></div>
                                        </div>
                                        <div class="value"><span class="num">85 <span>%</span></span></div>
                                    </div>
                                    <div class="skills-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                                        data-animate="active" style="visibility: visible;">
                                        <h6 class="name"><span> Security </span></h6>
                                        <div class="text">
                                            <div>
                                                <p>Implementing security best practices in web applications, including
                                                    authentication, authorization, data encryption, and vulnerability
                                                    prevention.</p>
                                            </div>
                                        </div>
                                        <div class="dots">
                                            <div class="dot" style="width:65%;"><span></span></div>
                                        </div>
                                        <div class="value"><span class="num">65 <span>%</span></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lui-bgtitle"><span> Skills </span></div>
                        <div class="v-line-block"><span></span></div>
                    </div>
                </div>
            </section>

            <!-- Section - Works -->

            @include('home.portfolio-section')

            @include('home.resume-section')





            <!-- Section - Contacts -->
            <section class="lui-section lui-gradient-bottom pt-5" id="contact-section">

                <!-- Heading -->
                <div class="lui-heading">
                    <div class="container">

                        <div class="m-titles align-center">
                            <h2 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="words"
                                data-animate="active">
                                <span> Contact Me </span>
                            </h2>
                            <div class="m-subtitle splitting-text-anim-1 scroll-animate" data-splitting="words"
                                data-animate="active">
                                <span> Let’s <b>Talk About Ideas</b>
                                </span>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Contact -->
                <div class="lui-contacts v-line v-line-left">
                    <div class="container">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">

                                <div class="numbers-items">
                                    <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        <div class="icon">
                                            <i aria-hidden="true" class="far fa-map"></i>
                                        </div>
                                        <div class="title">
                                            <span> Address </span>
                                        </div>
                                        <div class="lui-text">
                                            <span> Surat, Gujarat, India </span>
                                        </div>
                                    </div>

                                    <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        <div class="icon">
                                            <i aria-hidden="true" class="far fa-envelope"></i>
                                        </div>
                                        <div class="title">
                                            <span> Email </span>
                                        </div>
                                        <div class="lui-text">
                                            <a class="text-dark" href="mailto:dearchandan1993@gmail.com">
                                                dearchandan1993@gmail.com </a>
                                        </div>
                                    </div>
                                    <div class="numbers-item scrolla-element-anim-1 scroll-animate" data-animate="active">
                                        <div class="icon">
                                            <i aria-hidden="true" class="far fa-address-book"></i>
                                        </div>
                                        <div class="title">
                                            <span> Phone </span>
                                        </div>
                                        <div class="lui-text">
                                            <a class="text-dark" href="tel:+919898363357"> +91 9898363357 </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">

                                <div class="contacts-form scrolla-element-anim-1 scroll-animate" data-animate="active">
                                    <div class="bg-img" style="background-image: url(assets/images/pat-1.png);"></div>
                                    <div class="contacts-form">
                                        <form id="cform" method="post">
                                            <div class="row">

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="group">
                                                        <label>
                                                            Your Email Address <b>*</b>
                                                            <input type="email" name="email">
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="group">
                                                        <label>
                                                            Your Message <b>*</b>
                                                            <textarea name="message"></textarea>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-right">
                                                    {{-- <div class="terms-label">* Accept the terms and conditions.</div> --}}
                                                    <a href="#" class="btn"
                                                        onclick="$('#cform').submit(); return false;">
                                                        <span>Submit</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="alert-success" style="display: none;">
                                            <p>Thanks, your message is sent successfully.</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="lui-bgtitle">
                            <span> Contact Me </span>
                        </div>

                    </div>
                </div>

            </section>

        </div>

        @include('includes.footer')

    </div>

    <!-- cursor -->
    <div class="cursor"></div>
@endsection
