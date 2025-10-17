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
            <a href="index.html"><img src="{{ asset('assets/landing/images/LOGOSALUT.png') }}" alt="img"></a>
         </div>
         <div class="nav-right-part nav-right-part-mobile">
            <a class="search-bar-btn" href="index.html">
               <i class="fa fa-search"></i>
            </a>
         </div>
         <div class="collapse navbar-collapse" id="itech_main_menu">
            <ul class="navbar-nav menu-open custom-md:!text-center custom-md:ps-[48px]">
               <li class="underline">
                  <a href="{{ route('beranda.utama') }}">Beranda</a>
               </li>
               <li class="menu-item-has-children">
                  <a href="index.html">Pendaftaran</a>
                  <ul class="sub-menu">
                    <li><a href="{{ route('informasi.pendaftaran') }}">Informasi Pendaftaran</a></li>
                    <li><a href="{{ route('biaya.pendidikan') }}">Program Studi</a></li>
                    <li><a href="{{ route('pendaftaran') }}">Pendaftaran</a></li>
                    <li><a href="{{ route('brosur.indexPublic') }}">Brosur</a></li>
                  </ul>
               </li>
               <li class="menu-item-has-children">
                  <a href="index.html">Layanan UT</a>
                  <ul class="sub-menu">
                     <li><a href="https://ut.ac.id">Universitas Terbuka</a></li>
                     <li><a href="https://myut.ut.ac.id/">MyUT</a></li>
                     <li><a href="https://elearning.ut.ac.id/">E-Learning</a></li>
                     <li><a href="https://silayar.ut.ac.id/login/index.php">LMS UT</a></li>
                     <li><a href="https://elearning.ut.ac.id/mod/forum/discuss.php?d=49">Tutorial Online Pembelajaran</a></li>
                     <li><a href="https://tmk.ut.ac.id/tmkui/#/">Unggah Tugas</a></li>
                     <li><a href="https://praktik.ut.ac.id/custom_login">Unggah Tugas Praktek</a></li>
                     <li><a href="https://pddikti.kemdiktisaintek.go.id/">PDDikti</a></li>
                     <li><a href="https://kpm.ut.ac.id/en/akreditasi-prodi">Akreditasi</a></li>
                     <li><a href="https://www.ut.ac.id/kalender-akademik/">Kalender Akademik</a></li>
                     <li><a href="https://www.ut.ac.id/katalog/">Katalog Digital</a></li>
                  </ul>
               </li>
               {{-- <li class="underline">
                  <a href="{{ route('informasi') }}">Informasi</a>
               </li> --}}
               <li class="underline">
                  <a href="{{ route('tentang-kami') }}">Tentang Kami</a>
               </li>
            </ul>
         </div>
         <div class="nav-right-part nav-right-part-desktop custom-md:inline-flex items-center">
            <a class="navbar-phone custom-lg:!inline-block !hidden" href="https://wa.me/085246220297">
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