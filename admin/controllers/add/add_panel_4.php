<div class="daftar-admin">
    <div class="panel-form">Add Panel 4 </div>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <?php
                include '../config/koneksi.php';
                //syntax php untuk simpan ke database
                if (isset($_POST['simpan'])) {
                    # nama Variable
                    $panel4 = $_POST['panel4'];
                    $text4 = $_POST['text4'];
                    # code...
                    $koneksi->query("INSERT INTO panel_4 (panel4, text4) VALUES ('$panel4','$text4')");
                    if ($koneksi) {

                        echo "<div class='alert alert-info'>Tambah Panel Berhasil</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=edit_panel_4'>";
                    } else {
                        echo "<div class='alert alert-info'>Update Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=add_panel_4'>";
                    }
                }
                ?>
                <br>
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Panel 4</p>
                        <input type="text" name="panel4" class="form-control" placeholder="" required="" />
                    </div>
                    <div class="form-group">
                        <p for="exampleInputEmail1">Text 4</p>
                        <input type="text" name="text4" class="form-control" placeholder="" required="" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Kirim</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>