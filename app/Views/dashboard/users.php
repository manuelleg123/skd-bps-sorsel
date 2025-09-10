<?php $this->extend('dashboard_layout/main'); ?>

<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-header">
                <label class="col-form-label">Data Admin</label>
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
<?php $this->endSection(); ?>
