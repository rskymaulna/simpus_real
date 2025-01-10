<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$id = $_GET['id'];

if(isset($_POST['submit'])){
    if(editUser($id, $_POST) > 0){
        echo "<script>alert('Data berhasil diubah !'); window.location.href='data-pengguna.php';</script>";
    }
    else if(editUser($id, $_POST) === 0){
        echo "<script>alert('Tidak ada data yang diubah !');</script>";
    }
    else{
        echo "<script>alert('Data gagal diubah !');</script>";
    }
}

if(mysqli_error($conn)){
    var_dump(mysqli_error($conn));
}

$user = tampil("SELECT * FROM user WHERE id_user = $id")[0];
$bidangs = tampil("SELECT * FROM bidang WHERE id_bidang BETWEEN 1 AND 6");

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-edit"></i>
                                Edit User
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table style="font-size: 15px;" class="table table-custom table-borderless">
                                        <tr>
                                            <td class="daftar1"><label for="nama">Nama Lengkap</label></td>
                                            <td class="daftar"><input type="text" value="<?= $user['nama_lengkap'] ?>" required name="nama" id="nama" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="user">Username</label></td>
                                            <td class="daftar"><input type="text" value="<?= $user['username'] ?>" required name="user" id="user" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1">Role</td>
                                            <td class="daftar">
                                                <select name="role" id="" required class="w-100 h-auto d-inline-block form-select form-select-sm">
                                                    <option value="">--Pilih Role--</option>
                                                    <?php foreach($bidangs as $bidang) : ?>
                                                        <?php if($bidang['nama_bidang'] === "Administrasi") : ?>
                                                            <?php if($user['peran'] === 'Admin Utama') : ?>
                                                                <option value="Admin Utama" selected>Admin Utama</option>
                                                            <?php endif; ?>
                                                                <option value="Admin Utama">Admin Utama</option>
                                                        <?php else : ?>
                                                            <?php if($user['peran'] === 'Admin '.$bidang['nama_bidang']) : ?>
                                                                <option value="Admin <?= $bidang['nama_bidang'] ?>" selected>Admin <?= $bidang['nama_bidang'] ?></option>
                                                            <?php endif; ?>
                                                            <option value="Admin <?= $bidang['nama_bidang'] ?>">Admin <?= $bidang['nama_bidang'] ?></option>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td> 
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="pass">Password Baru</label></td>
                                            <td class="daftar"><input type="password" required name="pass" id="pass" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="konfir_pass">Konfirmasi Password</label></td>
                                            <td class="daftar"><input type="password" required name="konfir_pass" id="konfir_pass" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="daftar">
                                                <button type="submit" name="submit" class="btn btn-custom btn-success btn-sm"><i class="fas fa-edit"></i> Ubah</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
<?php include "layout/footer.php"; ?>