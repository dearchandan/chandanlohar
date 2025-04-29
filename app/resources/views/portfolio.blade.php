@extends('app')

@section('content')
<div class="container-page">

    <!-- Preloader -->
    <div class="preloader">
        <div class="centrize full-width">
            <div class="vertical-center">
                <div class="spinner-logo">
                    {{-- <img src="assets/images/logo2.png" alt="Luique - Personal All Projects HTML Template" > --}}
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
          <a href="/">
            {{-- <img width="228" height="38" src="assets/images/logo2.png" alt="" > --}}
          </a>
        </div>

      </div>
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 align-right">

                    <!-- switcher btn -->
                    <a href="#" class="switcher-btn">
                        <span class="sw-before">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                <path id="Dark_Theme" data-name="Dark Theme" fill="#000" d="M1759.46,111.076a0.819,0.819,0,0,0-.68.147,8.553,8.553,0,0,1-2.62,1.537,8.167,8.167,0,0,1-2.96.531,8.655,8.655,0,0,1-8.65-8.682,9.247,9.247,0,0,1,.47-2.864,8.038,8.038,0,0,1,1.42-2.54,0.764,0.764,0,0,0-.12-1.063,0.813,0.813,0,0,0-.68-0.148,11.856,11.856,0,0,0-6.23,4.193,11.724,11.724,0,0,0,1,15.387,11.63,11.63,0,0,0,19.55-5.553A0.707,0.707,0,0,0,1759.46,111.076Zm-4.5,6.172a10.137,10.137,0,0,1-14.29-14.145,10.245,10.245,0,0,1,3.38-2.836c-0.14.327-.29,0.651-0.41,1.006a9.908,9.908,0,0,0-.56,3.365,10.162,10.162,0,0,0,10.15,10.189,9.776,9.776,0,0,0,3.49-.62,11.659,11.659,0,0,0,1.12-.473A10.858,10.858,0,0,1,1754.96,117.248Z" transform="translate(-1737 -98)" />
                            </svg>
                        </span>
                        <span class="sw-after">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.22" height="22.313" viewBox="0 0 22.22 22.313">
                                <path id="Light_Theme" data-name="Light Theme" fill="#fff" d="M1752.49,105.511a5.589,5.589,0,0,0-3.94-1.655,5.466,5.466,0,0,0-3.94,1.655,5.61,5.61,0,0,0,3.94,9.566,5.473,5.473,0,0,0,3.94-1.653,5.643,5.643,0,0,0,1.65-3.957A5.516,5.516,0,0,0,1752.49,105.511Zm-1.06,6.85a4.1,4.1,0,0,1-5.76,0,4.164,4.164,0,0,1,0-5.788A4.083,4.083,0,0,1,1751.43,112.361Zm7.47-3.662h-2.27a0.768,0.768,0,0,0,0,1.536h2.27A0.768,0.768,0,0,0,1758.9,108.7Zm-10.35,8.12a0.777,0.777,0,0,0-.76.769v2.274a0.777,0.777,0,0,0,.76.767,0.786,0.786,0,0,0,.77-0.767v-2.274A0.786,0.786,0,0,0,1748.55,116.819Zm7.85-.531-1.62-1.624a0.745,0.745,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.625a0.747,0.747,0,0,0,1.06,0A0.759,0.759,0,0,0,1756.4,116.288ZM1748.55,98.3a0.777,0.777,0,0,0-.76.768v2.273a0.778,0.778,0,0,0,.76.768,0.787,0.787,0,0,0,.77-0.768V99.073A0.786,0.786,0,0,0,1748.55,98.3Zm7.88,3.278a0.744,0.744,0,0,0-1.06,0l-1.62,1.624a0.758,0.758,0,0,0,0,1.063,0.745,0.745,0,0,0,1.06,0l1.62-1.624A0.758,0.758,0,0,0,1756.43,101.583Zm-15.96,7.116h-2.26a0.78,0.78,0,0,0-.77.768,0.76,0.76,0,0,0,.77.768h2.26A0.768,0.768,0,0,0,1740.47,108.7Zm2.88,5.965a0.745,0.745,0,0,0-1.06,0l-1.62,1.624a0.759,0.759,0,0,0,0,1.064,0.747,0.747,0,0,0,1.06,0l1.62-1.625A0.758,0.758,0,0,0,1743.35,114.664Zm0-11.457-1.62-1.624a0.744,0.744,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.624a0.745,0.745,0,0,0,1.06,0A0.758,0.758,0,0,0,1743.35,103.207Z" transform="translate(-1737.44 -98.313)" />
                            </svg>
                        </span>
                    </a>

                    <!-- menu btn -->
                    <a href="#" class="menu-btn">
                        <span></span>
                        <span></span>
                    </a>

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
                                                    <a class="splitting-text-anim-2" data-splitting="chars" href="index.html">Home</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="splitting-text-anim-2" data-splitting="chars" href="#services-section">Services</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="splitting-text-anim-2" data-splitting="chars" href="#skills-section">Skills</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="splitting-text-anim-2" data-splitting="chars" href="#works-section">Works</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="splitting-text-anim-2" data-splitting="chars" href="#resume-section">Resume</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="splitting-text-anim-2" data-splitting="chars" href="#testimonials-section">Testimonials</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="splitting-text-anim-2" data-splitting="chars" href="#pricing-section">Pricing</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="splitting-text-anim-2" data-splitting="chars" href="#blog-section">Blog</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a class="splitting-text-anim-2" data-splitting="chars" href="#contact-section">Contact</a>
                                                </li>
                                                <li class="menu-item menu-item-has-children has-children">
                                                    <a class="splitting-text-anim-2" data-splitting="chars">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a class="splitting-text-anim-1" data-splitting="chars" href="works-list.html">Works (List)</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="splitting-text-anim-1" data-splitting="chars" href="works.html">Works (Grid)</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="splitting-text-anim-1" data-splitting="chars" href="work-single.html">Work Single Page</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class=" splitting-text-anim-1" data-splitting="chars" href="blog.html">Blog</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a class="splitting-text-anim-1" data-splitting="chars" href="blog-single.html">Single Post</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- social -->
                                        <div class="menu-social-links">
                                            <a href="http://dribbble.com" target="blank" class="scrolla-element-anim-1" title="dribbble">
                                                <i class="fab fa-dribbble"></i>
                                            </a>
                                            <a href="http://twitter.com" target="blank" class="scrolla-element-anim-1" title="twitter">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="http://behance.com" target="blank" class="scrolla-element-anim-1" title="behance">
                                                <i class="fab fa-behance"></i>
                                            </a>
                                        </div>

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

  <!-- Section Started Heading -->
  <section class="section section-inner started-heading">
      <div class="container">

              <!-- Heading -->
      <div class="m-titles align-center">
        <h1 class="m-title splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
          <span> All Projects </span>
        </h1>
        {{-- <div class="m-subtitle splitting-text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
          <span> my <b>Cases</b>
          </span>
        </div> --}}
      </div>

      </div>
  </section>

  <!-- Section - Works -->
        <section class="lui-section">

    <!-- Works -->
            <div class="v-line v-line-right v-line-top">
      <div class="container">

        <div class="works-box">
          {{-- <div class="filter-links scrolla-element-anim-1 scroll-animate" data-animate="active">
            <a href="#" class="lui-subtitle active" data-href=".works-col"> All </a>
            <a href="#" class="lui-subtitle" data-href=".sorting-ui-ux-design"> UI UX Design </a>
            <a href="#" class="lui-subtitle" data-href=".sorting-photo"> Photography </a>
            <a href="#" class="lui-subtitle" data-href=".sorting-development"> Development </a>
            <a href="#" class="lui-subtitle" data-href=".sorting-branding"> Branding </a>
          </div> --}}
          <div class="works-items works-masonry-items row">
            {{-- 1. Resonance Health --}}
            <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-development sorting-ui-ux-design"
            style="position: absolute; left: 66.6641%; top: 0px;">
            <div class="works-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                data-animate="active" style="visibility: visible;">
                <div class="image">
                    <div class="img"><a href="#"><img decoding="async" src="/images/work/HH.png"
                                alt="Resonance Health"><span class="overlay"></span></a></div>
                </div>
                <div class="desc"><span class="category"> Web Application </span>
                    <h5 class="name"><a href="#">Resonance Health</a></h5>
                    <div class="text">
                        <p>A HIPAA-compliant SaaS platform for 100+ clinics, managing 2M+ patient
                            records with Laravel and Vue.js.</p>
                    </div><a href="https://resonancehealth.org/" class="lnk">See project</a>
                </div>
                <div class="bg-img" style="background-image:url(/images/pat-2.png);"></div>
            </div>
        </div>

        {{-- 2. Wosul --}}

        <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-ui-ux-design"
            style="position: absolute; left: 0%; top: 0px;">
            <div class="works-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                data-animate="active" style="visibility: visible;">
                <div class="image">
                    <div class="img"><a href="https://wosul.sa/"><img decoding="async"
                                src="/images/work/wosul.png" alt="Wosul"><span
                                class="overlay"></span></a></div>
                </div>
                <div class="desc"><span class="category"> Web Application </span>
                    <h5 class="name"><a href="https://wosul.sa/">Wosul</a></h5>
                    <div class="text">
                        <p>A POS system for 200+ retail stores, processing $5M+ monthly transactions.
                            Integrated with Stripe and PayPal APIs.</p>
                    </div><a href="https://wosul.sa/" class="lnk">See project</a>
                </div>
                <div class="bg-img" style="background-image:url(/images/pat-2.png);"></div>
            </div>
        </div>

        {{-- 3. Agilemania --}}

        <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-branding sorting-ui-ux-design"
            style="position: absolute; left: 33.332%; top: 0px;">
            <div class="works-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                data-animate="active" style="visibility: visible;">
                <div class="image">
                    <div class="img"><a href="https://agilemania.com"><img decoding="async"
                                src="/images/work/agilemania.png" alt="Agilemania"><span
                                class="overlay"></span></a></div>
                </div>
                <div class="desc"><span class="category"> CMS </span>
                    <h5 class="name"><a href="https://agilemania.com">Agilemania</a></h5>
                    <div class="text">
                        <p>Agilemania is a small group of passionate Lean-Agile-DevOps consultants and
                            trainers focused on delivering measurable, sustainable results for our clients.
                        </p>
                    </div><a href="https://agilemania.com" class="lnk">See project</a>
                </div>
                <div class="bg-img" style="background-image:url(/images/pat-2.png);"></div>
            </div>
        </div>

        {{-- 4. Heavy Hydraulics --}}

        <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-development sorting-ui-ux-design"
            style="position: absolute; left: 66.6641%; top: 0px;">
            <div class="works-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                data-animate="active" style="visibility: visible;">
                <div class="image">
                    <div class="img"><a href="#"><img decoding="async" src="/images/work/HH.png"
                                alt="Heavy Hydraulics"><span class="overlay"></span></a></div>
                </div>
                <div class="desc"><span class="category"> Web Application </span>
                    <h5 class="name"><a href="#">Heavy Hydraulics</a></h5>
                    <div class="text">
                        <p>This e-portal is a robust platform designed for renting heavy equipment and transport services, catering to three user roles: Admin, Renter, and Buyer. </p>
                    </div>
                    {{-- <a href="#" class="lnk" disabled class="disabled">See project</a> --}}
                </div>
                <div class="bg-img" style="background-image:url(/images/pat-2.png);"></div>
            </div>
        </div>
       
        {{-- 5. Talentmania --}}

        <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-development sorting-ui-ux-design"
            style="position: absolute; left: 66.6641%; top: 0px;">
            <div class="works-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                data-animate="active" style="visibility: visible;">
                <div class="image">
                    <div class="img"><a href="#"><img decoding="async" src="/images/work/talentmania.png"
                                alt="Talentmania"><span class="overlay"></span></a></div>
                </div>
                <div class="desc"><span class="category"> Website </span>
                    <h5 class="name"><a href="#">Talentmania</a></h5>
                    <div class="text">
                        <p>An AI-driven talent management platform designed to optimize hiring processes and reduce time-to-hire. </p>
                    </div>
                    <a href="https://talentmania.com.my/" class="lnk" disabled class="disabled">See project</a>
                </div>
                <div class="bg-img" style="background-image:url(/images/pat-2.png);"></div>
            </div>
        </div>
        
        {{-- 6. Agile30 --}}

        <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-development sorting-ui-ux-design"
            style="position: absolute; left: 66.6641%; top: 0px;">
            <div class="works-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                data-animate="active" style="visibility: visible;">
                <div class="image">
                    <div class="img"><a href="#"><img decoding="async" src="/images/work/agile30.png"
                                alt="Agile30"><span class="overlay"></span></a></div>
                </div>
                <div class="desc"><span class="category"> Website </span>
                    <h5 class="name"><a href="#">Agile30</a></h5>
                    <div class="text">
                        <p>Agile 30 is a group of learners from the agile product development field bound by a commongoal to share and learn about agile and related practices.  </p>
                    </div>
                    <a href="https://agile30.org/" class="lnk" disabled class="disabled">See project</a>
                </div>
                <div class="bg-img" style="background-image:url(/images/pat-2.png);"></div>
            </div>
        </div>
        
        {{-- 7. SafeThursday --}}

        <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-development sorting-ui-ux-design"
            style="position: absolute; left: 66.6641%; top: 0px;">
            <div class="works-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                data-animate="active" style="visibility: visible;">
                <div class="image">
                    <div class="img"><a href="#"><img decoding="async" src="/images/work/safethursday.png"
                                alt="SafeThursday"><span class="overlay"></span></a></div>
                </div>
                <div class="desc"><span class="category"> Website </span>
                    <h5 class="name"><a href="#">SafeThursday</a></h5>
                    <div class="text">
                        <p>SafeThursday is a community of SAFe. SAFe is the world's most trusted system for business agility because it works: it's trusted, customizable, and sustainable.  </p>
                    </div>
                    <a href="https://web.archive.org/web/20230704093222/https://safethursday.com/" class="lnk" disabled class="disabled">See project</a>
                </div>
                <div class="bg-img" style="background-image:url(/images/pat-2.png);"></div>
            </div>
        </div>
        
        {{-- 8. Agilemania Academy --}}

        <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-development sorting-ui-ux-design"
            style="position: absolute; left: 66.6641%; top: 0px;">
            <div class="works-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                data-animate="active" style="visibility: visible;">
                <div class="image">
                    <div class="img"><a href="#"><img decoding="async" src="/images/work/agilemania-academy.png"
                                alt="Agilemania Academy"><span class="overlay"></span></a></div>
                </div>
                <div class="desc"><span class="category"> LMS </span>
                    <h5 class="name"><a href="#">Agilemania Academy</a></h5>
                    <div class="text">
                        <p>This is custom learning management system where students can enroll to free and paid courses. It allows institutes and instructors to manage their courses, subscriptions etc.  </p>
                    </div>
                    <a href="https://academy.agilemania.com/" class="lnk" disabled class="disabled">See project</a>
                </div>
                <div class="bg-img" style="background-image:url(/images/pat-2.png);"></div>
            </div>
        </div>
       
        {{-- 9. AvPOS --}}

        <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-development sorting-ui-ux-design"
            style="position: absolute; left: 66.6641%; top: 0px;">
            <div class="works-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                data-animate="active" style="visibility: visible;">
                <div class="image">
                    <div class="img"><a href="#"><img decoding="async" src="/images/work/avpos.png"
                                alt="avPOS"><span class="overlay"></span></a></div>
                </div>
                <div class="desc"><span class="category"> Point of Sale </span>
                    <h5 class="name"><a href="#">avPOS</a></h5>
                    <div class="text">
                        <p>A POS system for restaurant and retail sectors, it has KDS, CDS and Kitchen notifier as addons to provide complete solution for restaurant and cafeterias.</p>
                    </div>
                    <a href="https://app.avinyadev.com/" class="lnk" disabled class="disabled">See project</a>
                </div>
                <div class="bg-img" style="background-image:url(/images/pat-2.png);"></div>
            </div>
        </div>
        
        {{-- 10. Silvershine --}}

        <div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 sorting-development sorting-ui-ux-design"
            style="position: absolute; left: 66.6641%; top: 0px;">
            <div class="works-item scrolla-element-anim-1 scroll-animate animate__active animate__animated"
                data-animate="active" style="visibility: visible;">
                <div class="image">
                    <div class="img"><a href="#"><img decoding="async" src="/images/work/silvershine.png"
                                alt="avPOS"><span class="overlay"></span></a></div>
                </div>
                <div class="desc"><span class="category"> Custom E-Commerce </span>
                    <h5 class="name"><a href="#">Silvershine</a></h5>
                    <div class="text">
                        <p>A modern and elegant e-commerce platform for buying and selling jewelry. Featuring a seamless shopping experience, secure payment gateways, advanced search filters, and a user-friendly interface. </p>
                    </div>
                    <a href="https://web.archive.org/web/20191023041750/https://www.silvershinejewellery.com/" class="lnk" disabled class="disabled">See project</a>
                </div>
                <div class="bg-img" style="background-image:url(/images/pat-2.png);"></div>
            </div>
        </div>
          </div>
        </div>

        <div class="lui-bgtitle">
          <span> All Projects </span>
        </div>

                </div>
            </div>

  </section>

    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer__builder">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

          <div class="social-links scrolla-element-anim-1 scroll-animate" data-animate="active">
            <a target="_blank" rel="nofollow" href="http://twitter.com">
              <i aria-hidden="true" class="fab fa-twitter"></i>
            </a>
            <a target="_blank" rel="nofollow" href="http://dribble.com">
              <i aria-hidden="true" class="fab fa-dribbble"></i>
            </a>
            <a target="_blank" rel="nofollow" href="http://behance.com">
              <i aria-hidden="true" class="fab fa-behance"></i>
            </a>
          </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

          <div class="copyright-text align-center scrolla-element-anim-1 scroll-animate" data-animate="active">
            © 2022 <strong>Luique</strong>. All rights reserved
          </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

          <div class="copyright-text align-right scrolla-element-anim-1 scroll-animate" data-animate="active">
            Developed by <strong>bslthemes</strong>
          </div>

        </div>
      </div>
    </div>
        </div>
    </div>

</div>
@endsection
