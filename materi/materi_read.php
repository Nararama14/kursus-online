<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Materi</title>
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

        /* CSS untuk kolom deskripsi */
        .col-deskripsi {
            max-width: 200px; /* Lebar maksimum kolom deskripsi */
            word-wrap: break-word;
        }

        /* CSS untuk kolom link materi */
        .col-link {
            max-width: 150px; /* Lebar maksimum kolom link materi */
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* CSS untuk tombol */
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 6px 12px;
            font-size: 14px;
            text-align: center;
            cursor: pointer;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            color: #fff;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #212529;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        /* CSS untuk memberikan jarak antar tombol */
        .btn-spacing {
            margin-right: 10px; /* Jarak antara tombol */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Data Materi</h5>
                <a href="?page=materi_add" class="btn btn-primary"><i class="ti ti-plus"></i> Tambah Data</a>
                <hr>
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Materi</th>
                            <th class="col-deskripsi">Deskripsi</th>
                            <th>Nama Kursus</th>
                            <th class="col-link">Link Materi</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $query = mysqli_query($konek, "SELECT * FROM materi_kursus");
                        while ($data = mysqli_fetch_array($query)) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td class="col-deskripsi"><?= $data['deskripsi'] ?></td>
                                <td><?= $data['jenis_kursus'] ?></td>
                                <td class="col-link"><a href="<?= $data['link'] ?>" target="_blank"><?= $data['link'] ?></a></td>
                                <td>
                                    <a href="?page=materi_edit&id=<?= $data[0]; ?>" class="btn btn-sm btn-warning btn-spacing" role="button">
                                        <i class="ti ti-edit"></i> Ubah
                                    </a>
                                    <a href="?page=materi_delete&id=<?= $data[0]; ?>" class="btn btn-sm btn-danger" role="button" onclick="return confirm('Yakin ingin menghapus data?')">
                                        <i class="ti ti-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
