<?php
include "pengaturan/koneksi.php";
include "template/sidebar.php";
include "template/header.php";
$page = $_GET['page'];
switch ($page) {
    case "dashboard";
        include "dashboard/dashboard_view.php";
        break;
    case "kategori_read";
        include "kategori_kursus/kategori_read.php";
        break;
    case "kategori_add";
        include "kategori_kursus/kategori_add.php";
        break;
    case "kategori_edit";
        include "kategori_kursus/kategori_edit.php";
        break;
    case "kategori_delete";
        include "kategori_kursus/kategori_delete.php";
        break;

        case "materi_add";
        include "materi/materi_add.php";
        break;
        case "materi_read";
        include "materi/materi_read.php";
        break;
        case "materi_edit";
        include "materi/materi_edit.php";
        break;
        case "materi_delete";
        include "materi/materi_delete.php";
        break;


        case "login.php";
        include "login/login.php";
        break;

        



}

include "template/footer.php";
