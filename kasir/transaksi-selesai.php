<?php 

include "../modulphp/function.php";
$id    = $_GET['id'];
$idp   = $_GET['idp'];
$total = $_GET['total'];
$bayar = $_GET['bayar'];

if($total > $bayar){
    $kembalian = $total - $bayar;
}else if($total < $bayar) {
    $kembalian = $bayar - $total;
}



if($transaksis[0]['status_asuransi'] === 'BPJS'){
    $total = 0;
}

mysqli_query($conn, "INSERT INTO pendapatan (id_kunjungan,  jumlah, bayar, kembalian) VALUES ('$id', '$total', '$bayar', '$kembalian')");

if(transaksiSelesai($id) > 0){
    echo "<script>alert('Pembayaran berhasil !');window.location.href='invoice.php?idk=$id&id=$idp';</script>";
}else {
    echo "<script>alert('Pembayaran Gagal !');window.location.href='profil-pasien.php?idk=$id&id=$idp';</script>";
}


?>