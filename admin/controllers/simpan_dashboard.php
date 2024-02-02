<?php 
    include '../config/koneksi.php';

    $judul = $_POST['judul'];
    
    if(!in_array($ext,$ekstensi) ) {
        echo "<div class='alert alert-danger'>gagal upload</div>";
        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=proses_add_dashboard'>";
    }else{
        if($ukuran < 1044070){		
    
            mysqli_query($koneksi, "INSERT INTO judul VALUES(NULL,'$judul')");
            
            echo "<div class='alert alert-info'>Berhasil Upload</div>";
            echo "<meta http-equiv='refresh' content='1;url=admin.php?page=update_dashboard'>";
        }else{
            echo "<div class='alert alert-danger'>ukuran terlalu besar</div>";
            echo "<meta http-equiv='refresh' content='1;url=admin.php?page=proses_dashboard'>";
        }
    }
    ?>