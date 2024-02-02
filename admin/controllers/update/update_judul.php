<div class="daftar-admin">
    <p> Update Judul &nbsp;
        <a style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
            class="btn btn-outline-danger" type="button" href="admin.php?page=update_dashboard">Back</a>
    </p>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <?php
                    include '../config/koneksi.php';
                    $ambil = $koneksi->query("SELECT * FROM judul");
                ?>
                <?php while ($tampil = $ambil->fetch_assoc()) { ?>
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Judul</p>
                        <input type="text" name="judul" values="<?php echo $tampil['judul'];?>" class="form-control"
                            placeholder="" required="" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Kirim</button>
                </form>
                <?php }?>
                <br>
                <?php
                include '../config/koneksi.php';
                //syntax php untuk simpan ke database
                if (isset($_POST['simpan'])) {
                    # code...
                    $koneksi->query("UPDATE judul SET judul='$_POST[judul]'");
                    if ($koneksi) {

                        echo "<div class='alert alert-info'>Update Judul Success</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=update_dashboard'>";
                    } else {
                        echo "<div class='alert alert-info'>Update Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=proses5'>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>