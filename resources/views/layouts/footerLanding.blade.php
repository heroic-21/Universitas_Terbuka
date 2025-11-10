<!-- footer area start -->
   <footer class="footer-area bg-black bg-cover bg-center">
      <div class="footer-subscribe">
         <div class="container">
            <div class="footer-subscribe-inner bg-cover bg-center wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
               
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="custom-sm:w-1/2 custom-md:w-1/4">
               <div class="widget widget_about wow animate__animated animate__fadeInUp" data-wow-duration="0.8s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/LOGOSALUT2.png') }}?v={{ time() }}" alt="img">
                  </div>
                  <div class="details">
                     <p>Jam Layanan: Hari Senin–Jum'at  Jam 09.00 – 16.00</p>
                     <p>Sabtu, Minggu Tanggal Merah/Cuti Bersama (TUTUP)</p>
                     <p class="mt-[16px]"><i class="fa fa-map-marker-alt"></i>Alamat: Jl. Bakti No.17, Bagan Barat, Bangko, Rokan Hilir Regency, Riau 28912</p>
                     <p class="mt-[16px]"><i class="fa fa-phone-alt"></i>Admin 1: (WA) 0821-1381-5800</p>
                     <p class="mt-[16px]"><i class="fa fa-phone-alt"></i>Admin 2: (WA) 0812-6862-509</p>
                     <p class="mt-[16px]"><i class="fas fa-phone-alt"></i>Admin 3: (WA) 0852-4622-0297</p>
                     <ul class="social-media">
                       <li>
                          <a href="https://www.facebook.com/salutnegeri1000kubahbaa" target="_blank" title="Facebook">
                             <i class="fab fa-facebook-f"></i>
                          </a>
                       </li>
                       <li>
                          <a href="https://www.tiktok.com/@salut.bagansiapiapi" target="_blank" title="TikTok">
                             <i class="fab fa-tiktok"></i>
                          </a>
                       </li>
                       <li>
                          <a href="https://www.instagram.com/salutbagansiapiapi" target="_blank" title="Instagram">
                             <i class="fab fa-instagram"></i>
                          </a>
                       </li>
                    </ul>
                  </div>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4 ">
               <div class="widget widget_nav_menu wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                  <h4 class="widget-title">Layanan Kami</h4>
                  <ul>
                     <li><a href="{{ route('informasi.pendaftaran') }}"><i class="fas fa-arrow-right"></i> Informasi Pendaftaran</a></li>
                     <li><a href="{{ route('pendaftaran') }}"><i class="fas fa-arrow-right"></i> Pendaftaran</a></li>
                  </ul>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4 ">
               <div class="widget widget_nav_menu wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                  <h4 class="widget-title">Akses Cepat</h4>
                  <ul>
                     <li><a target="_blank" href="https://ut.ac.id"><i class="fas fa-arrow-right"></i> Universitas Terbuka</a></li>
                     <li><a target="_blank" href="https://silayar.ut.ac.id/login/index.php"><i class="fas fa-arrow-right"></i> LMS UT</a></li>
                     <li><a target="_blank" href="https://elearning.ut.ac.id/mod/forum/discuss.php?d=49"><i class="fas fa-arrow-right"></i> Tutorial Online </a></li>
                     <li><a target="_blank" href="https://tmk.ut.ac.id/tmkui/#/"><i class="fas fa-arrow-right"></i> Unggah Tugas</a></li>
                     <li><a target="_blank" href="https://praktik.ut.ac.id/custom_login"><i class="fas fa-arrow-right"></i> Unggah Tugas Praktek</a></li>
                     <li><a target="_blank" href="https://pddikti.kemdiktisaintek.go.id/"><i class="fas fa-arrow-right"></i> PDDikti</a></li>
                  </ul>
               </div>
            </div>
            <div class="custom-sm:w-1/2 custom-md:w-1/4 ">
               <div class="widget widget_nav_menu wow animate__animated animate__fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                  <h4 class="widget-title">Lokasi Kami</h4>
                     <div class="mapouter mt-4">
                        <div class="gmap_canvas">
                           <iframe 
                              class="w-full h-64 rounded-lg"
                              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63756.17177914623!2d100.5517326!3d2.1462254!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e18b17b246a67%3A0x3039d80b220c5c0!2s5R52%2BR7%20Bagan%20Barat%2C%20Rokan%20Hilir%20Regency%2C%20Riau!5e0!3m2!1sid!2sid!4v1695556000000!5m2!1sid!2sid" 
                              width="100%" 
                              height="250" 
                              style="border:0;" 
                              allowfullscreen="" 
                              loading="lazy" 
                              referrerpolicy="no-referrer-when-downgrade">
                           </iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-bottom !border-[rgba(50,47,47,1)]">
        <div class="container">
            <div class="row">
                <div class="custom-sm:w-1/2 self-center">
                    <p style="margin-left:90px;">© Hardi Ananda 2025 | All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
   </footer>
   <!-- footer area end -->
   <!-- back to top area start -->
    <!-- Tombol WhatsApp (kiri bawah) -->
    <a href="https://wa.me/6282113815800" target="_blank" class="whatsapp-float">
        <i class="fab fa-whatsapp"></i>
        <span>Hubungi Kami</span>
    </a>
    
    <!-- Tombol Back to Top (kanan bawah) -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>