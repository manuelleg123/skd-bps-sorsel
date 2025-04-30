<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Survei Kebutuhan Data BPS Kabupaten Sorong Selatan 2025</title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('/assets/images/logos/favicon.png'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/css/styles.min.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/css/form-style.css') ?>">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" data-layout="vertical" data-navbarbg="skin6" data-header-position="fixed">
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?= $this->include('form_layout/header'); ?>
      <!--  Header End -->
      <div class="container-fluid d-flex justify-content-center" style="max-width: none;">
        <div class="card mx-1 w-100" style="max-width: 1200px;">
          <div class="card-body">
            <h3 class="d-flex justify-content-center fw-semibold mb-4">SURVEI KEBUTUHAN DATA 2025</h3>
            <h5 class="d-flex justify-content-center fw-semibold mb-4" id="blok_header">BLOK I. Keterangan Responden</h5>
            <div class="mx-1">
              <div id="form_description">
              </div>
              <form id="multiStepForm" enctype="multipart/form-data" method="post" action="<?= base_url('/'); ?>">
                <?= csrf_field(); ?>
                <?= $this->include('form_layout/blok_1'); ?>
                <?= $this->include('form_layout/blok_2'); ?>
                <?= $this->include('form_layout/blok_3'); ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/sidebarmenu.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/app.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/libs/simplebar/dist/simplebar.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/form.js'); ?>"></script>
</body>

</html>