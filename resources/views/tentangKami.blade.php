<!DOCTYPE html>
<html lang="zxx">

@include('layouts.headLink')

<body>
    @include('layouts.headerLanding')
    <!-- page title start -->
    @include('layouts.pageTitle', ['title' => 'Tentang Kami'])
    <!-- page title end -->
    <div class="team-blog-area pd-bottom-60">
        <div class="container">
            <div class="team-details-page">
                <div class="row">
                    @foreach ($admins as $admin)
                        <div class="custom-md:w-5/12 text-center mb-8">
                            <div class="thumb mb-[24px] custom-md:mb-0 wow animated fadeInUp" data-wow-duration="0.8s">
                                <img src="{{ asset('storage/' . $admin->gambar) }}" alt="{{ $admin->admin }}">
                            </div>
                        </div>
                        <div class="custom-md:w-7/12 self-center custom-lg:ps-[48px] wow animated fadeInUp"
                            data-wow-duration="0.8s">
                            <h3 class="mb-[8px]">{{ $admin->admin }}</h3>
                            <span class="designation">{{ $admin->jabatan }}</span>
                            <div class="details mt-[24px]">
                                <h4>About Me</h4>
                                <p>{{ $admin->tentang_admin }}</p>
                            </div>
                            <ul class="social-media style-base mt-[24px] pt-[8px]">
                                @if ($admin->kontak_wa)
                                    <li>
                                        <a href="https://wa.me/{{ $admin->kontak_wa }}" target="_blank">
                                            <i class="fab fa-whatsapp" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                @endif
                                @if ($admin->instagram)
                                    <li>
                                        <a href="https://instagram.com/{{ $admin->instagram }}" target="_blank">
                                            <i class="fab fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    
    <!-- contact list start -->
    <div class="contact-page-list">
        <div class="container">
            <div class="row justify-content-center">
                <div class="custom-md:w-1/3 custom-sm:w-1/2">
                    <div class="media single-contact-list wow animated fadeInUp" data-wow-duration="0.8s">
                        <div class="media-left">
                            <img src="https://unpkg.com/heroicons@2.0.18/24/outline/phone.svg" alt="Phone">
                        </div>
                        <div class="media-body">
                            <h5>Kontak Kami</h5>
                            <h6>0852 4622 0297</h6>
                        </div>
                    </div>
                </div>
                <div class="custom-md:w-1/3 custom-sm:w-1/2">
                    <div class="media single-contact-list wow animated fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.3s">
                        <div class="media-left">
                            <img src="https://unpkg.com/heroicons@2.0.18/24/outline/envelope.svg" alt="Email">
                        </div>
                        <div class="media-body">
                            <h5>Email Kami</h5>
                            <h6>salutnegeri1000kubah@gmail.com</h6>
                        </div>
                    </div>
                </div>
                <div class="custom-md:w-1/3 custom-sm:w-1/2">
                    <div class="media single-contact-list wow animated fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.6s">
                        <div class="media-left">
                            <img src="https://unpkg.com/heroicons@2.0.18/24/outline/map-pin.svg" alt="Location">
                        </div>
                        <div class="media-body">
                            <h5>Lokasi</h5>
                            <h6>Bangko, Rokan Hilir Regency, Riau</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact list start -->
    <!-- map start -->
    <div class="contact-g-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63756.17177914623!2d100.5517326!3d2.1462254!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e18b17b246a67%3A0x3039d80b220c5c0!2s5R52%2BR7%20Bagan%20Barat%2C%20Rokan%20Hilir%20Regency%2C%20Riau!5e0!3m2!1sid!2sid!4v1695556000000!5m2!1sid!2sid&z=18"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
    <!-- map end -->
    <!-- footer area start -->
    @include('layouts.footerLanding')
    <!-- footer area end -->
    @include('layouts.footerLink')
</body>

</html>
