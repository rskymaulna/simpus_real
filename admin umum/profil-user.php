<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
$id = $_GET['id'];
otomatisasiKodeDokter();
$user     = tampil("SELECT * FROM user WHERE id_user = $id")[0];

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-2">
                            <div class="card-header">
                                <i class="fas fa-users"></i>
                                Profil Pengguna
                            </div>
                            <div class="card-body">
                                <table class="table table-custom table-borderless">
                                    <tbody>
                                        <tr>
                                            <?php if($user['foto'] === '') : ?>
                                                <th style="width: 25%;" valign="center"><center><img src="../image/user 1.png" alt="" style="width: 200px; height: 300px; border-radius: 5px;"></center></th>
                                            <?php else : ?>
                                                <th style="width: 25%;" valign="center"><center><img src="../image/user/<?= $user['foto'] ?>" alt="" style="width: 200px; height: 300px; border-radius: 5px;"></center></th>
                                            <?php endif; ?>            
                                            <td>
                                                <table class="table table-custom">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="col" style="width: 25%;">Username</th>
                                                            <td>: <?= $user['username'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Nama Lengkap</th>
                                                            <td>: <?= $user['nama_lengkap'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row" style="width: 25%;">Role</th>
                                                            <td>: <?= $user['peran'] ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="edit-user.php?id=<?= $user['id_user'] ?>" class="preview-container">
                                                    <button type="button" class="btn btn-primary btn-sm text-white" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                                        <i class="fas fa-edit"></i>
                                                        Edit Data User
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>