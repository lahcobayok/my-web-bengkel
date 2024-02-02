<?php
include "../config/koneksi.php";

$koneksi->query("DELETE FROM panel_3 WHERE id='$_GET[id]'");
echo "<script>alert('Data Telah Di Hapus');</script>";
echo "<script>location='admin.php?page=edit_panel_3';</script>";