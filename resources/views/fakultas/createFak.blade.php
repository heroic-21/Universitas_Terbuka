<div class="modal animate-ModalSlide {{ $errors->any() ? 'block' : '' }}" id="modalscrollable">
    <div class="relative w-auto pointer-events-none sm:max-w-lg sm:my-7 sm:mx-auto z-[99] h-96">
        <div class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded overflow-hidden max-h-full">
            <div class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                <h6 class="mb-0 leading-4 text-base font-semibold text-slate-300 mt-0" id="staticBackdropLabel1">
                    Form Tambah Data Fakultas
                </h6>
                <button type="button" class="close box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-slate-300 leading-4 text-xl close" aria-label="Close">&times;</button>
            </div>

            <!-- Scrollable Form Content -->
            <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed overflow-y-auto">
                <form action="{{ route('fakultas.store') }}" method="POST" id="form-fakultas">
                    @csrf
                    <div class="fakultas-item grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-2 mt-2">

                        {{-- ID Fakultas --}}
                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                            <div class="relative z-0 w-full group">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">ID Fakultas</label>
                                <input placeholder="F001" type="text" name="id_fakultas" value="{{ old('id_fakultas') }}"
                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                @error('id_fakultas')
                                    <div class="invalid-feedback text-red-500 font-medium text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Fakultas --}}
                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                            <div class="relative z-0 w-full group">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Fakultas</label>
                                <input placeholder="Teknik Informatika" type="text" name="fakultas" value="{{ old('fakultas') }}"
                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                @error('fakultas')
                                    <div class="invalid-feedback text-red-500 font-medium text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Keterangan Fakultas --}}
                        <div class="sm:col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                            <div class="relative z-0 w-full group mt-2">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Keterangan Fakultas</label>
                                <textarea name="keterangan_fakultas" rows="3" placeholder="Keterangan fakultas..." 
                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">{{ old('keterangan_fakultas') }}</textarea>
                                @error('keterangan_fakultas')
                                    <div class="invalid-feedback text-red-500 font-medium text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Link Fakultas UT --}}
                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 mt-2">
                            <div class="relative z-0 w-full group">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Link Fakultas UT</label>
                                <input placeholder="https://ut.ac.id/fakultas/ti" type="text" name="link_fakultas_ut" value="{{ old('link_fakultas_ut') }}"
                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                @error('link_fakultas_ut')
                                    <div class="invalid-feedback text-red-500 font-medium text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Alias --}}
                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6 mt-2">
                            <div class="relative z-0 w-full group">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Alias</label>
                                <input placeholder="TI" type="text" name="alias" value="{{ old('alias') }}"
                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                @error('alias')
                                    <div class="invalid-feedback text-red-500 font-medium text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <!-- Area tombol tidak ikut scroll -->
            <div class="flex flex-wrap shrink-0 justify-end p-3 border-t border-dashed dark:border-gray-700">
                <button type="button" class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-1 px-3 rounded mr-2 close">
                    Close
                </button>
                <button type="submit" form="form-fakultas" class="inline-block focus:outline-none text-green-500 hover:bg-green-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-green-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-green-500 text-sm font-medium py-1 px-3 rounded">
                    Save
                </button>
            </div>

        </div>
    </div>
</div>
