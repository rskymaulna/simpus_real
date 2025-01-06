<?php 
include "../modulphp/function.php";

$id   = $_GET['id'];
$foto = tampil("SELECT foto FROM pasien WHERE id_pasien = $id")[0]['foto']; 
if(hapusPasien($id) > 0){
    unlink("../image/pasien/$foto");
    echo "<script>alert('Data berhasil dihapus');window.location.href='data-pasien.php';</script>";
}else {
    echo "<script>alert('Data gagal dihapus');window.location.href='data-pasien.php';</script>";
}
?>