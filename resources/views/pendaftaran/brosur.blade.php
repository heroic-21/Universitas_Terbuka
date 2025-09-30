<!DOCTYPE html>
<html lang="zxx">

@include('layouts.headLink')

<body>
    @include('layouts.headerLanding')
    <!-- page title start -->
    @include('layouts.pageTitle', ['title' => 'Brosur Pendaftaran'])
    <!-- page title end -->
    <!-- team area start -->
    <div class="team-area bg-relative">
        <div class="container">
            <div class="row">
                <div class="custom-md:w-5/12">
                    <div class="section-title wow animated fadeInUp" data-wow-duration="0.8s">
                        <h6 class="sub-title">INFORMASI</h6>
                        <h2 class="title">Brosur dan Poster</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="custom-md:w-1/3 custom-sm:w-1/2">
                    <div class="single-team-inner text-center wow animated fadeInUp" data-wow-duration="0.8s">
                        <div class="thumb">
                            <img src="{{ asset('assets/landing/images/BROSUR1.png') }}" alt="img">
                            <ul class="team-social-inner">
                                <li><a href="index.html">Unduh Poster</a></li>
                            </ul>
                        </div>
                        <div class="details">
                            <h5><a href="team-details.html">Judul Poster</a></h5>
                            <p>Kategori Poster</p>
                        </div>
                    </div>
                </div>
                <div class="custom-md:w-1/3 custom-sm:w-1/2">
                    <div class="single-team-inner text-center wow animated fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.3s">
                        <div class="thumb">
                            <img src="{{ asset('assets/landing/images/BROSUR2.png') }}" alt="img">
                            <ul class="team-social-inner">
                                <li><a href="index.html">Unduh Poster</a></li>
                            </ul>
                        </div>
                        <div class="details">
                            <h5><a href="team-details.html">Judul Poster</a></h5>
                            <p>Kategori Poster</p>
                        </div>
                    </div>
                </div>
                <div class="custom-md:w-1/3 custom-sm:w-1/2">
                    <div class="single-team-inner text-center wow animated fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.6s">
                        <div class="thumb">
                            <img src="{{ asset('assets/landing/images/BROSUR3.png') }}" alt="img">
                            <ul class="team-social-inner">
                                <li><a href="index.html">Unduh Poster</a></li>
                            </ul>
                        </div>
                        <div class="details">
                            <h5><a href="team-details.html">Judul Poster</a></h5>
                            <p>Kategori Poster</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- work-process-area end -->
    <!-- footer area start -->
    @include('layouts.footerLanding')
    <!-- back to top area end -->
    @include('layouts.footerLink')
</body>

</html>
