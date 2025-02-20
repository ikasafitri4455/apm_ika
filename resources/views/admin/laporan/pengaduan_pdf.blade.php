<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pengaduan</title>
    <style>
        /* Global Style */
        body {
            font-family: "Times New Roman", serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Header Styling */
        .card-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .card-header img {
            height: 50px;
            margin-bottom: 10px;
        }

        .card-header h3 {
            font-size: 22px;
            margin: 0;
            font-weight: bold;
        }

        .card-header p {
            font-size: 16px;
            color: #555;
        }

        /* Letterhead Line (Kop) */
        .letterhead-line {
            border-top: 2px solid #000;
            margin-top: 10px;
        }

        /* Body Styling */
        .card-body {
            font-size: 14px;
            line-height: 1.6;
        }

        .card-body p {
            margin-bottom: 10px;
        }

        /* Table Styling */
        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
        }

        .badge.bg-primary {
            background-color: #007bff;
            color: white;
        }

        .badge.bg-danger {
            background-color: #dc3545;
            color: white;
        }

        .badge.bg-warning {
            background-color: #ffc107;
            color: white;
        }

        .badge.bg-success {
            background-color: #28a745;
            color: white;
        }

        /* Footer Styling */
        .footer {
            text-align: right;
            margin-top: 30px;
            font-size: 14px;
        }

        .footer p {
            margin: 5px 0;
        }

        /* Print Styling */
        @media print {
            body {
                font-size: 12pt;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 100%;
                padding: 10mm;
                page-break-inside: avoid;
            }

            table {
                width: 100%;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 8px;
                border: 1px solid black;
                text-align: left;
            }

            @page {
                size: A4;
                margin: 10mm;
            }

            .btn {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container" id="report-section">
        <div class="card">
            <div class="card-header">
                <h3>Laporan Pengaduan Masyarakat Cintaratu</h3>
                <p>Aplikasi: <strong>SINFORMASI</strong></p>
                <div class="letterhead-line"></div> <!-- Letterhead Line -->
            </div>

            <div class="card-body">
                <!-- Header Section with Salutation and Information -->
                <p>Berikut laporan pengaduan masyarakat:</p>

                <!-- Table Section with Data from Pengaduan and Tanggapan -->
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengadu</th>
                                <th>Kategori</th>
                                <th>Status Pengaduan</th>
                                <th>Tanggal Pengaduan</th> <!-- New Column -->
                                <th>Tanggapan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($pengaduans as $pengaduan)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pengaduan->masyarakat->nama_lengkap ?? 'Tidak Tersedia' }}</td>
                                    <td>{{ $pengaduan->kategori->nama_kategori ?? 'Tidak Tersedia' }}</td>
                                    <td>
                                        @if ($pengaduan->status == '0')
                                            <span class="badge bg-primary">Baru</span>
                                        @elseif ($pengaduan->status == 'ditolak')
                                            <span class="badge bg-danger">Ditolak</span>
                                        @elseif ($pengaduan->status == 'diproses')
                                            <span class="badge bg-warning">Proses</span>
                                        @elseif ($pengaduan->status == 'selesai')
                                            <span class="badge bg-success">Selesai</span>
                                        @endif
                                    </td>
                                    <td>{{ $pengaduan->created_at->format('d F Y') }}</td> <!-- Date of Complaint -->
                                    <td>
                                        @if ($pengaduan->tanggapans && $pengaduan->tanggapans->isNotEmpty())
                                            @foreach ($pengaduan->tanggapans as $tanggapan)
                                                <p><strong>{{ $tanggapan->petugas->nama_lengkap ?? 'Petugas Tidak Tersedia' }}:</strong>
                                                    {{ $tanggapan->tanggapan }}
                                                    @if ($tanggapan->bukti)
                                                        <br><a href="{{ Storage::url($tanggapan->bukti) }} "
                                                            target="_blank">Lihat Bukti</a>
                                                    @endif
                                                </p>
                                            @endforeach
                                        @else
                                            <span>Belum Ada Tanggapan</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Closing Remarks -->
                <p class="mt-4">Demikian laporan ini kami sampaikan. Terima kasih.</p>

                <div class="footer">
                    <p>Hormat Kami,</p>
                    <p>{{ auth()->user()->name }}</p>
                    <p>{{ now()->format('d F Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
