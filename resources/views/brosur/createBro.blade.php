<div class="modal animate-ModalSlide {{ $errors->any() ? 'block' : '' }}" id="modalscrollable">
    <div class="relative w-auto pointer-events-none sm:max-w-lg sm:my-7 sm:mx-auto z-[99] h-96">
        <div class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded overflow-hidden max-h-full">
            <div class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                <h6 class="mb-0 leading-4 text-base font-semibold text-slate-300 mt-0" id="staticBackdropLabel1">
                    Form Tambah Data Brosur
                </h6>
                <button type="button" class="close box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-slate-300 leading-4 text-xl close" aria-label="Close">&times;</button>
            </div>

            <!-- Scrollable Form Content -->
            <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed overflow-y-auto">
                <form action="{{ route('brosur.store') }}" method="POST" id="form-brosur" enctype="multipart/form-data">
                    @csrf
                    <div class="brosur-item grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-2 mt-2">

                        {{-- Judul Brosur --}}
                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                            <div class="relative z-0 w-full group">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Judul Brosur</label>
                                <input placeholder="Judul Brosur" type="text" name="judul_brosur"
                                    value="{{ old('judul_brosur') }}"
                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                @error('judul_brosur')
                                    <div class="invalid-feedback text-red-500 font-medium text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- Kategori Brosur --}}
                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                            <div class="relative z-0 w-full group mt-2">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Kategori Brosur</label>
                                <select name="kategori_brosur"
                                    class="form-select w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                    <option value="Brosur" {{ old('kategori_brosur') == 'Brosur' ? 'selected' : '' }}>Brosur</option>
                                    <option value="Poster" {{ old('kategori_brosur') == 'Poster' ? 'selected' : '' }}>Poster</option>
                                </select>
                                @error('kategori_brosur')
                                    <div class="invalid-feedback text-red-500 font-medium text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        {{-- File Foto --}}
                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                            <div class="relative z-0 w-full group mt-2">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">File Foto</label>
                                <input type="file" name="brosur"
                                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                @error('brosur')
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
                <button type="button"
                    class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-1 px-3 rounded mr-2 close">
                    Close
                </button>
                <button type="submit" form="form-brosur"
                    class="inline-block focus:outline-none text-green-500 hover:bg-green-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-green-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-green-500 text-sm font-medium py-1 px-3 rounded">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
