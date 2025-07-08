<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Export Data Mahasiswa</title>
    <style>
        @page {
            size: A4 landscape;
            margin: 20px;
        }
        body {
            font-family: sans-serif;
            font-size: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }
        th, td {
            border: 1px solid #000;
            padding: 4px;
            word-wrap: break-word;
            text-align: left;
            font-size: 6px;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
            margin-bottom: 15px;
        }
    </style>

</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Default Password</th>
                <th>Nomor HP</th>
                <th>Nomor NIK</th>
                <th>Nama Ibu Kandung</th>
                <th>Tahun Masuk</th>
                <th>Tahun Wisuda</th>
                <th>Keterangan</th>
                <th>Status Pekerjaan</th>
                <th>Kode Jurusan</th>
                <th>ID Agama</th>
                <th>ID Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $row)
            <tr>
                <td>{{ $row->nim }}</td>
                <td>{{ $row->nama_lengkap }}</td>
                <td>{{ $row->tempat_lahir }}</td>
                <td>{{ \Carbon\Carbon::parse($row->tanggal_lahir)->translatedFormat('l, d F Y') }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->default_password }}</td>
                <td>{{ $row->nomor_hp }}</td>
                <td>{{ $row->nomor_nik }}</td>
                <td>{{ $row->nama_ibu_kandung }}</td>
                <td>{{ $row->tahun_masuk }}</td>
                <td>{{ $row->tahun_wisuda }}</td>
                <td>{{ $row->keterangan }}</td>
                <td>{{ $row->status_pekerjaan }}</td>
                <td>{{ $row->jurusan->jurusan }}</td>
                <td>{{ $row->agama->agama }}</td>
                <td>{{ $row->pendidikan->program_pendidikan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
