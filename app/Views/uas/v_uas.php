<?= $this->extend('layout/main')  ?>
<?= $this->extend('layout/menu')  ?>

<?= $this->section('isi') ?>

<div class="modal fade bs-example-modal-lg" id="caripelangganModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <th>ID Pelanggan</th>
                            <th>Nama</th>
                            <th>No Hp</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($pelanggan as $row) : $no++ ?>
                            <tr>
                                <td> <?= $no; ?></td>
                                <td> <?= $row['id']; ?></td>
                                <td> <?= $row['nama']; ?></td>
                                <td> <?= $row['nohp']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm btn-pilih" data-id="<?= $row['id']; ?>" data-nama="<?= $row['nama']; ?>">
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
<div class="modal fade bs-example-modal-lg" id="caritarifModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
                            <th>ID Tarif</th>
                            <th>Kelas</th>
                            <th>Tarif</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($tarif as $row) : $no++ ?>
                            <tr>
                                <td> <?= $no; ?></td>
                                <td> <?= $row['idtarif']; ?></td>
                                <td> <?= $row['klass']; ?></td>
                                <td> <?= $row['tarif']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm btn-pilih2" data-id="<?= $row['idtarif']; ?>" data-nama="<?= $row['klass']; ?>">
                                        <i class=" fa fa-tags"></i> Pilih
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

<form action="/uas/simpan" method="POST">
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Data Transaksi</h4>
                    <p class="text-muted m-b-30 font-14">Isi data dengan lengkap!
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Id Transaksi</label>
                                    <input class="form-control" type="text" name="idt" placeholder="">
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
                                    <label>Kode Pelanggan</label>
                                    <div class="input-group">
                                        <input class="form-control idpel" name="idpel" id="idpel" type="text" placeholder="">
                                        <span class="input-group-append">
                                            <button type="button" id="check-minutes" data-toggle="modal" data-animation="bounce" data-target="#caripelangganModal" class="btn btn-info"><span class="fa fa-search" aria-hidden="true"></span></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Nama Pelanggan</label>
                                    <input type="text" placeholder="" name="nama" class="form-control nama" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Kode Tarif</label>
                                    <select name="idtarif" class="select2 form-control mb-3 custom-select">
                                        <?php foreach ($tarif as $row) : ?>
                                            <option value="<?= $row['idtarif']; ?>"><?= $row['klass']; ?>~<?= $row['tarif']; ?></option>
                                        <?php endforeach; ?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" placeholder="" name="namapasien" data-mask="99-9999999" class="form-control namapasien" readonly>
                                </div>
                            </div>
                        </div> -->
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
                                    <label>Meter Bulan Ini</label>
                                    <input class="form-control" type="text" name="mtrini" placeholder="">
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-20">
                                <div class="form-group">
                                    <label>Meter Bulan Lalu</label>
                                    <input class="form-control" type="text" name="mtrlalu" placeholder="">
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

        $('.idpel').val(id);
        $('.nama').val(nama).trigger('change');

        $('#caripelangganModal').modal('hide')
    });

    $('.btn-pilih2').on('click', function() {
        const id = $(this).data('id');

        $('.idtarif').val(id);

        $('#caritarifModal').modal('hide')
    });
</script>

<?= $this->endSection('')  ?>