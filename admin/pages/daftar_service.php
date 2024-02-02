<div class="daftar-service">
    <div class="form-card">
        <div class="panel-form">Daftar Service</div>
        <div class="card">
            <div class="d-flex justify-content-center">
                <table class="table table-bordered ">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No. Hp</th>
                        <th>Merek Motor</th>
                        <th>Jenis Motor</th>
                        <th>Jenis Service</th>
                        <th>Alamat</th>
                        <th>Keluhan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        include "../config/koneksi.php";
                        $nomor = 1;

                        $ambil = $koneksi->query("SELECT * FROM daftar_pelanggan");
                        ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah['nama']; ?></td>
                                <td><?php echo $pecah['nohp']; ?></td>
                                <td><?php echo $pecah['merekmotor']; ?></td>
                                <td><?php echo $pecah['jenismotor']; ?></td>
                                <td><?php echo $pecah['jenisservice']; ?></td>
                                <td><?php echo $pecah['alamat']; ?></td>
                                <td><?php echo $pecah['keluhan']; ?></td>
                                <td>
                                    <a style="--bs-btn-padding-y: .20rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" class="btn btn-outline-danger" type="button" href="admin.php?page=proses1&id=<?php echo $pecah['id']; ?>">Delete</a>
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