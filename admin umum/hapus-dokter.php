<?php 
include "../modulphp/function.php";

$id   = $_GET['id'];
$foto = tampil("SELECT foto FROM dokter WHERE id_dokter = $id")[0]['foto']; 
if(hapusDokter($id) > 0){
    unlink("../image/pasien/$foto");
    echo "<script>alert('Data berhasil dihapus');window.location.href='data-dokter.php';</script>";
}else {
    echo "<script>alert('Data gagal dihapus');window.location.href='data-dokter.php';</script>";
}
?>