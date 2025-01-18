<?php 

include "../modulphp/function.php";
$ido = $_GET['id'];
$id  = $_GET['idk'];
$idp = $_GET['idp'];

if(hapusTransaksiObat($ido) > 0){
    echo "<script>alert('Data berhasil dihapus');window.location.href='profil-pasien.php?id=$idp&idk=$id';</script>";
}else {
    echo "<script>alert('Data gagal dihapus');window.location.href='profil-pasien.php';</script>";
}


?>