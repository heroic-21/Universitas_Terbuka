<div class="modal animate-ModalSlide {{ $errors->any() ? 'block' : '' }}" id="modalscrollable">
    <div class="relative w-auto pointer-events-none sm:max-w-lg sm:my-7 sm:mx-auto z-[99] h-[40rem] xl:max-w-6xl">
        <div
            class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded overflow-hidden max-h-full">
            <div
                class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                <h6 class="mb-0 leading-4 text-base font-semibold text-slate-300 mt-0" id="staticBackdropLabel1">
                    Form Tambah Data Prodi
                </h6>
                <button type="button"
                    class="close box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-slate-300 leading-4 text-xl close"
                    aria-label="Close">&times;</button>
            </div>
            @php
                $oldInputs = old('kode_program_studi', []);
            @endphp

            <!-- Scrollable Form Content -->
            <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed overflow-y-auto">
                <form action="{{ route('prodi.store') }}" method="POST" id="form-jurusan">
                    @csrf
                    @if (count($oldInputs) > 0)
                        @foreach ($oldInputs as $i => $kode_program_studi)
                            <div class="jurusan-item grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-2 mt-2">
                                {{-- Kode Jurusan --}}
                                @if ($i > 0)
                                    <div class="sm:col-span-5 md:col-span-5 lg:col-span-5 xl:col-span-5">
                                    @else
                                        <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                @endif
                                <div class="relative z-0 w-full group">
                                    <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Kode
                                        Prodi</label>
                                    <input type="text" name="kode_program_studi[]"
                                        value="{{ old('kode_program_studi.' . $i, $kode_program_studi) }}"
                                        placeholder="SI001"
                                        class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 {{ $errors->has("kode_program_studi.$i") ? 'border-red-500 is-invalid' : '' }}">
                                    @error("kode_program_studi.$i")
                                        <div class="invalid-feedback text-red-500 font-medium text-sm">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Nama Jurusan --}}
                            <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                                <div class="relative z-0 w-full group">
                                    <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama
                                        Prodi</label>
                                    <input type="text" name="program_studi[]"
                                        value="{{ old('program_studi.' . $i) }}"
                                        placeholder="Sistem Informasi"
                                        class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 {{ $errors->has("program_studi.$i") ? 'border-red-500 is-invalid' : '' }}">
                                    @error("program_studi.$i")
                                        <div class="invalid-feedback text-red-500 font-medium text-sm">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Keterangan Prodi --}}
                            <div class="sm:col-span-12">
                                <div class="relative z-0 w-full group">
                                    <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Keterangan
                                        Prodi</label>
                                    <textarea name="keterangan_prodi[]" rows="3" placeholder="Deskripsi program studi..."
                                        class="form-textarea w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 {{ $errors->has("keterangan_prodi.$i") ? 'border-red-500 is-invalid' : '' }}">{{ old('keterangan_prodi.' . $i) }}</textarea>
                                    @error("keterangan_prodi.$i")
                                        <div class="invalid-feedback text-red-500 font-medium text-sm">{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Biaya Pendidikan SIPAS --}}
                            <div class="sm:col-span-6 md:col-span-6">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Biaya Pendidikan
                                    (SIPAS)</label>
                                <input type="number" step="0.01" name="biaya_pendidikan_sipas[]"
                                    value="{{ old('biaya_pendidikan_sipas.' . $i) }}"
                                    placeholder="0.00"
                                    class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0">
                                    @error("biaya_pendidikan_sipas.$i")
                                        <div class="invalid-feedback text-red-500 font-medium text-sm">{{ $message }}
                                        </div>
                                    @enderror
                            </div>

                            {{-- Biaya Pendidikan NON SIPAS --}}
                            <div class="sm:col-span-6 md:col-span-6">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Biaya Pendidikan
                                    (Non SIPAS)</label>
                                <input type="number" step="0.01" name="biaya_pendidikan_non_sipas[]"
                                    value="{{ old('biaya_pendidikan_non_sipas.' . $i) }}"
                                    placeholder="0.00"
                                    class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0">
                                    @error("biaya_pendidikan_non_sipas.$i")
                                        <div class="invalid-feedback text-red-500 font-medium text-sm">{{ $message }}
                                        </div>
                                    @enderror
                            </div>

                            {{-- Link Prodi UT --}}
                            <div class="sm:col-span-12">
                                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Link Prodi
                                    UT</label>
                                <input type="url" name="link_prodi_ut[]"
                                    value="{{ old('link_prodi_ut.' . $i) }}"
                                    placeholder="https://ut.ac.id/prodi/..."
                                    class="form-input w-full rounded-md mt-1 border dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0">
                                     @error("link_prodi_ut.$i")
                                        <div class="invalid-feedback text-red-500 font-medium text-sm">{{ $message }}
                                        </div>
                                    @enderror
                            </div>

                            {{-- Dropdown ID Pendidikan --}}
                            <div class="sm:col-span-6 md:col-span-6">
                                <div class="relative z-0 w-full group">
                                    <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Pendidikan</label>
                                    <select name="id_pendidikan[]"
                                        class="form-select w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                        <option value="">-- Pilih Pendidikan --</option>
                                        @foreach ($pendidikan as $p)
                                            <option value="{{ $p->id_pendidikan }}" {{ old('id_pendidikan.' . $i) == $p->id_pendidikan ? 'selected' : '' }}>
                                                {{ $p->program_pendidikan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('id_pendidikan.' . $i)
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- Dropdown ID Fakultas --}}
                            <div class="sm:col-span-6 md:col-span-6">
                                <div class="relative z-0 w-full group">
                                    <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Fakultas</label>
                                    <select name="id_fakultas[]"
                                        class="form-select w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                                        <option value="">-- Pilih Fakultas --</option>
                                        @foreach ($fakultas as $f)
                                            <option value="{{ $f->id_fakultas }}" {{ old('id_fakultas.' . $i) == $f->id_fakultas ? 'selected' : '' }}>
                                                {{ $f->fakultas }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('id_fakultas.' . $i)
                                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            {{-- Tombol Hapus --}}
                            {{-- @if ($i > 0)
                                <div class="sm:col-span-4 md:col-span-4 lg:col-span-4 xl:col-span-4 flex items-center">
                                    <button type="button"
                                        class="mt-1 removeJur focus:outline-none text-red-500 hover:bg-red-500 hover:text-white border border-gray-200 dark:border-gray-700 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white text-sm font-medium py-0.5 px-3 rounded w-full flex justify-center items-center">
                                        <i class="mdi mdi-trash-can text-lg"></i>
                                    </button>
                                </div>
                            @endif --}}
            </div>
            @endforeach
        @else
            {{-- Jika tidak ada old input --}}
            <div class="jurusan-item grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-2 mt-2">
                <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                    <div class="relative z-0 w-full group">
                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Kode Prodi</label>
                        <input placeholder="SI001" type="text" name="kode_program_studi[]"
                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                    </div>
                </div>
                <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                    <div class="relative z-0 w-full group">
                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama Prodi</label>
                        <input placeholder="Sistem Inforamsi" type="text" name="program_studi[]"
                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                    </div>
                </div>

                {{-- Keterangan Prodi --}}
                <div class="col-span-12">
                    <div class="relative z-0 w-full group">
                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Keterangan Prodi</label>
                        <textarea name="keterangan_prodi[]" rows="3" placeholder="Masukkan keterangan program studi..."
                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none"></textarea>
                    </div>
                </div>
                {{-- Link Prodi UT --}}
                <div class="col-span-12">
                    <div class="relative z-0 w-full group">
                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Link Prodi UT</label>
                        <input type="text" name="link_prodi_ut[]" placeholder="https://www.ut.ac.id/prodi"
                            class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                    </div>
                </div>

                {{-- Dropdown ID Pendidikan --}}
                <div class="sm:col-span-6 md:col-span-6">
                    <div class="relative z-0 w-full group">
                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Pendidikan</label>
                        <select name="id_pendidikan[]"
                            class="form-select w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                            <option value="">-- Pilih Pendidikan --</option>
                            @foreach ($pendidikan as $p)
                                <option value="{{ $p->id_pendidikan }}">{{ $p->program_pendidikan }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Dropdown ID Fakultas --}}
                <div class="sm:col-span-6 md:col-span-6">
                    <div class="relative z-0 w-full group">
                        <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Fakultas</label>
                        <select name="id_fakultas[]"
                            class="form-select w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                            <option value="">-- Pilih Fakultas --</option>
                            @foreach ($fakultas as $f)
                                <option value="{{ $f->id_fakultas }}">{{ $f->fakultas }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            @endif

            {{-- Placeholder tambahan form --}}
            <div class="JURUSAN hidden"></div>
            </form>
        </div>

        <!-- Area tombol tidak ikut scroll -->
        <div class="flex flex-wrap shrink-0 justify-end p-3 border-t border-dashed dark:border-gray-700">
            {{-- <a href="#"
                class="addJur inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500 text-sm font-medium py-1 px-3 mr-2 rounded">
                Add Form
            </a> --}}
            <button type="button"
                class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-1 px-3 rounded mr-2 close">
                Close
            </button>
            <button type="submit" form="form-jurusan"
                class="inline-block focus:outline-none text-green-500 hover:bg-green-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-green-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-green-500 text-sm font-medium py-1 px-3 rounded">
                Save
            </button>
        </div>

    </div>
</div>
</div>
