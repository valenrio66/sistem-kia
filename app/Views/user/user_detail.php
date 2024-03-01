<?= $this->include('content/sidebar') ?>

<?= $this->include('content/header') ?>

			<main class="content">
                <div class="container-fluid p-0">
                <h5 class="right-aligned" style="float: right">
                    <a href="#">Home</a> / <a href="#">User</a> / Detail User
                </h5>
                <h1 class="h3 mb-3"><b>Detail User</b></h1>
                    <div class="row">
                        <div class="col-12">
                        <form>
                            <div class="card">
                            <div class="card-body">
                                <!-- Inputan Nama Lengkap -->
                                <h5 class="card-title">Nama Lengkap</h5>
                                <input
                                type="text"
                                class="form-control"
                                id="username" name="username"
                                value="<?= esc($user['nama_user']) ?>"
                                disabled/>

                                <div class="row mt-1">
                                    <div class="col-md-6">
                                        <!-- Inputan Username -->
                                        <h5 class="card-title mt-2">Username</h5>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="username" name="username"
                                            value="<?= esc($user['username']) ?>"
                                            disabled/>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Inputan Password -->
                                        <h5 class="card-title mt-2">Password</h5>
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="password"
                                            name="password"
                                            disabled/>
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
                                            disabled/>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Inputan Tanggal Lahir -->
                                        <h5 class="card-title mt-2">Tanggal Lahir</h5>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="tgl_lahir" name="tgl_lahir"
                                            value="<?= esc($user['tgl_lahir']) ?>"
                                            disabled/>
                                    </div>
                                </div>

                                <div class="row mt-1">
                                    <div class="col-md-6">
                                            <!-- Inputan Jenis User -->
                                            <h5 class="card-title mt-2">Jenis User</h5>
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="id_role" name="id_role"
                                                value="<?= esc($user['role_name']) ?>"
                                                disabled/>
                                        </div>
                                    <div class="col-md-6">
                                        <!-- Inputan NIK -->
                                        <h5 class="card-title mt-2">NIK</h5>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nik" name="nik"
                                            value="<?= esc($user['nik']) ?>"
                                            disabled/>
                                    </div>
                                </div>

                                <!-- Inputan Nomor Handphone -->
                                <h5 class="card-title mt-2">Nomor Handphone</h5>
                                <input
                                type="text"
                                class="form-control"
                                id="no_hp" name="no_hp"
                                value="<?= esc($user['no_hp']) ?>"
                                disabled/>
                                
                                <!-- Inputan Alamat -->
                                <h5 class="card-title mt-2">Alamat</h5>
                                <input
                                type="text"
                                class="form-control"
                                id="alamat" name="alamat"
                                value="<?= esc($user['alamat']) ?>"
                                disabled/>
                                
                                <!-- Button Submit -->
                                <div
                                style="
                                    position: relative;
                                    text-align: right;
                                    margin-top: 20px;
                                ">
                                <a href="#"
                                    type="button"
                                    onclick="history.back()"
                                    class="btn btn-info">
                                    Kembali
                                </a>
                                <a href="<?= base_url('/dashboard/user/update/' . $user['id_user']) ?>"
                                    type="button"
                                    class="btn btn-primary">
                                    Edit
                                </a>
                                </div>
                            </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </main>

<?= $this->include('content/footer') ?>