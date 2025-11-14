<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Artikel</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 30px;
            line-height: 1.6;
            font-size: 13px;
        }
        .title {
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
            border-bottom: 2px solid #000;
            padding-bottom: 5px;
        }
        .section {
            margin-top: 20px;
        }
        .label {
            display: inline-block;
            width: 150px;
            font-weight: bold;
        }
        .value {
            display: inline-block;
            width: 400px;
            border-bottom: 1px dotted #000;
        }
        .content-box {
            border: 1px solid #000;
            padding: 10px;
            margin-top: 10px;
            white-space: pre-line;
        }
    </style>
</head>
<body>


    <h2 class="title">Laporan Data Spmb 2026/2027</h2>


   @foreach ($artikels as $index => $artikel)
    <div class="section">
        <p><span class="label">Nama Lengkap</span>: <span class="value">{{ $artikel->full_name }}</span></p>
        <p><span class="label">Tempat Lahir</span>: <span class="value">{{ $artikel->birth_place }}</span></p>
        <p><span class="label">Tanggal Lahir</span>: <span class="value">{{ \Carbon\Carbon::parse($artikel->birth_date)->format('d M Y') }}</span></p>
        <p><span class="label">Jenis Kelamin</span>: <span class="value">{{ ucfirst($artikel->gender) }}</span></p>
        <p><span class="label">Email</span>: <span class="value">{{ $artikel->email }}</span></p>
        <p><span class="label">No. Telepon</span>: <span class="value">{{ $artikel->phone }}</span></p>
        <p><span class="label">Alamat</span>: <span class="value">{{ $artikel->address }}</span></p>
        <div class="line"></div>
        <p><span class="label">Asal Sekolah</span>: <span class="value">{{ $artikel->prev_school }}</span></p>
        <p><span class="label">NISN</span>: <span class="value">{{ $artikel->nisn }}</span></p>
        <p><span class="label">Tahun Lulusan</span>: <span class="value">{{ $artikel->graduation_year }}</span></p>
        <p><span class="label">Jurusan yang Dipilih</span>: <span class="value">{{ $artikel->major }}</span></p>
        <p><span class="label">Nilai Rata-rata</span>: <span class="value">{{ $artikel->avg_grade }}</span></p>
        <p><span class="label">Prestasi</span>: <span class="value">{{ $artikel->achievements ?? '-' }}</span></p>
        <p><span class="label">Nama Orang Tua</span>: <span class="value">{{ $artikel->parent_name }}</span></p>
        <div class="line"></div>
        <p><span class="label">Tanggal Dibuat</span>: 
            <span class="value">{{ $artikel->created_at->format('d M Y') }}</span>
        </p>
    </div>
    @endforeach

    <div class="section">
        <strong>Isi Artikel:</strong>
        <div class="content-box">
            Data ini merupakan bagian dari sistem penerimaan siswa baru (SPMB).
        </div>
    </div>


</body>
</html>
