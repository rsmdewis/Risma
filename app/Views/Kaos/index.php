<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modalTambah">
            <i class="fa fa-plus">Tambah Data</i>
        </button>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Model</th>
                    <th>Warna</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach($kaos->getResultArray() as $row) : ?>
                <tr>
                    <td scope="row"><?= $i; ?></td>
                    <td><?= $row['model']; ?></td>
                    <td><?= $row['warna']; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                
            </tbody>
        </table>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<div class="modal fade" id="modalTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah <?= $judul; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('kaos/tambah'); ?>" method="post">
                <div class="form-group mb-0">
                    <label for="model"></label>
                    <input type="text" name="model" id="model" class="form-control" placeholder="Masukkan Model">
                </div>
                <div class="form-group mb-0">
                    <label for="warna"></label>
                    <input type="text" name="warna" id="warna" class="form-control" placeholder="Masukkan Warna">
                </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>