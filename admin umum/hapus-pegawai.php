<?php 
include "../modulphp/function.php";

$id   = $_GET['id'];
$foto = tampil("SELECT foto FROM pegawai WHERE id_pegawai = $id")[0]['foto'];
if(hapusPegawai($id) > 0){
    unlink("../image/pegawai/$foto");
    echo "<script>alert('Data berhasil dihapus');window.location.href='data-pegawai.php';</script>";
}else {
    echo "<script>alert('Data gagal dihapus');window.location.href='data-pegawai.php';</script>";
}


?>