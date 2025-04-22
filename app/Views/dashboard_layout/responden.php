<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survei Kebutuhan Data BPS Kabupaten Sorong Selatan 2025</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('/assets/images/logos/favicon.png'); ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/libs/datatables/css/jquery.dataTables.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/libs/datatables/buttons/css/buttons.dataTables.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/styles.min.css'); ?>" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between my-3">
                    <a href="<?= base_url('/dashboard'); ?>" class="text-nowrap logo-img">
                        <img src="<?= base_url('/assets/images/logos/dark-logo.svg'); ?>" width="100" alt="" />
                    </a>
                    <h4 class="d-none d-lg-block">Survei Kebutuhan Data 2025</h4>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('/dashboard'); ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">AKSI</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link active" href="<?= base_url('/responden'); ?>" aria-expanded="false">
                                <span>
                                    <i class="ti ti-speakerphone"></i>
                                </span>
                                <span class="hide-menu">Responden</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">AUTH</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
                                <span>
                                    <i class="ti ti-logout"></i>
                                </span>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                    <div class="message-body">
                                        <span href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </span>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-lg-12 d-flex align-items-strech">
                        <div class="card w-100">
                            <div class="card-header">
                                <label class="col-form-label">Data Responden yang Sudah Mengisi</label>
                            </div>
                            <div class="card-body">
                                <table id="respondenTable" class="table-light table-striped display">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Responden</th>
                                            <th>Nomor HP</th>
                                            <th>Email</th>
                                            <th>Nama Instansi</th>
                                            <th>Tanggal Pengisian</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body p-4">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="card w-100">
                            <div class="card-body p-4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url('/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="<?= base_url('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?= base_url('/assets/libs/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <!-- DataTables Buttons (CDN) -->
    <script src="<?= base_url('/assets/libs/datatables/buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/libs/datatables/buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/libs/datatables/buttons/js/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/libs/datatables/buttons/js/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/libs/datatables/buttons/js/vfs_fonts.js'); ?>"></script>
    <!-- Custom JS -->
    <script src="<?= base_url('/assets/js/sidebarmenu.js'); ?>"></script>
    <script src="<?= base_url('/assets/js/app.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/libs/apexcharts/dist/apexcharts.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/js/dashboard.js'); ?>"></script>
    <script src="<?= base_url('/assets/libs/simplebar/dist/simplebar.js'); ?>"></script>
    <script src="<?= base_url('/assets/js/table.js'); ?>"></script>
</body>

</html>