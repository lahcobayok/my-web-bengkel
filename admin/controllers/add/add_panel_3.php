<div class="daftar-admin">
    <div class="panel-form">Add Panel 3 </div>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <?php
                include '../config/koneksi.php';
                //syntax php untuk simpan ke database
                if (isset($_POST['simpan'])) {
                    # nama Variable
                    $panel3 = $_POST['panel3'];
                    $text3 = $_POST['text3'];
                    # code...
                    $koneksi->query("INSERT INTO panel_3 (panel3, text3) VALUES ('$panel3','$text3')");
                    if ($koneksi) {

                        echo "<div class='alert alert-info'>Tambah Panel Berhasil</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=edit_panel_3'>";
                    } else {
                        echo "<div class='alert alert-info'>Update Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=add_panel_3'>";
                    }
                }
                ?>
                <br>
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Panel 3</p>
                        <input type="text" name="panel3" class="form-control" placeholder="" required="" />
                    </div>
                    <div class="form-group">
                        <p for="exampleInputEmail1">Text 3</p>
                        <input type="text" name="text3" class="form-control" placeholder="" required="" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Kirim</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>