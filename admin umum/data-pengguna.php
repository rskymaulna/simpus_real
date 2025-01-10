<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$users = tampil("SELECT * FROM user");
otomatisasiKodeDokter();
$i = 1;
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-users"></i>
                                Data User
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='tambah-user.php'">+ Tambah User</button>
                                <table id="example" class="table table-custom  table-hover table-bordered table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Nama Lengkap</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach($users as $user) : ?> 
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $user['username'] ?></td>
                                            <td><?= $user['peran'] ?></td>
                                            <td><?= $user['nama_lengkap'] ?></td>
                                            <td>
                                                <div class="aksi">
                                                    <a href="edit-user.php?id=<?= $user['id_user'] ?>" class="preview-container">
                                                        <button type="button" class="btn btn-primary btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt1">
                                                            Edit data User
                                                        </div>
                                                    </a>
                                                    <a href="hapus-user.php?id=<?= $user['id_user'] ?>" class="preview-container">
                                                        <button type="button" class="btn btn-danger btn-sm" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt2">
                                                            Hapus data User
                                                        </div>
                                                    </a>
                                                    <!-- <a href="../poli umum/profil1.html" class="preview-container">
                                                        <button type="button" class="btn btn-info btn-sm text-light" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                        <div class="preview-text wd-pt3">
                                                            Lihat data User
                                                        </div>
                                                    </a> -->
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++; ?> 
                                        <?php endforeach; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            Hapus data?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"><a href="data-dokter.html" style="color: white; text-decoration: none;">Ya</a></button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
<?php include "layout/footer.php"; ?>