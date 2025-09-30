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
                  <a href="index.html">Akademik</a>
                  <ul class="sub-menu">
                     <li><a href="universitas-terbuka.html">Universitas Terbuka</a></li>
                     <li><a href="akreditasi.html">Akreditasi</a></li>
                     <li><a href="program-studi.html">Program Studi</a></li>
                     <li><a href="kegiatan-ut-bagansiapiapi.html">Kegiatan UT Bagansiapiapi</a></li>
                     <li><a href="kalender-akademik.html">Kalender Akademik</a></li>
                     <li><a href="cek-nilai.html">Cek Nilai</a></li>
                     <li><a href="katalog-digital.html">Katalog Digital</a></li>
                     <li><a href="surat-keterangan.html">Surat Keterangan</a></li>
                     <li><a href="seminar-wisuda.html">Seminar dan Wisuda</a></li>
                     <li><a href="ormawa.html">Ormawa</a></li>
                  </ul>
               </li>
               <li class="menu-item-has-children">
                  <a href="index.html">Pendaftaran</a>
                  <ul class="sub-menu">
                    <li><a href="{{ route('informasi.pendaftaran') }}">Informasi Pendaftaran</a></li>
                    <li><a href="{{ route('biaya.pendidikan') }}">Biaya Pendidikan</a></li>
                    <li><a href="{{ route('pendaftaran') }}">Pendaftaran</a></li>
                    <li><a href="{{ route('brosur') }}">Brosur</a></li>
                  </ul>
               </li>
               <li class="menu-item-has-children">
                  <a href="index.html">Layanan UT</a>
                  <ul class="sub-menu">
                     <li><a href="website-ut.html">Website UT</a></li>
                     <li><a href="myut.html">MyUT</a></li>
                     <li><a href="elearning.html">E-Learning</a></li>
                     <li><a href="lms-ut.html">LMS UT</a></li>
                     <li><a href="tutorial-online.html">Tutorial Online Pembelajaran</a></li>
                     <li><a href="unggah-tugas.html">Unggah Tugas</a></li>
                     <li><a href="unggah-tugas-praktek.html">Unggah Tugas Praktek</a></li>
                     <li><a href="pddikti.html">PDDikti</a></li>
                  </ul>
               </li>
               <li class="underline">
                  <a href="{{ route('informasi') }}">Informasi</a>
               </li>
               <li class="underline">
                  <a href="{{ route('tentang-kami') }}">Tentang Kami</a>
               </li>
            </ul>
         </div>
         <div class="nav-right-part nav-right-part-desktop custom-md:inline-flex items-center">
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