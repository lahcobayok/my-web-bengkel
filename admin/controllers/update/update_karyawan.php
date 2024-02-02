<div class="daftar-admin">
    <div class="panel-form">
        <p>Update Karyawan &nbsp;<a
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
                    $koneksi->query("UPDATE daftar_karyawan SET username='$_POST[username]', password='$_POST[password]', jabatan='$_POST[jabatan]' ");
                    if ($koneksi) {

                        echo "<div class='alert alert-info'>Update Panel Success</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=daftar_karyawan'>";
                    } else {
                        echo "<div class='alert alert-info'>Update Gagal</div>";
                        echo "<meta http-equiv='refresh' content='1;url=admin.php?page=edit_karyawan'>";
                    }
                }
                ?>
                <?php
                    include '../config/koneksi.php';
                    $ambil = $koneksi->query("SELECT * FROM daftar_karyawan");
                ?>
                <?php while ($tampil = $ambil->fetch_assoc()) { ?>
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Username</p>
                        <input type="text" name="username" class="form-control"
                            placeholder="<?php echo $tampil['username'];?>" required="" />
                    </div>
                    <br>
                    <div class="form-group">
                        <p for="exampleInputEmail1">Password</p>
                        <input type="text" name="password" class="form-control"
                            placeholder="<?php echo $tampil['password'];?>" required="" />
                    </div>
                    <br>
                    <div class="form-group">
                        <p for="exampleInputEmail1">jabatan</p>
                        <input type="text" name="jabatan" class="form-control"
                            placeholder="<?php echo $tampil['jabatan'];?>" required="" />
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
                <?php }?>
            </div>
        </div>
    </div>
</div>