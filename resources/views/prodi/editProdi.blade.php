@include('partials.main')

<head>
    @include('partials.title-meta')

    <!-- Css -->

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
                                    <a href="{{ route('prodi.index') }}">
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
            <form action="{{ route('prodi.update', $data_prodi->kode_program_studi) }}" method="POST">
                @csrf
                @method('PUT')
                <div id="grand-form-container" class="grid sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div class="md:col-span-12">
                        <div class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative">
                            <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                <h4 class="font-medium">Form Edit Data Program Studi</h4>
                            </div>

                            <div class="flex-auto p-4">
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">

                                    {{-- Kode Program Studi --}}
                                    <div class="md:col-span-6">
                                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Kode Program Studi</label>
                                        <input type="text" name="kode_program_studi" value="{{ old('kode_program_studi', $data_prodi->kode_program_studi) }}"
                                            class="form-input w-full rounded-md mt-1 border {{ $errors->has('kode_program_studi') ? 'border-red-500 is-invalid' : 'border-slate-300/60' }}">
                                        @error('kode_program_studi')
                                            <div class="text-red-500 text-sm font-medium">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Nama Program Studi --}}
                                    <div class="md:col-span-6">
                                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama Program Studi</label>
                                        <input type="text" name="program_studi" value="{{ old('program_studi', $data_prodi->program_studi) }}"
                                            class="form-input w-full rounded-md mt-1 border {{ $errors->has('program_studi') ? 'border-red-500 is-invalid' : 'border-slate-300/60' }}">
                                        @error('program_studi')
                                            <div class="text-red-500 text-sm font-medium">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Keterangan --}}
                                    <div class="md:col-span-12">
                                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Keterangan</label>
                                        <textarea name="keterangan_prodi" rows="3"
                                            class="form-input w-full rounded-md mt-1 border {{ $errors->has('keterangan_prodi') ? 'border-red-500 is-invalid' : 'border-slate-300/60' }}">{{ old('keterangan_prodi', $data_prodi->keterangan_prodi) }}</textarea>
                                        @error('keterangan_prodi')
                                            <div class="text-red-500 text-sm font-medium">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Link Prodi UT --}}
                                    <div class="md:col-span-12">
                                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Link Prodi UT</label>
                                        <input type="url" name="link_prodi_ut" value="{{ old('link_prodi_ut', $data_prodi->link_prodi_ut) }}"
                                            class="form-input w-full rounded-md mt-1 border {{ $errors->has('link_prodi_ut') ? 'border-red-500 is-invalid' : 'border-slate-300/60' }}">
                                        @error('link_prodi_ut')
                                            <div class="text-red-500 text-sm font-medium">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Dropdown Pendidikan --}}
                                    <div class="md:col-span-6">
                                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Pendidikan</label>
                                        <select name="id_pendidikan" class="form-select w-full rounded-md mt-1 border {{ $errors->has('id_pendidikan') ? 'border-red-500 is-invalid' : 'border-slate-300/60' }}">
                                            <option value="">-- Pilih Pendidikan --</option>
                                            @foreach ($pendidikan as $p)
                                                <option value="{{ $p->id_pendidikan }}" {{ old('id_pendidikan', $data_prodi->id_pendidikan) == $p->id_pendidikan ? 'selected' : '' }}>
                                                    {{ $p->program_pendidikan }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_pendidikan')
                                            <div class="text-red-500 text-sm font-medium">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    {{-- Dropdown Fakultas --}}
                                    <div class="md:col-span-6">
                                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Fakultas</label>
                                        <select name="id_fakultas" class="form-select w-full rounded-md mt-1 border {{ $errors->has('id_fakultas') ? 'border-red-500 is-invalid' : 'border-slate-300/60' }}">
                                            <option value="">-- Pilih Fakultas --</option>
                                            @foreach ($fakultas as $f)
                                                <option value="{{ $f->id_fakultas }}" {{ old('id_fakultas', $data_prodi->id_fakultas) == $f->id_fakultas ? 'selected' : '' }}>
                                                    {{ $f->fakultas }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_fakultas')
                                            <div class="text-red-500 text-sm font-medium">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="inline-block focus:outline-none text-white bg-primary-500 dark:bg-primary-500 hover:bg-blue-600 text-sm font-medium py-2 px-4 rounded">
                        <i class="mdi mdi-content-save"></i> Update Data
                    </button>
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
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- JAVASCRIPTS -->
</body>

</html>

