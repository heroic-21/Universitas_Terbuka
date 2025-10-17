<!DOCTYPE html>
<html lang="zxx">

@include('layouts.headLink')

<body>
    @include('layouts.headerLanding')
    <!-- page title start -->
    @include('layouts.pageTitle', ['title' => 'Informasi Pendaftaran'])
    <!-- page title end -->
    <!-- work-process-area start -->
    <div class="work-process-area">
        <div class="container">
            <div class="section-title wow animated fadeInUp" data-wow-duration="0.8s">
                <h6 class="sub-title">INFORMASI PENDAFTARAN</h6>
                <h2 class="title">Tanggal Penerimaan Mahasiswa Baru</h2>
            </div>
            <div class="row">
                {{-- Bagian RPL --}}
                <div class="custom-lg:w-3/8 custom-sm:w-1/2">
                    <div class="single-work-process-inner wow animated fadeInUp" data-wow-duration="0.8s">
                        <div class="thumb mb-[12px]">
                            <img src="{{ asset('assets/landing/images/TanggalRPL.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Tanggal RPL</p>
                            <h5 class="!mb-[16px]">
                                @if ($data->tanggal_rpl && $data->tanggal_rpl_tutup)
                                    Mulai {{ \Carbon\Carbon::parse($data->tanggal_rpl)->translatedFormat('d F Y') }}
                                    - {{ \Carbon\Carbon::parse($data->tanggal_rpl_tutup)->translatedFormat('d F Y') }}
                                @elseif($data->tanggal_rpl)
                                    Mulai {{ \Carbon\Carbon::parse($data->tanggal_rpl)->translatedFormat('d F Y') }}
                                @else
                                    Belum Ditentukan
                                @endif
                            </h5>
                            <p class="content">
                                {{ $data->keterangan_rpl ?? 'Belum ada informasi.' }}
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Bagian Non RPL --}}
                <div class="custom-lg:w-3/8 custom-sm:w-1/2">
                    <div class="single-work-process-inner wow animated fadeInUp" data-wow-duration="0.8s">
                        <div class="thumb mb-[16px]">
                            <img src="{{ asset('assets/landing/images/TanggalNonRPL.png') }}" alt="img">
                        </div>
                        <div class="details">
                            <p class="process-count">Tanggal Non RPL</p>
                            <h5 class="!mb-[16px]">
                                @if ($data->tanggal_non_rpl && $data->tanggal_non_rpl_tutup)
                                    Mulai {{ \Carbon\Carbon::parse($data->tanggal_non_rpl)->translatedFormat('d F Y') }}
                                    -
                                    {{ \Carbon\Carbon::parse($data->tanggal_non_rpl_tutup)->translatedFormat('d F Y') }}
                                @elseif($data->tanggal_non_rpl)
                                    Mulai {{ \Carbon\Carbon::parse($data->tanggal_non_rpl)->translatedFormat('d F Y') }}
                                @else
                                    Belum Ditentukan
                                @endif
                            </h5>
                            <p class="content">
                                {{ $data->keterangan_non_rpl ?? 'Belum ada informasi.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="details">
                <h4>Informasi Sistem Paket</h4>
                <div class="accordion t-ac accordion-inner accordion-icon-left mt-[16px] mb-[24px]"
                    id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Apa itu SIPAS?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>SIPAS atau Sistem Paket Semester adalah jika calon mahasiswa berencana lulus dengan
                                    normal di 8 semester atau 4 tahun. Untuk biaya kuliahnya sama dari semester 1 sampai
                                    semester 8 dan untuk jumlah SKS / mata kuliah per semesternya sudah ditentukan oleh
                                    Universitas Terbuka.
                                    <br><br>Note : Untuk Metode SIPAS ini hanya bisa dipilih oleh Mahasiswa Baru Non RPL
                                    atau yang memulai dari awal.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Apa Itu Non SIPAS?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Non SIPAS adalah jika calon mahasiswa memiliki rencana lulus lebih cepat di 7
                                    semester atau 3,5 tahun dengan catatan mengambil full SKS per semesternya dan tidak
                                    banyak mata kuliah yang mengulang.
                                    Untuk besaran biaya kuliahnya bersifat fluktuatif atau berubah-ubah setiap
                                    semesternya karena ditentukan berdasarkan jumlah SKS yang diambil dan harga buku,
                                    biasanya biaya Non SIPAS lebih mahal dibandingkan dengan SIPAS. <br><br>
                                    Note : Untuk calon mahasiswa baru RPL / Alih Kredit otomatis metode pembayarannya
                                    Non SIPAS, kecuali RPL Pendidikan Dasar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Kategori Mahasiswa
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="list-disc list-inside text-left">
                                    <li><strong>Mahasiswa Baru / Non RPL</strong>: calon mahasiswa yang minimal lulus
                                        SLTA sederajat dan berencana memulai pembelajaran dari awal.</li>
                                    <li><strong>Mahasiswa Alih Kredit / RPL</strong>: calon mahasiswa yang sebelumnya
                                        pernah berkuliah atau masih aktif kuliah dan akan melanjutkan atau pindah ke
                                        Universitas Terbuka.</li>
                                    <li><strong>Mahasiswa Alih Kredit / RPL (Lulusan)</strong>: calon mahasiswa yang
                                        sudah lulus kuliah baik program studi S1, D3, dan akan melanjutkan atau
                                        mengambil linierisasi di Universitas Terbuka.</li>
                                    <li><strong>Mahasiswa Lama</strong>: mahasiswa aktif Universitas Terbuka dan ingin
                                        melanjutkan kembali atau mahasiswa mandiri yang ingin bergabung dengan SALUT
                                        AWWABIN Tangerang.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Informasi Rekognisi Pembelajaran Lampau</h4>
                <div class="accordion t-ac accordion-inner accordion-icon-left mt-[16px] mb-[24px]"
                    id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Apa itu RPL?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-left">
                                <h5>Apa itu Non RPL?</h5>
                                <p>
                                    Non RPL adalah jalur kuliah reguler di Universitas Terbuka (UT) untuk lulusan:
                                </p>
                                <ul class="list-disc list-inside">
                                    <li>SMA/SMK/MA sederajat</li>
                                    <li>Paket C / Muadalah</li>
                                    <li>SMA Terbuka</li>
                                </ul>
                                <p>Tanpa pengakuan pembelajaran lampau, semua mata kuliah ditempuh sesuai kurikulum UT.
                                </p>

                                <h5>Lama Kuliah</h5>
                                <ul class="list-disc list-inside">
                                    <li>Normal: 8 semester (4 tahun)</li>
                                    <li>Bisa dipercepat atau diperlambat sesuai SKS & capaian studi</li>
                                    <li>Fleksibel, bisa atur jadwal sendiri</li>
                                </ul>

                                <h5>Biaya Kuliah</h5>
                                <ul class="list-disc list-inside">
                                    <li>FEKON, FHISIP, FST: Rp1,3 – 1,85 juta/semester</li>
                                    <li>FKIP (PGSD & PAUD): Rp1,5 – 2 juta/semester</li>
                                </ul>
                                <p><strong>Belum termasuk:</strong> pendaftaran, layanan akademis, atribut, dan kegiatan
                                    mahasiswa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Apa Itu Non RPL?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body text-left">
                                <h5>Apa itu RPL?</h5>
                                <p>
                                    RPL (Rekognisi Pembelajaran Lampau) adalah jalur kuliah di UT yang mengakui
                                    kuliah/pengalaman kerja sebelumnya untuk mempercepat masa studi.
                                </p>
                                <p><strong>Untuk siapa?</strong></p>
                                <ul class="list-disc list-inside">
                                    <li>Lulusan D2/D3 lanjut S1</li>
                                    <li>Pindahan dari kampus lain</li>
                                    <li>Linierisasi / Konversi S1</li>
                                </ul>
                                <p><strong>Lama Kuliah:</strong> 3–5 semester (tergantung asesmen UT)</p>
                                <p><strong>Biaya:</strong></p>
                                <ul class="list-disc list-inside">
                                    <li>FEB, FHISIP, FST: Rp36.000 – Rp85.000/SKS</li>
                                    <li>FKIP: Rp45.000 – Rp83.000/SKS</li>
                                    <li>20–24 SKS ≈ Rp1,8 – 2,6 juta/semester</li>
                                </ul>
                                <p><strong>Langkah:</strong> Daftar RPL → Unggah dokumen → Asesmen UT → Hasil di LKAM.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <h4>Persyaratan & Berkas</h4>
                <div class="row">
                    <div class="custom-sm:w-1/2">
                        <ul class="single-list-inner style-check mb-[16px]">
                            <li>
                                <i class="far fa-check-circle"></i>
                                Fotokopi ijazah SMA wajib dilegalisir asli (cap basah) dari sekolah asal.
                                Legalisir harus terbaru, tidak boleh hasil scan atau fotokopi warna.
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                Cek nama dan tempat tanggal lahir apakah sudah sesuai antara ijazah dan KTP.
                                Bila belum sesuai, segera perbaiki KTP-nya.
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                Pas foto ukuran 4x6, bukan hasil foto dari foto lagi, dan ukuran file tidak lebih dari
                                1MB.
                                <ul class="mt-2 ms-6 list-disc space-y-1">
                                    <li>Background sesuai tahun kelahiran: genap = biru, ganjil = merah.</li>
                                    <li>Perempuan: jilbab tidak sewarna dengan background serta memakai baju polos
                                        (tidak boleh kaos).</li>
                                    <li>Laki-laki: wajib dasi panjang.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="custom-sm:w-1/2">
                        <ul class="single-list-inner style-check mb-[16px]">
                            <li>
                                <i class="far fa-check-circle"></i>
                                Form keabsahan dokumen (konfirmasi dulu ke admin kami).
                            </li>
                            <li>
                                <i class="far fa-check-circle"></i>
                                Foto KTP asli berwarna harus jelas (boleh pakai HP, format JPG).
                                <ul class="mt-2 ms-6 list-disc space-y-1">
                                    <li>Tidak boleh miring, harus jelas dan presisi.</li>
                                    <li>Jika KTP buram atau rusak, perbaiki dulu ke Dispenduk atau instansi terkait.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="td-sidebar service-sidebar pd-top-60">
                    <div class="widget widget_download">
                        <h5 class="widget-title">
                            <i class="fas fa-arrow-right"></i> Unduh Formulir Pendaftaran Mahasiswa Baru
                        </h5>
                        <ul>
                            @foreach ($berkasList as $berkas)
                                <li>
                                        <a href="{{ route('down', $berkas->id_berkas) }}">
                                        {{ $berkas->nama_berkas }}
                                        <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
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
