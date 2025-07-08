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
                                    <a href="{{ route('agama.index') }}">
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
            <form action="{{ route('agama.update', $data_agama->id_agama) }}" method="POST">
                @csrf
                @method('PUT')
                <div id="grand-form-container" class="grandFormContainer grid sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                    <div id="form-container" class="formRem sm:col-span-6 md:col-span-6 lg:col-span-12 xl:col-span-12">
                        <div class="bg-white dark:bg-slate-800 shadow rounded-md w-full relative">
                            <div
                                class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70 flex justify-between">
                                <h4 class="font-medium">Form Edit Data Agama</h4>
                            </div><!--end header-title-->
                            <div class="flex-auto p-4">
                                <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="agama"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">ID Agama</label>
                                            <input type="text" name="id_agama" id="id_agama" value="{{ old("id_agama", $data_agama->id_agama) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('id_agama') ? 'border-red-500 is-invalid' : '' }}">
                                                @error("id_agama")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 ">
                                        <div class="relative z-0 mb-2 w-full group">
                                            <label for="agama"
                                                class="font-medium text-sm text-slate-600 dark:text-slate-400">Agama</label>
                                            <input type="text" name="agama" id="agama" value="{{ old("agama", $data_agama->agama) }}"
                                                class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700
                                                {{ $errors->has('agama') ? 'border-red-500 is-invalid' : '' }}">
                                                @error("agama")
                                                <div class="invalid-feedback text-red-500 font-medium text-sm">
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
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- JAVASCRIPTS -->
</body>

</html>

