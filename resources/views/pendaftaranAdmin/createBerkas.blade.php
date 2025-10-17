<div class="modal animate-ModalSlide {{ $errors->any() ? 'block' : '' }}" id="modalBerkas">
    <div class="relative w-auto pointer-events-none sm:max-w-lg sm:my-7 sm:mx-auto z-[99] h-96">
        <div class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded overflow-hidden max-h-full">
            
            <!-- Header -->
            <div class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                <h6 class="mb-0 leading-4 text-base font-semibold text-slate-300 mt-0">
                    Form Tambah Data Berkas
                </h6>
                <button type="button" class="close box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-slate-300 leading-4 text-xl close" aria-label="Close">&times;</button>
            </div>

            <!-- Form -->
            <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed overflow-y-auto">
                <form action="{{ route('unduhberkas.store') }}" method="POST" id="form-berkas" enctype="multipart/form-data">
                    @csrf
                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-2 mt-2">
                        
                        <!-- Nama Berkas -->
                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                            <div class="relative z-0 w-full group">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama Berkas</label>
                                <input type="text" name="nama_berkas" placeholder="Contoh: Panduan Pendaftaran"
                                    value="{{ old('nama_berkas') }}"
                                    class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none @error('nama_berkas') border-red-500 is-invalid @enderror">
                                @error('nama_berkas')
                                    <div class="invalid-feedback text-red-500 font-medium text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- File Berkas -->
                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                            <div class="relative z-0 w-full group">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Berkas (PDF, DOCX, JPG, PNG)</label>
                                <input type="file" name="berkas" accept=".pdf,.doc,.docx,.jpg,.png"
                                    class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none @error('berkas') border-red-500 is-invalid @enderror">
                                @error('berkas')
                                    <div class="invalid-feedback text-red-500 font-medium text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <!-- Footer -->
            <div class="flex flex-wrap shrink-0 justify-end p-3 border-t border-dashed dark:border-gray-700">
                <button type="button" class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-1 px-3 rounded mr-2 close">
                    Close
                </button>
                <button type="submit" form="form-berkas"
                    class="inline-block focus:outline-none text-green-500 hover:bg-green-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-green-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-green-500 text-sm font-medium py-1 px-3 rounded">
                    Save
                </button>
            </div>

        </div>
    </div>
</div>
