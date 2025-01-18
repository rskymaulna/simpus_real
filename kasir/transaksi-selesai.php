<?php 

include "../modulphp/function.php";
$id         = $_GET['id'];
$transaksis = tampil("SELECT * FROM obat_apotek INNER JOIN obat ON obat_apotek.id_obat = obat.id_obat WHERE obat_apotek.id_kunjungan = $id");
$total      = 0;
foreach($transaksis as $transaksi){
    $id_obat     = $transaksi['id_obat'];
    $obat        = tampil("SELECT * FROM obat WHERE id_obat = $id_obat")[0];
    $jumlah_baru = $obat['stok'] - $transaksi['jumlah'];

    mysqli_query($conn, "UPDATE obat SET stok = $jumlah_baru WHERE id_obat = $id_obat");

    $total        = $total + (intval($transaksi['jumlah']) * intval($transaksi['tarif']));
}

mysqli_query($conn, "INSERT INTO pendapatan (id_kunjungan,  jumlah) VALUES ('$id', '$total')");

if(transaksiSelesai($id) > 0){
    echo "<script>alert('Transaksi berhasil !');window.location.href='index.php';</script>";
}else {
    echo "<script>alert('Transaksi Gagal !');window.location.href='index.php';</script>";
}


?>