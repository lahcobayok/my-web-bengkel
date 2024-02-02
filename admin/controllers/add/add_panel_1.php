<div class="daftar-admin">
    <div class="panel-form">Add Panel 1 </div>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <?php
                include '../config/koneksi.php';
                //syntax php untuk simpan ke database
                if (isset($_POST['simpan'])) {
                    # nama Variable
                    $panel1 = $_POST['panel1'];
                    $text1 = $_POST['text1'];
                    # code...
                    $koneksi->query("INSERT INTO panel_1 (panel1, text1) VALUES ('$panel1','$text1')");
                    if ($koneksi) {

                        echo "<div class='alert alert-info'>Tamabah Panel Berhasil</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=edit_panel_1'>";
                    } else {
                        echo "<div class='alert alert-info'>Update Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=add_panel_1'>";
                    }
                }
                ?>
                <br>
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Panel 1</p>
                        <input type="text" name="panel1" class="form-control" placeholder="" required="" />
                    </div>
                    <div class="form-group">
                        <p for="exampleInputEmail1">Text 1</p>
                        <textarea class="form-control" name="text1" id="" cols="30" rows="10"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Kirim</button>
                </form>
                <br>
            </div>
        </div>
    </div>
</div>