<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";
$id = $_GET['id'];
if(isset($_POST['submit'])){
    if(editTindakan($id, $_POST) > 0){
        echo "<script>alert('Data berhasil diubah !'); window.location.href='data-tindakan.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal diubah !');</script>";
    }
}


if(mysqli_error($conn)){
    var_dump(mysqli_error($conn));
}

$tindakan = tampil("SELECT * FROM tindakan")[0];

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-edit"></i>
                                Edit Tindakan Medis
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table style="font-size: 15px;" class="table table-custom table-borderless">
                                        <tr>
                                            <td class="daftar1"><label for="nama">Nama Tindakan</label></td>
                                            <td class="daftar"><input type="text" value="<?= $tindakan['nama_tindakan'] ?>" name="nama" id="nama" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="tarif">Tarif</label></td>
                                            <td class="daftar"><input type="text" value="<?= $tindakan['tarif'] ?>" name="tarif" id="tarif" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="desc">Deskripsi</label></td>
                                            <td class="daftar"><textarea name="desc" id="desc" class="w-100 form-control form-control-sm"><?= $tindakan['deskripsi'] ?></textarea></td>
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