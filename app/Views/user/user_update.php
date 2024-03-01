<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

			<main class="content">
                <div class="container-fluid p-0">
                <h5 class="right-aligned" style="float: right">
                    <a href="#">Home</a> / <a href="#">User</a> / Update User
                </h5>
                <h1 class="h3 mb-3"><b>Update User</b></h1>
                    <div class="row">
                        <div class="col-12">
                        <form action="<?= base_url('user/update/' . $user['id_user']) ?>" method="post">
                            <div class="card">
                            <div class="card-body">
                                <!-- Inputan Nama Lengkap -->
                                <h5 class="card-title">Nama Lengkap</h5>
                                <input
                                type="text"
                                class="form-control"
                                id="username" name="username"
                                value="<?= esc($user['nama_user']) ?>"
                                required/>

                                <div class="row mt-1">
                                    <div class="col-md-6">
                                        <!-- Inputan Username -->
                                        <h5 class="card-title mt-2">Username</h5>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="username" name="username"
                                            value="<?= esc($user['username']) ?>"
                                            required/>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Inputan Password -->
                                        <h5 class="card-title mt-2">Password</h5>
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="password"
                                            name="password"
                                            required/>
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-md-6">
                                        <!-- Inputan Email -->
                                        <h5 class="card-title mt-2">Email</h5>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="email" name="email"
                                            value="<?= esc($user['email']) ?>"
                                            required/>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Inputan Tanggal Lahir -->
                                        <h5 class="card-title mt-2">Tanggal Lahir</h5>
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="tgl_lahir" name="tgl_lahir"
                                            value="<?= esc($user['tgl_lahir']) ?>"
                                            required/>
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-md-6">
                                        <!-- Inputan Jenis User -->
                                        <h5 class="card-title mt-2">Jenis User</h5>
                                        <select id="id_role" name="id_role" class="form-control">
                                            <option selected>Pilih Jenis User</option>
                                            <?php foreach ($roles as $role): ?>
                                                <option value="<?= esc($role['id_role']); ?>" <?= ($role['id_role'] == $user['id_role']) ? 'selected' : '' ?>>
                                                    <?= esc($role['nama_role']); ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Inputan NIK -->
                                        <h5 class="card-title mt-2">NIK</h5>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nik" name="nik"
                                            value="<?= esc($user['nik']) ?>"
                                            required/>
                                    </div>
                                </div>

                                <!-- Inputan Nomor Handphone -->
                                <h5 class="card-title mt-2">Nomor Handphone</h5>
                                <input
                                type="text"
                                class="form-control"
                                id="no_hp" name="no_hp"
                                value="<?= esc($user['no_hp']) ?>"
                                required/>
                                
                                <!-- Inputan Alamat -->
                                <h5 class="card-title mt-2">Alamat</h5>
                                <input
                                type="text"
                                class="form-control"
                                id="alamat" name="alamat"
                                value="<?= esc($user['alamat']) ?>"
                                required/>
                                
                                <!-- Button Submit -->
                                <div
                                style="
                                    position: relative;
                                    text-align: right;
                                    margin-top: 20px;
                                ">
                                <a href="#"
                                    type="button"
                                    class="btn btn-info">
                                    Cancel
                                </a>
                                <button
                                    type="button"
                                    class="btn btn-primary"
                                    id="submitButton">
                                    Simpan
                                </button>
                                </div>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </main>

<?= $this->include('content/footer') ?>