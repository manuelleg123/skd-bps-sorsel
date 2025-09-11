<?php $this->extend('dashboard_layout/main'); ?>

<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-header d-flex justify-content-between">
                <label class="col-form-label">Data Admin</label>
                <button type="button" class="btn btn-primary" id="addAdminBtn" onclick="showAddAdminModal()">Tambah Admin</button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="adminTable" class="table-light table-striped display" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Admin</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Start -->
<div class="modal fade" id="addAdminModal" aria-labelledby="addAdminModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAdminModalLabel">Tambah Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addAdminForm">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="full_name" class="col-form-label">Nama Lengkap:</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="col-form-label">Konfirmasi Password:</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="SubmitAddAdmin()">Tambah Admin</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal End -->

<?php $this->endSection(); ?>

