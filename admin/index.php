<?php
session_start();
if ($_SESSION["status_admin"] != "login") {
    header("location:../login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="chartjs/Chart.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">DATA REKENING</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Data
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="tabel_user.php">Tabel user</a>
                                <a class="nav-link" href="tables.php">Tabel buku</a>
                                <a class="nav-link" href="tabel_admin.php">Tabel admin</a>
                                <a class="nav-link" href="tabel_operator.php">Tabel operator</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">

                        <!-- <?php

                                include "koneksi.php";

                                $data = mysqli_query($koneksi, "SELECT * FROM daftar_buku");
                                $jumlah_buku = mysqli_num_rows($data);
                                ?>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Jumlah Buku : <b>
                                        <?php echo $jumlah_buku; ?>
                                    </b></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="tables.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div> -->

                        <?php

                        include "koneksi.php";

                        $data_admin = mysqli_query($koneksi, "SELECT * FROM data_admin");
                        $jumlah_admin = mysqli_num_rows($data_admin);
                        ?>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Jumlah admin: <b>
                                        <?php echo $jumlah_admin ?>
                                    </b></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="tabel_admin.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <!-- <?php

                                include "koneksi.php";

                                $data_user = mysqli_query($koneksi, "SELECT * FROM data_user");
                                $jumlah_user = mysqli_num_rows($data_user);
                                ?>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Jumlah user: <b>
                                        <?php echo $jumlah_user ?>
                                    </b></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="tabel_user.php">View Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <?php

                                include "koneksi.php";

                                $data_operator = mysqli_query($koneksi, "SELECT * FROM data_operator");
                                $jumlah_operator = mysqli_num_rows($data_operator);
                                ?>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Jumlah operator: <b>
                                        <?php echo $jumlah_operator ?>
                                    </b></div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="tabel_operator.php">View
                                        Details</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="row">
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                    Area Chart Example
                                </div>
                                <div class="card-body"><canvas id="myBar2Chart" width="100%" height="40"></canvas></div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-bar me-1"></i>
                                    Bar Chart Example
                                </div>
                                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>

                            </div>
                        </div>
                    </div> -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Rekening
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <div class="d-flex justify-content-center">
                                    <a href="tambah.php" class="btn btn-outline-primary" style="text-decoration:none; margin-right: 0.5rem;">+
                                        TAMBAH REKENING</a>

                                    <a href="cetak.php" class="btn btn-outline-danger" target="_blank" style="text-decoration:none; margin-right: 0.5rem; ">CETAK</a>

                                    <a target="_blank" href="export_excel.php" class="btn btn-outline-success " style="text-decoration:none; margin-right: 0.5rem;">EXPORT KE
                                        EXCEL</a>

                                    <a href="import_excel.php" class="btn btn-outline-secondary" style="text-decoration:none; margin-right: 0.5rem;">IMPORT DATA DARI
                                        EXCEL</a>

                                </div>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>BANK</th>
                                        <th>NAMA</th>
                                        <th>NO REK</th>
                                        <th>NO ATM</th>
                                        <th>NAMA IBU</th>
                                        <th>TTL</th>
                                        <th>PIN ATM</th>
                                        <th>NO HP</th>
                                        <th>JENIS KARTU</th>
                                        <th>SUPPLIER</th>
                                        <th>POSISI ATM</th>
                                        <th>TGL TERIMA</th>
                                        <th>SALDO</th>
                                        <th>STATUS</th>
                                        <th>FOTO KTP</th>
                                        <th style="width:70%">Opsi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>BANK</th>
                                        <th>NAMA</th>
                                        <th>NO REK</th>
                                        <th>NO ATM</th>
                                        <th>NAMA IBU</th>
                                        <th>TTL</th>
                                        <th>PIN ATM</th>
                                        <th>NO HP</th>
                                        <th>JENIS KARTU</th>
                                        <th>SUPPLIER</th>
                                        <th>POSISI ATM</th>
                                        <th>TGL TERIMA</th>
                                        <th>SALDO</th>
                                        <th>STATUS</th>
                                        <th>FOTO KTP</th>
                                        <th style="width:70%">Opsi</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php
                                    include 'koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "select * from daftar_buku");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>

                                        <tr>
                                            <td>
                                                <?php echo $no++; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['bank']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['nama']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['no_rek']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['no_atm']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['nama_ibu']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['ttl']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['pin_atm']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['no_hp']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['jenis_kartu']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['supplier']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['posisi_atm']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['tgl_terima']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['saldo']; ?>
                                            </td>
                                            <td>
                                                <?php echo $d['status']; ?>
                                            </td>
                                            <td>
                                                <img src="gambar/<?php echo $d['foto'] ?>" width="35" height="40">
                                            </td>

                                            <td>
                                                <a href="edit.php?id_buku=<?php echo $d['id_buku']; ?>" name="id_user" class="btn btn-outline-success" style="width: 77px;">EDIT</a>
                                                <a href="hapus.php?id_buku=<?php echo $d['id_buku']; ?>" class="btn btn-outline-danger">HAPUS</a>
                                            </td>

                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023 </div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>

    <!-- <script>
        var ctx = document.getElementById("myBarChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Romace", "Horror", "Komedi", "Fantasi", "Thriller", "Historical"],
                datasets: [{
                    label: 'Genre yang paling diminati',
                    data: [
                        <?php
                        $data = $koneksi->query("SELECT genre FROM daftar_buku WHERE genre='Romance'");
                        $resF = $data->num_rows;
                        echo $resF;
                        ?>,

                        <?php
                        $data = $koneksi->query("SELECT genre FROM daftar_buku WHERE genre='Horror'");
                        $resF = $data->num_rows;
                        echo $resF;
                        ?>,

                        <?php
                        $data = $koneksi->query("SELECT genre FROM daftar_buku WHERE genre='Komedi'");
                        $resF = $data->num_rows;
                        echo $resF;
                        ?>,

                        <?php
                        $data = $koneksi->query("SELECT genre FROM daftar_buku WHERE genre='Fantasi'");
                        $resF = $data->num_rows;
                        echo $resF;
                        ?>,

                        <?php
                        $data = $koneksi->query("SELECT genre FROM daftar_buku WHERE genre='Thriller'");
                        $resF = $data->num_rows;
                        echo $resF;
                        ?>,

                        <?php
                        $data = $koneksi->query("SELECT genre FROM daftar_buku WHERE genre='Historical'");
                        $resF = $data->num_rows;
                        echo $resF;
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script> -->

    <!-- <script>
        var ctx = document.getElementById("myBar2Chart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["GagasMedia", "Erlangga", "Gramedia Pustaka Utama"],
                datasets: [{
                    label: 'Penerbit buku terpaporit',
                    data: [
                        <?php
                        $data = $koneksi->query("SELECT penerbit FROM daftar_buku WHERE penerbit= 'GagasMedia'");
                        $resF = $data->num_rows;
                        echo $resF;
                        ?>,

                        <?php
                        $data = $koneksi->query("SELECT penerbit FROM daftar_buku WHERE penerbit='Erlangga'");
                        $resF = $data->num_rows;
                        echo $resF;
                        ?>,

                        <?php
                        $data = $koneksi->query("SELECT penerbit FROM daftar_buku WHERE penerbit='Gramedia Pustaka Utama'");
                        $resF = $data->num_rows;
                        echo $resF;
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script> -->

</body>

</html>