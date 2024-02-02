<div class="daftar-admin">
    <div class="panel-form">
        <p>Update Panel 4 &nbsp;<a
                style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                class="btn btn-outline-danger" type="button" href="admin.php?page=edit_panel_4">Back</a>
        </p>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <?php
                include '../config/koneksi.php';
                //syntax php untuk simpan ke database
                if (isset($_POST['simpan'])) {
                    # code...
                    $koneksi->query("UPDATE panel_4 SET panel4='$_POST[panel4]', text4='$_POST[text4]' ");
                    if ($koneksi) {

                        echo "<div class='alert alert-info'>Update Panel Success</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=edit_panel_4'>";
                    } else {
                        echo "<div class='alert alert-info'>Update Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=update_panel_4'>";
                    }
                }
                ?>
                <?php
                    include '../config/koneksi.php';
                    $ambil = $koneksi->query("SELECT * FROM panel_4");
                ?>
                <?php while ($tampil = $ambil->fetch_assoc()) { ?>
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Panel 4</p>
                        <input type="text" name="panel4" class="form-control"
                            placeholder="<?php echo $tampil['panel4'];?>" required="" />
                    </div>
                    <br>
                    <div class="form-group">
                        <p for="exampleInputEmail1">Text 4</p>
                        <input type="text" name="text4" class="form-control"
                            placeholder="<?php echo $tampil['text4'];?>" required="" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Kirim</button>
                </form>
                <?php }?>
            </div>
        </div>
    </div>
</div>