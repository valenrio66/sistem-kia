<?= $this->include('content/sidebar') ?>
<?= $this->include('content/header') ?>

			<main class="content">
                <div class="container-fluid p-0">
                <h5 class="right-aligned" style="float: right">
                    <a href="#">Home</a> / <a href="#">User</a> / User View
                </h5>
                <h1 class="h3 mb-3"><b>User View</b></h1>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex justify-content-start">
                        <a href="<?= base_url('/dashboard/user/add') ?>"
                            type="button"
                            class="btn btn-info me-2">
                            <i class="align-middle" data-feather="user"></i>
                            Tambah User
                        </a>
                        </div>
                    </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <div class="row no-gutters" style="height: 40px">
                                    <h1 class="h3 mt-2">Tabel User</h1>
                                </div>

                                <hr />
                                <div class="table-container">
                                    <table id="example"
                                    class="table table-striped"
                                    style="width: 100%">
                                    <thead>
                                        <tr style="text-align: center; vertical-align: middle">
                                            <th hidden></th>
                                            <th>Nama</th>
                                            <th>Role</th>
                                            <th>Nomor HP</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <!-- Fetch Data Start -->
                                    <tbody>
                                        <?php foreach ($users as $user): ?>
                                            <tr>
                                                <td hidden></td>
                                                <td>
                                                    <?= $user['nama_user'] ?>
                                                </td>
                                                <td>
                                                    <?= $user['nama_role'] ?>
                                                </td>
                                                <td>
                                                    <?= $user['no_hp'] ?>
                                                </td>
                                                <td>
                                                    <?= $user['email'] ?>
                                                </td>
                                                <td>
                                                    <a href="<?= base_url('/dashboard/user/detail/' . $user['id_user']) ?>" class="btn btn-info">Detail</a>
                                                    <a href="<?= base_url('/dashboard/user/update/' . $user['id_user']) ?>" class="btn btn-warning">Edit</a>
                                                    <a href="<?= base_url('user/delete/' . $user['id_user']) ?>" class="btn btn-danger" onclick="return confirmDelete(event)">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <!-- Fetch Data End -->
                                    
                                    </table>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                    <div class="pagination">
                                        <button
                                        id="prevPageBtn"
                                        class="btn btn-primary">
                                        Previous
                                        </button>
                                        <span id="currentPage" class="mx-2">Halaman 1</span>
                                        <button
                                        id="nextPageBtn"
                                        class="btn btn-primary">
                                        Next
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
            </main>

<?= $this->include('content/footer') ?>
<script src="<?= base_url('js/user/delete.js') ?>"></script>