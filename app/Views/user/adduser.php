<?= $this->include('content/sidebar') ?>

<?= $this->include('content/header') ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="row">
                    <h1>Tambah Data User</h1>
                    <form action="<?= base_url('user/create') ?>" method="post">
                        <div class="form-group">
                            <label for="nama_user">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_user" name="nama_user"
                                placeholder="Nama Lengkap">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Username">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                placeholder="Jalan Sarimanah No. 02, Sarijadi, Kota Bandung">
                        </div>
                        <div class="form-group">
                            <label for="id_role">Jenis User</label>
                            <select id="id_role" name="id_role" class="form-control">
                                <option selected>Pilih Jenis User</option>
                                <?php foreach ($roles as $role): ?>
                                    <option value="<?= esc($role['id_role']); ?>">
                                        <?= esc($role['nama_role']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" placeholder="3209089909020001">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No. Telepon</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="081234567890">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->include('content/footer') ?>