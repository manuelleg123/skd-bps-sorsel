<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survei Kebutuhan Data BPS Kabupaten Sorong Selatan 2025</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('/assets/images/logos/favicon.png'); ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/styles.min.css'); ?>" />
    <link rel="stylesheet" href="<?= base_url('/assets/css/form-style.css') ?>">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="<?= base_url('/assets/images/logos/favicon.png'); ?>" width="180" alt="">
                                </a>
                                <h2 class="text-center">Login</h2>
                                <form action="<?= base_url('/login'); ?>" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field() ?>
                                    <div class="input-group mb-3">
                                        <?php if (isset($validation)) : ?>
                                            <div class="text-danger">
                                                <?= $validation->getError('email') ?>
                                                <?= $validation->getError('password') ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (session('error')) : ?>
                                            <div class="text-danger">
                                                <?= session('error') ?>
                                            </div>
                                        <?php endif ?>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input placeholder="Masukan Email" required type="email" name="email" value="<?= session('email') ? htmlspecialchars(session('email')) : "" ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-4">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input placeholder="Masukan Password" required type="password" name="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <!-- <div class="form-check">
                                            <input class="form-check-input primary" name="remember_device" type="checkbox" value="" id="flexCheckChecked" checked>
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Remeber this Device
                                            </label>
                                        </div> -->
                                        <!-- <a class="text-primary fw-bold" href="./index.html">Lupa Password ?</a> -->
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>