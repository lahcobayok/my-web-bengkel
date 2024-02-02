<div class="daftar-karyawan">
    <div class="form-card">
        <div class="panel-form">Data Panel 2</div>
        <div class="panel-form">
            <div class="dropdown">
                <button class="btn btn-outline-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="admin.php?page=update_dashboard">Edit Judul</a></li>
                    <li><a class="dropdown-item" href="admin.php?page=edit_panel_1">Edit panel 1</a></li>
                    <li><a class="dropdown-item" href="admin.php?page=edit_panel_2">Edit panel 2</a></li>
                    <li><a class="dropdown-item" href="admin.php?page=edit_panel_3">Edit panel 3</a></li>
                    <li><a class="dropdown-item" href="admin.php?page=edit_panel_4">Edit panel 4</a></li>
                </ul>
            </div>
        </div>
        <div class="panel-form">
            <a style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                class="btn btn-outline-success" type="button" href="admin.php?page=add_panel_2">Tambah User</a>
        </div>
        <div class="card">
            <div class="d-flex justify-content-center">
                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>panel 2</th>
                        <th>text 2</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/koneksi.php";
                        $nomor = 1;

                        $ambil = $koneksi->query("SELECT * FROM panel_2");
                        ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $pecah['panel2']; ?></td>
                            <td><?php echo $pecah['text2']; ?></td>
                            <td>
                                <a style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                    class="btn btn-outline-info" type="button"
                                    href="admin.php?page=update_panel_2">Edit</a>
                                <a style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;"
                                    class="btn btn-outline-danger" type="button"
                                    href="admin.php?page=delete_panel_2&id=<?php echo $pecah['id']; ?>">Delete</a>
                            </td>

                        </tr>
                        <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>