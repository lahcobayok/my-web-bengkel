<?php
include "../config/koneksi.php";

$koneksi->query("DELETE FROM daftar_pelanggan WHERE id='$_GET[id]'");
echo "<script>alert('Data Telah Di Hapus');</script>";
echo "<script>location='admin.php?page=daftar_service';</script>";