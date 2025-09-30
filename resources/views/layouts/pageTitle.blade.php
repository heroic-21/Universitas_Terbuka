<div class="breadcrumb-area bg-cover bg-center">
      <div class="container">
         <div class="breadcrumb-inner">
            <div class="row justify-content-center">
               <div class="custom-md:w-1/2">
                  <h2 class="page-title">{{ $title ?? 'Judul Halaman' }}</h2>
               </div>
               <div class="custom-md:w-1/2 custom-md:!text-end">
                  <ul class="page-list">
                     <li><a href="{{ route('beranda.utama') }}">Beranda</a></li>
                     <li>{{ $title ?? 'Judul Halaman' }}</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>