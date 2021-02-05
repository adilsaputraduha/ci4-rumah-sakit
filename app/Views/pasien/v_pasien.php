<?= $this->extend('layout/main')  ?>
<?= $this->extend('layout/menu')  ?>

<?= $this->section('isi')  ?>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">Data Pasien</h4>
                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><span class="fa fa-plus" aria-hidden="true"></span> Tambah Data </button>
                <!--  Modal content for the above example -->
                <form action="/pasien/save" method="post">
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                            <button type="button" id="addModal" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-8">
                                        <label>ID Pasien</label>
                                        <input type="text" class="form-control" name="idpasien">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Nama Pasien</label>
                                        <input type="text" class="form-control" name="namapasien">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Alamat Pasien</label>
                                        <input type="text" class="form-control" name="alamatpasien">
                                    </div>
                                    <div class="col-md-8">
                                        <label>No Ruangan</label>
                                        <input type="text" class="form-control" name="noruangpasien">
                                    </div>
                                    <div class="col-md-12">
                                        <label>No Hp</label>
                                        <input type="text" class="form-control" name="nopasien">
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

                <form action="/pasien/edit" method="post">
                    <div class="modal fade bs-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-6">
                                        <label>ID Pasien</label>
                                        <input type="text" class="form-control idpasien" name="idpasien">
                                    </div>
                                    <div class="col-md-10">
                                        <label>Nama Pasien</label>
                                        <input type="text" class="form-control namapasien" name="namapasien">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Alamat Pasien</label>
                                        <input type="text" class="form-control alamatpasien" name="alamatpasien">
                                    </div>
                                    <div class="col-md-10">
                                        <label>No RM Pasien</label>
                                        <input type="text" class="form-control normpasien" name="normpasien">
                                    </div>
                                    <div class="col-md-6">
                                        <label>No. Hp</label>
                                        <input type="text" class="form-control nohppasien" name="nohppasien">
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

                <form action="/pasien/delete" method="post">
                    <div class="modal fade bs-example-modal-lg" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Hapus Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <h5>Yakin mau menghapus data ini?</h5>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="idpasien" class="idpasien">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <button type="submit" class="btn btn-primary">Ya</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </form>
                <br>
                <table id="datatable" class="table table-bordered">
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
                                    <button type="button" class="btn btn-info btn-sm btn-edit" data-id="<?= $row['pasien_id']; ?>" data-nama="<?= $row['pasien_nama']; ?>" data-alamat="<?= $row['pasien_alamat']; ?>" data-noruang="<?= $row['pasien_noruang']; ?>" data-nohp="<?= $row['pasien_nohp']; ?>">
                                        <i class="fa fa-tags"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row['pasien_id']; ?>">
                                        <i class="fa fa-trash"></i>
                                    </button></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
<script>
    $('.btn-delete').on('click', function() {
        const id = $(this).data('id');
        $('.idpasien').val(id);
        $('#deleteModal').modal('show');
    });

    $('.btn-edit').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        const alamat = $(this).data('alamat');
        const norm = $(this).data('noruang');
        const nohp = $(this).data('nohp');

        $('.idpasien').val(id);
        $('.namapasien').val(nama);
        $('.alamatpasien').val(alamat);
        $('.normpasien').val(norm);
        $('.nohppasien').val(nohp).trigger('change');

        $('#editModal').modal('show');
    });
</script>
<?= $this->endSection('')  ?>