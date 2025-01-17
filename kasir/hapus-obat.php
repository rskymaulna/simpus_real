<?php 

include "../modulphp/function.php";
$id = $_GET['id'];

if(hapusTransaksiObat($id) > 0){
    echo "<script>alert('Data berhasil dihapus');window.location.href='profil-pasien.php';</script>";
}else {
    echo "<script>alert('Data gagal dihapus');window.location.href='profil-pasien.php';</script>";
}


?>