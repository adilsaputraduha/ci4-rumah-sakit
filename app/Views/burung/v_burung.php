<?= $this->extend('layout/main')  ?>
<?= $this->extend('layout/menu')  ?>

<?= $this->section('isi')  ?>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Data Pembelian Burung</h4>
                <!-- Large modal -->
                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><span class="fa fa-plus" aria-hidden="true"></span> Tambah Data </button>
                <!--  Modal content for the above example -->
                <form action="/controllerku/save" method="post">
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-6">
                                        <label>Kode Burung</label>
                                        <input type="text" class="form-control" name="kode">
                                    </div>
                                    <div class="col-md-10">
                                        <label>Nama Burung</label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Jumlah Beli</label>
                                        <input type="text" class="form-control" name="jumlah">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Harga Beli</label>
                                        <input type="text" class="form-control" name="harga">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Tanggal Beli</label>
                                        <input type="date" class="form-control" name="tgl">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Harga Jual</label>
                                        <input type="text" class="form-control" name="hargaj">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </form>
                <br>
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No </th>
                            <th>Kode</th>
                            <th>Nama Burung</th>
                            <th>Jumlah Beli</th>
                            <th>Harga Beli</th>
                            <th>Tanggal Beli</th>
                            <th>Harga Jual</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($burung as $row) : $no++ ?>
                            <tr>
                                <td> <?= $no; ?></td>
                                <td> <?= $row['kode']; ?></td>
                                <td> <?= $row['nama_burung']; ?></td>
                                <td> <?= $row['jumlah_beli']; ?></td>
                                <td> <?= $row['harga_beli']; ?></td>
                                <td> <?= $row['tanggal']; ?></td>
                                <td> <?= $row['harga_jual']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<?= $this->endSection('')  ?>