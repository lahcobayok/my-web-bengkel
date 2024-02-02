<?php
include "../config/koneksi.php";

$koneksi->query("DELETE FROM judul WHERE id='$_GET[id]'");
echo "<script>alert('Data Telah Di Hapus');</script>";
echo "<script>location='admin.php?page=update_dashboard';</script>";