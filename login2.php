<?php
	error_reporting(0);
	ob_start();
    session_start();
  $koneksi = mysqli_connect("localhost","root","","virpa");

  if($_SESSION['admin'] || $_SESSION['user']){
        header("location:index.php");
    }else{
    }
   if ($koneksi->connect_error) {
die("Koneksi Gagal: " . $koneksi->connect_error);
}
echo "Koneksi Berhasil";
mysqli_close($koneksi);
?>