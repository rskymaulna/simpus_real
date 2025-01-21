<?php 

include "../modulphp/function.php";
$idp   = $_GET['idp'];
$total = $_GET['total'];
// $bayar = $_GET['bayar'];
$idk   = $_GET['idk'];

$pasien = tampil("SELECT * FROM pasien WHERE id_pasien = $idp")[0];

if($pasien['status_asuransi'] !== 'BPJS' ){
    echo "<script>alert('Pasien bukan pengguna BPJS !'); window.location.href='profil-pasien.php?idp=$idp&idk=$idk';</script>";
}else {
    mysqli_query($conn, "INSERT INTO pendapatan (id_kunjungan,  jumlah, bayar, kembalian) VALUES ('$idk', '$total', 0, 0)");

    if(transaksiSelesai($idk) > 0){
        echo "<script>alert('Pembayaran berhasil !');window.location.href='invoice.php?idk=$idk&id=$idp';</script>";
    }else {
        echo "<script>alert('Pembayaran Gagal !');window.location.href='profil-pasien.php?idk=$idk&id=$idp';</script>";
    }
}





?>