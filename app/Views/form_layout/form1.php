<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Survei Kebutuhan Data BPS Kabupaten Sorong Selatan 2025</title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('/assets/images/logos/favicon.png'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/css/styles.min.css'); ?>" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" data-layout="vertical" data-navbarbg="skin6" data-header-position="fixed">
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="d-flex justify-content-center navbar navbar-expand-lg navbar-light">
          <img src="<?= base_url('/assets/images/logos/favicon.png'); ?>" class="logo-icon img-fluid" style="max-height: 50px;" />
          <span class="navbar-brand d-none d-lg-block">
            <h3>
              Survei Kebutuhan Data 2025
            </h3>
            <h3 class="card-title">
              BPS Kabupaten Sorong Selatan
            </h3>
          </span>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid d-flex justify-content-center" style="max-width: none;">
        <div class="card mx-1 w-100" style="max-width: 1200px;">
          <div class="card-body">
            <h3 class="d-flex justify-content-center fw-semibold mb-4">SURVEI KEBUTUHAN DATA 2025</h3>
            <h5 class="d-flex justify-content-center fw-semibold mb-4">Blok II. Kepuasan terhadap Layanan Data dan Informasi Statistik BPS</h5>
            <div class="mx-1">
              <div id="form_description">
                <div class="alert-info alert" role="alert">
                  <p>
                    Menurut pendapat Saudara, bagaimana tingkat kepentingan dan tingkat kepuasan Saudara pada rincian pelayanan berikut?
                  </p>
                  <p>
                    <strong>Tingkat kepentingan</strong> adalah gambaran pelayanan yang seharusnya diberikan BPS sesuai dengan keinginan/harapan konsumen. <br>
                    <strong>Tingkat kepuasan</strong> adalah gambaran pelayanan yang sudah diberikan BPS kepada konsumen. <br>
                    <strong>Skala 1-10</strong> adalah skala yang digunakan untuk mengukur tingkat kepuasan dan kepentingan (tidak puas/penting - sangat puas/penting). <br>
                  </p>
                </div>
              </div>
              <form>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">1. Informasi pelayanan pada unit layanan ini tersedia melalui media elektronik maupun non elektronik.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">2. Persyaratan pelayanan yang ditetapkan mudah dipenuhi/disiapkan oleh konsumen.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">3. Prosedur/alur pelayanan yang ditetapkan mudah diikuti/dilakukan.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">4. Jangka waktu penyelesaian pelayanan yang diterima sesuai dengan yang ditetapkan.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">5. Biaya pelayanan yang dibayarkan sesuai dengan biaya yang ditetapkan.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">6. Produk pelayanan yang diterima sesuai dengan yang dijanjikan.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <div class="col-12 col-md-6 p-2">
                          <label for="nama" class="form-label">7. Sarana dan prasarana pendukung pelayanan memberikan kenyamanan.</label>
                          <p><small>Sarana prasarana meliputi ruang khusus pelayanan, ruang tunggu, tempat parkir, toilet khusus pengguna layanan,sarana bagi yang berkebutuhan khusus, dan aplikasi pelayanan online.</small></p>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <div class="col-12 col-md-6 p-2">
                          <label for="nama" class="form-label">8. Data BPS mudah diakses melalui fasilitas utama yang digunakan.</label>
                          <p><small>Fasilitas utama yang anda gunakan (berdasarkan pilihan Anda pada Blok 1 Rincian 11) adalah (Pelayanan Statistik Terpadu (PST) datang langsung)</small></p>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">9. Petugas pelayanan dan/atau aplikasi pelayanan online merespon dengan baik.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">10. Petugas pelayanan dan/atau aplikasi pelayanan online mampu memberikan informasi yang jelas.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">11. Keberadaan fasilitas pengaduan PST mudah diketahui. (contoh: Kotak saran dan pengaduan, website https://webapps.bps.go.id/pengaduan, e-mail bpshq@bps.go.id)</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">12. Tidak ada diskriminasi dalam pelayanan.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">13. Tidak ada pelayanan di luar prosedur/kecurangan pelayanan.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <div class="col-12 col-md-6 p-2">
                          <label for="nama" class="form-label">14. Tidak ada penerimaan gratifikasi.</label>
                          <p><small><a href="http://s.bps.go.id/pppnbp" target="_blank" rel="noopener noreferrer">PP nomor 13 tahun 2024 tentang PNBP</a> dan link PerBan No-2-Tahun-2019 ttg tarif nol rupiah</small></p>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">15. Tidak ada pungutan liar (pungli) dalam pelayanan</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="mb-3 row d-flex justify-content-between">
                        <label for="nama" class="col-12 col-md-6 p-2 form-label">16. Tidak ada praktik percaloan dalam pelayanan.</label>
                        <div class="col-12 col-md-6 p-2">
                          <div class="d-flex justify-content-end">
                            <div class="p-1">
                              <label for="kepentingan" class="form-label">Tingkat Kepentingan</label>
                              <input type="number" class="form-control" id="kepentingan" name="kepentingan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa penting aspek ini bagi Anda?">
                            </div>
                            <div class="p-1">
                              <label for="kepuasan" class="form-label">Tingkat Kepuasan</label>
                              <input type="number" class="form-control" id="kepuasan" name="kepuasan" min="1" max="10" style="width: 100px;" data-bs-toggle="tooltip" title="Seberapa puas Anda terhadap pelayanan kami pada aspek ini?">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <a type="button" href="javascript:history.back()" class="btn btn-primary">Kembali</a>
                <a type="button" href="<?= base_url('/form2'); ?>" class="btn btn-primary">Selanjutnya</a>
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