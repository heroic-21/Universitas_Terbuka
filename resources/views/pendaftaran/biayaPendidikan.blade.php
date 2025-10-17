<!DOCTYPE html>
<html lang="zxx">

@include('layouts.headLink')

<body>
   @include('layouts.headerLanding')
   <!-- page title start -->
   @include('layouts.pageTitle', ['title' => 'Biaya Pendidikan'])
   <!-- page title end -->
   <!-- service area start -->
   @foreach($fakultas as $f)
   <div class="service-area bg-relative">
      <div class="section-title text-center wow animated fadeInUp" data-wow-duration="0.8s">
         <h6 class="sub-title">{{ $f->alias ?? $f->fakultas }}</h6>
         <h2 class="title">{{ $f->fakultas }}<span></span></h2>
      </div>
      <div class="container">
         <div class="row">
               @foreach($f->prodi as $p)
               <div class="custom-md:w-1/3 custom-sm:w-1/2">
                  <div class="single-service-inner text-center wow animated fadeInUp" data-wow-duration="0.8s">
                     <div class="thumb">
                           <img src="{{ asset('assets/landing/images/service-icon/1.png') }}" alt="img">
                     </div>
                     <div class="details">
                           <h5>
                              <a href="{{ $p->link_prodi_ut ?? 'service-details.html' }}">
                                 {{ $p->program_studi }}
                              </a>
                           </h5>
                           <p>{{ $p->keterangan_prodi }}</p>
                           <a class="btn btn-border-base" href="{{ $p->link_prodi_ut ?? 'service-details.html' }}">
                              Tentang Prodi <i class="fa fa-plus"></i>
                           </a>
                     </div>
                  </div>
               </div>
               @endforeach
         </div>
      </div>
   </div>
   @endforeach
   <!-- service area end -->
   @include('layouts.footerLanding')

   @include('layouts.footerLink')
</body>

</html>