<?php
$koneksi = mysqli_connect("localhost","root","","db_bengkel");

// chek koneksi terhunung atau tidak
if (mysqli_connect_errno()) {
     echo "Koneksi data base gagal  :" . mysqli_connect_errno();
}
