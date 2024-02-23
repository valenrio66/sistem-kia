<?= $this->include('content/sidebar') ?>

<?= $this->include('content/header') ?>
<div class="card">
    <div class="card-body">
        <div class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <h1>Data Pengguna</h1>
                    <button type="button" class="btn btn-primary">Tambah Data Pengguna</button>
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
                                        <?= $user['id_role'] ?>
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