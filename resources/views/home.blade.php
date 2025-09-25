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
                  <a href="index.html">Beranda</a>
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
                  <a href="index.html">Akademik</a>
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
                  <a href="index.html">Pendaftaran</a>
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
                  <a href="index.html">Layanan UT</a>
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
               <li class="menu-item-has-children">
                  <a href="index.html">Galeri</a>
                  <ul class="sub-menu">
                     <li><a href="blog.html">Blog 01</a></li>
                     <li><a href="blog-2.html">Blog 02</a></li>
                     <li><a href="blog-3.html">Blog 03</a></li>
                     <li><a href="blog-4.html">Blog 04</a></li>
                     <li><a href="blog-details.html">Blog Details</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="nav-right-part nav-right-part-desktop custom-md:inline-flex items-center">
            <a class="btn btn-border-base" href="about.html">Login Admin</a>
            <a class="navbar-phone custom-lg:!inline-block !hidden" href="tel:123-456789">
               <span class="icon">
                  <img src="{{ asset('assets/landing/images/icon/1.png') }}" alt="img">
               </span>
               <span>Contact Person (Yudi)</span>
               <h5>0852-4622-0297</h5>
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
                  Belajar di mana saja, kapan saja
                  </h6>
                  <h2 class="title" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                  SALUT UT <span class="highlight">Bagansiapiapi</span> Layanan Pendidikan Tinggi <span class="highlight">next level</span>
                  </h2>
                  <p class="content custom-lg:pe-[48px]" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900">
                  Pendaftaran, pengambilan modul, konsultasi akademik & administrasi jadi lebih mudah, fleksibel, dan terpercaya.
                  </p>
                  <a class="btn btn-base" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" href="about.html">
                  Daftar UT Bagansiapiapi
                  </a>
                  <div class="inline-block self-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700">
                  <a class="video-play-btn-hover !static" href="https://www.youtube.com/embed/Wimkqo8gDZ0">
                     <img src="{{ asset('assets/landing/images/video.svg') }}" alt="img">
                     <h6 class="inline-block">Universitas Terbuka</h6>
                  </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <img class="animate-img-1 animate-topImageBounce" src="{{ asset('assets/landing/images/banner/2.png') }}" alt="img">
      <img class="animate-img-2 animate-leftImageBounce" src="{{ asset('assets/landing/images/banner/5.svg') }}" alt="img">
      <div class="banner-14-thumb">
         <img src="{{ asset('assets/landing/images/MHSUT.png') }}" alt="Image">
      </div>
      <div class="banner-13-thumb-sm">
         <img src="{{ asset('assets/landing/images/home-14/banner/banner-shape.png') }}" alt="Image">
      </div>
      <img src="{{ asset('assets/landing/images/LogoUTHitam.png') }}" alt="Image" class="fig">
      <img src="{{ asset('assets/landing/images/LOGOROHIL.png') }}" alt="Image" class="sketch">
      <img src="{{ asset('assets/landing/images/LogoUT.png') }}" alt="Image" class="triangle">
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
                        <img src="{{ asset('assets/landing/images/LogoTUTWURI.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoKM.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoBANPT.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoROHILMini.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoUT1.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoUT2.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoTUTWURI.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoKM.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoBANPT.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoROHILMini.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoUT1.png') }}" alt="Image">
                     </div>
                     <div class="partner__slider-single">
                        <img src="{{ asset('assets/landing/images/LogoUT2.png') }}" alt="Image">
                     </div>
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
                  <img class="main-img" src="{{ asset('assets/landing/images/MHSUT2.png') }}" alt="img">
               </div>
            </div>
            <div class="custom-md:w-1/2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
               <div class="section-title mt-[48px] mb-0 custom-md:mt-0">
                  <h6 class="sub-title uppercase">Universitas Terbuka Bagansiapiapi</h6>
                  <h2 class="title"><span>SEMUA BISA KULIAH DI KAMPUS NEGERI.</span> #Universitas Terbuka
                  </h2>
                  <p class="content !mb-[24px] custom-lg:!mb-[48px]">SALUT UT Bagansiapiapi hadir sebagai pusat layanan resmi Universitas Terbuka, memberikan kemudahan bagi mahasiswa untuk mendapatkan informasi, 
                     layanan akademik, hingga pendampingan belajar tanpa harus jauh ke kota besar.</p>
                  <div class="row tr-g">
                     <div class="custom-sm:w-1/2 custom-md:w-full custom-2xl:w-6/12">
                        <div class="single-about-inner">
                           <div class="thumb mb-[16px]">
                              <img src="{{ asset('assets/landing/images/Akademik.png') }}" alt="img">
                           </div>
                           <div class="details">
                              <h5 class="font-bold ">Layanan Akademik</h5>
                              <p>Konsultasi pendaftaran, administrasi kuliah, hingga bantuan akademik.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="custom-sm:w-1/2 custom-md:w-full custom-2xl:w-6/12">
                        <div class="single-about-inner">
                           <div class="thumb mb-[16px]">
                              <img src="{{ asset('assets/landing/images/Belajar.png') }}" alt="img">
                           </div>
                           <div class="details font-bold">
                              <h5>Pendampingan Belajar</h5>
                              <p>Tutorial, bimbingan, dan fasilitas belajar yang mendukung kesuksesan studi Anda.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="about-area-on">
                     <div class="about-si">
                        <p><i class="fas fa-check-circle"></i>Fleksibel & Terjangkau.</p>
                     </div>
                     <div class="about-si">
                        <p><i class="fas fa-check-circle"></i>Kualitas Pendidikan Terjamin</p>
                     </div>
                  </div>
                  <div class="about-area-of">
                     <div class="area-left">
                        <a class="btn btn-base mt-0" href="about.html" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" href="about.html">Daftar UT Sekarang</a>
                     </div>
                     <div class="area-right">
                        <div class="img-gp-wrap">
                           <div class="img-gp">
                              <img src="{{ asset('assets/landing/images/about/37.png') }}" alt="Image">
                              <img src="{{ asset('assets/landing/images/about/38.png') }}" alt="Image">
                              <img src="{{ asset('assets/landing/images/about/36.png') }}" alt="Image">
                           </div>
                           <h5>2.3K+ Pendaftar</h5>
                        </div>
                        <p class="mb-0">400+ Mahasiswa Aktif</p>
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
            <h6 class="sub-title">Sentral Layanan Universitas Terbuka Bagansiapiapi</h6>
            <h2 class="title">Daftar Fakultas UT Bagansiapiapi</h2>
         </div>
      <div class="section-title text-center" data-aos="fade-up" data-aos-duration="800">
   </div>

<div class="row">
  <div class="custom-md:w-1/2 custom-sm:w-1/2">
    <div class="single-service-inner text-center" data-aos="fade-up" data-aos-duration="800">
      <div class="thumb">
        <img src="{{ asset('assets/landing/images/FKIP.png') }}" alt="img">
      </div>
      <div class="details">
        <h5><a href="service-details.html">Fakultas Keguruan dan Ilmu Pendidikan - 12 Program Studi</a></h5>
        <p>Sebuah fakultas di universitas yang berfokus pada pendidikan calon pendidik dan profesional di bidang pendidikan.</p>
        <a href="service-details.html">
          Lihat Informasi
          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="20" viewBox="0 0 34 20" fill="none">
            <circle cx="24" cy="10" r="9.5" stroke="#BDC2C6" />
            <path d="M26.4333 10.5303C26.7262 10.2374 26.7262 9.76256 26.4333 9.46967L21.6603 4.6967C21.3674 4.40381 20.8925 4.40381 20.5996 4.6967C20.3068 4.98959 20.3068 5.46447 20.5996 5.75736L24.8423 10L20.5996 14.2426C20.3068 14.5355 20.3068 15.0104 20.5996 15.3033C20.8925 15.5962 21.3674 15.5962 21.6603 15.3033L26.4333 10.5303ZM0 10.75L25.903 10.75L25.903 9.25L0 9.25L0 10.75Z" fill="#246BFD" />
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="custom-md:w-1/2 custom-sm:w-1/2">
    <div class="single-service-inner text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
      <div class="thumb">
        <img src="{{ asset('assets/landing/images/FHSIP.png') }}" alt="img">
      </div>
      <div class="details">
        <h5><a href="service-details.html">Fakultas Hukum, Ilmu Sosial, dan Politik - 10 Program Studi</a></h5>
        <p>Sebuah fakultas yang berfokus pada ilmu hukum, sosial, dan politik untuk mencetak lulusan yang kompeten dan berintegritas.</p>
        <a href="service-details.html">
          Lihat Informasi
          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="20" viewBox="0 0 34 20" fill="none">
            <circle cx="24" cy="10" r="9.5" stroke="#BDC2C6" />
            <path d="M26.4333 10.5303C26.7262 10.2374 26.7262 9.76256 26.4333 9.46967L21.6603 4.6967C21.3674 4.40381 20.8925 4.40381 20.5996 4.6967C20.3068 4.98959 20.3068 5.46447 20.5996 5.75736L24.8423 10L20.5996 14.2426C20.3068 14.5355 20.3068 15.0104 20.5996 15.3033C20.8925 15.5962 21.3674 15.5962 21.6603 15.3033L26.4333 10.5303ZM0 10.75L25.903 10.75L25.903 9.25L0 9.25L0 10.75Z" fill="#246BFD" />
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="custom-md:w-1/2 custom-sm:w-1/2">
    <div class="single-service-inner text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
      <div class="thumb">
        <img src="{{ asset('assets/landing/images/FEB.png') }}" alt="img">
      </div>
      <div class="details">
        <h5><a href="service-details.html">Fakultas Ekonomi dan Bisnis - 6 Program Studi</a></h5>
        <p>Sebuah fakultas yang berfokus pada pengembangan ilmu ekonomi, manajemen, dan bisnis untuk mencetak lulusan yang profesional.</p>
        <a href="service-details.html">
          Lihat Informasi
          <svg xmlns="http://www.w3.org/2000/svg" width="34" height="20" viewBox="0 0 34 20" fill="none">
            <circle cx="24" cy="10" r="9.5" stroke="#BDC2C6" />
            <path d="M26.4333 10.5303C26.7262 10.2374 26.7262 9.76256 26.4333 9.46967L21.6603 4.6967C21.3674 4.40381 20.8925 4.40381 20.5996 4.6967C20.3068 4.98959 20.3068 5.46447 20.5996 5.75736L24.8423 10L20.5996 14.2426C20.3068 14.5355 20.3068 15.0104 20.5996 15.3033C20.8925 15.5962 21.3674 15.5962 21.6603 15.3033L26.4333 10.5303ZM0 10.75L25.903 10.75L25.903 9.25L0 9.25L0 10.75Z" fill="#246BFD" />
          </svg>
        </a>
      </div>
    </div>
  </div>

  <div class="custom-md:w-1/2 custom-sm:w-1/2">
    <div class="single-service-inner text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
      <div class="thumb">
        <img src="{{ asset('assets/landing/images/FST.png') }}" alt="img">
      </div>
      <div class="details">
        <h5><a href="service-details.html">Fakultas Sains dan Teknologi - 8 Program Studi</a></h5>
        <p>Sebuah fakultas yang berfokus pada pengembangan ilmu sains dan teknologi untuk mencetak lulusan yang inovatif, dan berdaya guna.</p>
        <a href="service-details.html">
          Lihat Informasi
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
<!-- pricing-area start -->
   <div class="pricing-area pd-top-100 pd-bottom-90">
      <div class="container">
         <div class="row justify-content-center">
            <div class="w-full custom-lg:w-5/12">
               <div class="section-title text-center wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                  <h6 class="sub-title">Sentral Layanan Universitas Terbuka Bagansiapiapi</h6>
                  <h2 class="title capitalize"><span>Daftar Program Studi</span> UT Bagansiapiapi
                  </h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="custom-md:w-1/2 custom-sm:w-1/2">
               <div class="single-pricing-inner style-3 pa-o wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                  <h2 class="mb-[16px]">Fakultas Keguruan dan Ilmu Pendidikan <sub>/FKIP</sub></h2>
                  <h5>12 Program Studi</h5>
                  <ul>
                     <li><i class="fa fa-check"></i>Pendidikan Bahasa dan Sastra Indonesia (S1)</li>
                     <li><i class="fa fa-check"></i>Pendidikan Bahasa Inggris (S1)</li>
                     <li><i class="fa fa-check"></i>Pendidikan Biologi (S1)</li>
                     <li><i class="fa fa-check"></i>Pendidikan Fisika (S1)</li>
                     <li><i class="fa fa-check"></i>Pendidikan Kimia (S1)</li>
                     <li><i class="fa fa-check"></i>Pendidikan Matematika (S1)</li>
                     <li><i class="fa fa-check"></i>Pendidikan Ekonomi (S1)</li>
                     <li><i class="fa fa-check"></i>Pendidikan Pancasila & Kewarganegaraan (S1)</li>
                     <li><i class="fa fa-check"></i>Teknologi Pendidikan (S1)</li>
                     <li><i class="fa fa-check"></i>Pendidikan Guru Sekolah Dasar (S1)</li>
                     <li><i class="fa fa-check"></i>Pendidikan Guru Pendidikan Anak Usia Dini (S1)</li>
                     <li><i class="fa fa-check"></i>Pendidikan Agama Islam (S1)</li>
                  </ul>
               </div>
            </div>
            <div class="custom-md:w-1/2 custom-sm:w-1/2">
               <div class="single-pricing-inner style-3 price-active pa-t wow animate__animated animate__fadeInUp"
                  data-wow-duration="0.8s" data-wow-delay="0.3s">
                  <h2 class="mb-[16px]">Fakultas Hukum, Ilmu Sosial, dan Politik<sub>/FHSIP</sub></h2>
                  <h5>10 Program Studi</h5>
                  <ul>
                     <li><i class="fa fa-check"></i>Ilmu Administrasi Publik (S1)</li>
                     <li><i class="fa fa-check"></i>Ilmu Administrasi Bisnis (S1)</li>
                     <li><i class="fa fa-check"></i>Ilmu Pemerintahan (S1)</li>
                     <li><i class="fa fa-check"></i>Ilmu Komunikasi (S1)</li>
                     <li><i class="fa fa-check"></i>Sosiologi (S1)</li>
                     <li><i class="fa fa-check"></i>Sastra Inggris Minat Penerjemahan (S1)</li>
                     <li><i class="fa fa-check"></i>Ilmu Perpustakaan (S1)</li>
                     <li><i class="fa fa-check"></i>Ilmu Hukum (S1)</li>
                     <li><i class="fa fa-check"></i>Kearsipan (D4)</li>
                     <li><i class="fa fa-check"></i>Perpajakan (D3 & S1)</li>
                  </ul>
               </div>
            </div>
            <div class="custom-md:w-1/2 custom-sm:w-1/2">
               <div class="single-pricing-inner style-3 pa-h wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
                  data-wow-delay="0.6s">
                  <h2 class="mb-[16px]">Fakultas Ekonomi dan Bisnis<sub>/FEB</sub></h2>
                  <h5>6 Program Studi</h5>
                  <ul>
                     <li><i class="fa fa-check"></i>Akuntansi Keuangan Publik (S1)</li>
                     <li><i class="fa fa-check"></i>Ekonomi Syariah (S1)</li>
                     <li><i class="fa fa-check"></i>Manajemen (S1)</li>
                     <li><i class="fa fa-check"></i>Akuntansi (S1)</li>
                     <li><i class="fa fa-check"></i>Ekonomi Pembangunan (S1)</li>
                     <li><i class="fa fa-check"></i>Pariwisata (S1)</li>
                  </ul>
               </div>
            </div>
            <div class="custom-md:w-1/2 custom-sm:w-1/2">
               <div class="single-pricing-inner style-3 price-active pa-t wow animate__animated animate__fadeInUp"
                  data-wow-duration="0.8s" data-wow-delay="0.3s">
                  <h2 class="mb-[16px]">Fakultas Sains dan Teknologi<sub>/FST</sub></h2>
                  <h5>8 Program Studi</h5>
                  <ul>
                     <li><i class="fa fa-check"></i>Sistem Informasi (S1)</li>
                     <li><i class="fa fa-check"></i>Statistik (S1)</li>
                     <li><i class="fa fa-check"></i>Matematika (S1)</li>
                     <li><i class="fa fa-check"></i>Biologi (S1)</li>
                     <li><i class="fa fa-check"></i>Teknologi Pangan (S1)</li>
                     <li><i class="fa fa-check"></i>Agribisnis (S1)</li>
                     <li><i class="fa fa-check"></i>Perencanaan Wilayah & Kota/PWKL (S1)</li>
                     <li><i class="fa fa-check"></i>Sains Data (S1)</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- pricing-area start -->
   <!-- counter area start -->
   <div class="counter-area bg-relative bg-cover bg-center pd-top-110 pd-bottom-100">
      <div class="container pd-bottom-20">
         <div class="row">
            <div class="custom-sm:w-1/2 custom-md:w-1/4  wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
               <div class="single-counter-inner">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/LogoFAKULTAS.png') }}" alt="img">
                  </div>
                  <h2 class="text-white mt-[24px] mb-[8px]"><span class="counter">4</span></h2>
                  <p class="text-white">Fakultas Tersedia</p>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4  wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
               data-wow-delay="0.3s">
               <div class="single-counter-inner">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/LogoPRODI.png') }}" alt="img">
                  </div>
                  <h2 class="text-white mt-[24px] mb-[8px]"><span class="counter">38</span></h2>
                  <p class="text-white">Program Studi Tersedia</p>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4  wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
               data-wow-delay="0.6s">
               <div class="single-counter-inner">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/LogoMHS.png') }}" alt="img">
                  </div>
                  <h2 class="text-white mt-[24px] mb-[8px]"><span class="counter">2.4</span>k+</h2>
                  <p class="text-white">Mahasiswa Aktif</p>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4  wow animate__animated animate__fadeInUp" data-wow-duration="0.8s"
               data-wow-delay="0.9s">
               <div class="single-counter-inner">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/LogoPENDAFTAR.png') }}" alt="img">
                  </div>
                  <h2 class="text-white mt-[24px] mb-[8px]"><span class="counter">5</span>k+</h2>
                  <p class="text-white">Pendaftar UT</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- counter area end -->
   <!-- faq area start -->
   <div class="faq-area faq-area-margin-top bg-cover bg-center pd-top-90 pd-bottom-110 bi-9">
      <div class="container">
         <div class="row pd-top-120">
            <div class="custom-lg:w-6/12 custom-md:w-1/2 custom-sm:w-8/12 order-lg-last hidden custom-md:block">
               <div class="about-thumb-inner custom-md:pt-[16px] animate__animated" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                     <img class="main-img pt-[10rem]" src="{{ asset('assets/landing/images/MHS3.png') }}" alt="img">
                     <img class="an-img animate-topImageBounce" src="{{ asset('assets/landing/images/Elemen1.png') }}" alt="img">
                     <img class="an-img-two animate-topImageBounce" src="{{ asset('assets/landing/images/Elemen2.png') }}" alt="img">
               </div>
            </div>
            <div class="custom-lg:w-6/12 custom-md:w-1/2 animate__animated" data-aos="fade-up" data-aos-duration="800">
               <div class="section-title !mb-0">
                     <h6 class="sub-title">SALUT Negeri Seribu Kubah</h6>
                     <h2 class="title"><span>Pertanyaan yang</span> Sering <span> Diajukan</span></h2>
                     {{-- <p class="content">In today's competitive business, the demand for efficient solutions has never been more critical.</p> --}}
               </div>
               <div class="accordion accordion-inner style-2 accordion-icon-left" id="accordionExample">
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Apakah sudah di buka penerimaan mahasiswa Baru
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                                 <p>Ya, Pendaftaran Mahasiswa Baru Universitas Terbuka (UT) untuk masa registrasi 2025.2  TELAH RESMI DI BUKA MULAI  1 September 2025.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 Bagaimana kelembagaan UT
                           </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                                 <p>Universitas Terbuka (UT) adalah Perguruan Tinggi Negeri (PTN) yang berdiri sejak tahun 1984, berpusat di Pondok Cabe, Tangerang Selatan, Banten. UT berada langsung di bawah naungan Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek). Sebagai kampus negeri penyelenggara pendidikan jarak jauh (PJJ) / online</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Bagaimana gambaran sistem kuliah di Universitas Terbuka
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                                 <p class="font-bold">Fleksibel dan 100% Online</p>
                                 <p class="font-bold">Belajar Mandiri namun Terarah</p>
                                 <p class="font-bold">Evaluasi/Ujian Akhir Semester (UAS)</p>
                                 <p class="font-bold">Resmi dan Bermutu</p>
                                 <p>Dengan sistem perkuliahan tersebut, Universitas Terbuka menghadirkan pendidikan tinggi yang fleksibel, terjangkau, dan terpercaya. Model ini sangat sesuai bagi lulusan baru, pekerja, pendidik, maupun masyarakat umum yang ingin melanjutkan pendidikan tanpa harus meninggalkan kesibukan sehari-hari.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                 Bagaimana jadwal perkuliahan di UT
                           </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                                 <p>Universitas Terbuka tidak menetapkan jadwal perkuliahan tetap seperti perguruan tinggi konvensional. Sistem pembelajaran di UT bersifat fleksibel, sehingga mahasiswa dapat mengatur sendiri waktu belajar sesuai dengan aktivitas dan kesibukan masing-masing.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 Apakah di UT bisa kuliah sambil kerja?
                           </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                                 <p>Justru Universitas Terbuka memang dirancang khusus untuk masyarakat yang ingin melanjutkan pendidikan tinggi sambil tetap bekerja atau menjalankan aktivitas lain.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                 Apa itu SALUT?
                           </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                                 <p>SALUT (Sentra Layanan Universitas Terbuka) adalah pusat layanan resmi Universitas Terbuka (UT) yang tersebar di berbagai daerah di Indonesia, termasuk SALUT AWWABIN TANGERANG. Kehadiran SALUT bertujuan mendekatkan UT dengan mahasiswa dan masyarakat di daerah.</p>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- faq area end -->
   <!-- case area start -->
   <section class="case-area pd-top-110">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="w-full custom-lg:w-11/12">
               <div class="row tc-p">
                  <div class="w-full custom-xs:w-6/12 custom-md:w-1/3 custom-lg:w-3/12">
                     <div class="case__single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                        <div class="thumb">
                           <img src="{{ asset('assets/landing/images/IMGUT1.png') }}" alt="Image">
                        </div>
                        <div class="details">
                           <div class="int">
                              <h6><a href="about.html">Lokasi</a></h6>
                           </div>
                           <div class="tag">
                              <p>SALUT Negeri Seribu Kubah</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="w-full custom-xs:w-6/12 custom-md:w-1/3 custom-lg:w-3/12">
                     <div class="case__single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <div class="thumb">
                           <img src="{{ asset('assets/landing/images/IMGUT2.png') }}" alt="Image">
                        </div>
                        <div class="details">
                           <div class="int">
                              <h6><a href="about.html">Mahasiswa</a></h6>
                           </div>
                           <div class="tag">
                              <p>SALUT Negeri Seribu Kubah</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="w-full custom-xs:w-6/12 custom-md:w-1/3 custom-lg:w-3/12">
                     <div class="case__single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                        <div class="thumb">
                           <img src="{{ asset('assets/landing/images/IMGUT3.png') }}" alt="Image">
                        </div>
                        <div class="details">
                           <div class="int">
                              <h6><a href="about.html">Administrasi</a></h6>
                           </div>
                           <div class="tag">
                              <p>SALUT Negeri Seribu Kubah</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="w-full custom-xs:w-6/12 custom-md:w-1/3 custom-lg:w-3/12">
                     <div class="case__single wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                        <div class="thumb">
                           <img src="{{ asset('assets/landing/images/IMGUT4.png') }}" alt="Image">
                        </div>
                        <div class="details">
                           <div class="int">
                              <h6><a href="about.html">Kegiatan</a></h6>
                           </div>
                           <div class="tag">
                              <p>SALUT Negeri Seribu Kubah</p>
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