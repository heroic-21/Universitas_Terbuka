<!DOCTYPE html>
<html lang="zxx">

@include('layouts.headLink')

<body>
   @include('layouts.headerLanding')
   <!-- page title start -->
   @include('layouts.pageTitle', ['title' => 'Biaya Pendidikan'])
   <!-- page title end -->
   <!-- service area start -->
   <div class="service-area bg-relative">
      <div class="section-title text-center wow animated fadeInUp" data-wow-duration="0.8s">
            <h6 class="sub-title">FST UT BAGANSIAPIAPI</h6>
            <h2 class="title">FAKULTAS<span> Sains & Teknologi</span></h2>
         </div>
      <div class="container">
         <div class="row">
            <div class="custom-md:w-1/3 custom-sm:w-1/2">
               <div class="single-service-inner text-center wow animated fadeInUp" data-wow-duration="0.8s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/service-icon/1.png') }}" alt="img">
                  </div>
                  <div class="details">
                     <h5><a href="service-details.html">S1 Sistem Informasi</a></h5>
                     
                     <!-- Nama Prodi -->
                     <p><strong>Program Studi:</strong> Sistem Informasi</p>
                     
                     <!-- Deskripsi Singkat -->
                     <p>
                        Program studi ini mempersiapkan lulusan dengan kompetensi di bidang
                        manajemen informasi, analisis data, dan pengembangan sistem berbasis
                        teknologi informasi yang sesuai kebutuhan industri.
                     </p>
                     
                     <!-- Biaya Pendidikan -->
                     <p><strong>Biaya Pendidikan:</strong></p>
                     <ul class="list-disc list-inside text-left">
                        <li>SIPAS: Rp 1.300.000 per semester</li>
                        <li>Non-SIPAS: Rp 36.000 per SKS</li>
                     </ul>

                     <a class="btn btn-border-base" href="service-details.html">
                        Tentang Prodi <i class="fa fa-plus"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="custom-md:w-1/3 custom-sm:w-1/2">
               <div class="single-service-inner text-center wow animated fadeInUp" data-wow-duration="0.8s"
                  data-wow-delay="0.3s">
                  <div class="thumb">
                     <img src="./images/service-icon/2.png" alt="img">
                  </div>
                  <div class="details">
                     <h5><a href="service-details.html">S1 Statistika</a></h5>

                     <!-- Nama Prodi -->
                     <p><strong>Program Studi:</strong> Statistika</p>

                     <!-- Deskripsi Singkat -->
                     <p>
                        Program studi ini membekali mahasiswa dengan kemampuan analisis data, 
                        pemodelan statistik, serta penerapan metode kuantitatif dalam berbagai 
                        bidang seperti bisnis, industri, pemerintahan, dan riset ilmiah.
                     </p>

                     <!-- Biaya Pendidikan -->
                     <p><strong>Biaya Pendidikan:</strong></p>
                     <ul class="list-disc list-inside text-left">
                        <li>SIPAS: Rp 1.300.000 per semester</li>
                        <li>Non-SIPAS: Rp 36.000 per SKS</li>
                     </ul>
                     <a class="btn btn-border-base" href="service-details.html">
                        Tentang Prodi <i class="fa fa-plus"></i>
                     </a>
                  </div>
               </div>
            </div>
            <div class="custom-md:w-1/3 custom-sm:w-1/2">
               <div class="single-service-inner text-center wow animated fadeInUp" data-wow-duration="0.8s"
                  data-wow-delay="0.6s">
                  <div class="thumb">
                     <img src="{{ asset('assets/landing/images/service-icon/3.png') }}" alt="img">
                  </div>
                  <div class="details">
                     <h5><a href="service-details.html">S1 Matematika</a></h5>

                     <!-- Nama Prodi -->
                     <p><strong>Program Studi:</strong> Matematika</p>

                     <!-- Deskripsi Singkat -->
                     <p>
                        Program studi ini fokus pada penguasaan konsep, teori, dan metode matematika 
                        yang dapat diaplikasikan untuk pemecahan masalah di berbagai bidang, termasuk 
                        pendidikan, teknologi, keuangan, serta riset sains dan terapan.
                     </p>

                    <!-- Biaya Pendidikan -->
                     <p><strong>Biaya Pendidikan:</strong></p>
                     <ul class="list-disc list-inside text-left">
                        <li>SIPAS: Rp 1.300.000 per semester</li>
                        <li>Non-SIPAS: Rp 36.000 per SKS</li>
                     </ul>

                     <a class="btn btn-border-base" href="service-details.html">
                        Tentang Prodi <i class="fa fa-plus"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- service area end -->
   @include('layouts.footerLanding')

   @include('layouts.footerLink')
</body>

</html>