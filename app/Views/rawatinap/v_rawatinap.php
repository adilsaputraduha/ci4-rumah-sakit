<?= $this->extend('layout/main')  ?>
<?= $this->extend('layout/menu')  ?>

<?= $this->section('isi') ?>

<form action="/rawatinap" method="post">
    <div class="modal fade bs-example-modal-lg" id="caridokterModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Cari Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>ID Dokter</th>
                                <th>Nama Dokter</th>
                                <th>No Hp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($dokter as $row) : $no++ ?>
                                <tr>
                                    <td> <?= $no; ?></td>
                                    <td> <?= $row['dokter_id']; ?></td>
                                    <td> <?= $row['dokter_nama']; ?></td>
                                    <td> <?= $row['dokter_nohp']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm btn-pilih" data-id="<?= $row['dokter_id']; ?>" data-nama="<?= $row['dokter_nama']; ?>">
                                            <i class="fa fa-tags"></i> Pilih
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <a href="#" id="closemodal" target="blank"></a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</form>

<form action="/rawatinap" method="post">
    <div class="modal fade bs-example-modal-lg" id="caripasienModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Cari Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Pasien</th>
                                <th>Nama Pasien</th>
                                <th>Alamat Pasien</th>
                                <th>No. RM</th>
                                <th>No. HP</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($pasien as $row) : $no++ ?>
                                <tr>
                                    <td> <?= $no; ?></td>
                                    <td> <?= $row['pasien_id']; ?></td>
                                    <td> <?= $row['pasien_nama']; ?></td>
                                    <td> <?= $row['pasien_alamat']; ?></td>
                                    <td> <?= $row['pasien_noruang']; ?></td>
                                    <td> <?= $row['pasien_nohp']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm btn-pilih2" data-id="<?= $row['pasien_id']; ?>" data-nama="<?= $row['pasien_nama']; ?>" data-alamat="<?= $row['pasien_alamat']; ?>" data-noruang="<?= $row['pasien_noruang']; ?>" data-nohp="<?= $row['pasien_nohp']; ?>">
                                            <i class="fa fa-tags"></i> Pilih
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</form>

<form action="/rawatinap" method="post">
    <div class="modal fade bs-example-modal-lg" id="caripoliModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Cari Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Poli</th>
                                <th>Nama Poli</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($poli as $row) : $no++ ?>
                                <tr>
                                    <td> <?= $no; ?></td>
                                    <td> <?= $row['poli_id']; ?></td>
                                    <td> <?= $row['poli_nama']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm btn-pilih3" data-id="<?= $row['poli_id']; ?>" data-nama="<?= $row['poli_nama']; ?>">
                                            <i class="fa fa-tags"></i> Pilih
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</form>
<form action="/rawatinap" method="post">
    <div class="modal fade bs-example-modal-lg" id="cariruanganModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Cari Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Ruangan</th>
                                <th>Nama Ruangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($ruangan as $row) : $no++ ?>
                                <tr>
                                    <td> <?= $no; ?></td>
                                    <td> <?= $row['ruangan_id']; ?></td>
                                    <td> <?= $row['ruangan_nama']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm btn-pilih4" data-id="<?= $row['ruangan_id']; ?>" data-nama="<?= $row['ruangan_nama']; ?>">
                                            <i class="fa fa-tags"></i> Pilih
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</form>

<form action="/rawatinap/simpan" method="POST">
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Data Rawat Inap</h4>
                    <p class="text-muted m-b-30 font-14">Isi data dengan lengkap!
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Id Rawat Inap</label>
                                    <input class="form-control" type="text" name="idrawat" placeholder="Id rawat Inap">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end col -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Kode Dokter</label>
                                    <div class="input-group">
                                        <input class="form-control kodedokter" name="kodedokter" id="kodedokter" type="text" placeholder="Id dokter">
                                        <span class="input-group-append">
                                            <button type="button" id="check-minutes" data-toggle="modal" data-animation="bounce" data-target="#caridokterModal" class="btn btn-info"><span class="fa fa-search" aria-hidden="true"></span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Nama Dokter</label>
                                    <input type="text" placeholder="" name="namadokter" class="form-control namadokter" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Kode Pasien</label>
                                    <div class="input-group">
                                        <input class="form-control kodepasien" name="kodepasien" id="kodepasien" type="text" placeholder="Id Pasien">
                                        <span class="input-group-append">
                                            <button type="button" id="check-minutes" data-toggle="modal" data-animation="bounce" data-target="#caripasienModal" class="btn btn-info"><span class="fa fa-search" aria-hidden="true"></span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Nama Pasien</label>
                                    <input type="text" placeholder="" name="namapasien" data-mask="99-9999999" class="form-control namapasien" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Kode Poli</label>
                                    <div class="input-group">
                                        <input class="form-control kodepoli" name="kodepoli" id="kodepoli" type="text" placeholder="Id Poli">
                                        <span class="input-group-append">
                                            <button type="button" id="check-minutes" data-toggle="modal" data-animation="bounce" data-target="#caripoliModal" class="btn btn-info"><span class="fa fa-search" aria-hidden="true"></span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Nama Poli</label>
                                    <input type="text" placeholder="" name="namapoli" data-mask="99-9999999" class="form-control namapoli" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Kode Ruangan</label>
                                    <div class="input-group">
                                        <input class="form-control koderuangan" name="koderuangan" id="koderuangan" type="text" placeholder="Id Ruangan">
                                        <span class="input-group-append">
                                            <button type="button" id="check-minutes" data-toggle="modal" data-animation="bounce" data-target="#cariruanganModal" class="btn btn-info"><span class="fa fa-search" aria-hidden="true"></span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Nama Ruangan</label>
                                    <input type="text" placeholder="" name="namaruangan" data-mask="99-9999999" class="form-control namaruangan" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Tanggal Masuk</label>
                                    <input class="form-control" type="date" name="tglmasuk" placeholder="Id dokter">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Tanggal Keluar</label>
                                    <input class="form-control" type="date" name="tglkeluar" placeholder="Id dokter">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Catatan Medis</label>
                                    <div>
                                        <textarea required name="cttmedis" class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</form>

<script>
    $('.btn-pilih').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');

        $('.kodedokter').val(id);
        $('.namadokter').val(nama).trigger('change');

        $('#caridokterModal').modal('hide')
    });

    $('.btn-pilih2').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');

        $('.kodepasien').val(id);
        $('.namapasien').val(nama).trigger('change');

        $('#caripasienModal').modal('hide')
    });

    $('.btn-pilih3').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');

        $('.kodepoli').val(id);
        $('.namapoli').val(nama).trigger('change');

        $('#caripoliModal').modal('hide')
    });

    $('.btn-pilih4').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');

        $('.koderuangan').val(id);
        $('.namaruangan').val(nama).trigger('change');

        $('#cariruanganModal').modal('hide')
    });
</script>

<?= $this->endSection('')  ?>