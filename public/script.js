$('.addForm').on('click', function () {
    addFormData();
});

let index = 0;
function addFormData(div) {
    let formContainer = document.getElementById('FORM').innerHTML;
    formContainer = formContainer.replace(/__index__/g, index);
    const temp = document.createElement('div');
    temp.innerHTML = formContainer;
    const newForm = temp.firstElementChild;
    const grandContainer = document.getElementById('grand-form-container');
    const tambahFormContainer = document.getElementById('tambahForm');
    grandContainer.insertBefore(newForm, tambahFormContainer);
    $(newForm).find(':input').prop('disabled', false);
    const datepickerEl = document.getElementById('Default_Datepicker_' + index);
    const datepicker = new Datepicker(datepickerEl, {
        autohide: true,
        format: 'yyyy-mm-dd'
    });
    index++;
}
$(document).on('click', '.removeForm', function () {
    $(this).closest('.formRem').remove();
});
function initializeDatepickers() {
    document.querySelectorAll("input[id^='Old_Default_Datepicker_']").forEach(function (el) {
        new Datepicker(el, {
            autohide: true,
            format: 'yyyy-mm-dd',
        });
    });
}
document.addEventListener("DOMContentLoaded", function () {
    initializeDatepickers();
});

// $('.addJur').on('click', function(){
//     addJur();
// });

// function addJur(){
//     var jur = `
//         <div class="jurusan-item grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-2 mt-2">
//             <div class="sm:col-span-5 md:col-span-5 lg:col-span-5 xl:col-span-5">
//                 <div class="relative z-0 w-full group">
//                     <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Kode Jurusan</label>
//                     <input type="text" name="kode_jurusan[]"
//                         class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
//                 </div>
//             </div>
//             <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
//                 <div class="relative z-0 w-full group">
//                     <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama Jurusan</label>
//                     <input type="text" name="jurusan[]"
//                         class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
//                 </div>
//             </div>
//             <div class="sm:col-span-1 md:col-span-1 lg:col-span-1 xl:col-span-1 flex items-end">
//                 <button type="button"
//                     class="removeJur focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-0.5 px-3 rounded w-full flex justify-center items-center">
//                     <i class="mdi mdi-trash-can text-lg"></i>
//                 </button>
//             </div>
//         </div>`;
//     $('.JURUSAN').before(jur);
// }

// $(document).on('click', '.removeJur', function() {
//     $(this).closest('.jurusan-item').remove();
// });

$('.addJur').on('click', function () {
    addJurusanGroup();
});

function addJurusanGroup() {
    // Buat opsi pendidikan
    let pendidikanOptions = `<option value="">-- Pilih Pendidikan --</option>`;
    pendidikanData.forEach(p => {
        pendidikanOptions += `<option value="${p.id}">${p.program_pendidikan}</option>`;
    });

    // Buat opsi fakultas
    let fakultasOptions = `<option value="">-- Pilih Fakultas --</option>`;
    fakultasData.forEach(f => {
        fakultasOptions += `<option value="${f.id}">${f.fakultas}</option>`;
    });

    const formGroup = `
        <div class="jurusan-item grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-2 mt-2">

            <!-- Kode Jurusan -->
            <div class="md:col-span-6">
                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Kode Jurusan</label>
                <input type="text" name="kode_program_studi[]" placeholder="SI001"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 
                    dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
            </div>

            <!-- Nama Jurusan -->
            <div class="md:col-span-6">
                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Nama Jurusan</label>
                <input type="text" name="jurusan[]" placeholder="Sistem Informasi"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 
                    dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
            </div>

            <!-- Keterangan -->
            <div class="md:col-span-12">
                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Keterangan Prodi</label>
                <textarea name="keterangan_prodi[]" rows="3" placeholder="Tuliskan keterangan..."
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 
                    dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none"></textarea>
            </div>

            <!-- Biaya SIPAS -->
            <div class="md:col-span-6">
                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Biaya Pendidikan (SIPAS)</label>
                <input type="number" step="0.01" name="biaya_pendidikan_sipas[]" placeholder="1500000"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 
                    dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
            </div>

            <!-- Biaya Non SIPAS -->
            <div class="md:col-span-6">
                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Biaya Pendidikan (Non SIPAS)</label>
                <input type="number" step="0.01" name="biaya_pendidikan_non_sipas[]" placeholder="2000000"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 
                    dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
            </div>

            <!-- Link Prodi -->
            <div class="md:col-span-12">
                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Link Prodi UT</label>
                <input type="url" name="link_prodi_ut[]" placeholder="https://www.ut.ac.id/prodi/si"
                    class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 
                    dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
            </div>

            <!-- Dropdown Pendidikan -->
            <div class="sm:col-span-6 md:col-span-4">
                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Pendidikan</label>
                <select name="id_pendidikan[]" 
                    class="form-select w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 
                    dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                    ${pendidikanOptions}
                </select>
            </div>

            <!-- Dropdown Fakultas -->
            <div class="sm:col-span-6 md:col-span-4">
                <label class="font-medium text-sm text-slate-600 dark:text-slate-400">Fakultas</label>
                <select name="id_fakultas[]" 
                    class="form-select w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 
                    dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                    ${fakultasOptions}
                </select>
            </div>

            <!-- Tombol Hapus -->
            <div class="md:col-span-4 flex items-end">
                <button type="button"
                    class="removeGroup w-full focus:outline-none text-red-500 hover:bg-red-500 
                    hover:text-white border border-gray-200 dark:border-gray-700 dark:text-red-500 
                    dark:hover:bg-red-500 dark:hover:text-white text-sm font-medium py-2 px-3 
                    rounded flex justify-center items-center">
                    <i class="mdi mdi-trash-can text-lg mr-1"></i> Hapus
                </button>
            </div>
        </div>`;

    $(".JURUSAN").before(formGroup);
}

// Untuk tambah jurusan
// $('.addJur').on('click', function () {
//     addFormGroup('jurusan');
// });

// Untuk tambah pendidikan
$('.addPend').on('click', function () {
    addFormGroup('pendidikan');
});

$('.addAg').on('click', function () {
    addFormGroup('agama');
});

function addFormGroup(type) {
    const config = {
        pendidikan: {
            prefix: 'pendidikan',
            label1: 'ID Pendidikan',
            name1: 'id_pendidikan[]',
            label2: 'Program Pendidikan',
            name2: 'program_pendidikan[]',
            placeholder1: 'ID001',
            placeholder2: 'Sarjana',
        },
        agama: {
            prefix: 'agama',
            label1: 'ID Agama',
            name1: 'id_agama[]',
            label2: 'Agama',
            name2: 'agama[]',
            placeholder1: 'AG001',
            placeholder2: 'Islam',
        },
    };

    const c = config[type];
    if (!c) return;

    const formGroup = `
        <div class="${c.prefix}-item grid md:grid-cols-12 gap-2 mt-2">
            <div class="sm:col-span-5 md:col-span-5 lg:col-span-5 xl:col-span-5">
                <div class="relative z-0 w-full group">
                    <label class="font-medium text-sm text-slate-600 dark:text-slate-400">${c.label1}</label>
                    <input type="text" name="${c.name1}" placeholder="${c.placeholder1}"
                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                </div>
            </div>
            <div class="sm:col-span-6 md:col-span-6 lg:col-span-6 xl:col-span-6">
                <div class="relative z-0 w-full group">
                    <label class="font-medium text-sm text-slate-600 dark:text-slate-400">${c.label2}</label>
                    <input type="text" name="${c.name2}" placeholder="${c.placeholder2}"
                        class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none">
                </div>
            </div>
            <div class="sm:col-span-1 md:col-span-1 lg:col-span-1 xl:col-span-1 flex items-end">
                <button type="button"
                    class="removeGroup focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500 text-sm font-medium py-0.5 px-3 rounded w-full flex justify-center items-center">
                    <i class="mdi mdi-trash-can text-lg"></i>
                </button>
            </div>
        </div>`;

    $(`.${c.prefix.toUpperCase()}`).before(formGroup);
}

$(document).on('click', '.removeGroup', function () {
    $(this).closest('.jurusan-item, .pendidikan-item, .agama-item').remove();
});


function handleDismiss(id) {
    Swal.fire({
        title: 'Yakin hapus data ini?',
        text: "Tindakan Ini Akan Menghapus Data Mahasiswa Yang Terkait!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#e3342f',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('form-delete-' + id).submit();
        }
    });
}

function executeExample(type) {
    if (type === 'mixin') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#000000',
            color: '#f87171',
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        Toast.fire({
            icon: 'success',
            text: 'Data berhasil dihapus!',
            confirmButtonText: 'OK',
            background: '#f9fafb',
            color: '#111827'
        });
    }
}
