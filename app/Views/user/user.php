<?= $this->include('content/sidebar') ?>

<?= $this->include('content/header') ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <h1>Data Pengguna</h1>
                <a type="button" href="<?= base_url('/dashboard/user/add') ?>" class="btn btn-primary">Tambah Data
                    Pengguna</a>
                <div class="row">
                    <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>NIK</th>
                                <th>Nomor HP</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td>
                                        <?= $user['nama_user'] ?>
                                    </td>
                                    <td>
                                        <?= $user['username'] ?>
                                    </td>
                                    <td>
                                        <?= $user['tgl_lahir'] ?>
                                    </td>
                                    <td>
                                        <?= $user['alamat'] ?>
                                    </td>
                                    <td>
                                        <?= $user['nik'] ?>
                                    </td>
                                    <td>
                                        <?= $user['no_hp'] ?>
                                    </td>
                                    <td>
                                        <?= $user['email'] ?>
                                    </td>
                                    <td>
                                        <?= $user['nama_role'] ?>
                                    </td>
                                    <td>
                                        <a href="<?= base_url('/dashboard/user/update/' . $user['id_user']) ?>"
                                            class="btn btn-info">Edit</a>
                                        <a href="<?= base_url('user/delete/' . $user['id_user']) ?>"
                                            class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>NIK</th>
                                <th>Nomor HP</th>
                                <th>Email</th>
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