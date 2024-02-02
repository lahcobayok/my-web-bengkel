<div class="daftar-admin">
    <div class="panel-form">
        <p>Update Panel 1 &nbsp;<a
                style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                class="btn btn-outline-danger" type="button" href="admin.php?page=edit_panel_1">Back</a>
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
                    $koneksi->query("UPDATE panel_1 SET panel1='$_POST[panel1]', text1='$_POST[text1]' ");
                    if ($koneksi) {

                        echo "<div class='alert alert-info'>Update Panel Success</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=edit_panel_1'>";
                    } else {
                        echo "<div class='alert alert-info'>Update Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=update_panel_1'>";
                    }
                }
                ?>
                <?php
                    include '../config/koneksi.php';
                    $ambil = $koneksi->query("SELECT * FROM panel_1");
                ?>
                <?php while ($tampil = $ambil->fetch_assoc()) { ?>
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Panel 1</p>
                        <input type="text" name="panel1" class="form-control"
                            placeholder="<?php echo $tampil['panel1'];?>" required="" />
                    </div>
                    <br>
                    <div class="form-group">
                        <p for="exampleInputEmail1">Text 1</p>
                        <input type="text" name="text1" class="form-control"
                            placeholder="<?php echo $tampil['text1'];?>" required="" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Kirim</button>
                </form>
                <?php }?>
            </div>
        </div>
    </div>
</div>