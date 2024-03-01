<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

			<main class="content">
                <div class="container-fluid p-0">
                <h5 class="right-aligned" style="float: right">
                    <a href="#">Home</a> / <a href="broker_view.html">User</a> / Update User
                </h5>
                <h1 class="h3 mb-3"><b>Update User</b></h1>
                    <div class="row">
                        <div class="col-12">
                        <form id="updateRole" action="<?= base_url('role/update/' . $roles['id_role']) ?>" method="post">
                            <div class="card">
                            <div class="card-body">
                                <!-- Inputan Jenis User -->
                                <h5 class="card-title">Jenis User</h5>
                                <input
                                type="text"
                                class="form-control"
                                id="nama_role" name="nama_role"
                                value="<?= esc($roles['nama_role']) ?>"
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
                                    onclick="history.back()"
                                    class="btn btn-info">
                                    Cancel
                                </a>
                                <button
                                    type="submit"
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
<script src="<?= base_url('js/role/update.js')?>"></script>