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
                <form action="{{ route('send.pendaftaran') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner">
                                <p>Nama Lengkap</p>
                                <input type="text" name="nama_lengkap" placeholder="Nama Sesuai KTP"
                                    value="{{ old('nama_lengkap') }}">
                                @error('nama_lengkap')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner">
                                <p>Nama Ibu Kandung</p>
                                <input type="text" name="nama_ibu_kandung" placeholder="Tanpa Gelar dan Sesuai KTP"
                                    value="{{ old('nama_ibu_kandung') }}">
                                @error('nama_ibu_kandung')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner">
                                <p>Tempat Lahir</p>
                                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir Sesuai KTP"
                                    value="{{ old('tempat_lahir') }}">
                                @error('tempat_lahir')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner">
                                <p>Tanggal Lahir</p>
                                <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir Sesuai KTP"
                                    value="{{ old('tanggal_lahir') }}">
                                @error('tanggal_lahir')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner">
                                <p>Email</p>
                                <input type="email" name="email" placeholder="Email Kamu"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner">
                                <p>Nomor WA</p>
                                <input type="text" name="nomor_hp" placeholder="Nomor WhatsApp Aktif"
                                    value="{{ old('nomor_hp') }}">
                                @error('nomor_hp')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner">
                                <p>Nomor Induk Kependudukan</p>
                                <input type="text" name="nomor_nik" placeholder="NIK Sesuai KTP"
                                    value="{{ old('nomor_nik') }}">
                                @error('nomor_nik')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner relative">
                                <p>Agama</p>
                                <select name="id_agama">
                                    <option value="">-- Pilih Agama --</option>
                                    @foreach ($agama as $a)
                                        <option value="{{ $a->id_agama }}"
                                            {{ old('id_agama') == $a->id_agama ? 'selected' : '' }}>
                                            {{ $a->agama }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">▼</span>
                                @error('id_agama')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner relative">
                                <p>Jenis Kelamin</p>
                                <select name="jenis_kelamin">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>
                                        Laki-laki</option>
                                    <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>
                                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">▼</span>
                                @error('jenis_kelamin')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner relative">
                                <p>Status Pernikahan</p>
                                <select name="status_pernikahan">
                                    <option value="">-- Pilih Status Pernikahan --</option>
                                    <option value="Menikah"
                                        {{ old('status_pernikahan') == 'Menikah' ? 'selected' : '' }}>
                                        Menikah</option>
                                    <option value="Belum Menikah"
                                        {{ old('status_pernikahan') == 'Belum Menikah' ? 'selected' : '' }}>Belum
                                        Menikah</option>
                                </select>
                                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">▼</span>
                                @error('status_pernikahan')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner relative">
                                <p>Status Pekerjaan</p>
                                <select name="status_pekerjaan">
                                    <option value="">-- Pilih Status Pekerjaan --</option>
                                    <option value="Bekerja"
                                        {{ old('status_pekerjaan') == 'Bekerja' ? 'selected' : '' }}>Bekerja</option>
                                    <option value="Tidak Bekerja"
                                        {{ old('status_pekerjaan') == 'Tidak Bekerja' ? 'selected' : '' }}>Tidak
                                        Bekerja</option>
                                </select>
                                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">▼</span>
                                @error('status_pekerjaan')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner relative">
                                <p>Sumber Informasi UT</p>
                                <select name="sumber_informasi_ut">
                                    <option value="">-- Pilih Sumber Informasi --</option>
                                    <option value="Teman" {{ old('sumber_informasi_ut') == 'Teman' ? 'selected' : '' }}>
                                        Teman</option>
                                    <option value="Keluarga"
                                        {{ old('sumber_informasi_ut') == 'Keluarga' ? 'selected' : '' }}>Keluarga</option>
                                    <option value="Website"
                                        {{ old('sumber_informasi_ut') == 'Website' ? 'selected' : '' }}>Website</option>
                                    <option value="Spanduk"
                                        {{ old('sumber_informasi_ut') == 'Spanduk' ? 'selected' : '' }}>Spanduk</option>
                                    <option value="Instagram"
                                        {{ old('sumber_informasi_ut') == 'Instagram' ? 'selected' : '' }}>Instagram
                                    </option>
                                    <option value="Facebook"
                                        {{ old('sumber_informasi_ut') == 'Facebook' ? 'selected' : '' }}>Facebook</option>
                                    <option value="UT Go To School"
                                        {{ old('sumber_informasi_ut') == 'UT Go To School' ? 'selected' : '' }}>UT Go To
                                        School</option>
                                    <option value="Lainnya"
                                        {{ old('sumber_informasi_ut') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">▼</span>
                                @error('sumber_informasi_ut')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner relative">
                                <p>Layanan Program</p>
                                <select name="layanan_program">
                                    <option value="">-- Pilih Layanan Program --</option>
                                    <option value="SIPAS" {{ old('layanan_program') == 'SIPAS' ? 'selected' : '' }}>
                                        SIPAS</option>
                                    <option value="Non SIPAS"
                                        {{ old('layanan_program') == 'Non SIPAS' ? 'selected' : '' }}>Non SIPAS
                                    </option>
                                </select>
                                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">▼</span>
                                @error('layanan_program')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner relative">
                                <p>Jalur Program</p>
                                <select name="jalur_program">
                                    <option value="">-- Pilih Jalur Program --</option>
                                    <option value="Non RPL"
                                        {{ old('jalur_program') == 'Non RPL' ? 'selected' : '' }}>
                                        Non RPL - SMA/SMK/MA/Paket-C/Muaddalah Setara MA/SMA Terbuka
                                    </option>
                                    <option
                                        value="RPL"
                                        {{ old('jalur_program') == 'RPL' ? 'selected' : '' }}>
                                        RPL/Alih Kredit - (Melanjutkan diri D3/Linierisasi S-1/Pindah Kuliah Ke UT)
                                    </option>
                                </select>
                                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">▼</span>
                                @error('jalur_program')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner relative">
                                <p>Program Studi</p>
                                <select name="kode_program_studi">
                                    <option value="">-- Pilih Program Studi --</option>
                                    @foreach ($prodi as $p)
                                        <option value="{{ $p->kode_program_studi }}"
                                            {{ old('kode_program_studi') == $p->kode_program_studi ? 'selected' : '' }}>
                                            {{ $p->program_studi }}
                                        </option>
                                    @endforeach
                                </select>
                                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">▼</span>
                                @error('kode_program_studi')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner relative">
                                <p>Kategori Mahasiswa</p>
                                <select name="keterangan">
                                    <option value="">-- Pilih Kategori Mahasiswa --</option>
                                    <option value="Mahasiswa Baru"
                                        {{ old('keterangan') == 'Mahasiswa Baru' ? 'selected' : '' }}>Mahasiswa
                                        Baru</option>
                                    <option value="Mahasiswa Lama"
                                        {{ old('keterangan') == 'Mahasiswa Lama' ? 'selected' : '' }}>Mahasiswa
                                        Lama</option>
                                    <option value="Mahasiswa Alih Kredit"
                                        {{ old('keterangan') == 'Mahasiswa Alih Kredit' ? 'selected' : '' }}>
                                        Mahasiswa Alih Kredit</option>
                                </select>
                                <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2">▼</span>
                                @error('keterangan')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="custom-lg:w-3/12 custom-sm:w-1/2">
                            <div class="single-input-inner relative">
                                <p class="bg-blue-100 text-blue-600 px-3 rounded inline-block">
                                    {{ $captcha }}
                                </p>
                                <input type="text" name="captcha" placeholder="Masukkan Kode Captcha Di Atas"
                                    value="{{ old('captcha') }}">
                                @error('captcha')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <p class="bg-red-100 my-4 text-red-600 px-3 rounded inline-block">
                            Setelah Data dikirim, anda akan di arahkan ke Nomor WhatsApp Admin untuk intruksi lebih
                            lanjut.
                        </p>
                        <div class="w-full">
                            <button class="btn btn-base border-radius-5">Kirim Data</button>
                        </div>
                    </div>
                </form>
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
