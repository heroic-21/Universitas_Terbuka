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
                        <!-- Header -->
                        <div
                            class="flex justify-between items-center border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                            <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                Edit Data RPL & Non RPL
                            </h2>
                        </div>

                        <!-- Body -->
                        <div class="p-6">
                            <form action="{{ route('informasi.pendaftaran.update', $data->id_informasi_pendaftaran) }}"
                                method="POST" class="space-y-6">
                                @csrf
                                @method('PUT')

                                <!-- RPL -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- tanggal_rpl -->
                                    <div>
                                        <label for="tanggal_rpl"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                            Tanggal Mulai RPL
                                        </label>
                                        <input type="date" name="tanggal_rpl" id="tanggal_rpl"
                                            value="{{ old('tanggal_rpl', $data->tanggal_rpl) }}"
                                            class="w-full border border-gray-300 dark:border-gray-700 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-100">
                                    </div>

                                    <!-- tanggal_rpl_tutup -->
                                    <div>
                                        <label for="tanggal_rpl_tutup"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                            Tanggal Tutup RPL
                                        </label>
                                        <input type="date" name="tanggal_rpl_tutup" id="tanggal_rpl_tutup"
                                            value="{{ old('tanggal_rpl_tutup', $data->tanggal_rpl_tutup) }}"
                                            class="w-full border border-gray-300 dark:border-gray-700 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-100">
                                    </div>
                                </div>

                                <!-- NON RPL -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- tanggal_non_rpl -->
                                    <div>
                                        <label for="tanggal_non_rpl"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                            Tanggal Mulai Non RPL
                                        </label>
                                        <input type="date" name="tanggal_non_rpl" id="tanggal_non_rpl"
                                            value="{{ old('tanggal_non_rpl', $data->tanggal_non_rpl) }}"
                                            class="w-full border border-gray-300 dark:border-gray-700 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-100">
                                    </div>

                                    <!-- tanggal_non_rpl_tutup -->
                                    <div>
                                        <label for="tanggal_non_rpl_tutup"
                                            class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                            Tanggal Tutup Non RPL
                                        </label>
                                        <input type="date" name="tanggal_non_rpl_tutup" id="tanggal_non_rpl_tutup"
                                            value="{{ old('tanggal_non_rpl_tutup', $data->tanggal_non_rpl_tutup) }}"
                                            class="w-full border border-gray-300 dark:border-gray-700 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-100">
                                    </div>
                                </div>

                                <!-- keterangan_rpl -->
                                <div>
                                    <label for="keterangan_rpl"
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Keterangan RPL
                                    </label>
                                    <textarea name="keterangan_rpl" id="keterangan_rpl" rows="3"
                                        class="w-full border border-gray-300 dark:border-gray-700 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-100">{{ old('keterangan_rpl', $data->keterangan_rpl) }}</textarea>
                                </div>

                                <!-- keterangan_non_rpl -->
                                <div>
                                    <label for="keterangan_non_rpl"
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Keterangan Non RPL
                                    </label>
                                    <textarea name="keterangan_non_rpl" id="keterangan_non_rpl" rows="3"
                                        class="w-full border border-gray-300 dark:border-gray-700 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 dark:bg-gray-900 dark:text-gray-100">{{ old('keterangan_non_rpl', $data->keterangan_non_rpl) }}</textarea>
                                </div>

                                <!-- Tombol Simpan -->
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="px-5 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition">
                                        Simpan Perubahan
                                    </button>
                                </div>
                            </form>

                            <!-- Data Saat Ini -->
                            <div class="mt-10 border-t pt-5">
                                <h3 class="text-md font-semibold text-gray-700 dark:text-gray-200 mb-3">Data Saat Ini:
                                </h3>
                                <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <tbody>
                                        <tr>
                                            <td class="py-2 font-medium text-gray-700 dark:text-gray-300">Tanggal Mulai
                                                RPL</td>
                                            <td class="py-2">{{ $data->tanggal_rpl ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-medium text-gray-700 dark:text-gray-300">Tanggal Tutup
                                                RPL</td>
                                            <td class="py-2">{{ $data->tanggal_rpl_tutup ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-medium text-gray-700 dark:text-gray-300">Tanggal Mulai
                                                Non RPL</td>
                                            <td class="py-2">{{ $data->tanggal_non_rpl ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-medium text-gray-700 dark:text-gray-300">Tanggal Tutup
                                                Non RPL</td>
                                            <td class="py-2">{{ $data->tanggal_non_rpl_tutup ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-medium text-gray-700 dark:text-gray-300">Keterangan RPL
                                            </td>
                                            <td class="py-2">{{ $data->keterangan_rpl ?? '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-medium text-gray-700 dark:text-gray-300">Keterangan Non
                                                RPL</td>
                                            <td class="py-2">{{ $data->keterangan_non_rpl ?? '-' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="xl:w-full min-h-[calc(100vh-138px)] relative pb-14">
            <div class="sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                <div class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative">
                    <!-- Header -->
                    <div
                        class="flex justify-end items-center border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                        <a href="#modalBerkas" data-modal-toggle="modal">
                            <button
                                class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">
                                Tambah Berkas
                            </button>
                        </a>
                    </div>

                    <!-- Tabel -->
                    <div class="grid grid-cols-1 p-4">
                        <div class="sm:-mx-6 lg:-mx-8">
                            <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                <table class="w-full border-collapse" id="datatable_berkas">
                                    <thead class="bg-gray-50 dark:bg-gray-600/20">
                                        <tr>
                                            <th
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Nomor</th>
                                            <th
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Nama Berkas</th>
                                            <th
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                File</th>
                                            <th
                                                class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($berkas as $berkass)
                                            <tr
                                                class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td
                                                    class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    {{ $berkass->nama_berkas }}
                                                </td>
                                                <td
                                                    class="p-3 text-sm text-blue-500 whitespace-nowrap dark:text-blue-400">
                                                    <a href="{{ asset('storage/' . $berkass->berkas) }}"
                                                        target="_blank" class="underline hover:text-blue-600">
                                                        Lihat File
                                                    </a>
                                                </td>
                                                <td
                                                    class="p-3 text-lg text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <div class="flex items-center gap-2">
                                                        <!-- Tombol Hapus -->
                                                        <form id="form-delete-{{ $berkass->id_berkas }}"
                                                            action="{{ route('unduhberkas.destroy', $berkass->id_berkas) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="button"
                                                                onclick="handleDismiss('{{ $berkass->id_berkas }}')">
                                                                <i
                                                                    class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end card-body-->

                </div> <!--end card-->
                @include('partials.footer')
            </div><!--end col-->
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
