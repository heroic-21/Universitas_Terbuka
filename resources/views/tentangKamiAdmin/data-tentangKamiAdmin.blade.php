@include('partials.main')

<head>
    @include('partials.title-meta')

    <!-- Css -->
    <link rel="stylesheet" href="assets/libs/simple-datatables/style.css">
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
                                    <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">Informasi
                                        Pendaftaran</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->
        <div class="xl:w-full min-h-[calc(100vh-138px)] relative pb-14">
            <div class="grid md:grid-cols-12 gap-4 mb-4">
                <div class="col-span-12">
                    <div class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative">
                        <div
                            class="flex justify-between items-center border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                            <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                Edit Data Tentang Kami
                            </h2>
                        </div>

                        <div class="p-6">
                            <form action="{{ route('tentangkami-admin.update') }}" method="POST"
                                enctype="multipart/form-data" class="space-y-8">
                                @csrf
                                @method('PUT')

                                @foreach ($datas as $index => $data)
                                    <div class="border p-4 rounded-lg bg-gray-50 dark:bg-gray-900/30">
                                        <h3 class="text-md font-semibold text-gray-800 dark:text-gray-100 mb-4">
                                            Admin {{ $index + 1 }}
                                        </h3>

                                        <input type="hidden" name="id_tentang_kami[]"
                                            value="{{ $data->id_tentang_kami }}">

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label class="text-sm text-gray-700 dark:text-gray-300">Nama
                                                    Admin</label>
                                                <input type="text" name="admin[]"
                                                    value="{{ old('admin.' . $index, $data->admin) }}"
                                                    class="w-full border rounded-md px-3 py-2 dark:bg-gray-800 dark:text-gray-100">
                                            </div>

                                            <div>
                                                <label class="text-sm text-gray-700 dark:text-gray-300">Jabatan</label>
                                                <input type="text" name="jabatan[]"
                                                    value="{{ old('jabatan.' . $index, $data->jabatan) }}"
                                                    class="w-full border rounded-md px-3 py-2 dark:bg-gray-800 dark:text-gray-100">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="text-sm text-gray-700 dark:text-gray-300">Tentang
                                                Admin</label>
                                            <textarea name="tentang_admin[]" rows="3"
                                                class="w-full border rounded-md px-3 py-2 dark:bg-gray-800 dark:text-gray-100">{{ old('tentang_admin.' . $index, $data->tentang_admin) }}</textarea>
                                        </div>

                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label class="text-sm text-gray-700 dark:text-gray-300">Kontak
                                                    WA</label>
                                                <input type="text" name="kontak_wa[]"
                                                    value="{{ old('kontak_wa.' . $index, $data->kontak_wa) }}"
                                                    class="w-full border rounded-md px-3 py-2 dark:bg-gray-800 dark:text-gray-100">
                                            </div>

                                            <div>
                                                <label
                                                    class="text-sm text-gray-700 dark:text-gray-300">Instagram</label>
                                                <input type="text" name="instagram[]"
                                                    value="{{ old('instagram.' . $index, $data->instagram) }}"
                                                    class="w-full border rounded-md px-3 py-2 dark:bg-gray-800 dark:text-gray-100">
                                            </div>
                                        </div>

                                        <div>
                                            <label class="text-sm text-gray-700 dark:text-gray-300">Gambar</label>
                                            <input type="file" name="gambar[]"
                                                class="w-full border rounded-md px-3 py-2 dark:bg-gray-800 dark:text-gray-100">
                                            @if ($data->gambar)
                                                <p class="mt-2 text-sm">
                                                    Gambar saat ini:
                                                    <a href="{{ asset('storage/' . $data->gambar) }}" target="_blank"
                                                        class="text-blue-500 underline">Lihat</a>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach

                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="px-5 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition">
                                        Update Data
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('pendaftaranAdmin.createBerkas')
{{-- @foreach ($jurusans as $data_jurusan)
            @include('jurusan.editJrs', ['data_jurusan' => $data_jurusan])
        @endforeach --}}

<div class="modal-overlay"></div>
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPTS -->
@include('partials.script-file')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="assets/libs/simple-datatables/umd/simple-datatables.js"></script>
<script src="assets/js/pages/datatable.init.js"></script>
<script src="assets/libs/sweetalert2/sweetalert2.all.min.js"></script>
<script src="assets/js/pages/sweetalert.init.js"></script>
<script src="script.js"></script>
<script>
    @if (session('deleted'))
        window.addEventListener('DOMContentLoaded', () => {
            executeExample('mixin');
        });
    @endif
</script>
<script src="assets/js/app.js"></script>
<!-- JAVASCRIPTS -->
</body>

</html>
