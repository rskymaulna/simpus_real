<?php 

include "../modulphp/function.php";
$id = $_GET['id'];

if(transaksiSelesai($id) > 0){
    echo "<script>alert('Transaksi berhasil !');window.location.href='index.php';</script>";
}else {
    echo "<script>alert('Transaksi Gagal !');window.location.href='index.php';</script>";
}


?>