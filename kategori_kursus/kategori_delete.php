<?php
$id = $_GET['id'];
if (isset($id)) { //jika button hapus diklik
    $exe = mysqli_query($konek, "delete from nama_kursus where id='$id'");
    if ($exe) { //jika berhasil Hapus data
        echo "<script>alert('Data Kursus berhasil Di Hapus!!!')</script>"; //muncul pesan
        echo "<meta http-equiv='refresh' content='0; url=?page=kategori_read'>"; //mengalihkan halaman
    } else { //jika gagal hapus data
        echo "<script>alert('Data Kursus gagal Di hapus!!!')</script>"; //muncul pesan
        echo "<h1>" . mysqli_error($konek) . "</h1>"; //menampilkan isi pesan kesalahan
    }
}
?>