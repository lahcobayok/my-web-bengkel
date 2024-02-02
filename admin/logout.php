<?php
//logout
session_destroy();
// arahkan ke halaman index.php 
echo "<script>alert('Anda Yakin Ingin Logout');</script>";
echo "<script>location='../index.php';</script>";
exit();
?>