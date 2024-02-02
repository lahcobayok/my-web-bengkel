<?php
include "../config/koneksi.php";

$koneksi->query("DELETE FROM user WHERE id='$_GET[id]'");
echo "<script>alert('Data Telah Di Hapus');</script>";
echo "<script>location='admin.php';</script>";
