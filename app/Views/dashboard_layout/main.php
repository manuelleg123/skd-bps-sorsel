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
        <?= $this->include('dashboard_layout/sidebar'); ?>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <?= $this->include('dashboard_layout/header'); ?>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <!-- content Start -->
                <?= $this->renderSection('content'); ?>
                <!-- content End -->
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