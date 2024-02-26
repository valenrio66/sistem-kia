<?= $this->include('content/sidebar') ?>

<?= $this->include('content/header') ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <h1>Data Role</h1>
                <button type="button" class="btn btn-primary">Tambah Data Role</button>
                <div class="row">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($roles as $role): ?>
                                <tr>
                                    <td>
                                        <?= $role['nama_role'] ?>
                                    </td>
                                    <td>
                                        <!-- Tambahkan tombol atau link aksi sesuai kebutuhan -->
                                        <!-- Contoh: -->
                                        <a href="#" class="btn btn-info">Edit</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('content/footer') ?>