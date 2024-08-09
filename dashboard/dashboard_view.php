<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kursus dan Materi</title>
    <link rel="stylesheet" href="path/to/your/css/library.css"> <!-- Sesuaikan dengan path CSS Anda -->
    <style>
        /* CSS untuk tabel */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #dee2e6;
        }

        .table thead th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        /* CSS untuk kolom link materi */
        .col-link {
            max-width: 200px; /* Lebar maksimum kolom link materi */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Data Kursus dan Materi</h5>
                <hr>
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr style="text-align: center;">
                            <th>No</th>
                            <th>Nama Kursus</th>
                            <th>Deskripsi Kursus</th>
                            <th>Durasi Kursus</th>
                            <th>Nama Materi</th>
                            <th>Deskripsi Materi</th>
                            <th class="col-link">Link Materi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Pastikan koneksi ke database
                        $konek = mysqli_connect("localhost", "root", "", "kursus");
                        if (!$konek) {
                            die("Koneksi gagal: " . mysqli_connect_error());
                        }
                        $query = mysqli_query($konek, "
                            SELECT 
                                k.nama AS nama_kursus, 
                                k.deskripsi AS deskripsi_kursus, 
                                k.durasi AS durasi_kursus, 
                                mt.nama AS nama_materi, 
                                mt.deskripsi AS deskripsi_materi, 
                                mt.link AS link_materi 
                            FROM nama_kursus AS k 
                            INNER JOIN materi_kursus AS mt 
                            ON k.nama = mt.jenis_kursus
                        ");


                        // Cek apakah query berhasil
                        if (!$query) {
                            die("Query gagal: " . mysqli_error($konek));
                        }

                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= htmlspecialchars($data['nama_kursus']) ?></td>
                                <td><?= htmlspecialchars($data['deskripsi_kursus']) ?></td>
                                <td><?= htmlspecialchars($data['durasi_kursus']) ?></td>
                                <td><?= htmlspecialchars($data['nama_materi']) ?></td>
                                <td><?= htmlspecialchars($data['deskripsi_materi']) ?></td>
                                <td class="col-link"><a href="<?= htmlspecialchars($data['link_materi']) ?>" target="_blank"><?= htmlspecialchars($data['link_materi']) ?></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
