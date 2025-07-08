@include('partials.main')

<head>
    @include('partials.title-meta')

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/vanillajs-datepicker/css/datepicker.min.css') }}">

    @include('partials.head-css')
</head>

@include('partials.body')

<!-- leftbar-tab-menu -->
@include('partials.left-sidebar')

<!-- topbar-tab-menu -->
@include('partials.topbar')

<div class="ltr:flex flex-1 rtl:flex-row-reverse">
    <div
        class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-276px)] px-4 pt-[54px] duration-300">
        <div class="xl:w-full">
            <div class="flex flex-wrap">
                <div class="flex items-center py-4 w-full">
                    <div class="w-full">
                        <div class="">
                            <div class="flex flex-wrap justify-between">
                                <div class="items-center ">
                                    <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">Form Elements</h1>
                                    <ol class="list-reset flex text-sm">
                                        <li><a href="#" class="text-gray-500">Tailfox</a></li>
                                        <li><span class="text-gray-500 mx-2">/</span></li>
                                        <li class="text-gray-500">Forms</li>
                                        <li><span class="text-gray-500 mx-2">/</span></li>
                                        <li class="text-blue-600 hover:text-blue-700">Form Elements</li>
                                    </ol>
                                </div>
                                <div class="flex items-center">
                                    <a href="{{ route('mahasiswa.index') }}">
                                        <button
                                            class=" inline-block focus:outline-none text-white bg-yellow-500 hover:text-yellow-700 border border-gray-200 dark:text-white dark:border-gray-700 dark:bg-yellow-700 hover:bg-yellow-500  text-sm font-medium py-1 px-3 rounded mb-1 mt-2">
                                            <i class="mdi mdi-step-backward"></i>
                                            <span>Kembali</span></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 ">
            @if ($errors->has('nim'))
                <div id="error-bar" class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded transition-opacity duration-500">
                    {{ $errors->first('nim') }}
                </div>
                <script>
                    setTimeout(() => {
                        const bar = document.getElementById('error-bar');
                        if (bar) {
                            bar.style.opacity = '0';
                            setTimeout(() => bar.remove(), 500);
                        }
                    }, 3000);
                </script>
            @endif
            @php
                $oldInputs = old('nim', []); //NIM Wajib Di Isi
            @endphp
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                <div id="grand-form-container"
                    class="grandFormContainer grid sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    @if (count($oldInputs) > 0)
                    @foreach ($oldInputs as $i => $nim)
                    <div id="form-container" class="formRem sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                        <div class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative">
                            <div
                                class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70 flex justify-between">
                                <h4 class="font-medium">Form Tambah Data Mahasiswa</h4>
                                <button type="button"
                                    class="removeForm inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded mb-1">
                                    <i class="mdi mdi-credit-card-off"></i>
                                    <span>Hapus</span>
                                </button>
                            </div><!--end header-title-->
                            <div class="flex-auto p-4">
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldnim_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Nomor
                                                Induk
                                                Mahasiswa</label>
                                            <input type="text" value="{{ old('nim.' . $i) }}" name="nim[]"
                                                id="{{ 'oldnim_' . $i }}" class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('nim.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                            @error("nim.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldnama_lengkap_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama
                                                Lengkap</label>
                                            <input type="text" name="nama_lengkap[]" id={{ "oldnama_lengkap_" . $i }} value="{{ old("nama_lengkap." . $i) }}"
                                            class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                            {{ $errors->has('nama_lengkap.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                            @error("nama_lengkap.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldtempat_lahir_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Tempat
                                                Lahir</label>
                                            <input type="text" name="tempat_lahir[]" id={{ "oldtempat_lahir_" . $i }} value="{{ old("tempat_lahir." . $i) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('tempat_lahir.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                                @error("tempat_lahir.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-1 mb-2 w-full group">
                                            <label for={{ "Old_Default_Datepicker_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Tanggal
                                                Lahir</label>
                                            <input type="text" name="tanggal_lahir[]" id={{ "Old_Default_Datepicker_" . $i }} value="{{ old("tanggal_lahir." . $i) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('tanggal_lahir.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                                @error("tanggal_lahir.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldemail_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                                            <input type="email" name="email[]" id={{ "oldemail_" . $i }} value="{{ old("email." . $i) }}"
                                                value="{{ old('mahasiswa.0.email') }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('email.' . $i) ? 'border-red-500 is-invalid' : '' }}"
                                                placeholder="name@gmail.com">
                                                @error("email.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "olddefault_password_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Password</label>
                                            <input type="text" name="default_password[]" id={{ "olddefault_password_" . $i }} value="{{ old("default_password." . $i) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('default_password.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                                @error("default_password.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldnomor_hp_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Nomor
                                                Handphone</label>
                                            <input type="text" name="nomor_hp[]"  id={{ "oldnomor_hp_" . $i }} value="{{ old("nomor_hp." . $i) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('nomor_hp.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                                @error("nomor_hp.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldnomor_nik_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Nomor
                                                Induk
                                                Keluarga</label>
                                            <input type="text" name="nomor_nik[]" id={{ "oldnomor_nik_" . $i }} value="{{ old("nomor_nik." . $i) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('nomor_nik.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                                @error("nomor_nik.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldnama_ibu_kandung_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama
                                                Ibu
                                                Kandung</label>
                                            <input type="text" name="nama_ibu_kandung[]" id={{ "oldnama_ibu_kandung_" . $i }} value="{{ old("nama_ibu_kandung." . $i) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('nama_ibu_kandung.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                                @error("nama_ibu_kandung.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldtahun_masuk_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Tahun
                                                Masuk</label>
                                            <input type="text" name="tahun_masuk[]" id={{ "oldtahun_masuk_" . $i }} value="{{ old("tahun_masuk." . $i) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('tahun_masuk.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                                @error("tahun_masuk.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <label for={{ "oldtahun_wisuda_" . $i }}
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Tahun
                                            Wisuda</label>
                                        <input type="text" name="tahun_wisuda[]" id={{ "oldtahun_wisuda_" . $i }} value="{{ old("tahun_wisuda." . $i) }}"
                                            class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('tahun_wisuda.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                            @error("tahun_wisuda.$i")
                                            <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                        <label for={{ "oldketerangan_" . $i }}
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Keterangan</label>
                                        <select name="keterangan[]" id={{ "oldketerangan_" . $i }}
                                            class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                            {{ $errors->has('keterangan.' . $i) ? 'border-red-500 is-invalid' : '' }}">
                                                <option value="">-- Pilih Keterangan --</option>
                                                <option value="Aktif" {{ old("keterangan.$i") == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                                <option value="Tidak Aktif" {{ old("keterangan.$i") == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                        </select>
                                        @error("keterangan.$i")
                                        <div class="invalid-feedback text-red-500 font-medium text-sm">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldstatus_pekerjaan_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Status
                                                Pekerjaan</label>
                                            <input type="text" name="status_pekerjaan[]" id={{ "oldstatus_pekerjaan_" . $i }} value="{{ old("status_pekerjaan." . $i) }}"
                                                class="form-input w-full rounded-md mt-1 border bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('status_pekerjaan.' . $i) ? 'dark:border-red-500 border-red-500 is-invalid' : '' }}">
                                                @error("status_pekerjaan.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="{{ 'oldkode_jurusan_' . $i }}"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Jurusan</label>
                                            <select name="kode_jurusan[]" id="{{ 'oldkode_jurusan_' . $i }}"
                                                class="form-input w-full rounded-md mt-1 px-3 py-1 bg-transparent dark:text-slate-300 focus:outline-none focus:ring-0
                                                    placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm
                                                    hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                    border
                                                    {{ $errors->has('kode_jurusan.' . $i) ? 'border-red-500 dark:border-red-500 is-invalid' : 'border-slate-300/60 dark:border-slate-700' }}">
                                                <option value="" {{ old("kode_jurusan.$i") == '' ? 'selected' : '' }}>-- Pilih Jurusan --</option>
                                                @foreach($jurusan as $jurusans)
                                                    <option class="dark:bg-slate-800" value="{{ $jurusans->kode_jurusan }}"
                                                        {{ old("kode_jurusan.$i") == $jurusans->kode_jurusan ? 'selected' : '' }}>
                                                        {{ $jurusans->jurusan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error("kode_jurusan.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldid_agama_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Agama</label>
                                            <select name="id_agama[]" id="{{ 'oldid_agama_' . $i }}"
                                                class="form-input w-full rounded-md mt-1 px-3 py-1 bg-transparent dark:text-slate-300 focus:outline-none focus:ring-0
                                                    placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm
                                                    hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                    border
                                                    {{ $errors->has('id_agama.' . $i) ? 'border-red-500 dark:border-red-500 is-invalid' : 'border-slate-300/60 dark:border-slate-700' }}">
                                                <option value="" {{ old("id_agama.$i") == '' ? 'selected' : '' }}>-- Pilih Agama --</option>
                                                @foreach($agama as $agamas)
                                                    <option class="dark:bg-slate-800" value="{{ $agamas->id_agama }}"
                                                        {{ old("id_agama.$i") == $agamas->id_agama ? 'selected' : '' }}>
                                                        {{ $agamas->agama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error("id_agama.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for={{ "oldid_pendidikan_" . $i }}
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Pendidikan</label>
                                            <select name="id_pendidikan[]" id="{{ 'oldid_pendidikan_' . $i }}"
                                                class="form-input w-full rounded-md mt-1 px-3 py-1 bg-transparent dark:text-slate-300 focus:outline-none focus:ring-0
                                                    placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm
                                                    hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                    border
                                                    {{ $errors->has('id_pendidikan.' . $i) ? 'border-red-500 dark:border-red-500 is-invalid' : 'border-slate-300/60 dark:border-slate-700' }}">
                                                <option value="" {{ old("id_pendidikan.$i") == '' ? 'selected' : '' }}>-- Pilih Pendidikan --</option>
                                                @foreach($pendidikan as $pendidikans)
                                                    <option class="dark:bg-slate-800" value="{{ $pendidikans->id_pendidikan }}"
                                                        {{ old("id_pendidikan.$i") == $pendidikans->id_pendidikan ? 'selected' : '' }}>
                                                        {{ $pendidikans->program_pendidikan }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error("id_pendidikan.$i")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <div id="FORM" class="FORM hidden"> {{--Form Add Data --}}
                        <div id="form-container"
                            class="formRem sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                            <div class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative">
                                <div
                                    class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70 flex justify-between">
                                    <h4 class="font-medium">Form Tambah Data Mahasiswa</h4>
                                    <button type="button"
                                        class="removeForm inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded mb-1">
                                        <i class="mdi mdi-credit-card-off"></i>
                                        <span>Hapus</span>
                                    </button>
                                </div>
                                <div class="flex-auto p-4">
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="nim___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Nomor
                                                    Induk Mahasiswa</label>
                                                <input type="text" name="nim[]" id="nim___index__" disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="nama_lengkap___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama
                                                    Lengkap</label>
                                                <input type="text" name="nama_lengkap[]" id="nama_lengkap___index__"
                                                    disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="tempat_lahir___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Tempat
                                                    Lahir</label>
                                                <input type="text" name="tempat_lahir[]" id="tempat_lahir___index__"
                                                    disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class="relative z-1 mb-2 w-full group">
                                                <label for="Default_Datepicker___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Tanggal
                                                    Lahir</label>
                                                <input type="text" id="Default_Datepicker___index__" disabled
                                                    name="tanggal_lahir[]"
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="email___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                                                <input type="email" name="email[]" id="email___index__" disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"
                                                    placeholder="name@gmail.com">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="default_password___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Password</label>
                                                <input type="text" name="default_password[]" id="default_password___index__" disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="nomor_hp___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Nomor
                                                    Handphone</label>
                                                <input type="text" name="nomor_hp[]" id="nomor_hp___index__" disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="nomor_nik___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Nomor
                                                    Induk
                                                    Keluarga</label>
                                                <input type="text" name="nomor_nik[]" id="nomor_nik___index__" disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="nama_ibu_kandung___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama
                                                    Ibu
                                                    Kandung</label>
                                                <input type="text" name="nama_ibu_kandung[]" disabled
                                                    id="nama_ibu_kandung___index__"
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="tahun_masuk___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Tahun
                                                    Masuk</label>
                                                <input type="text" name="tahun_masuk[]" id="tahun_masuk___index__"
                                                    disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <label for="tahun_wisuda___index__"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Tahun
                                                Wisuda</label>
                                            <input type="text" name="tahun_wisuda[]" id="tahun_wisuda___index__"
                                                disabled
                                                class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="keterangan___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Keterangan</label>
                                                <select name="keterangan[]" id="keterangan___index__" disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                                    <option value="">-- Pilih Keterangan --</option>
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="status_pekerjaan___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Status
                                                    Pekerjaan</label>
                                                <input type="text" name="status_pekerjaan[]" disabled
                                                    id="status_pekerjaan___index__"
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="kode_jurusan___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Jurusan</label>
                                                <select name="kode_jurusan[]" id="kode_jurusan___index__" disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                                    <option value="">-- Pilih Jurusan --</option>
                                                    @foreach($jurusan as $jurusans)
                                                        <option class="dark:bg-slate-800"
                                                            value="{{ $jurusans->kode_jurusan }}">
                                                            {{ $jurusans->jurusan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="id_agama___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Agama</label>
                                                <select name="id_agama[]" id="id_agama___index__" disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                                    <option value="">-- Pilih Agama --</option>
                                                    @foreach($agama as $agamas)
                                                        <option class="dark:bg-slate-800" value="{{ $agamas->id_agama }}">
                                                            {{ $agamas->agama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4">
                                            <div class="relative z-0 mb-2 w-full group">
                                                <label for="id_pendidikan___index__"
                                                    class="font-medium text-sm text-slate-600 dark:text-slate-400">Pendidikan</label>
                                                <select name="id_pendidikan[]" id="id_pendidikan___index__" disabled
                                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
                                                    <option value="">-- Pilih Pendidikan --</option>
                                                    @foreach($pendidikan as $pendidikans)
                                                        <option class="dark:bg-slate-800"
                                                            value="{{ $pendidikans->id_pendidikan }}">
                                                            {{ $pendidikans->program_pendidikan }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tambahForm"
                        class="sm:col-span-6 md:col-span-6 lg:col-span-12 xl:col-span-12 flex justify-center">
                        <button id="addForm" type="button"
                            class="addForm flex justify-center items-center gap-2 bg-green-500 text-white dark:bg-slate-800 dark:hover:bg-slate-700 shadow rounded-md px-6 py-3 transition w-full h-full">
                            <i class="mdi mdi-card-plus text-xl"></i>
                            <span>Tambah Form</span>
                        </button>
                    </div>
                </div><!--end inner-grid-->
                <div class="flex justify-end">
                    <button type="submit"
                        class=" inline-block focus:outline-none text-white bg-primary-500 border border-gray-200 dark:text-white dark:border-gray-700 dark:bg-primary-500 dark:hover:bg-blue-400  text-sm font-medium py-1 px-3 rounded mb-1 mt-2">
                        <i class="mdi mdi-content-save"></i>
                        <span>Simpan Data</span></button>
                </div>
            </form>
            <!-- footer -->
            @include('partials.footer')
        </div><!--end container-->
    </div>
</div>

<!-- JAVASCRIPTS -->
@include('partials.script-file')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets/libs/vanillajs-datepicker/js/datepicker-full.min.js') }}"></script>
<script src="{{ asset('script.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- JAVASCRIPTS -->
</body>

</html>
