<!DOCTYPE html>
<html lang="zxx">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>AglieTech - IT Solutions & Technology Tailwind CSS Template</title>
   <link rel=icon href="{{ asset('assets/landing/images/favicon.png') }}" sizes="20x20" type="image/png">
   @vite(['resources/css/app-landing.scss', 'resources/js/app-landing.js'])
</head>

<body class="home-14">
   <!-- preloader area start -->
   <div class="preloader" id="preloader">
      <div class="preloader-inner">
         <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
         </div>
      </div>
   </div>
   <!-- preloader area end -->
   <!-- search popup start-->
   <div class="td-search-popup" id="td-search-popup">
      <form action="index.html" class="search-form">
         <div class="form-group">
            <input type="text" class="form-control" placeholder="Search.....">
         </div>
         <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
      </form>
   </div>
   <!-- search popup end-->
   <div class="body-overlay" id="body-overlay"></div>
   <!-- ==== topbar start ==== -->
   <div class="topbar hidden custom-md:block">
      <div class="container custom-container">
         <div class="row align-items-center">
            <div class="w-full custom-md:w-7/12">
               <div class="topbar__list-wrapper">
                  <ul class="topbar__list">
                     <li class="!hidden custom-lg:!flex">Consult With It Advisor? <a href="index.html">Click Now</a>
                     </li>
                     <li><a href="mailto:support@example.com"><i class="fas fa-envelope"></i>support@example.com</a>
                     </li>
                     <li><a href="tel:2305-587-3407"><i class="fas fa-phone-alt"></i>+2(305)
                           587-3407</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="w-full custom-md:w-5/12">
               <div class="topbar__items justify-content-end">
                  <div class="select-country">
                     <select name="country" class="country-select select single-select">
                        <option data-flag="fi-gb-eng">English</option>
                        <option data-flag="fi-us">Spanish</option>
                        <option data-flag="fi-cn">Chinese</option>
                        <option data-flag="fi-it">Italian</option>
                     </select>
                  </div>
                  <div class="select-currency">
                     <select name="currency" class="currency-select select single-select">
                        <option value="usd">USD</option>
                        <option value="gbp">GBP</option>
                        <option value="aud">AUD</option>
                        <option value="euro">Euro</option>
                     </select>
                  </div>
                  <div class="social">
                     <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                        title="facebook">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                     <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo" title="vimeo">
                        <i class="fab fa-vimeo-v"></i>
                     </a>
                     <a href="https://x.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                        <i class="fab fa-twitter"></i>
                     </a>
                     <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                        title="linkedin">
                        <i class="fab fa-linkedin-in"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ==== / topbar end ==== -->
   <!-- navbar start -->
   <nav class="navbar navbar-area navbar-area-2 navbar-expand-lg bg-white !mt-0">
      <div class="container nav-container custom-container">
         <div class="responsive-mobile-menu">
            <button class="menu toggle-btn block custom-md:hidden" data-target="#itech_main_menu" aria-expanded="false"
               aria-label="Toggle navigation">
               <span class="icon-left"></span>
               <span class="icon-right"></span>
            </button>
         </div>
         <div class="logo">
            <a href="index.html"><img src="{{ asset('assets/landing/images/logo.png') }}" alt="img"></a>
         </div>
         <div class="nav-right-part nav-right-part-mobile">
            <a class="search-bar-btn" href="index.html">
               <i class="fa fa-search"></i>
            </a>
         </div>
         <div class="collapse navbar-collapse" id="itech_main_menu">
            <ul class="navbar-nav menu-open custom-md:!text-center custom-md:ps-[48px]">
               <li class="menu-item-has-children">
                  <a href="index.html">Home</a>
                  <ul class="sub-menu">
                     <li><a href="index.html">Software Agency</a></li>
                     <li><a href="index-2.html">SaaS App Landing</a></li>
                     <li><a href="index-3.html">Payments Solution</a></li>
                     <li><a href="index-4.html">Startup / Software Company</a></li>
                     <li><a href="index-5.html">Artificial Intelligence</a></li>
                     <li><a href="index-6.html">NFT Service</a></li>
                     <li><a href="index-7.html">Cyber Security</a></li>
                     <li><a href="index-8.html">Hardware Service</a></li>
                     <li><a href="index-9.html">ICO Landing</a></li>
                     <li><a href="index-10.html">Personal Portfolio</a></li>
                     <li><a href="index-11.html">SEO Service</a></li>
                     <li><a href="index-12.html">Business Consultancy</a></li>
                     <li><a href="index-13.html">IT Solution</a></li>
                     <li><a href="index-14.html">IT Agency Two</a></li>
                  </ul>
               </li>
               <li class="menu-item-has-children">
                  <a href="index.html">Service</a>
                  <ul class="sub-menu">
                     <li><a href="service.html">Service 01</a></li>
                     <li><a href="service-2.html">Service 02</a></li>
                     <li><a href="service-3.html">Service 03</a></li>
                     <li><a href="service-4.html">Service 04</a></li>
                     <li><a href="service-5.html">Service 05</a></li>
                     <li><a href="service-details.html">Service Single</a></li>
                  </ul>
               </li>
               <li class="menu-item-has-children">
                  <a href="index.html">Pages</a>
                  <ul class="sub-menu">
                     <li><a href="about.html">About Us</a></li>
                     <li><a href="team.html">Team 01</a></li>
                     <li><a href="team-2.html">Team 02</a></li>
                     <li><a href="team-3.html">Team 03</a></li>
                     <li><a href="team-details.html">Team Details</a></li>
                     <li><a href="pricing.html">Pricing 01</a></li>
                     <li><a href="pricing-2.html">Pricing 02</a></li>
                  </ul>
               </li>
               <li class="menu-item-has-children mega-menu">
                  <a href="index.html">Mega Menu</a>
                  <div class="sub-menu">
                     <div class="row">
                        <div class="custom-md:w-1/4">
                           <ul>
                              <li><a href="index.html">Software Agency</a></li>
                              <li><a href="index-2.html">SaaS App Landing</a></li>
                              <li><a href="index-3.html">Payments Solution</a></li>
                              <li><a href="index-4.html">Startup / Software Company</a></li>
                              <li><a href="index-5.html">Artificial Intelligence</a></li>
                              <li><a href="index-6.html">NFT Service</a></li>
                              <li><a href="index-7.html">Cyber Security</a></li>
                              <li><a href="index-8.html">Hardware Service</a></li>
                              <li><a href="index-9.html">ICO Landing</a></li>
                              <li><a href="index-10.html">Personal Portfolio</a></li>
                           </ul>
                        </div>
                        <div class="custom-md:w-1/4">
                           <ul>
                              <li><a href="service.html">Service 01</a></li>
                              <li><a href="service-2.html">Service 02</a></li>
                              <li><a href="service-3.html">Service 03</a></li>
                              <li><a href="service-4.html">Service 04</a></li>
                              <li><a href="service-5.html">Service 05</a></li>
                              <li><a href="service-details.html">Service Single</a></li>
                           </ul>
                        </div>
                        <div class="custom-md:w-1/4">
                           <ul>
                              <li><a href="project.html">Project 01</a></li>
                              <li><a href="project-2.html">Project 02</a></li>
                              <li><a href="project-3.html">Project 03</a></li>
                              <li><a href="project-details.html">Case Study Details</a></li>
                              <li><a href="pricing.html">Pricing 01</a></li>
                              <li><a href="pricing-2.html">Pricing 02</a></li>
                           </ul>
                        </div>
                        <div class="custom-md:w-1/4">
                           <ul>
                              <li><a href="about.html">About Us</a></li>
                              <li><a href="team.html">Team 01</a></li>
                              <li><a href="team-2.html">Team 02</a></li>
                              <li><a href="team-3.html">Team 03</a></li>
                              <li><a href="team-details.html">Team Details</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="menu-item-has-children">
                  <a href="index.html">Blog</a>
                  <ul class="sub-menu">
                     <li><a href="blog.html">Blog 01</a></li>
                     <li><a href="blog-2.html">Blog 02</a></li>
                     <li><a href="blog-3.html">Blog 03</a></li>
                     <li><a href="blog-4.html">Blog 04</a></li>
                     <li><a href="blog-details.html">Blog Details</a></li>
                  </ul>
               </li>
               <li><a href="contact.html">Contact Us</a></li>
            </ul>
         </div>
         <div class="nav-right-part nav-right-part-desktop custom-md:inline-flex items-center">
            <a class="btn btn-border-base" href="about.html">Discover More <i class="fa fa-plus"></i></a>
            <a class="navbar-phone custom-lg:!inline-block !hidden" href="tel:123-456789">
               <span class="icon">
                  <img src="{{ asset('assets/landing/images/icon/1.png') }}" alt="img">
               </span>
               <span>Need help?</span>
               <h5>(808) 555-0111</h5>
            </a>
         </div>
      </div>
   </nav>
   <!-- navbar end -->
   <!-- banner start -->
   <div class="banner-14 banner-area bg-relative banner-area-1 pd-bottom-100 bg-cover bg-center bi-26">
      <div class="container">
         <div class="row">
            <div class="w-full custom-md:w-8/12 custom-lg:w-6/12">
               <div class="banner-inner">
                  <h6 class="subtitle" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                  Designing for the future
                  </h6>
                  <h2 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                  Scale your <span>business growth & revenue</span> to the <span>next level</span>
                  </h2>
                  <p class="content custom-lg:pe-[48px]" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                  In today's competitive business, the demand for efficient and cost-effective IT solutions has never been more critical.
                  </p>
                  <a class="btn btn-base" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" href="about.html">
                  Get Started
                  </a>
                  <div class="inline-block self-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                  <a class="video-play-btn-hover !static" href="https://www.youtube.com/embed/Wimkqo8gDZ0">
                     <img src="{{ asset('assets/landing/images/video.svg') }}" alt="img">
                     <h6 class="inline-block">How We Work</h6>
                  </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <img class="animate-img-1 animate-topImageBounce" src="{{ asset('assets/landing/images/banner/2.png') }}" alt="img">
      <img class="animate-img-2 animate-leftImageBounce" src="{{ asset('assets/landing/images/banner/5.svg') }}" alt="img">
      <div class="banner-14-thumb">
         <img src="{{ asset('assets/landing/images/home-14/banner/banner-thumb.png') }}" alt="Image">
      </div>
      <div class="banner-13-thumb-sm">
         <img src="{{ asset('assets/landing/images/home-14/banner/banner-shape.png') }}" alt="Image">
      </div>
      <img src="{{ asset('assets/landing/images/home-14/banner/fig.png') }}" alt="Image" class="fig">
      <img src="{{ asset('assets/landing/images/home-14/banner/sketch.png') }}" alt="Image" class="sketch">
      <img src="{{ asset('assets/landing/images/home-14/banner/triangle.png') }}" alt="Image" class="triangle">
   </div>
   <!-- banner end -->
   <!-- partner start -->
   <div class="partner-14">
      <div class="container">
         <div class="row">
            <div class="w-full">
               <div class="partner__inner">
                  <div class="partner__slider owl-carousel">
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/one.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/two.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/three.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/four.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/five.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/six.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/one.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/two.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/three.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/four.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/five.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/home-14/partner/six.png') }}" alt="Image">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- / partner end -->
   <!-- about area start -->
   <div class="about-area pd-top-120">
      <div class="container">
         <div class="row">
            <div class="custom-md:w-1/2">
               <div class="about-thumb-inner custom-lg:pe-[48px] custom-lg:me-[48px]" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                  <img class="animate-img-1 animate-topImageBounce" src="{{ asset('assets/landing/images/about/2.png') }}" alt="img">
                  <img class="animate-img-2 animate-leftImageBounce" src="{{ asset('assets/landing/images/about/3.png') }}" alt="img">
                  <img class="animate-img-3 animate-topImageBounce" src="{{ asset('assets/landing/images/banner/5.svg') }}" alt="img">
                  <img class="animate-img-3 ac-5 animate-topImageBounce" src="{{ asset('assets/landing/images/about/34.png') }}" alt="img">
                  <img class="animate-img-3 ac-6 animate-topImageBounce" src="{{ asset('assets/landing/images/about/35.png') }}" alt="img">
                  <img class="main-img" src="{{ asset('assets/landing/images/about/about-14.png') }}" alt="img">
               </div>
            </div>
            <div class="custom-md:w-1/2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
               <div class="section-title mt-[48px] mb-0 custom-md:mt-0">
                  <h6 class="sub-title uppercase">Designing for the future</h6>
                  <h2 class="title"><span>We Prominent Truly</span> trusted
                     IT business <span>solutions</span>
                  </h2>
                  <p class="content !mb-[24px] custom-lg:!mb-[48px]">Lorem Ipsum is simply dummy text of the printing
                     and typesetting industry Loreaim Ipsum has been the industry's standard dummy</p>
                  <div class="row tr-g">
                     <div class="custom-sm:w-1/2 custom-md:w-full custom-2xl:w-6/12">
                        <div class="single-about-inner">
                           <div class="thumb mb-[16px]">
                              <img src="{{ asset('assets/landing/images/icon/2.png') }}" alt="img">
                           </div>
                           <div class="details">
                              <h5 class="font-bold ">Our Ambition</h5>
                              <p>Lorem is Ipsum is simply is de
                                 is text Lorem
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="custom-sm:w-1/2 custom-md:w-full custom-2xl:w-6/12">
                        <div class="single-about-inner">
                           <div class="thumb mb-[16px]">
                              <img src="{{ asset('assets/landing/images/icon/3.png') }}" alt="img">
                           </div>
                           <div class="details font-bold">
                              <h5>Our Purpose</h5>
                              <p>Lorem is Ipsum is simply is de
                                 is text Lorem
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="about-area-on">
                     <div class="about-si">
                        <p><i class="fas fa-check-circle"></i>No hidden fees.</p>
                     </div>
                     <div class="about-si">
                        <p><i class="fas fa-check-circle"></i>100% security. Guaranteed.</p>
                     </div>
                  </div>
                  <div class="about-area-of">
                     <div class="area-left">
                        <a class="btn btn-base mt-0" href="about.html" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" href="about.html">Get Started</a>
                     </div>
                     <div class="area-right">
                        <div class="img-gp-wrap">
                           <div class="img-gp">
                              <img src="{{ asset('assets/landing/images/about/37.png') }}" alt="Image">
                              <img src="{{ asset('assets/landing/images/about/38.png') }}" alt="Image">
                              <img src="{{ asset('assets/landing/images/about/36.png') }}" alt="Image">
                           </div>
                           <h5>2.3M+</h5>
                        </div>
                        <p class="mb-0">5000+ Client reviews</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about area end -->
   <!-- service area start -->
   <div class="service-area bg-relative pd-top-100">
      <img class="position-bottom-left animate-topImageBounce" src="{{ asset('assets/landing/images/icon/4.png') }}" alt="img">
      <div class="container">
         <div class="section-title text-center" data-aos="fade-up" data-aos-duration="800">
            <h6 class="sub-title">Designing for the future</h6>
            <h2 class="title"><span>Your Partner In Digital</span> Success</h2>
         </div>
         <div class="section-title text-center" data-aos="fade-up" data-aos-duration="800">
  <h6 class="sub-title">Designing for the future</h6>
  <h2 class="title"><span>Your Partner In Digital</span> Success</h2>
</div>

<div class="row">
  <div class="custom-md:w-1/3 custom-sm:w-1/2">
    <div class="single-service-inner text-center" data-aos="fade-up" data-aos-duration="800">
      <div class="thumb">
        <img src="{{ asset('assets/landing/images/service-icon/1.png') }}" alt="img">
      </div>
      <div class="details">
        <h5><a href="service-details.html">Mobile App Development</a></h5>
        <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem is Ipsum is</p>
        <a href="service-details.html">
          Get Services
          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="20" viewBox="0 0 34 20" fill="none">
            <circle cx="24" cy="10" r="9.5" stroke="#BDC2C6" />
            <path d="M26.4333 10.5303C26.7262 10.2374 26.7262 9.76256 26.4333 9.46967L21.6603 4.6967C21.3674 4.40381 20.8925 4.40381 20.5996 4.6967C20.3068 4.98959 20.3068 5.46447 20.5996 5.75736L24.8423 10L20.5996 14.2426C20.3068 14.5355 20.3068 15.0104 20.5996 15.3033C20.8925 15.5962 21.3674 15.5962 21.6603 15.3033L26.4333 10.5303ZM0 10.75L25.903 10.75L25.903 9.25L0 9.25L0 10.75Z" fill="#246BFD" />
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="custom-md:w-1/3 custom-sm:w-1/2">
    <div class="single-service-inner text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
      <div class="thumb">
        <img src="{{ asset('assets/landing/images/service-icon/2.png') }}" alt="img">
      </div>
      <div class="details">
        <h5><a href="service-details.html">Content Marketing</a></h5>
        <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem is Ipsum is</p>
        <a href="service-details.html">
          Get Services
          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="20" viewBox="0 0 34 20" fill="none">
            <circle cx="24" cy="10" r="9.5" stroke="#BDC2C6" />
            <path d="M26.4333 10.5303C26.7262 10.2374 26.7262 9.76256 26.4333 9.46967L21.6603 4.6967C21.3674 4.40381 20.8925 4.40381 20.5996 4.6967C20.3068 4.98959 20.3068 5.46447 20.5996 5.75736L24.8423 10L20.5996 14.2426C20.3068 14.5355 20.3068 15.0104 20.5996 15.3033C20.8925 15.5962 21.3674 15.5962 21.6603 15.3033L26.4333 10.5303ZM0 10.75L25.903 10.75L25.903 9.25L0 9.25L0 10.75Z" fill="#246BFD" />
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="custom-md:w-1/3 custom-sm:w-1/2">
    <div class="single-service-inner text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
      <div class="thumb">
        <img src="{{ asset('assets/landing/images/service-icon/3.png') }}" alt="img">
      </div>
      <div class="details">
        <h5><a href="service-details.html">E-commerce Solutions</a></h5>
        <p>Lorem is Ipsum is simply is design iomyi is text Lorem Ipsum is simply is our busi Lorem is Ipsum is</p>
        <a href="service-details.html">
          Get Services
          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="20" viewBox="0 0 34 20" fill="none">
            <circle cx="24" cy="10" r="9.5" stroke="#BDC2C6" />
            <path d="M26.4333 10.5303C26.7262 10.2374 26.7262 9.76256 26.4333 9.46967L21.6603 4.6967C21.3674 4.40381 20.8925 4.40381 20.5996 4.6967C20.3068 4.98959 20.3068 5.46447 20.5996 5.75736L24.8423 10L20.5996 14.2426C20.3068 14.5355 20.3068 15.0104 20.5996 15.3033C20.8925 15.5962 21.3674 15.5962 21.6603 15.3033L26.4333 10.5303ZM0 10.75L25.903 10.75L25.903 9.25L0 9.25L0 10.75Z" fill="#246BFD" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>
      </div>
   </div>
   <!-- service area end -->
   <!-- faq area start -->
   <div class="faq-area faq-area-margin-top bg-cover bg-center pd-top-90 pd-bottom-110 bi-9">
      <div class="container">
         <div class="row pd-top-120">
            <div class="custom-lg:w-6/12 custom-md:w-1/2 custom-sm:w-8/12 order-lg-last hidden custom-md:block">
               <div class="about-thumb-inner custom-md:pt-[16px] animate__animated" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                     <img class="main-img" src="{{ asset('assets/landing/images/faq/one.png') }}" alt="img">
                     <img class="an-img animate-topImageBounce" src="{{ asset('assets/landing/images/faq/two.png') }}" alt="img">
                     <img class="an-img-two animate-topImageBounce" src="{{ asset('assets/landing/images/faq/three.png') }}" alt="img">
               </div>
            </div>
            <div class="custom-lg:w-6/12 custom-md:w-1/2 animate__animated" data-aos="fade-up" data-aos-duration="800">
               <div class="section-title !mb-0">
                     <h6 class="sub-title">Designing for the future</h6>
                     <h2 class="title"><span>We are Experts</span> Security <span>& Data</span> Management </h2>
                     <p class="content">In today's competitive business, the demand for efficient solutions has never been more critical.</p>
               </div>
               <div class="accordion accordion-inner style-2 accordion-icon-left" id="accordionExample">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Network Security & Protection
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                                 <p>Accelerate innovation with world-class tech teams We'll match you to an entire remote team.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Browser Safety & Farewell
                           </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                                 <p>Accelerate innovation with world-class tech teams We'll match you to an entire remote team.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Infrastructure Technology
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                                 <p>Accelerate innovation with world-class tech teams We'll match you to an entire remote team.</p>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- faq area end -->
   <!-- counter area start -->
   <div class="counter-area bg-relative bg-cover bg-center pd-top-110 pd-bottom-100">
      <div class="container pd-bottom-90">
         <div class="row">
            <div class="custom-sm:w-1/2 custom-md:w-1/4  wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
               <div class="single-counter-inner">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/icon/5.svg') }}" alt="img">
                  </div>
                  <h2 class="text-white mt-[24px] mb-[8px]"><span class="counter">200</span>+</h2>
                  <p class="text-white">Team member</p>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4  wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
               data-wow-delay="0.3s">
               <div class="single-counter-inner">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/icon/6.svg') }}" alt="img">
                  </div>
                  <h2 class="text-white mt-[24px] mb-[8px]"><span class="counter">10</span>k+</h2>
                  <p class="text-white">Team member</p>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4  wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
               data-wow-delay="0.6s">
               <div class="single-counter-inner">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/icon/7.svg') }}" alt="img">
                  </div>
                  <h2 class="text-white mt-[24px] mb-[8px]"><span class="counter">200</span>+</h2>
                  <p class="text-white">Team member</p>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4  wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
               data-wow-delay="0.9s">
               <div class="single-counter-inner">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/icon/8.svg') }}" alt="img">
                  </div>
                  <h2 class="text-white mt-[24px] mb-[8px]"><span class="counter">200</span>+</h2>
                  <p class="text-white">Team member</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- counter area end -->
   <!-- case area start -->
   <section class="case-area">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="w-full custom-lg:w-11/12">
               <div class="row tc-p">
                  <div class="w-full custom-xs:w-6/12 custom-md:w-1/3 custom-lg:w-3/12">
                     <div class="case__single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                        <div class="thumb">
                           <img src="{{ asset('assets/landing/images/steps/one-l.png') }}" alt="Image">
                        </div>
                        <div class="details">
                           <div class="int">
                              <h6><a href="about.html">It Managment system</a></h6>
                           </div>
                           <div class="tag">
                              <p>Art Of Direction</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="w-full custom-xs:w-6/12 custom-md:w-1/3 custom-lg:w-3/12">
                     <div class="case__single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <div class="thumb">
                           <img src="{{ asset('assets/landing/images/steps/two-l.png') }}" alt="Image">
                        </div>
                        <div class="details">
                           <div class="int">
                              <h6><a href="about.html">It Managment system</a></h6>
                           </div>
                           <div class="tag">
                              <p>Art Of Direction</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="w-full custom-xs:w-6/12 custom-md:w-1/3 custom-lg:w-3/12">
                     <div class="case__single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                        <div class="thumb">
                           <img src="{{ asset('assets/landing/images/steps/three-l.png') }}" alt="Image">
                        </div>
                        <div class="details">
                           <div class="int">
                              <h6><a href="about.html">It Managment system</a></h6>
                           </div>
                           <div class="tag">
                              <p>Art Of Direction</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="w-full custom-xs:w-6/12 custom-md:w-1/3 custom-lg:w-3/12">
                     <div class="case__single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                        <div class="thumb">
                           <img src="{{ asset('assets/landing/images/steps/four-l.png') }}" alt="Image">
                        </div>
                        <div class="details">
                           <div class="int">
                              <h6><a href="about.html">It Managment system</a></h6>
                           </div>
                           <div class="tag">
                              <p>Art Of Direction</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- case area end -->
   <!-- total area start -->
   <section class="total-area">
      <div class="container">
         <div class="row justify-content-center">
            <div class="w-full custom-md:w-1/2">
               <div class="section-title text-center wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                  <h6 class="sub-title">Designing for the future</h6>
                  <h2 class="title capitalize"><span>Become totally</span> secured
                     <span>by</span> Following 3 <span>steps</span>
                  </h2>
               </div>
            </div>
         </div>
         <div class="row tc-p">
            <div class="w-full custom-sm:w-1/2 custom-md:w-1/3">
               <div class="total-single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/steps/two.png') }}" alt="Image">
                     <span>01</span>
                  </div>
                  <div class="content">
                     <h4>Choose Security Package</h4>
                     <p>Far far away, behind the word mountains
                        and Consonantia, there live the
                     </p>
                  </div>
               </div>
            </div>
            <div class="w-full custom-sm:w-1/2 custom-md:w-1/3">
               <div class="total-single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/steps/one.png') }}" alt="Image">
                     <span>02</span>
                  </div>
                  <div class="content">
                     <h4>Prepare for security test</h4>
                     <p>Far far away, behind the word mountains
                        and Consonantia, there live the
                     </p>
                  </div>
               </div>
            </div>
            <div class="w-full custom-sm:w-1/2 custom-md:w-1/3">
               <div class="total-single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/steps/three.png') }}" alt="Image">
                     <span>03</span>
                  </div>
                  <div class="content">
                     <h4>Get the result & solution</h4>
                     <p>Far far away, behind the word mountains
                        and Consonantia, there live the
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- total area end -->
   <!-- contact-inner-1 start -->
   <div class="contact-area">
      <div class="container">
         <div class="contact-inner-1">
            <div class="row align-items-center tc-p">
               <div class="custom-md:w-1/2 wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                  <div class="contact-inner">
                     <h6 class="subtitle wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        Designing for the future</h6>
                     <h2 class="title wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">Scale
                        <span>your business </span> <br>
                        & <span>revenue</span> to the <span>next</span>
                     </h2>
                     <p class="content custom-lg:pe-[48px] wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.9s">In today's competitive business, the demand for efficient and
                        cost-effective IT solutions has never been more critical.
                     </p>
                     <div class="contact-single-wrapper">
                        <div class="contact-single">
                           <div class="th">
                              <img src="{{ asset('assets/landing/images/icon/6.png') }}" alt="Image">
                           </div>
                           <div class="con">
                              <p>Organizations and <br>
                                 recognized work
                              </p>
                           </div>
                        </div>
                        <div class="contact-single">
                           <div class="th">
                              <img src="{{ asset('assets/landing/images/icon/7.png') }}" alt="Image">
                           </div>
                           <div class="con">
                              <p>Organizations and <br>
                                 recognized work
                              </p>
                           </div>
                        </div>
                     </div>
                     <ul class="!mt-[16px]">
                        <li><i class="fas fa-check"></i>Dedicated Tech Services</li>
                        <li><i class="fas fa-check"></i>Dedicated Tech Services</li>
                     </ul>
                     <a class="btn btn-base btn-white wow animate__animated animate__fadeInUp mt-[48px]" data-wow-duration="0.8s"
                        data-wow-delay="0.6s" href="about.html">Get Started</a>
                  </div>
               </div>
               <div class="custom-md:w-1/2 custom-lg:w-5/12 offset-xl-1 wow animate__animated animate__fadeInRight"
                  data-wow-duration="0.8s" data-wow-delay="0.3s">
                  <div class="section-title !mb-0">
                     <h6 class="sub-title">Contact Us</h6>
                     <h2 class="title">Get In Touch</h2>
                     <p class="content">For your car we will do everything advice design in us repairs and maintenance.
                        We are the some</p>
                     <form class="mt-[24px]">
                        <div class="row">
                           <div class="custom-md:w-1/2">
                              <div class="single-input-inner style-border">
                                 <input type="text" placeholder="Your Name">
                              </div>
                           </div>
                           <div class="custom-md:w-1/2">
                              <div class="single-input-inner style-border">
                                 <input type="text" placeholder="Your Email">
                              </div>
                           </div>
                           <div class="custom-md:w-1/2">
                              <div class="single-input-inner style-border">
                                 <input type="text" placeholder="Your Phone">
                              </div>
                           </div>
                           <div class="custom-md:w-1/2">
                              <div class="single-input-inner style-border">
                                 <input type="text" placeholder="Your Subject">
                              </div>
                           </div>
                           <div class="custom-md:w-full">
                              <div class="single-input-inner style-border">
                                 <textarea placeholder="Message"></textarea>
                              </div>
                           </div>
                           <div class="w-full">
                              <a class="btn btn-black mt-0 w-100 border-radius-5" href="index.html">Submit now</a>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="bg-img bi-31"></div>
   </div>
   <!-- contact-inner-1 end -->
   <!-- team area start -->
   <div class="team-area bg-relative pd-top-120">
      <div class="container">
         <div class="section-title text-center wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
            <h6 class="sub-title">MEET OUR EXPERTS</h6>
            <h2 class="title">We've <span>Exclusive Team</span> member</h2>
         </div>
         <div class="row bs-t">
            <div class="custom-sm:w-1/2 custom-md:w-1/4  custom-lg:w-3/12">
               <div class="single-team-inner text-center wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/team/11.png') }}" alt="img">
                     <ul class="team-social-inner">
                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="details">
                     <h5><a href="team-details.html">Devon Lane</a></h5>
                     <p>Merketing Department</p>
                  </div>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4  custom-lg:w-3/12">
               <div class="single-team-inner text-center wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
                  data-wow-delay="0.3s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/team/12.png') }}" alt="img">
                     <ul class="team-social-inner">
                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="details">
                     <h5><a href="team-details.html">Darrell Steward</a></h5>
                     <p>It Department</p>
                  </div>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4  custom-lg:w-3/12">
               <div class="single-team-inner text-center wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
                  data-wow-delay="0.6s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/team/13.png') }}" alt="img">
                     <ul class="team-social-inner">
                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="details">
                     <h5><a href="team-details.html">Bessie Cooper</a></h5>
                     <p>Software Department</p>
                  </div>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4  custom-lg:w-3/12">
               <div class="single-team-inner text-center wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
                  data-wow-delay="0.9s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/team/14.png') }}" alt="img">
                     <ul class="team-social-inner">
                        <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="index.html"><i class="fab fa-instagram"></i></a></li>
                     </ul>
                  </div>
                  <div class="details">
                     <h5><a href="team-details.html">Bessie Cooper</a></h5>
                     <p>Software Department</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="w-full">
               <div class="text-center mt-[48px]">
                  <a class="btn btn-base" href="team.html">Explore More</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- team area end -->
   <!-- pricing-area start -->
   <div class="pricing-area pd-top-120 pd-bottom-90">
      <div class="container">
         <div class="row justify-content-center">
            <div class="w-full custom-lg:w-5/12">
               <div class="section-title text-center wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                  <h6 class="sub-title">Pricing plan</h6>
                  <h2 class="title capitalize">Our <span>business pricing</span> plan
                     you <span>might like</span>
                  </h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="custom-md:w-1/3 custom-sm:w-1/2">
               <div class="single-pricing-inner style-3 pa-o wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                  <h2 class="mb-[16px]">$19 <sub>/mo</sub></h2>
                  <h5>Starter</h5>
                  <ul>
                     <li><i class="fa fa-check"></i>Mobile App Development</li>
                     <li><i class="fa fa-check"></i>Branding & Identity</li>
                     <li><i class="fa fa-check"></i>Email Marketing & Automation</li>
                     <li><i class="fa fa-check"></i>E-commerce Solutions</li>
                     <li class="hide"><i class="fa fa-check"></i>Social Media Management</li>
                     <li class="hide"><i class="fa fa-check"></i>Video & Animation Production </li>
                  </ul>
                  <a class="btn btn-black border-radius border-radius-0 w-100" href="pricing.html">Get Started</a>
               </div>
            </div>
            <div class="custom-md:w-1/3 custom-sm:w-1/2">
               <div class="single-pricing-inner style-3 price-active pa-t wow animate__animated animate__fadeInUp"
                  data-wow-duration="0.8s" data-wow-delay="0.3s">
                  <h2 class="mb-[16px]">$19 <sub>/mo</sub></h2>
                  <h5>Professional</h5>
                  <ul>
                     <li><i class="fa fa-check"></i>Mobile App Development</li>
                     <li><i class="fa fa-check"></i>Branding & Identity</li>
                     <li><i class="fa fa-check"></i>Email Marketing & Automation</li>
                     <li><i class="fa fa-check"></i>E-commerce Solutions</li>
                     <li class="hide"><i class="fa fa-check"></i>Social Media Management</li>
                     <li class="hide"><i class="fa fa-check"></i>Video & Animation Production </li>
                  </ul>
                  <a class="btn btn-black border-radius border-radius-0 w-100" href="pricing.html">Get Started</a>
               </div>
            </div>
            <div class="custom-md:w-1/3 custom-sm:w-1/2">
               <div class="single-pricing-inner style-3 pa-h wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
                  data-wow-delay="0.6s">
                  <h2 class="mb-[16px]">$19 <sub>/mo</sub></h2>
                  <h5>Enterprise</h5>
                  <ul>
                     <li><i class="fa fa-check"></i>Mobile App Development</li>
                     <li><i class="fa fa-check"></i>Branding & Identity</li>
                     <li><i class="fa fa-check"></i>Email Marketing & Automation</li>
                     <li><i class="fa fa-check"></i>E-commerce Solutions</li>
                     <li class="hide"><i class="fa fa-check"></i>Social Media Management</li>
                     <li class="hide"><i class="fa fa-check"></i>Video & Animation Production </li>
                  </ul>
                  <a class="btn btn-black border-radius border-radius-0 w-100" href="pricing.html">Get Started</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- pricing-area start -->
   <!-- blog-area start -->
   <div class="blog-area pd-top-120 pd-bottom-90">
      <div class="container">
         <div class="section-title wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
            <div class="row">
               <div class="custom-md:w-7/12">
                  <h6 class="sub-title">Recent Blogs</h6>
                  <h2 class="title">Blog & <span>Insights</span></h2>
               </div>
               <div class="custom-md:w-5/12    custom-md:!text-end self-end">
                  <a class="btn btn-base" href="blog.html">View More</a>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="custom-md:w-1/2 custom-sm:w-1/2">
               <div class="single-blog-list wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                  <div class="thumb">
                     <img class="border-radius-5" src="{{ asset('assets/landing/images/blog/4.png') }}" alt="img">
                  </div>
                  <div class="details">
                     <ul class="blog-meta p-0">
                        <li> Blog</li>
                        <li><span></span></li>
                        <li>10 Min</li>
                     </ul>
                     <h4 class="mb-[16px]"><a href="blog-details.html">Building for the real world</a></h4>
                     <p class="mb-[48px]">How friends from college went on to build one powerful
                        platform (hint: it was ours).
                     </p>
                     <a class="btn btn-border-base" href="blog-details.html">Read More <i
                           class="fa fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
            <div class="custom-md:w-1/2 custom-sm:w-1/2">
               <div class="single-blog-list wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                  <div class="thumb">
                     <img class="border-radius-5" src="{{ asset('assets/landing/images/blog/5.png') }}" alt="img">
                  </div>
                  <div class="details">
                     <ul class="blog-meta p-0">
                        <li> Blog</li>
                        <li><span></span></li>
                        <li>10 Min</li>
                     </ul>
                     <h4 class="mb-[16px]"><a href="blog-details.html">Building for the real world</a></h4>
                     <p class="mb-[48px]">How friends from college went on to build one powerful
                        platform (hint: it was ours).
                     </p>
                     <a class="btn btn-border-base" href="blog-details.html">Read More <i
                           class="fa fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- blog-area end -->
   <!-- footer area start -->
   <footer class="footer-area bg-black bg-cover bg-center">
      <div class="footer-subscribe">
         <div class="container">
            <div class="footer-subscribe-inner bg-cover bg-center wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
               <div class="row">
                  <div class="custom-md:w-1/2">
                     <h2 class="custom-md:mb-0 mb-[16px]">Subscribe To Our Newsletter</h2>
                  </div>
                  <div class="custom-md:w-1/2 self-center    custom-md:!text-end">
                     <input type="text" placeholder="Your e-mail address">
                     <a class="btn btn-black border-radius-0" href="index.html">Submit now</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="custom-sm:w-1/2 custom-md:w-1/4 ">
               <div class="widget widget_about wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/logo2.png') }}" alt="img">
                  </div>
                  <div class="details">
                     <p>Melbourne is simply is dumiomy is text Lorem Ipsum is simply</p>
                     <p class="mt-[16px]"><i class="fa fa-phone-alt"></i> (+888) 123 456 765</p>
                     <p class="mt-[8px]"><i class="fas fa-envelope"></i> (+888) 123 456 765</p>
                     <ul class="social-media">
                        <li>
                           <a href="index.html">
                              <i class="fab fa-facebook-f"></i>
                           </a>
                        </li>
                        <li>
                           <a href="index.html">
                              <i class="fab fa-twitter"></i>
                           </a>
                        </li>
                        <li>
                           <a href="index.html">
                              <i class="fab fa-instagram"></i>
                           </a>
                        </li>
                        <li>
                           <a href="index.html">
                              <i class="fab fa-youtube"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4 ">
               <div class="widget widget_nav_menu wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                  <h4 class="widget-title">Our Service</h4>
                  <ul>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Ui Design</a></li>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Web design</a></li>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Digital marketing </a></li>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Video Editing</a></li>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Pc Repairs</a></li>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Web Development</a></li>
                  </ul>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4 ">
               <div class="widget widget_nav_menu wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                  <h4 class="widget-title">Pay links</h4>
                  <ul>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Credit industrys</a></li>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Reasearch sector</a></li>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Finance Sector </a></li>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Credit industrys</a></li>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Reasearch sector</a></li>
                     <li><a href="service.html"><i class="fas fa-arrow-right"></i> Finance Sector</a></li>
                  </ul>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4 ">
               <div class="widget widget-recent-post wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
                  data-wow-delay="0.9s">
                  <h4 class="widget-title">Recent Blog</h4>
                  <ul>
                     <li>
                        <div class="media">
                           <div class="media-left">
                              <img src="{{ asset('assets/landing/images/widget/1.png') }}" alt="blog">
                           </div>
                           <div class="media-body self-center">
                              <div class="post-info mb-[8px]"><i class="far fa-calendar-alt"></i><span>january 11,
                                    2023</span></div>
                              <h6 class="title mb-0"><a href="blog-details.html">Social Media For Promote Business.</a>
                              </h6>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="media">
                           <div class="media-left">
                              <img src="{{ asset('assets/landing/images/widget/2.png') }}" alt="blog">
                           </div>
                           <div class="media-body self-center">
                              <div class="post-info mb-[8px]"><i class="far fa-calendar-alt"></i><span>january 11,
                                    2023</span></div>
                              <h6 class="title mb-0">
                                 <a href="blog-details.html">Marketing For Base market watch</a>
                              </h6>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-bottom !border-[rgba(50,47,47,1)]">
         <div class="container">
            <div class="row">
               <div class="custom-sm:w-1/2 self-center">
                  <p>© AgileTech 2025 | All Rights Reserved</p>
               </div>
               <div class="custom-sm:w-1/2    custom-md:!text-end">
                  <a href="index.html">Terms & Condition</a>
                  <a href="index.html">Privacy Policy</a>
                  <a href="index.html">Contact Us</a>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer area end -->
   <!-- back to top area start -->
   <div class="back-to-top">
      <span class="back-top"><i class="fa fa-angle-up"></i></span>
   </div>
   <!-- back to top area end -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"
      integrity="sha512-UwcC/iaz5ziHX7V6LjSKaXgCuRRqbTp1QHpbOJ4l1nw2/boCfZ2KlFIqBUA/uRVF0onbREnY9do8rM/uT/ilqw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>