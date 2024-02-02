<div class="daftar-admin">
    <div class="panel-form">Add Panel 2 </div>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <?php
                include '../config/koneksi.php';
                //syntax php untuk simpan ke database
                if (isset($_POST['simpan'])) {
                    # nama Variable
                    $panel2 = $_POST['panel2'];
                    $text2 = $_POST['text2'];
                    # code...
                    $koneksi->query("INSERT INTO panel_2 (panel2, text2) VALUES ('$panel2','$text2')");
                    if ($koneksi) {

                        echo "<div class='alert alert-info'>Tambah Panel Berhasil</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=edit_panel_2'>";
                    } else {
                        echo "<div class='alert alert-info'>Update Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=add_panel_2'>";
                    }
                }
                ?>
                <br>
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Panel 2</p>
                        <input type="text" name="panel2" class="form-control" placeholder="" required="" />
                    </div>
                    <div class="form-group">
                        <p for="exampleInputEmail1">Text 2</p>
                        <input type="text" name="text2" class="form-control" placeholder="" required="" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Kirim</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>