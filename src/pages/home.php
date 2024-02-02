<header class="bg-dark">
    <?php
include 'config/koneksi.php';
$ambil_judul = $koneksi->query("SELECT * FROM judul");
?>
    <?php while ($tampil_judul = $ambil_judul->fetch_assoc()) { ?>
    <div class="container pt-4 pt-xl-5">
        <div class="row pt-5">
            <div class="col-md-8 col-xl-6 text-center text-md-start mx-auto">
                <div class="text-center">
                    <p class="fw-bold text-success mb-2">Voted #1 Worldwide</p>
                    <h1 class="fw-bold"><?php echo $tampil_judul['judul'];?></h1>
                </div>
            </div>
            <div class="col-12 col-lg-10 mx-auto">
                <div class="position-relative" style="display: flex;flex-wrap: wrap;justify-content: flex-end;">
                    <div style="position: relative;flex: 0 0 45%;transform: translate3d(-20%, 30%, 0);"><img
                            class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.8" src="img/1.JPG"></div>
                    <div style="position: relative;flex: 0 0 45%;transform: translate3d(-5%, 30%, 0);"><img
                            class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.4" src="img/2.JPG"></div>
                    <div style="position: relative;flex: 0 0 55%;transform: translate3d(-40%, 30%, 0);"><img
                            class="img-fluid" data-bss-parallax="" data-bss-parallax-speed="0.25" src="img/3.JPG"></div>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
    <section>
        <div class="container bg-dark py-5">
            <div class="row">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Pelayanan Kami</p>
                    <h3 class="fw-bold">Apa yang bisa kami lakukan untuk Anda</h3>
                </div>
            </div>

            <div class="py-5 p-lg-5">
                <?php
                    include 'config/koneksi.php';
                    $ambil_panel_1 = $koneksi->query("SELECT * FROM panel_1");
                ?>
                <?php while ($tampil_panel_1 = $ambil_panel_1->fetch_assoc()) { ?>
                <div class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                    <div class="col mb-5">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon"
                                    style="top: 1rem;right: 1rem;position: absolute;">

                                </div>
                                <h5 class="fw-bold card-title"><?php echo $tampil_panel_1['panel1'];?></h5>
                                <p class="text-muted card-text mb-4"><?php echo $tampil_panel_1['text1'];?></p><button
                                    class="btn btn-primary shadow" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php
                        include 'config/koneksi.php';
                        $ambil_panel_2 = $koneksi->query("SELECT * FROM panel_2");
                    ?>
                    <div class="col mb-5">
                        <?php while ($tampil_panel_2 = $ambil_panel_2->fetch_assoc()) { ?>
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon"
                                    style="top: 1rem;right: 1rem;position: absolute;">

                                </div>
                                <h5 class="fw-bold card-title"><?php echo $tampil_panel_2['panel2'];?></h5>
                                <p class="text-muted card-text mb-4"><?php echo $tampil_panel_2['text2'];?></p><button
                                    class="btn btn-primary shadow" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php
                        include 'config/koneksi.php';
                        $ambil_panel_3 = $koneksi->query("SELECT * FROM panel_3");
                    ?>
                    <?php while ($tampil_panel_3 = $ambil_panel_3->fetch_assoc()) { ?>
                    <div class="col mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon"
                                    style="top: 1rem;right: 1rem;position: absolute;">
                                </div>
                                <h5 class="fw-bold card-title"><?php echo $tampil_panel_3['panel3'];?></h5>
                                <p class="text-muted card-text mb-4"><?php echo $tampil_panel_3['text3'];?></p><button
                                    class="btn btn-primary shadow" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <?php
                        include 'config/koneksi.php';
                        $ambil_panel_4 = $koneksi->query("SELECT * FROM panel_4");
                    ?>
                    <?php while ($tampil_panel_4 = $ambil_panel_4->fetch_assoc()) { ?>
                    <div class="col mb-4">
                        <div class="card shadow-sm">
                            <div class="card-body px-4 py-5 px-md-5">
                                <div class="bs-icon-lg d-flex justify-content-center align-items-center mb-3 bs-icon"
                                    style="top: 1rem;right: 1rem;position: absolute;">
                                </div>
                                <h5 class="fw-bold card-title"><?php echo $tampil_panel_4['panel4'];?></h5>
                                <p class="text-muted card-text mb-4"><?php echo $tampil_panel_4['text4'];?></p><button
                                    class="btn btn-primary shadow" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <p class="fw-bold text-success mb-2">Lembaga Sertifikasi Pendidikan</p>
                <h3 class="fw-bold">Jurusan yang ada di sekolah kami</h3>
            </div>
        </div>
        <div class="container py-5">
            <div class="mx-auto" style="max-width: 900px;">
                <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center">
                    <div class="col mb-4">
                        <div class="card bg-primary-light">
                            <div class="card-body text-center px-4 py-5 px-md-5">
                                <p class="fw-bold text-primary card-text mb-2">Fully Managed</p>
                                <h5 class="fw-bold card-title mb-3">Lorem ipsum dolor sit&nbsp;nullam et quis ad cras
                                    porttitor</h5><button class="btn btn-primary btn-sm" type="button">Learn
                                    more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card bg-secondary-light">
                            <div class="card-body text-center px-4 py-5 px-md-5">
                                <p class="fw-bold text-secondary card-text mb-2">Fully Managed</p>
                                <h5 class="fw-bold card-title mb-3">Lorem ipsum dolor sit&nbsp;nullam et quis ad cras
                                    porttitor</h5><button class="btn btn-secondary btn-sm" type="button">Learn
                                    more</button>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card bg-info-light">
                            <div class="card-body text-center px-4 py-5 px-md-5">
                                <p class="fw-bold text-info card-text mb-2">Fully Managed</p>
                                <h5 class="fw-bold card-title mb-3">Lorem ipsum dolor sit&nbsp;nullam et quis ad cras
                                    porttitor</h5><button class="btn btn-info btn-sm" type="button">Learn more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>