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
                                    <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">Edit Beranda</h1>
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
                        <!-- Header -->
                        <div
                            class="flex justify-between items-center border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                            <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                Edit Data Alumni
                            </h2>
                        </div>

                        <!-- Body -->
                        <div class="p-6">
                            <form action="{{ route('alumni.update') }}" method="POST" class="space-y-6"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                @foreach ($alumni as $index => $item)
                                    <div class="border rounded-md p-4 space-y-4">
                                        <h3 class="text-md font-semibold text-gray-700 dark:text-gray-200">Alumni
                                            {{ $index + 1 }}</h3>

                                        <!-- Gambar -->
                                        <div>
                                            <label
                                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Foto</label>
                                            <input type="file" name="gambar[{{ $item->id_alumni }}]"
                                                class="w-full border border-gray-300 dark:border-gray-700 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-100">
                                            @if ($item->gambar)
                                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="Foto Alumni"
                                                    class="mt-2 w-24 h-24 object-cover rounded-md">
                                            @endif
                                        </div>

                                        <!-- Nama -->
                                        <div>
                                            <label
                                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Nama</label>
                                            <input type="text" name="nama[{{ $item->id_alumni }}]"
                                                value="{{ old('nama.' . $item->id_alumni, $item->nama) }}"
                                                class="w-full border border-gray-300 dark:border-gray-700 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-100">
                                        </div>

                                        <!-- Jabatan -->
                                        <div>
                                            <label
                                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Jabatan</label>
                                            <input type="text" name="jabatan[{{ $item->id_alumni }}]"
                                                value="{{ old('jabatan.' . $item->id_alumni, $item->jabatan) }}"
                                                class="w-full border border-gray-300 dark:border-gray-700 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-100">
                                        </div>

                                        <!-- Kesan -->
                                        <div>
                                            <label
                                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Kesan</label>
                                            <textarea name="kesan[{{ $item->id_alumni }}]" rows="3"
                                                class="w-full border border-gray-300 dark:border-gray-700 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-100">{{ old('kesan.' . $item->id_alumni, $item->kesan) }}</textarea>
                                        </div>
                                    </div>
                                @endforeach

                                <!-- Tombol Update -->
                                <div class="flex justify-end mt-4">
                                    <button type="submit"
                                        class="px-5 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition">
                                        Update Semua Alumni
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @include('partials.footer')
        </div>
    </div>
</div>
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
