<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Online Workshop Fadilah</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['jabatan'])) {
        echo "<script>alert('Anda Harus Login');</script>";
        echo "<script>location='../index.php';</script>";
        exit();
    }
    ?>
    <nav class="navbar navbar-expand-md sticky-top py-3 navbar-dark" id="mainNav">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="admin.php">
                <span
                    class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 16 16" class="bi bi-bezier">
                        <img class="img-logo" src="../img/logo.png">
                    </svg>
                </span>
                <span>Online Workshop</span>
            </a>
            <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=daftar_karyawan">Daftar karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php?page=daftar_service">Daftar_service</a>
                    </li>
                </ul>
                <a class="btn btn-primary shadow" role="button" href="admin.php?page=proses_keluar">Log out</a>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center">
        <?php

        if (isset($_GET['page'])) {

            ############ Bagian include page user Admin ############################
            
            if ($_GET['page'] == 'daftar_user') {

                include 'pages/daftar_user.php';
            } elseif ($_GET['page'] == 'daftar_karyawan') {

                include 'pages/daftar_karyawan.php';
            } elseif ($_GET['page'] == 'daftar_service') {

                include 'pages/daftar_service.php';
            } 
            
            ########################################################################
            

            ########### Bagian Proses Oleh User Admin ##############################
            
            elseif ($_GET['page'] == 'proses_keluar') {
                include 'logout.php';
            } elseif ($_GET['page'] == 'proses1') {
                include 'controllers/proses_delete1.php';
            } elseif ($_GET['page'] == 'proses2') {

                include 'controllers/proses_delete2.php';
            } elseif ($_GET['page'] == 'proses3') {

                include 'controllers/proses_delete3.php';
            } elseif ($_GET['page'] == 'proses4') {

                include 'controllers/proses_tambah1.php';
            } elseif ($_GET['page'] == 'proses5') {

                include 'controllers/proses_tambah2.php';
            } elseif ($_GET['page'] == 'update_dashboard') {

                include 'pages/update_dashboard.php';
                
            } elseif ($_GET['page'] == 'proses_dashboard') {

                include 'controllers/simpan_dashboard.php';
                
            } elseif ($_GET['page'] == 'proses6') {
                
                include 'controllers/proses_delete4.php';
                
            }

            ########################################################################
            
            ######################### Bagian Delete Panel ##########################
            
            elseif ($_GET['page'] == 'delete_panel_1') {
                include "controllers/delete/delete_panel_1.php";
            }
            elseif ($_GET['page'] == 'delete_panel_2') {
                include "controllers/delete/delete_panel_2.php";
            }
            elseif ($_GET['page'] == 'delete_panel_3') {
                include "controllers/delete/delete_panel_3.php";
            }
            elseif ($_GET['page']== 'delete_panel_4') {
                include "controllers/delete/delete_panel_4.php";
            }
            
            ########################################################################


            
            ######################### Bagian Add Panel #############################
        
            elseif ($_GET['page'] == 'proses_add_dashboard') {
                include 'controllers/add/add_dashboard.php';
            }
            elseif ($_GET['page'] == 'add_panel_1') {
                include "controllers/add/add_panel_1.php";
            }
            elseif ($_GET['page'] == 'add_panel_2') {
                include "controllers/add/add_panel_2.php";
            }
            elseif ($_GET['page'] == 'add_panel_3') {
                include "controllers/add/add_panel_3.php";
            }
            elseif ($_GET['page'] == 'add_panel_4') {
                include "controllers/add/add_panel_4.php";
            }
            
            ########################################################################
            
            
            ######################## Bagian Update Panel ###########################
            
            elseif ($_GET['page'] == 'update_judul') {
                include 'controllers/update/update_judul.php';
            }
            elseif ($_GET['page'] == 'update_panel_1') {
                include "controllers/update/update_panel_1.php";
            }
            elseif ($_GET['page'] == 'update_panel_2' ) {
                include "controllers/update/update_panel_2.php";
            }
            elseif ($_GET['page'] == 'update_panel_3') {
                include "controllers/update/update_panel_3.php";
            }
            elseif ($_GET['page'] == 'update_panel_4') {
                include "controllers/update/update_panel_4.php";
            }
            
            #########################################################################
            
            
            ######################## Bagian Include page edit dashboard #############
            
            elseif ($_GET['page'] == 'edit_panel_1') {
                
                include 'controllers/pages/edit_panel_1.php';
 
            } elseif ($_GET['page'] == 'edit_panel_2') {
                
                include 'controllers/pages/edit_panel_2.php';
                
            } elseif ($_GET['page'] == 'edit_panel_3') {
                
                include 'controllers/pages/edit_panel_3.php';

            } elseif ($_GET['page'] == 'edit_panel_4') {
                
                include "controllers/pages/edit_panel_4.php";

            }
            
            #########################################################################
        } else {
            include 'pages/daftar_admin.php';
        }

        ?>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>