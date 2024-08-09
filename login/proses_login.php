<?php 
include "../pengaturan/koneksi.php";
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cek_login = mysqli_query($konek, "select * from login where username ='$username' and password='$password'");
    if(mysqli_num_rows($cek_login) > 0){
        session_start();
        $datalogin = mysqli_fetch_array($cek_login);
        
        $_SESSION['status_login'] = true;
        $_SESSION['a global'] = $datalogin;
        $_SESSION['id'] = $datalogin -> id;
        
        echo "<script> alert('selamat datang di aplikasi kursus online')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../index.php?page=dashboard'>";

        }else {
        echo "<script>alert('Username atau Password anda salah!')</script>";
        echo "<meta http-equiv='refresh' content='0; url=login_view.php'>"; 
        }
       
}


?>