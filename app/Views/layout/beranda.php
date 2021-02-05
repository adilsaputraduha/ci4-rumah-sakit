<?= $this->extend('layout/main')  ?>
<?= $this->extend('layout/menu')  ?>

<?= $this->section('isi')  ?>

<div class="row">
    <div class="col-sm-12">
        <div class="card m-b-20">
            <div class="card-body">
                <div class="card-text">
                    <div class="alert alert-info">Selamat Datang di Sistem Informasi Rumah Sakit Harapan Ayah</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-account-multiple-plus"></i>
                        </div>
                    </div>
                    <div class="col-6 text-center align-self-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner">562</h5>
                            <p class="mb-0 text-muted">Dokter</p>
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round ">
                            <i class="mdi mdi-basket"></i>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner">7514</h5>
                            <p class="mb-0 text-muted">Pasien</p>
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round ">
                            <i class="mdi mdi-basket"></i>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner">7514</h5>
                            <p class="mb-0 text-muted">Ruang</p>
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card m-b-30">
            <div class="card-body">
                <div class="d-flex flex-row">
                    <div class="col-3 align-self-center">
                        <div class="round ">
                            <i class="mdi mdi-basket"></i>
                        </div>
                    </div>
                    <div class="col-6 align-self-center text-center">
                        <div class="m-l-10 ">
                            <h5 class="mt-0 round-inner">7514</h5>
                            <p class="mb-0 text-muted">Admin</p>
                        </div>
                    </div>
                    <div class="col-3 align-self-end align-self-center">
                        <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(' ')  ?>