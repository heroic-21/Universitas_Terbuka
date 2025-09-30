<!DOCTYPE html>
<html lang="zxx">

@include('layouts.headLink')

<body>
    @include('layouts.headerLanding')
    <!-- page title start -->
    @include('layouts.pageTitle', ['title' => 'Pendaftaran'])
    <!-- page title end -->
    <!-- service area start -->
    <div class="contact-area">
        <div class="container">
            <div class="contact-page-inner bg-gray wow animated fadeInUp" data-wow-duration="0.8s">
                <div class="section-title mb-[20px] pb-[8px]">
                    <h2 class="title pb-2">Pendaftaran Program S1 </h2>
                    <p class="bg-green-100 text-green-600 px-3 rounded inline-block">
                        Semua Data Yang Sudah Dikirim Akan tetap Aman.
                    </p>
                </div>
                <div class="row">
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Nama Lengkap</p>
                            <input type="text" placeholder="Nama Sesuai KTP">
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Nama Ibu Kandung</p>
                            <input type="text" placeholder="Tanpa Gelar dan Sesuai KTP">
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Tempat Lahir</p>
                            <input type="text" placeholder="Tempat Lahir Sesuai KTP">
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Tanggal Lahir</p>
                            <input type="text" placeholder="Tanggal Lahir Sesuai KTP">
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Email</p>
                            <input type="text" placeholder="Email Kamu">
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Nomor WA</p>
                            <input type="text" placeholder="Nomor WhatsApp Aktif">
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Nomor Induk Kependudukan</p>
                            <input type="text" placeholder="NIK Sesuai KTP">
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Agama</p>
                            <select>
                                <option value="">-- Pilih Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
                              ▼
                           </span>
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Jenis Kelamin</p>
                            <select>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Islam">Laki-laki</option>
                                <option value="Kristen">Perempuan</option>
                            </select>
                            <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
                              ▼
                           </span>
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Status Pernikahan</p>
                            <select>
                                <option value="">-- Pilih Status Pernikahan --</option>
                                <option value="Islam">Sudah Menikah</option>
                                <option value="Kristen">Belum Menikah</option>
                            </select>
                            <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
                              ▼
                           </span>
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Status Pekerjaan</p>
                            <input type="text" placeholder="Status Pekerjaan">
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Sumber Informasi UT</p>
                            <select>
                                <option value="">-- Pilih Sumber Informasi --</option>
                                <option value="Islam">Teman</option>
                                <option value="Kristen">Keluarga</option>
                                <option value="Katolik">Websit</option>
                                <option value="Hindu">Spanduk</option>
                                <option value="Buddha">Instagram</option>
                                <option value="Konghucu">Facebook</option>
                                <option value="Konghucu">UT Go To School</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
                              ▼
                           </span>
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Layanan Program</p>
                            <select>
                                <option value="">-- Pilih Layanan Program --</option>
                                <option value="Islam">SIPAS</option>
                                <option value="Kristen">Non SIPAS</option>
                            </select>
                            <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
                              ▼
                           </span>
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Jalur Program</p>
                            <select>
                                <option value="">-- Pilih Jalur Program --</option>
                                <option value="Islam">Non RPL - SMA/SMK/MA/Paket-C/Muaddallah Setara MA/SMA Terbuka</option>
                                <option value="Kristen">RPL/Alih Kredit - (Melanjutkan diri D3/Linierisasi S-1/Pindah Kuliah Ke UT)</option>
                            </select>
                            <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
                              ▼
                           </span>
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p>Kategori Mahasiswa</p>
                            <select>
                                <option value="">-- Pilih Kategori Mahasiswa --</option>
                                <option value="Islam">Mahasiswa Baru</option>
                                <option value="Islam">Mahasiswa Lama</option>
                                <option value="Islam">Mahasiswa Alih Kredit</option>
                            </select>
                            <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">
                              ▼
                           </span>
                        </div>
                    </div>
                    <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                        <div class="single-input-inner">
                            <p class="bg-blue-100 text-blue-600 px-3 rounded inline-block">
                                123rfse345
                            </p>
                            <input type="text" placeholder="Masukkan Kode Captcha Di Atas">
                        </div>
                    </div>
                    {{-- <div class="w-full">
                        <div class="single-input-inner">
                            <textarea placeholder="Message"></textarea>
                        </div>
                    </div> --}}
                    <p class="bg-red-100 my-4 text-red-600 px-3 rounded inline-block">
                        Setelah Data dikirim, anda akan di arahkan ke Nomor WhatsApp Admin untuk intruksi lebih lanjut.
                    </p>
                    <div class="w-full">
                        <button class="btn btn-base border-radius-5">Kirim Data</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
    <!-- footer area start -->
    @include('layouts.footerLanding')
    <!-- back to top area end -->
    @include('layouts.footerLink')
</body>

</html>
