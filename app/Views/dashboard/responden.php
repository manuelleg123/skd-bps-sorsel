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
                    <div class="tab-pane fade show active" id="blok1" role="tabpanel">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td>MOFAS YUNITA WAY</td>
                                </tr>
                                <tr>
                                    <th><em>Email</em></th>
                                    <td>mofasway10@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>No HP</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>Perempuan</td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Tertinggi</th>
                                    <td>&lt;= SLTA/Sederajat</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Utama</th>
                                    <td>Pelajar/Mahasiswa</td>
                                </tr>
                                <tr>
                                    <th>Kategori Instansi</th>
                                    <td>Swasta</td>
                                </tr>
                                <tr>
                                    <th>Nama Instansi</th>
                                    <td>Universitas sains dan teknologi Jayapura</td>
                                </tr>
                                <tr>
                                    <th>Pemanfaatan Data</th>
                                    <td>Penelitian</td>
                                </tr>
                                <tr>
                                    <th>Jenis Layanan</th>
                                    <td>Akses Produk Statistik Pada Website BPS</td>
                                </tr>
                                <tr>
                                    <th>Fasilitas Utama</th>
                                    <td>Website BPS (bps.go.id) / AllStats BPS ()</td>
                                </tr>
                                <tr>
                                    <th>Apakah pernah melakukan pengaduan terkait Pelayanan Statistik Terpadu (PST)?</th>
                                    <td>Tidak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- BLOK II -->
                    <div class="tab-pane fade" id="blok2" role="tabpanel">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Informasi pelayanan tersedia.</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Kemudahan Persyaratan Pelayanan</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Kemudahan Prosedur</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Kesesuaian Jangka Waktu Penyelesaian</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Kesesuaian Biaya Pelayanan</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Kesesuaian Produk Pelayanan</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Kesesuaian Produk Pelayanan</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Sarana Prasarana (Website BPS (bps.go.id) / AllStats BPS)</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Kemudahan Akses Data melalui Fasilitas Utama</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Respon Petugas Pelayanan</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Kejelasan Informasi Petugas Pelayanan Online</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Kemudahan Fasilitas Pengaduan</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Kemudahan Proses Penanganan pengaduan</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Pelayanan yang Tidak Diskriminasi</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Tidak ada pelayanan di luar prosedur/kecurangan pelayanan.</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Tidak ada penerimaan gratifikasi</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Tidak Pungli</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <th>Tidak Ada Calo</th>
                                    <td>10</td>
                                    <td>10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- BLOK III -->
                    <div class="tab-pane fade" id="blok3" role="tabpanel">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Catatan</th>
                                    <td>Sangat bagus dan baik</td>
                                </tr>
                                <tr>
                                    <th>Status catatan</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
<?php $this->endSection(); ?>