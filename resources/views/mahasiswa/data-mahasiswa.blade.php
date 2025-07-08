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
                                            <h1 class="font-semibold text-xl mb-1 block dark:text-slate-100">Data Mahasiswa Universtias Terbuka Rokan Hilir</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end container-->

                <div class="xl:w-full  min-h-[calc(100vh-138px)] relative pb-14 ">

                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                <div class="flex justify-between items-center border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                    <div class="flex items-center space-x-4">
                                        <a href="{{ route('mahasiswa.export.csv') }}" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500 text-sm font-medium py-1 px-3 rounded mb-1 lg:mb-0">
                                            Export CSV
                                        </a>
                                        <a href="{{ route('mahasiswa.export.pdf') }}" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500 text-sm font-medium py-1 px-3 rounded mb-1 lg:mb-0">
                                            Export PDF
                                        </a>
                                    </div>
                                    <a href="{{ route('mahasiswa.create') }}">
                                        <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">
                                            Tambah Data Mahasiswa
                                        </button>
                                    </a>
                                </div>
                                <!--end header-title-->
                                <div class="grid grid-cols-1 p-4">
                                    <div class="sm:-mx-6 lg:-mx-8">
                                        <div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
                                            <table class="w-full border-collapse" id="datatable_1">
                                                <thead class="bg-gray-50 dark:bg-gray-600/20">
                                                    <tr>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                            Nama Lengkap
                                                        </th>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                            NIM
                                                        </th>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                            Email
                                                        </th>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                            Nomor HP
                                                        </th>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                            Pendidikan
                                                        </th>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                            Jurusan
                                                        </th>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                            Status
                                                        </th>
                                                        <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
                                                            Aksi
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $data_mahasiswa)
                                                    <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                        <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                            {{ $data_mahasiswa->nama_lengkap }}
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $data_mahasiswa->nim }}
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $data_mahasiswa->email }}
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $data_mahasiswa->nomor_hp }}
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $data_mahasiswa->pendidikan->program_pendidikan }}
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            {{ $data_mahasiswa->jurusan->jurusan }}
                                                        </td>
                                                        <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            @if($data_mahasiswa->keterangan == 'Aktif')
                                                                <span class="bg-green-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded">
                                                                    {{ $data_mahasiswa->keterangan }}
                                                                </span>
                                                            @else
                                                                <span class="bg-red-500 text-white text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded">
                                                                    {{ $data_mahasiswa->keterangan }}
                                                                </span>
                                                            @endif
                                                        </td>
                                                        <td class="p-3 text-lg text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                            <div class="flex items-center gap-2">
                                                                <a href="{{ route('mahasiswa.edit', $data_mahasiswa->nim) }}">
                                                                    <i class="ti ti-edit text-lg text-yellow-500 dark:text-yellow-400"></i>
                                                                </a>
                                                                <form action="{{ route('mahasiswa.destroy', $data_mahasiswa->nim) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                                        <i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i>
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
                        </div><!--end col-->
                    <!-- footer -->
                    @include('partials.footer')
                </div><!--end container-->
            </div>
        </div>

        <!-- JAVASCRIPTS -->
        @include('partials.script-file')
        <script src="assets/libs/simple-datatables/umd/simple-datatables.js"></script>
        <script src="assets/js/pages/datatable.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>
