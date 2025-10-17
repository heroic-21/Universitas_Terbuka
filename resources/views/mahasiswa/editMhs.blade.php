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
    <div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-276px)] px-4 pt-[54px] duration-300">
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
            <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST">
                @csrf
                @method('PUT')
                <div id="grand-form-container"
                    class="grandFormContainer grid sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div id="form-container" class="formRem sm:col-span-6 md:col-span-6 lg:col-span-12 xl:col-span-12">
                        <div class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative">
                            <div
                                class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70 flex justify-between">
                                <h4 class="font-medium">Form Edit Data Mahasiswa</h4>
                            </div><!--end header-title-->
                            <div class="flex-auto p-4">
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="nim"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Nomor
                                                Induk
                                                Mahasiswa</label>
                                            <input type="text" value="{{ old('nim', $mahasiswa->nim) }}"
                                                name="nim" id="nim"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('nim') ? 'border-red-500 is-invalid' : '' }}">
                                            @error('nim')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="nama_lengkap"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama
                                                Lengkap</label>
                                            <input type="text" name="nama_lengkap" id="nama_lengkap"
                                                value="{{ old('nama_lengkap', $mahasiswa->nama_lengkap) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                            {{ $errors->has('nama_lengkap') ? 'border-red-500 is-invalid' : '' }}">
                                            @error('nama_lengkap')
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
                                            <label for="tempat_lahir"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Tempat
                                                Lahir</label>
                                            <input type="text" name="tempat_lahir" id="tempat_lahir"
                                                value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('tempat_lahir') ? 'border-red-500 is-invalid' : '' }}">
                                            @error('tempat_lahir')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-1 mb-2 w-full group">
                                            <label for="Default_Datepicker"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Tanggal
                                                Lahir</label>
                                            <input type="text" name="tanggal_lahir" id="Default_Datepicker"
                                                value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('tanggal_lahir') ? 'border-red-500 is-invalid' : '' }}">
                                            @error('tanggal_lahir')
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
                                            <label for="email"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Email</label>
                                            <input type="email" name="email" id="email"
                                                value="{{ old('email', $mahasiswa->email) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('email.') ? 'border-red-500 is-invalid' : '' }}"
                                                placeholder="name@gmail.com">
                                            @error('email')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="default_password"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Password</label>
                                            <input type="text" name="default_password" id="default_password"
                                                value="{{ old('default_password', $mahasiswa->default_password) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('default_password') ? 'border-red-500 is-invalid' : '' }}">
                                            @error('default_password')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="nomor_hp"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Nomor
                                                Handphone</label>
                                            <input type="text" name="nomor_hp" id="nomor_hp"
                                                value="{{ old('nomor_hp', $mahasiswa->nomor_hp) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('nomor_hp') ? 'border-red-500 is-invalid' : '' }}">
                                            @error('nomor_hp')
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
                                            <label for="nomor_nik"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Nomor
                                                Induk
                                                Keluarga</label>
                                            <input type="text" name="nomor_nik" id="nomor_nik"
                                                value="{{ old('nomor_nik', $mahasiswa->nomor_nik) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('nomor_nik') ? 'border-red-500 is-invalid' : '' }}">
                                            @error('nomor_nik')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="nama_ibu_kandung"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama
                                                Ibu
                                                Kandung</label>
                                            <input type="text" name="nama_ibu_kandung" id="nama_ibu_kandung"
                                                value="{{ old('nama_ibu_kandung', $mahasiswa->nama_ibu_kandung) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('nama_ibu_kandung') ? 'border-red-500 is-invalid' : '' }}">
                                            @error('nama_ibu_kandung')
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
                                            <label for="tahun_masuk"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Tahun
                                                Masuk</label>
                                            <input type="text" name="tahun_masuk" id="tahun_masuk"
                                                value="{{ old('tahun_masuk', $mahasiswa->tahun_masuk) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('tahun_masuk') ? 'border-red-500 is-invalid' : '' }}">
                                            @error('tahun_masuk')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <label for="tahun_wisuda"
                                            class="font-medium text-sm text-slate-600 dark:text-slate-400">Tahun
                                            Wisuda</label>
                                        <input type="text" name="tahun_wisuda" id="tahun_wisuda"
                                            value="{{ old('tahun_wisuda', $mahasiswa->tahun_wisuda) }}"
                                            class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('tahun_wisuda') ? 'border-red-500 is-invalid' : '' }}">
                                        @error('tahun_wisuda')
                                            <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="keterangan"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Keterangan</label>
                                            <select name="keterangan" id="keterangan"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                            {{ $errors->has('keterangan') ? 'border-red-500 is-invalid' : '' }}">
                                                <option value="" class="dark:bg-slate-800">-- Pilih Jenis
                                                    Kelamin --</option>
                                                <option value="Aktif"
                                                    {{ old('keterangan', $mahasiswa->keterangan) == 'Aktif' ? 'selected' : '' }}>
                                                    Aktif</option>
                                                <option value="Tidak Aktif"
                                                    {{ old('keterangan', $mahasiswa->keterangan) == 'Tidak Aktif' ? 'selected' : '' }}>
                                                    Tidak Aktif</option>
                                            </select>
                                            @error('keterangan')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="status_pekerjaan"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Status
                                                Pekerjaan</label>
                                            <select name="status_pekerjaan" id="status_pekerjaan"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('status_pekerjaan') ? 'border-red-500 is-invalid' : '' }}">
                                                <option value="" class="dark:bg-slate-800">-- Pilih Jenis
                                                    Kelamin --</option>
                                                <option value="Bekerja"
                                                    {{ old('status_pekerjaan', $mahasiswa->status_pekerjaan) == 'Bekerja' ? 'selected' : '' }}>
                                                    Bekerja</option>
                                                <option value="Tidak Bekerja"
                                                    {{ old('status_pekerjaan', $mahasiswa->status_pekerjaan) == 'Tidak Bekerja' ? 'selected' : '' }}>
                                                    Tidak Bekerja</option>
                                            </select>
                                            @error('status_pekerjaan')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    {{-- Jenis Kelamin --}}
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="jenis_kelamin"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">
                                                Jenis Kelamin
                                            </label>
                                            <select name="jenis_kelamin" id="jenis_kelamin"
                                                class="form-input w-full rounded-md mt-1 px-3 py-1 bg-transparent dark:text-slate-300 focus:outline-none focus:ring-0
                       placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm
                       hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                       border
                       {{ $errors->has('jenis_kelamin') ? 'border-red-500 dark:border-red-500 is-invalid' : 'border-slate-300/60 dark:border-slate-700' }}">
                                                <option value="" class="dark:bg-slate-800">-- Pilih Jenis
                                                    Kelamin --</option>
                                                <option value="L" class="dark:bg-slate-800"
                                                    {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'L' ? 'selected' : '' }}>
                                                    Laki-laki</option>
                                                <option value="P" class="dark:bg-slate-800"
                                                    {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'P' ? 'selected' : '' }}>
                                                    Perempuan</option>
                                            </select>
                                            @error('jenis_kelamin')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Status Pernikahan --}}
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="status_pernikahan"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">
                                                Status Pernikahan
                                            </label>
                                            <select name="status_pernikahan" id="status_pernikahan"
                                                class="form-input w-full rounded-md mt-1 px-3 py-1 bg-transparent dark:text-slate-300 focus:outline-none focus:ring-0
                       placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm
                       hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                       border
                       {{ $errors->has('status_pernikahan') ? 'border-red-500 dark:border-red-500 is-invalid' : 'border-slate-300/60 dark:border-slate-700' }}">
                                                <option value="" class="dark:bg-slate-800">-- Pilih Status
                                                    Pernikahan --</option>
                                                <option value="Belum Menikah" class="dark:bg-slate-800"
                                                    {{ old('status_pernikahan', $mahasiswa->status_pernikahan) == 'Belum Menikah' ? 'selected' : '' }}>
                                                    Belum Menikah</option>
                                                <option value="Menikah" class="dark:bg-slate-800"
                                                    {{ old('status_pernikahan', $mahasiswa->status_pernikahan) == 'Menikah' ? 'selected' : '' }}>
                                                    Menikah</option>
                                                <option value="Duda/Janda" class="dark:bg-slate-800"
                                                    {{ old('status_pernikahan', $mahasiswa->status_pernikahan) == 'Duda/Janda' ? 'selected' : '' }}>
                                                    Duda/Janda</option>
                                            </select>
                                            @error('status_pernikahan')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    {{-- Layanan Program --}}
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="layanan_program"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">
                                                Layanan Program
                                            </label>
                                            <select name="layanan_program" id="layanan_program"
                                                class="form-input w-full rounded-md mt-1 px-3 py-1 bg-transparent dark:text-slate-300 focus:outline-none focus:ring-0
                       placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm
                       hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                       border
                       {{ $errors->has('layanan_program') ? 'border-red-500 dark:border-red-500 is-invalid' : 'border-slate-300/60 dark:border-slate-700' }}">
                                                <option value="" class="dark:bg-slate-800">-- Pilih Layanan
                                                    Program --</option>
                                                <option value="RPL" class="dark:bg-slate-800"
                                                    {{ old('layanan_program', $mahasiswa->layanan_program) == 'RPL' ? 'selected' : '' }}>
                                                    RPL/Alih Kredit - (Melanjutkan diri
                                                    D3/Linierisasi S-1/Pindah Kuliah Ke UT)</option>
                                                <option value="Non RPL" class="dark:bg-slate-800"
                                                    {{ old('layanan_program', $mahasiswa->layanan_program) == 'Non RPL' ? 'selected' : '' }}>
                                                    Non RPL - SMA/SMK/MA/Paket-C/Muaddallah
                                                    Setara MA/SMA Terbuka</option>
                                            </select>
                                            @error('layanan_program')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Jalur Program --}}
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="jalur_program"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">
                                                Jalur Program
                                            </label>
                                            <select name="jalur_program" id="jalur_program"
                                                class="form-input w-full rounded-md mt-1 px-3 py-1 bg-transparent dark:text-slate-300 focus:outline-none focus:ring-0
                       placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm
                       hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                       border
                       {{ $errors->has('jalur_program') ? 'border-red-500 dark:border-red-500 is-invalid' : 'border-slate-300/60 dark:border-slate-700' }}">
                                                <option value="" class="dark:bg-slate-800">-- Pilih Jalur
                                                    Program --</option>
                                                <option value="Non SIPAS" class="dark:bg-slate-800"
                                                    {{ old('jalur_program', $mahasiswa->jalur_program) == 'Non SIPAS' ? 'selected' : '' }}>
                                                    Non SIPAS</option>
                                                <option value="SIPAS" class="dark:bg-slate-800"
                                                    {{ old('jalur_program', $mahasiswa->jalur_program) == 'SIPAS' ? 'selected' : '' }}>
                                                    SIPAS</option>
                                            </select>
                                            @error('jalur_program')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="kode_program_studi"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Program
                                                Studi</label>
                                            <select name="kode_program_studi" id="kode_program_studi"
                                                class="form-input w-full rounded-md mt-1 px-3 py-1 bg-transparent dark:text-slate-300 focus:outline-none focus:ring-0
                                                    placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm
                                                    hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                    border
                                                    {{ $errors->has('kode_program_studi') ? 'border-red-500 dark:border-red-500 is-invalid' : 'border-slate-300/60 dark:border-slate-700' }}">
                                                @foreach ($prodi as $prodis)
                                                    <option class="dark:bg-slate-800"
                                                        value="{{ $prodis->kode_program_studi }}"
                                                        {{ old('kode_program_studi', $mahasiswa->kode_program_studi) == $prodis->kode_program_studi ? 'selected' : '' }}>
                                                        {{ $prodis->program_studi }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('kode_jurusan')
                                                <div class="invalid-feedback text-red-500 font-medium text-sm mt-1">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="id_agama"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Agama</label>
                                            <select name="id_agama" id="id_agama"
                                                class="form-input w-full rounded-md mt-1 px-3 py-1 bg-transparent dark:text-slate-300 focus:outline-none focus:ring-0
                                                    placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm
                                                    hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                    border
                                                    {{ $errors->has('id_agama') ? 'border-red-500 dark:border-red-500 is-invalid' : 'border-slate-300/60 dark:border-slate-700' }}">
                                                @foreach ($agama as $agamas)
                                                    <option class="dark:bg-slate-800" value="{{ $agamas->id_agama }}"
                                                        {{ old('id_agama', $mahasiswa->id_agama) == $agamas->id_agama ? 'selected' : '' }}>
                                                        {{ $agamas->agama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('id_agama')
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
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class=" inline-block focus:outline-none text-white bg-primary-500 border border-gray-200 dark:text-white dark:border-gray-700 dark:bg-primary-500 dark:hover:bg-blue-400  text-sm font-medium py-1 px-3 rounded mb-1 mt-2">
                        <i class="mdi mdi-content-save"></i>
                        <span>Update Data</span></button>
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
<script>
    function initializeDatepickers() {
        new Datepicker(document.getElementById("Default_Datepicker"), {
            autohide: true,
            format: 'yyyy-mm-dd',
        });
    }
    document.addEventListener('DOMContentLoaded', function() {
        initializeDatepickers();
    });
</script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- JAVASCRIPTS -->
</body>

</html>
