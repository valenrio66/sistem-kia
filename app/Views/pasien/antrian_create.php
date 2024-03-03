<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

			<main class="content">
                <div class="container-fluid p-0">
                <h5 class="right-aligned" style="float: right">
                    <a href="#">Home</a> / <a href="#">Antrian</a> / Tambah Antrian
                </h5>
                <h1 class="h3 mb-3"><b>Tambah Antrian</b></h1>
                    <div class="row">
                        <div class="col-12">
                        <form id="createAntrian" action="<?= base_url('pasien/antrian_create') ?>" method="post">
                            <div class="card">
                            <div class="card-body">
                                <!-- Inputan Tanggal -->
                                <h5 class="card-title">Tanggal Antrian</h5>
                                <input
                                type="date"
                                class="form-control"
                                id="tanggal" name="tanggal"
                                placeholder="Masukkan Tanggal"
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