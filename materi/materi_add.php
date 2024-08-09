<?php
if (isset($_POST['simpan'])) { //jika button simpan diklik
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $jenis_kursus = $_POST['jenis_kursus'];
    $link = $_POST['link']; //ambil nilai dari inputan 
    $exe = mysqli_query($konek, "insert into materi_kursus values(null, '$nama', '$deskripsi', '$jenis_kursus' , '$link')");
    if ($exe) { //jika berhasil menambahkan data
        echo "<script>alert('Data kategori prestasi berhasil ditambahkan!!!')</script>"; //muncul pesan
        echo "<meta http-equiv='refresh' content='0; url=?page=materi_read'>"; //mengalihkan halaman
    } else { //jika gagal menambahkan data
        echo "<script>alert('Data kategori prestasi gagal ditambahkan!!!')</script>"; //muncul pesan
        echo "<h1>" . mysqli_error($konek) . "</h1>"; //menampilkan isi pesan kesalahan
    }
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Tambah Data Materi</h5>
            <form method="post" action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Materi</label>
                    <input type="text" name="nama" required class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Deskripsi Materi</label>
                    <input type="text" name="deskripsi" required class="form-control" id="exampleInputEmail1">
                </div>

                <div class="mb-3">
                <label for="jenis_kursus" class="form-label">Nama Kursus</label>
                <select name="jenis_kursus" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Pilih Nama Kursus</option>
                    <?php
                    $result_kursus = mysqli_query($konek, "SELECT nama FROM nama_kursus");

                    if ($result_kursus) {
                        while ($row_kursus = mysqli_fetch_assoc($result_kursus)) {
                            $selected = ($_POST['nama'] == $row_kursus['nama']) ? 'selected' : '';
                            echo "<option value='{$row_kursus['nama']}' $selected>{$row_kursus['nama']}</option>";
                        }
                    } else {
                        echo "Error: " . mysqli_error($konek);
                    }
                    ?>
                 </select>
            </div>

            
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Link Materi</label>
                    <input type="text" name="link" required class="form-control" id="exampleInputEmail1">
                </div>
          


                <button type="submit" name="simpan" class="btn btn-primary"><i class="ti ti-device-floppy"></i> Simpan</button>
                <a href="?page=kategori_read" class="btn btn-danger"><i class="ti ti-arrow-left"></i> Kembali</a>
            </form>
        </div>
    </div>
</div>

