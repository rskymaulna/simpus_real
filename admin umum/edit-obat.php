<?php 
include "../modulphp/function.php";
include "layout/top.php";
include "layout/side.php";

$id = $_GET['id'];

if(isset($_POST['submit'])){
    if(editObat($id, $_POST) > 0){
        echo "<script>alert('Data berhasil diubah !'); window.location.href='data-obat.php';</script>";
    }
    else{
        echo "<script>alert('Data gagal diubah !');</script>";
    }
}

if(mysqli_error($conn)){
    var_dump(mysqli_error($conn));
}

$obat = tampil("SELECT * FROM obat")[0];

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-edit"></i>
                                Tambah Data Obat
                            </div>
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <table style="font-size: 15px;" class="table table-custom table-borderless">
                                        <tr>
                                            <td class="daftar1"><label for="hari">Nama Obat</label></td>
                                            <td class="daftar"><input type="text" value="<?= $obat['nama_obat'] ?>" name="nama_obat" id="hari" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="jenis_obat">Jenis Obat</label></td>
                                            <td class="daftar"><input type="text" value="<?= $obat['jenis'] ?>" name="jenis_obat" id="jenis_obat" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="tarif">Tarif</label></td>
                                            <td class="daftar"><input type="text" value="<?= $obat['tarif'] ?>" name="tarif" id="tarif" class="w-100 form-control form-control-sm"></td>
                                        </tr>
                                        <tr>
                                            <td class="daftar1"><label for="stok">Stok</label></td>
                                            <td class="daftar"><input type="text" value="<?= $obat['stok'] ?>" name="stok" id="stok" class="w-100 form-control form-control-sm"></td>
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