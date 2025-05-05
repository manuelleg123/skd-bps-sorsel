<?php $this->extend('dashboard_layout/main'); ?>

<?php $this->section('content'); ?>
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

<!-- Modal Start -->
<div class="modal fade" id="detailDataModal" tabindex="-1" aria-labelledby="detailDataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailDataModalLabel">Detail Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Tabs Blok -->
                <ul class="nav nav-tabs bg-primary rounded d-flex w-100" id="blokTab" role="tablist">
                    <li class="nav-item flex-fill text-center" role="presentation">
                        <a class="nav-link active link-dark fw-semibold" id="blok1-tab" data-bs-toggle="tab" href="#blok1" role="tab">BLOK I</a>
                    </li>
                    <li class="nav-item flex-fill text-center" role="presentation">
                        <a class="nav-link link-dark fw-semibold" id="blok2-tab" data-bs-toggle="tab" href="#blok2" role="tab">BLOK II</a>
                    </li>
                    <li class="nav-item flex-fill text-center" role="presentation">
                        <a class="nav-link link-dark fw-semibold" id="blok3-tab" data-bs-toggle="tab" href="#blok3" role="tab">BLOK III</a>
                    </li>
                </ul>

                <div class="tab-content mt-3" id="blokTabContent">
                    <!-- BLOK I -->
                    <?= $this->include('dashboard/responden/blok_1'); ?>
                    <!-- BLOK II -->
                    <?= $this->include('dashboard/responden/blok_2'); ?>
                    <!-- BLOK III -->
                    <?= $this->include('dashboard/responden/blok_3'); ?>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
<?php $this->endSection(); ?>