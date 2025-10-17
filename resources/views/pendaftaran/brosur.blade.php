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
                @foreach ($brosur as $index => $b)
                    <div class="custom-md:w-1/3 custom-sm:w-1/2">
                        <div class="single-team-inner flex flex-col h-full text-center wow animated fadeInUp"
                            data-wow-duration="0.8s" data-wow-delay="{{ $index * 0.3 }}s">
                            <div class="thumb flex-shrink-0">
                                <img class="w-full h-80 object-cover rounded" src="{{ asset('storage/' . $b->brosur) }}"
                                    alt="{{ $b->judul_brosur }}">
                                <ul class="team-social-inner">
                                    <li>
                                        <a href="{{ asset('storage/' . $b->brosur) }}" 
                                        download="{{ \Illuminate\Support\Str::slug($b->judul_brosur) }}.{{ pathinfo($b->brosur, PATHINFO_EXTENSION) }}">
                                        Unduh Poster
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="details flex-1 mt-2">
                                <h5><a href="#">{{ $b->judul_brosur }}</a></h5>
                                <p>{{ $b->kategori_brosur }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
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
