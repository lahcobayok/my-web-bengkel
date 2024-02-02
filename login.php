<div class="login-style">
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <h2 align="center"></h2>
                <form role="form" method="POST">
                    <div class="form-group">
                        <p for="exampleInputEmail1">Username</p>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username"
                            required="">
                        <small id="emailHelp" class="form-text text-muted">Masukan username dengan baik dan
                            benar</small>
                    </div>
                    <div class="form-group">
                        <p for="exampleInputPassword1">Password</p>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <p class="form-check-label" for="exampleCheck1">Check me out</p>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
                <br>
                <?php
                if (isset($_POST['login'])) {
                    session_start(); // mengaktifkan session pada php

                    include 'config/koneksi.php'; // menghubungkan php dengan koneksi database

                    // menangkap data yang dikirim dari form login
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    ////////////////////////////////// 

                    $login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'"); // menyeleksi data user dengan username dan password yang sesuai

                    $cek = mysqli_num_rows($login); // menghitung jumlah data yang ditemukan


                    if ($cek > 0) { // cek apakah username dan password di temukan pada database

                        $data = mysqli_fetch_assoc($login);

                        // cek jika user login sebagai admin
                        if ($data['jabatan'] == "admin") {


                            $_SESSION['username'] = $username;
                            $_SESSION['jabatan'] = "admin";

                            echo "<div class='alert alert-info'>Login Berhasil</div>";
                            echo "<meta http-equiv='refresh' content='1;url=admin/admin.php'>";

                            // cek jika user login sebagai pegawai
                        } elseif ($data['jabatan'] == "karyawan") {
                            $_SESSION['username'] = $username;
                            $_SESSION['jabatanl'] = "karyawan";

                            echo "<div class='alert alert-info'>Login Berhasil</div>";
                            echo "<meta http-equiv='refresh' content='1;url=admin/karyawan.php'>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>username dan password salah</div>";
                        echo "<meta http-equiv='refresh' content='1;url=index.php?page=login'>";
                    }
                };
                ?>
                <br><br><br><br>
            </div>
        </div>
    </div>
</div>