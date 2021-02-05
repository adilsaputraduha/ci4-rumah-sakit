<?= $this->extend('layout/main')  ?>
<?= $this->extend('layout/menu')  ?>

<?= $this->section('isi')  ?>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title">Data Ruangan</h4>
                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><span class="fa fa-plus" aria-hidden="true"></span> Tambah Data </button>
                <!--  Modal content for the above example -->
                <form action="/ruangan/save" method="post">
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
                                        <label>ID Ruangan</label>
                                        <input type="text" class="form-control" name="idruangan">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Nama Ruangan</label>
                                        <input type="text" class="form-control" name="namaruangan">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Harga Ruangan</label>
                                        <input type="text" class="form-control" name="hargaruangan">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Status Ruangan</label>
                                        <input type="text" class="form-control" name="statusruangan">
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

                <form action="/ruangan/edit" method="post">
                    <div class="modal fade bs-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Edit Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-6">
                                        <label>ID Ruangan</label>
                                        <input type="text" class="form-control idruangan" name="idruangan">
                                    </div>
                                    <div class="col-md-10">
                                        <label>Nama Ruangan</label>
                                        <input type="text" class="form-control namaruangan" name="namaruangan">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Harga Ruangan</label>
                                        <input type="text" class="form-control hargaruangan" name="hargaruangan">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Status Ruangan</label>
                                        <input type="text" class="form-control statusruangan" name="statusruangan">
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

                <form action="/ruangan/delete" method="post">
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
                                    <input type="hidden" name="idruangan" class="idruangan">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <button type="submit" class="btn btn-primary">Ya</button>
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
                            <th>ID Ruangan</th>
                            <th>Nama Ruangan</th>
                            <th>Harga</th>
                            <th>Status</th>
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
                                <td> <?= $row['ruangan_harga']; ?></td>
                                <td> <?= $row['ruangan_status']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm btn-edit" data-id="<?= $row['ruangan_id']; ?>" data-nama="<?= $row['ruangan_nama']; ?>" data-harga="<?= $row['ruangan_harga']; ?>" data-status="<?= $row['ruangan_status']; ?>">
                                        <i class="fa fa-tags"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="<?= $row['ruangan_id']; ?>">
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
        $('.idruangan').val(id);
        $('#deleteModal').modal('show');
    });

    $('.btn-edit').on('click', function() {
        const id = $(this).data('id');
        const nama = $(this).data('nama');
        const harga = $(this).data('harga');
        const status = $(this).data('status');

        $('.idruangan').val(id);
        $('.namaruangan').val(nama);
        $('.hargaruangan').val(harga);
        $('.statusruangan').val(status).trigger('change');

        $('#editModal').modal('show');
    });
</script>
<?= $this->endSection('')  ?>