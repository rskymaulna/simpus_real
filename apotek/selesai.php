<?php 

include "../modulphp/function.php";
$id = $_GET['id'];

if(apotekSelesai($id) > 0){
    echo "<script>alert('Kunjungan pasien telah selesai !');window.location.href='index.php';</script>";
}else {
    echo "<script>alert('Gagal mengubah status kunjungan pasien !');window.location.href='index.php';</script>";
}


?>