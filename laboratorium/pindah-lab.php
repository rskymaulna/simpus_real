<?php 
include "../modulphp/function.php";

$id = $_GET['id'];

if(pindahkanKeLab($id) > 0 ){
    echo "<script>alert('Pasien telah dialihkan ke lab'); window.location.href='index.php';</script>";
}else{
    echo "<script>alert('Pasien gagal dialihkan ke lab'); window.location.href='index.php';</script>";
}

?>