<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Data Mahasiswa UT Negeri Seribu Kubah</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 20px;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }
        th, td {
            border: 1px solid #000;
            padding: 6px;
            word-wrap: break-word;
            text-align: left;
        }
        th {
            background-color: #f3f3f3;
            font-weight: bold;
        }
        h2, h4 {
            text-align: center;
            margin: 5px 0;
        }
    </style>
</head>
<body>

    <h2>Data Mahasiswa</h2>
    <h4>Universitas Terbuka Negeri Seribu Kubah</h4>

    <table>
        <thead>
            <tr>
                <th style="width: 4%">No</th>
                <th style="width: 8%">NIM</th>
                <th style="width: 12%">Nama Lengkap</th>
                <th style="width: 10%">Tempat Lahir</th>
                <th style="width: 10%">Tanggal Lahir</th>
                <th style="width: 12%">Email</th>
                <th style="width: 10%">Nomor HP</th>
                <th style="width: 10%">NIK</th>
                <th style="width: 12%">Nama Ibu Kandung</th>
                <th style="width: 6%">Tahun Masuk</th>
                <th style="width: 6%">Tahun Wisuda</th>
                <th style="width: 10%">Program Studi</th>
                <th style="width: 10%">Jenjang Pendidikan</th>
                <th style="width: 10%">Fakultas</th>
                <th style="width: 8%">Agama</th>
                <th style="width: 12%">Status Pekerjaan</th>
                <th style="width: 15%">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $row->nim ?? '-' }}</td>
                    <td>{{ $row->nama_lengkap ?? '-' }}</td>
                    <td>{{ $row->tempat_lahir ?? '-' }}</td>
                    <td>
                        {{ $row->tanggal_lahir 
                            ? \Carbon\Carbon::parse($row->tanggal_lahir)->translatedFormat('d F Y')
                            : '-' }}
                    </td>
                    <td>{{ $row->email ?? '-' }}</td>
                    <td>{{ $row->nomor_hp ?? '-' }}</td>
                    <td>{{ $row->nomor_nik ?? '-' }}</td>
                    <td>{{ $row->nama_ibu_kandung ?? '-' }}</td>
                    <td>{{ $row->tahun_masuk ?? '-' }}</td>
                    <td>{{ $row->tahun_wisuda ?? '-' }}</td>

                    {{-- Relasi aman dari null --}}
                    <td>{{ optional($row->program_studi)->program_studi ?? '-' }}</td>
                    <td>{{ optional(optional($row->program_studi)->pendidikan)->program_pendidikan ?? '-' }}</td>
                    <td>{{ optional(optional($row->program_studi)->fakultas)->nama_fakultas ?? '-' }}</td>

                    <td>{{ optional($row->agama)->agama ?? '-' }}</td>
                    <td>{{ $row->status_pekerjaan ?? '-' }}</td>
                    <td>{{ $row->alamat ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>