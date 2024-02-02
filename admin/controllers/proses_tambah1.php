<div class="daftar-admin">
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <div class="panel-form">Tambah User Admin</div>
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Username</p>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username"
                            required="">
                    </div>
                    <div class="form-group">
                        <p for="exampleInputPassword1">Password</p>
                        <input type="text" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group">
                        <p for="exampleInputPassword1">Jabatan</p>
                        <input type="text" name="jabatan" class="form-control" placeholder="Password" required="">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
                <br>
                <?php
                include '../config/koneksi.php';
                //syntax php untuk simpan ke database
                if (isset($_POST['simpan'])) {
                    # code...
                    $koneksi->query("INSERT INTO user(username, password, jabatan) VALUES('" . $_POST['username'] . "','" . $_POST['password'] . "','" . $_POST['jabatan'] . "')");
                    if ($koneksi) {

                        echo "<div class='alert alert-info'>Tambah User Berhasil</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php'>";
                    } else {
                        echo "<div class='alert alert-info'>Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=proses4'>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>