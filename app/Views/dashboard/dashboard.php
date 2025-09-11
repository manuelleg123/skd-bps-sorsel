<?php $this->extend('dashboard_layout/main'); ?>

<?php $this->section('content'); ?>
<div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body d-flex flex-column justify-content-center">
                <div class="d-flex align-items-center mb-2">
                    <div class="me-3 text-primary">
                        <i class="ti ti-users nav-small-cap-icon fs-8"></i>
                    </div>
                    <div>
                        <h6 class="mb-1">Total Responden</h6>
                        <h4 id="total_responden">0</h4>
                    </div>
                </div>
                <div class="progress" style="height: 8px;">
                    <div id="progressBar" class="progress-bar bg-success"
                        role="progressbar" style="width: 0%;">
                    </div>
                </div>
                <small id="progressText" class="text-muted">0% dari target</small>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card overflow-hidden">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3 text-primary">
                                <i class="ti ti-users nav-small-cap-icon fs-8"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Total Triwulan 1</h6>
                                <h4 id="total_responden_triwulan1">0</h4>
                            </div>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div id="progressBarTriwulan1" class="progress-bar bg-success"
                                role="progressbar" style="width: 0%;">
                            </div>
                        </div>
                        <small id="progressTextTriwulan1" class="text-muted">0% dari target</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3 text-primary">
                                <i class="ti ti-users nav-small-cap-icon fs-8"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Total Responden Triwulan 2</h6>
                                <h4 id="total_responden_triwulan2">0</h4>
                            </div>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div id="progressBarTriwulan2" class="progress-bar bg-success"
                                role="progressbar" style="width: 0%;">
                            </div>
                        </div>
                        <small id="progressTextTriwulan2" class="text-muted">0% dari target</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3 text-primary">
                                <i class="ti ti-users nav-small-cap-icon fs-8"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Total Responden Triwulan 3</h6>
                                <h4 id="total_responden_triwulan3">0</h4>
                            </div>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div id="progressBarTriwulan3" class="progress-bar bg-success"
                                role="progressbar" style="width: 0%;">
                            </div>
                        </div>
                        <small id="progressTextTriwulan3" class="text-muted">0% dari target</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-4 d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3 text-primary">
                                <i class="ti ti-users nav-small-cap-icon fs-8"></i>
                            </div>
                            <div>
                                <h6 class="mb-1">Total Responden Triwulan 4</h6>
                                <h4 id="total_responden_triwulan4">0</h4>
                            </div>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div id="progressBarTriwulan4" class="progress-bar bg-success"
                                role="progressbar" style="width: 0%;">
                            </div>
                        </div>
                        <small id="progressTextTriwulan4" class="text-muted">0% dari target</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endSection(); ?>