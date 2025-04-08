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
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Forms</h5>
              <form>
                <div class="card">
                  <div class="card-body">
                    <div class="mb-3">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
                      <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                    </div>
                    <div class="mb-3">
                      <label for="nama" class="form-label">Tahun Lahir</label>
                      <input type="number" min="1900" class="form-control" id="tahun_lahir" name="tahun_lahir">
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="no_handphone" class="form-label">No Handphone</label>
                      <input type="text" class="form-control" id="no_handphone" name="no_handphone">
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="mb-3">
                      <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                      <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                        <option selected disabled>Pilih Jenis Kelamin</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="pendidikan_tertinggi" class="form-label">Pendidikan Tertinggi</label>
                      <select class="form-select" id="pendidikan_tertinggi" name="pendidikan_tertinggi">
                        <option selected disabled>Pilih Pendidikan Tertinggi</option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="pekerjaan_utama" class="form-label">Pekerjaan Utama</label>
                      <select class="form-select" id="pekerjaan_utama" name="pekerjaan_utama">
                        <option selected disabled>Pilih Pekerjaan Utama</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Peneliti/Dosen">Peneliti/Dosen</option>
                        <option value="ASN/TNI/Polri">ASN/TNI/Polri</option>
                        <option value="Pegawai BUMN/BUMD">Pegawai BUMN/BUMD</option>
                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="kategori_instansi" class="form-label">Kategori Instansi</label>
                      <select class="form-select" id="kategori_instansi" name="kategori_instansi">
                        <option selected disabled>Pilih Kategori Instansi</option>
                        <option value="Lembaga Negara">Lembaga Negara</option>
                        <option value="Kementerian & Lembaga Pemerintah">Kementerian & Lembaga Pemerintah</option>
                        <option value="TNI/Polri/BIN/Kejaksaan">TNI/Polri/BIN/Kejaksaan</option>
                        <option value="Pemerintah Daerah">Pemerintah Daerah</option>
                        <option value="Lembaga Internasional">Lembaga Internasional</option>
                        <option value="Lembaga Penelitian & Pendidikan">Lembaga Penelitian & Pendidikan</option>
                        <option value="BUMN/BUMD">BUMN/BUMD</option>
                        <option value="Swasta">Swasta</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="nama_instansi" class="form-label">Nama Instansi</label>
                      <input type="text" class="form-control" id="nama_instansi" name="nama_instansi">
                    </div>
                    <div class="mb-3">
                      <label for="pemanfaatan_utama" class="form-label">Pemanfaatan Utama</label>
                      <select class="form-select" id="pemanfaatan_utama" name="pemanfaatan_utama">
                        <option selected disabled>Pilih Pemanfaatan Utama</option>
                        <option value="Tugas Sekolah/Tugas Kuliah">Tugas Sekolah/Tugas Kuliah</option>
                        <option value="Pemerintah"> Pemerintah</option>
                        <option value="Penelitian">Penelitian</option>
                        <option value="Komersil">Komersil</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="jenis_layanan" class="form-label">Jenis Layanan Yang Digunakan</label>
                      <div id="jenis_layanan">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i1" class="custom-control-input is-invalid" name="jenis_layanan[]" value="1">
                          <label class="custom-control-label" for="i1">Perpustakaan</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i2" class="custom-control-input" name="jenis_layanan[]" value="2">
                          <label class="custom-control-label" for="i2">Permintaan Data</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i3" class="custom-control-input" name="jenis_layanan[]" value="3">
                          <label class="custom-control-label" for="i3">Akses Produk pada Website BPS</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i4" class="custom-control-input" name="jenis_layanan[]" value="4">
                          <label class="custom-control-label" for="i4">Konsultasi Statistik</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i5" class="custom-control-input" name="jenis_layanan[]" value="5">
                          <label class="custom-control-label" for="i5">Rekomendasi Kegiatan Statistik</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="fasilitas_yang_digunakan" class="form-label">Fasilitas yang Digunakan</label>
                      <div id="fasilitas_yang_digunakan">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i6" class="custom-control-input" name="fasilitas_yang_digunakan[]" value="1">
                          <label class="custom-control-label" for="i6">Pelayanan Statistik Terpadu (PST) datang langsung</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i7" class="custom-control-input" name="fasilitas_yang_digunakan[]" value="2">
                          <label class="custom-control-label" for="i7">Pelayanan Statistik Terpadu (PST) online (pst.bps.go.id)</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i8" class="custom-control-input" name="fasilitas_yang_digunakan[]" value="3">
                          <label class="custom-control-label" for="i8">Website BPS/AllStats BPS</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i9" class="custom-control-input" name="fasilitas_yang_digunakan[]" value="4">
                          <label class="custom-control-label" for="i9">Surat/Email</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i10" class="custom-control-input" name="fasilitas_yang_digunakan[]" value="5">
                          <label class="custom-control-label" for="i10">Aplikasi Chat (WhatsApp, Telegram, dll)</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" id="i11" class="custom-control-input" name="fasilitas_yang_digunakan[]" value="6">
                          <label class="custom-control-label" for="i11">Lainnya</label>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="pengaduan" class="form-label">Pernah Pengaduan ke PST?</label>
                      <div id="pengaduan">
                        <div class="form-check">
                          <label class="form-check-label" for="pengaduan_ya">
                            Ya
                          </label>
                          <input class="form-check-input" type="radio" name="pengaduan" id="pengaduan_ya" value="Ya">
                        </div>
                        <div class="form-check">
                          <label class="form-check-label" for="pengaduan_tidak">
                            Tidak
                          </label>
                          <input class="form-check-input" type="radio" name="pengaduan" id="pengaduan_tidak" value="tidak">
                        </div>
                      </div>
                    </div>
                    <a type="button" href="<?= base_url('/form1'); ?>" class="btn btn-primary">Selanjutnya</a>
                  </div>
                </div>
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
</body>

</html>