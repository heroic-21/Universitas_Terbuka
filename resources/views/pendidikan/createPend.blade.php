<div class="modal animate-ModalSlide {{ $errors->any() ? 'block' : '' }}" id="modalscrollable">
    <div class="relative w-auto pointer-events-none sm:max-w-lg sm:my-7 sm:mx-auto z-[99] h-96">
        <div class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded overflow-hidden max-h-full">
            <div class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                <h6 class="mb-0 leading-4 text-base font-semibold text-slate-300 mt-0" id="staticBackdropLabel1">
                    Form Tambah Data Pendidikan
                </h6>
                <button type="button" class="close box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-slate-300 leading-4 text-xl close" aria-label="Close">&times;</button>
            </div>
            @php
                $oldInputs = old('id_pendidikan', []);
            @endphp

            <!-- Scrollable Form Content -->
            <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed overflow-y-auto">
                <form action="{{ route('pendidikan.store') }}" method="POST" id="form-pendidikan">
                    @csrf
                    @if (count($oldInputs) > 0)
                        @foreach ($oldInputs as $i => $id_pendidikan)
                            <div class="pendidikan-item grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-2 mt-2">
                                {{-- Kode pendidikan --}}
                                @if ($i > 0)
                                    <div class="sm:col-span-5 md:col-span-5 lg:col-span-5 xl:col-span-5">
                                @else
                                    <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                @endif
                                    <div class="relative z-0 w-full group">
                                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">ID pendidikan</label>
                                        <input type="text" name="id_pendidikan[]" value="{{ old("id_pendidikan.$i") }}" placeholder="ID001"
                                            class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 {{ $errors->has("id_pendidikan.$i") ? 'border-red-500 is-invalid' : '' }}">
                                        @error("id_pendidikan.$i")
                                            <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Program pendidikan --}}
                                <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                    <div class="relative z-0 w-full group">
                                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Program Pendidikan</label>
                                        <input type="text" name="program_pendidikan[]" value="{{ old("program_pendidikan.$i") }}" placeholder="Sarjana"
                                            class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 {{ $errors->has("program_pendidikan.$i") ? 'border-red-500 is-invalid' : '' }}">
                                        @error("program_pendidikan.$i")
                                            <div class="invalid-feedback text-red-500 font-medium text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Tombol Hapus --}}
                                @if ($i > 0)
                                    <div class="sm:col-span-1 md:col-span-1 lg:col-span-1 xl:col-span-1 flex items-center">
                                        <button type="button" class="mt-1 removeJur focus:outline-none text-red-500 hover:bg-red-500 hover:text-white border border-gray-200 dark:border-gray-700 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white text-sm font-medium py-0.5 px-3 rounded w-full flex justify-center items-center">
                                            <i class="mdi mdi-trash-can text-lg"></i>
                                        </button>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @else
                        {{-- Jika tidak ada old input --}}
                        <div class="pendidikan-item grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-2 mt-2">
                            <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                <div class="relative z-0 w-full group">
                                    <label class="font-medium text-sm text-slate-600 dark:text-slate-400">ID pendidikan</label>
                                    <input placeholder="ID001" type="text" name="id_pendidikan[]" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                </div>
                            </div>
                            <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                <div class="relative z-0 w-full group">
                                    <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Program pendidikan</label>
                                    <input placeholder="Sarjana" type="text" name="program_pendidikan[]" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Placeholder tambahan form --}}
                    <div class="PENDIDIKAN hidden"></div>
                </form>
            </div>

            <!-- Area tombol tidak ikut scroll -->
            <div class="flex flex-wrap shrink-0 justify-end p-3 border-t border-dashed dark:border-gray-700">
                <a href="#" class="addPend inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500 text-sm font-medium py-1 px-3 mr-2 rounded">
                    Add Form
                </a>
                <button type="button" class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-1 px-3 rounded mr-2 close">
                    Close
                </button>
                <button type="submit" form="form-pendidikan" class="inline-block focus:outline-none text-green-500 hover:bg-green-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-green-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-green-500 text-sm font-medium py-1 px-3 rounded">
                    Save
                </button>
            </div>

        </div>
    </div>
</div>

