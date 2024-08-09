<?php
if (isset($_POST['simpan'])) { //jika button simpan diklik
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $deskripsi = $_POST['deskripsi'];
    $durasi = $_POST['durasi']; //ambil nilai dari inputan 
    $exe = mysqli_query($konek, "insert into nama_kursus values(null, '$nama', '$alamat' , '$deskripsi' , '$durasi')");
    if ($exe) { //jika berhasil menambahkan data
        echo "<script>alert('Data kategori prestasi berhasil ditambahkan!!!')</script>"; //muncul pesan
        echo "<meta http-equiv='refresh' content='0; url=?page=kategori_read'>"; //mengalihkan halaman
    } else { //jika gagal menambahkan data
        echo "<script>alert('Data kategori prestasi gagal ditambahkan!!!')</script>"; //muncul pesan
        echo "<h1>" . mysqli_error($konek) . "</h1>"; //menampilkan isi pesan kesalahan
    }
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Data Kategori Kursus</h5>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama kursus</label>
                    <input type="text" name="nama" required class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Alamat Kursus</label>
                    <input type="text" name="alamat" required class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi Kursus</label>
                    <input type="text" name="deskripsi" required class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Durasi Kursus</label>
                    <input type="date" name="durasi" required class="form-control" id="exampleInputPassword1">
                </div>


                <button type="submit" name="simpan" class="btn btn-primary"><i class="ti ti-device-floppy"></i> Simpan</button>
                <a href="?page=kategori_read" class="btn btn-danger"><i class="ti ti-arrow-left"></i> Kembali</a>
            </form>
        </div>
    </div>
</div>

