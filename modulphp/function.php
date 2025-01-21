<?php 
$conn = mysqli_connect("localhost", "root", "", "puskesmas");

function tampil($query){
    global $conn;
    $array  = [];
    $result = mysqli_query($conn, $query);
    while($arr = mysqli_fetch_assoc($result)){
        $array [] = $arr;
    } 
    return $array;
}

function tambahPasien($data){
    global $conn;
    $nama         = $data['nama'];
    $nik          = $data['nik'];
    $jenisK       = $data['jenis_kelamin'];
    $alamat       = $data['alamat'];
    $no_telp      = $data['no_telp'];
    $no_telpk     = $data['no_telp_k'];
    $asuransi     = $data['asuransi'];
    $no_asuransi  = $data['no_asuransi'];
    $tempat_lahir = $data['tempat_lahir'];
    $status_nikah = $data['status_nikah'];
    $tgl_lahir    = $data['tgl_lahir'];
    $foto         = upFoto();

    if(!$foto){
        return false;
    }

    $query = "INSERT INTO 
                pasien 
                (nama_pasien, tgl_lahir, jenis_kelamin, no_telp, alamat, status_pernikahan, no_telp_kerabat, status_asuransi, nik, tempat_lahir, no_asuransi, foto) 
                VALUES 
                ('$nama', '$tgl_lahir', '$jenisK', '$no_telp','$alamat', '$status_nikah', '$no_telpk', '$asuransi', '$nik', '$tempat_lahir', '$no_asuransi', '$foto')";

    mysqli_query($conn, $query);

    var_dump(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function upFoto(){
    $nama = $_FILES['foto']['name'];
    $eror = $_FILES['foto']['error'];
    $size = $_FILES['foto']['size'];
    $tmpN = $_FILES['foto']['tmp_name'];


    //mengecek size dari file foto yang diunggah
    if($size > 1000000){
        echo "<script>alert('file yang diunggah harus berukuran kurang dari 1MB!');</script>";

        return false;
    }

    //mengecek ekstensi file 
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensifoto  = explode(".", $nama);
    $ekstensifoto  = strtolower(end($ekstensifoto));

    if(!in_array($ekstensifoto, $ekstensiValid)){
        echo "<script>alert('file yang dipload hanya jpg, jpeg, dan png');</script>";

        return false;
    }

    //mengupload file ke database dan direktori

    $namafoto = uniqid().".".$ekstensifoto;

    move_uploaded_file($tmpN, "../image/pasien/$namafoto");

    return $namafoto;
}

function editPasien($id, $data){
    global $conn;
    $nama         = $data['nama'];
    $nik          = $data['nik'];
    $jenisK       = $data['jenis_kelamin'];
    $alamat       = $data['alamat'];
    $no_telp      = $data['no_telp'];
    $no_telpk     = $data['no_telp_k'];
    $asuransi     = $data['asuransi'];
    $no_asuransi  = $data['no_asuransi'];
    $tempat_lahir = $data['tempat_lahir'];
    $status_nikah = $data['status_nikah'];
    $tgl_lahir    = $data['tgl_lahir'];
    $fotol        = $data['foto_lama'];

    if($_FILES['foto']['error'] === 4){
        $foto  = $data['foto_lama'];
    }else {
        unlink("../image/pasien/$fotol");
        $foto  = upFoto();
    }

    $query = "UPDATE pasien SET nama_pasien = '$nama', nik = '$nik', jenis_kelamin = '$jenisK', alamat = '$alamat', no_telp = '$no_telp', no_telp_kerabat = '$no_telpk', status_asuransi = '$asuransi', no_asuransi = '$no_asuransi', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', status_pernikahan = '$status_nikah', foto = '$foto' WHERE id_pasien = $id";
   
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusPasien($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM data_klinis WHERE id_pasien = $id");
    mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien = $id");
    
    return mysqli_affected_rows($conn);
}

//<-------------FUNCTION UBAH FORMAT BULAN-------------------------->
function bulan($date){
    setlocale(LC_TIME, 'id_ID.utf8');  // Menetapkan bahasa Indonesia
    $dateObj = DateTime::createFromFormat('d-m-Y', $date);
    $formattedDate = strftime('%d %B %Y', $dateObj->getTimestamp());  // Menggunakan strftime untuk format tanggal lokal

    return $formattedDate;

}

//<-----SESI FUNCTION DOKTER------->

function tambahDokter($data){
    global $conn;
    $nama          = $data['nama'];
    $no_induk      = $data['no_induk'];
    $id_bidang     = $data['id_bidang'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $spesialisasi  = $data['spesialisasi'];
    $no_telp       = $data['no_telp'];
    $alamat        = $data['alamat'];
    $tempat_lahir  = $data['tempat_lahir'];
    $tgl_lahir     = $data['tgl_lahir'];
    $foto          = upfotoDokter();

    if(!$foto){
        return false;
    }

    $query = "INSERT INTO dokter (id_bidang, no_induk_dokter, nama_dokter, tempat_lahir, tgl_lahir, jenis_kelamin, spesialisasi, no_telp, alamat, foto) VALUES ('$id_bidang', '$no_induk', '$nama', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$spesialisasi', '$no_telp', '$alamat', '$foto')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upFotoDokter(){
    $nama = $_FILES['foto']['name'];
    $eror = $_FILES['foto']['error'];
    $size = $_FILES['foto']['size'];
    $tmpN = $_FILES['foto']['tmp_name'];


    //mengecek size dari file foto yang diunggah
    if($size > 1000000){
        echo "<script>alert('file yang diunggah harus berukuran kurang dari 1MB!');</script>";

        return false;
    }

    //mengecek ekstensi file 
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensifoto  = explode(".", $nama);
    $ekstensifoto  = strtolower(end($ekstensifoto));

  
    if($error !== 4){
        if(!in_array($ekstensifoto, $ekstensiValid)){
            echo "<script>alert('file yang dipload hanya jpg, jpeg, dan png');</script>";
    
            return false;
        }
        $namafoto = uniqid().".".$ekstensifoto;

        move_uploaded_file($tmpN, "../image/dokter/$namafoto");
    
        return $namafoto;
    }else {
        return '1';
    }

    //mengupload file ke database dan direktori


}

function otomatisasiKodeDokter(){
    global $conn;

    //OTOMATISASI KODE DOKTER POLI UMUM
    $dokterpu = tampil("SELECT  dokter.id_dokter, dokter.id_bidang, bidang.kode_bidang From dokter INNER JOIN bidang ON dokter.id_bidang = bidang.id_bidang WHERE dokter.id_bidang = 1");
    $ipu = 1;
    foreach($dokterpu as $dokter){
        $id = $dokter['id_dokter'];
        $kode_dokter = $dokter['kode_bidang']."D-".$ipu;
        $ipu++;
        mysqli_query($conn, "UPDATE dokter SET kode_dokter = '$kode_dokter' WHERE id_dokter  = $id");
    }

    //OTOMATISASI KODE DOKTER POLI GIGI
    $dokterpg = tampil("SELECT  dokter.id_dokter, dokter.id_bidang, bidang.kode_bidang From dokter INNER JOIN bidang ON dokter.id_bidang = bidang.id_bidang WHERE dokter.id_bidang = 2");
    $ipg = 1;
    foreach($dokterpg as $dokter){
        $id = $dokter['id_dokter'];
        $kode_dokter = $dokter['kode_bidang']."D-".$ipg;
        mysqli_query($conn, "UPDATE dokter SET kode_dokter = '$kode_dokter' WHERE id_dokter  = $id");
        $ipg++;
    }

    //OTOMATISASI KODE DOKTER POLI GIGI
    $dokterpk = tampil("SELECT  dokter.id_dokter, dokter.id_bidang, bidang.kode_bidang From dokter INNER JOIN bidang ON dokter.id_bidang = bidang.id_bidang WHERE dokter.id_bidang = 3");
    $ipk = 1;
    foreach($dokterpk as $dokter){
        $id = $dokter['id_dokter'];
        $kode_dokter = $dokter['kode_bidang']."D-".$ipk;
        mysqli_query($conn, "UPDATE dokter SET kode_dokter = '$kode_dokter' WHERE id_dokter  = $id");
        $ipk++;
    }
}

function editDokter($id, $data){
    global $conn;
    $nama          = $data['nama'];
    $no_induk      = $data['no_induk'];
    $id_bidang     = $data['id_bidang'];
    $jenis_kelamin = $data['jenis_kelamin'];
    $spesialisasi  = $data['spesialisasi'];
    $no_telp       = $data['no_telp'];
    $alamat        = $data['alamat'];
    $tempat_lahir  = $data['tempat_lahir'];
    $tgl_lahir     = $data['tgl_lahir'];

    if($_FILES['foto']['error'] === 4){
        $foto = $data['foto_lama'];
    }else {
        $foto = upfotoDokter();
    }

    $query = "UPDATE dokter SET nama_dokter = '$nama', no_induk_dokter = '$no_induk', id_bidang = '$id_bidang', jenis_kelamin = '$jenis_kelamin', spesialisasi = '$spesialisasi', no_telp = '$no_telp', alamat = '$alamat', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', foto = '$foto' WHERE id_dokter = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusDokter($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM dokter WHERE id_dokter = $id");
    return mysqli_affected_rows($conn);
}



//SESI FUNCTION JADWAL

function tambahJadwalDokter($data){
    global $conn;
    $nama        = $data['nama_dokter'];
    $jam_mulai   = $data['jam_mulai'];
    $jam_selesai = $data['jam_selesai'];

    $dokter      = tampil("SELECT * FROM dokter WHERE id_dokter = $nama")[0];
    $bidang      = $dokter['id_bidang'];
    $cek         = mysqli_query($conn, "SELECT * FROM jadwal_dokter WHERE id_bidang = $bidang AND jam_mulai = '$jam_mulai'");
    // var_dump($cek);
    // exit;
    if(mysqli_num_rows($cek) === 1){
        echo "<script>alert('Jam piket yang dipilih sudah diisi, mohon pilih jam yang lain');</script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO jadwal_dokter (id_dokter, id_bidang, hari, jam_mulai, jam_selesai) VALUES ('$nama', '$bidang', 'Senin-Jumat', '$jam_mulai', '$jam_selesai')");

    return mysqli_affected_rows($conn);
}

function editJadwalDokter($id, $data){
    global $conn;
    $nama        = $data['id_dokter'];
    $hari        = $data['hari'];
    $jam_mulai   = $data['jam_mulai'];
    $jam_selesai = $data['jam_selesai'];

    mysqli_query($conn, "UPDATE jadwal_dokter SET id_dokter = '$nama', hari = '$hari', jam_mulai = '$jam_mulai', jam_selesai = '$jam_selesai' WHERE id_jadwal = $id");

    return mysqli_affected_rows($conn);
}


function hapusJadwal($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM jadwal_dokter WHERE id_jadwal = $id");

    return mysqli_affected_rows($conn);
}



//SESI CRUD UNTUK PEGAWAI
function tambahPegawai($data){
    global $conn;
    $nama         = $data['nama'];
    $bidang       = $data['bidang'];
    $npwp         = $data['npwp'];
    $jenisK       = $data['jenis_kelamin'];
    $tempat_lahir = $data['tempat_lahir'];
    $tgl_lahir    = $data['tgl_lahir'];
    $jabatan      = $data['jabatan'];
    $alamat       = $data['alamat'];
    $foto         = upFotoPegawai();

    if(!$foto){
        return false;
    }

    mysqli_query($conn, "INSERT INTO pegawai 
                            (bidang, nama_pegawai, npwp, jenis_kelamin, tempat_lahir, tgl_lahir, jabatan, alamat, foto) 
                            VALUES 
                            ('$bidang', '$nama', '$npwp', '$jenisK', '$tempat_lahir', '$tgl_lahir', '$jabatan', '$alamat', '$foto')");
    
    return mysqli_affected_rows($conn);
}

function upFotoPegawai(){
    $nama = $_FILES['foto']['name'];
    $eror = $_FILES['foto']['error'];
    $size = $_FILES['foto']['size'];
    $tmpN = $_FILES['foto']['tmp_name'];

    //mengecek size dari file foto yang diunggah
    if($size > 1000000){
        echo "<script>alert('file yang diunggah harus berukuran kurang dari 1MB!');</script>";

        return false;
    }

    //mengecek ekstensi file 
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensifoto  = explode(".", $nama);
    $ekstensifoto  = strtolower(end($ekstensifoto));

    if(!in_array($ekstensifoto, $ekstensiValid)){
        echo "<script>alert('file yang dipload hanya jpg, jpeg, dan png');</script>";

        return false;
    }

    //mengupload file ke database dan direktori

    $namafoto = uniqid().".".$ekstensifoto;

    move_uploaded_file($tmpN, "../image/pegawai/$namafoto");

    return $namafoto;
}


function editPegawai($id, $data){
    global $conn;
    $nama         = $data['nama'];
    $bidang       = $data['bidang'];
    $npwp         = $data['npwp'];
    $jenisK       = $data['jenis_kelamin'];
    $tempat_lahir = $data['tempat_lahir'];
    $tgl_lahir    = $data['tgl_lahir'];
    $jabatan      = $data['jabatan'];
    $alamat       = $data['alamat'];
    
    if($_FILES['foto']['error'] === 4){
        $foto = $data['foto_lama'];
    }else {
        $fotol = $data['foto_lama'];
        unlink("../image/pegawai/$fotol");
        $foto  = upFotoPegawai();
    }

    mysqli_query($conn, "UPDATE pegawai SET bidang = '$bidang', nama_pegawai = '$nama', npwp = '$npwp', jenis_kelamin = '$jenisK', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jabatan = '$jabatan', alamat = '$alamat', foto = '$foto' WHERE id_pegawai = $id");

    return mysqli_affected_rows($conn);
}   


function hapusPegawai($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM pegawai WHERE id_pegawai = $id");

    return mysqli_affected_rows($conn);
}


// SESI CRUD OBAT

function tambahObat($data){
    global $conn;
    $nama  = $data['nama_obat'];
    $jenis = $data['jenis_obat'];
    $tarif = $data['tarif'];
    $stok  = $data['stok'];

    mysqli_query($conn, "INSERT INTO obat (nama_obat, jenis, tarif, stok) VALUES ('$nama', '$jenis', '$tarif', '$stok')");

    return mysqli_affected_rows($conn);
}

function editObat($id, $data){
    global $conn;
    $nama  = $data['nama_obat'];
    $jenis = $data['jenis_obat'];
    $tarif = $data['tarif'];
    $stok  = $data['stok'];

    mysqli_query($conn, "UPDATE obat SET nama_obat = '$nama', jenis = '$jenis', tarif = '$tarif', stok = '$stok' WHERE id_obat = $id");

    return mysqli_affected_rows($conn);
}

function hapusObat($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM obat WHERE id_obat = $id");

    return mysqli_affected_rows($conn);
}



//SESI CRUD TINDAKAN MEDIS

function tambahTindakan($data){
    global $conn;
    $nama  = $data['nama'];
    $tarif = $data['tarif'];
    $desc  = $data['desc'];

    mysqli_query($conn, "INSERT INTO tindakan (nama_tindakan, tarif, deskripsi) VALUES ('$nama', '$tarif', '$desc')");

    return mysqli_affected_rows($conn);
}

function editTindakan($id, $data){
    global $conn;
    $nama  = $data['nama'];
    $tarif = $data['tarif'];
    $desc  = $data['desc'];

    mysqli_query($conn, "UPDATE  tindakan SET nama_tindakan = '$nama', tarif = '$tarif', deskripsi = '$desc' WHERE id_tindakan = $id ");

    return mysqli_affected_rows($conn);
}

function hapusTindakan($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM tindakan WHERE id_tindakan = $id");

    return mysqli_affected_rows($conn);
}

//SESI CRUD KUNJUNGAN
function tambahKunjungan($data){
    global $conn;
    $pasien = $data['id_pasien'];
    $bidang = $data['id_bidang'];

    mysqli_query($conn, "INSERT INTO kunjungan (id_pasien, id_bidang) VALUES ('$pasien', '$bidang')");

    return mysqli_affected_rows($conn);
}


//SESI CRUD USER
function tambahUser($data){
    global $conn;
    $user  = strtolower($data['user']);
    $pass  = mysqli_real_escape_string($conn, $data['pass']);
    $pass2 = mysqli_real_escape_string($conn, $data['konfir_pass']);
    $nama  = $data['nama'];
    $role  = $data['role'];
    $foto  = upFotoUser();

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('username sudah ada !');</script>";
        return false;
    }
    
    if($pass2 !== $pass){
        echo "<script>alert('Konfirmasi password tidak sesuai !');</script>";

        return false;
    }

    //enskripsi password
    $pass = password_hash($pass, PASSWORD_DEFAULT);


    mysqli_query($conn, "INSERT INTO user (username, pass, peran, nama_lengkap, foto) VALUES ('$user', '$pass', '$role', '$nama', '$foto')");

    return mysqli_affected_rows($conn);
}


function editUser($id, $data){
    global $conn;
    $user  = strtolower($data['user']);
    $pass  = mysqli_real_escape_string($conn, $data['pass']);
    $pass2 = mysqli_real_escape_string($conn, $data['konfir_pass']);
    $nama  = $data['nama'];
    $role  = $data['role'];

    if($_FILES['foto']['error'] === 4){
        $foto = $data['foto_lama'];
    }

    $foto = upFotoUser();
    
    if($pass2 !== $pass){
        echo "<script>alert('Konfirmasi password tidak sesuai !');</script>";

        return false;
    }

    //enskripsi password
    $pass = password_hash($pass, PASSWORD_DEFAULT);


    mysqli_query($conn, "UPDATE user SET username = '$user', pass = '$pass', peran = '$role', nama_lengkap = '$nama', foto = '$foto' WHERE id_user = $id");

    return mysqli_affected_rows($conn);
}

function hapusUser($id){
    global $conn;
    
    mysqli_query($conn, "DELETE FROM user WHERE id_user = $id");
    return mysqli_affected_rows($conn);
}

function upFotoUser(){
    $nama = $_FILES['foto']['name'];
    $eror = $_FILES['foto']['error'];
    $size = $_FILES['foto']['size'];
    $tmpN = $_FILES['foto']['tmp_name'];

    
    //mengecek apakah file sudah diupload atau belum

    //mengecek size dari file foto yang diunggah
    if($size > 1000000){
        echo "<script>alert('file yang diunggah harus berukuran kurang dari 1MB!');</script>";

        return false;
    }

    //mengecek ekstensi file 
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensifoto  = explode(".", $nama);
    $ekstensifoto  = strtolower(end($ekstensifoto));

    if(!in_array($ekstensifoto, $ekstensiValid)){
        echo "<script>alert('file yang dipload hanya jpg, jpeg, dan png');</script>";

        return false;
    }

    //mengupload file ke database dan direktori

    $namafoto = uniqid().".".$ekstensifoto;

    move_uploaded_file($tmpN, "../image/user/$namafoto");

    return $namafoto;
}


//SESI CRUD REKAMMEDIS

function tambahRekmed($id, $data){
    global $conn;
    $dokter   = $data['dokter'];
    $bidang   = $data['bidang'];
    $pasien   = $data['pasien'];
    $keluhan  = $data['keluhan'];
    $diagnosa = $data['diagnosis'];
    $tindakan = $data['tindakan'];
    $tindakanl = $data['tindakanl'];
    $catatan  = $data['catatan'];
    $rsekarang = $data['riwayat_sekarang'];
    $rdahulu   = $data['riwayat_dulu'];
    $hasil     = $data['hasil_tindakan'];
    $resep     = $data['resep'];

    mysqli_query($conn, "INSERT INTO rekmed 
                            (id_pasien, id_bidang, id_kunjungan, id_tindakan, keluhan, riwayat_penyakit_sekarang, riwayat_penyakit_dahulu, diagnosis, resep, catatan, id_dokter, hasil_tindakan, tindakan_lanjutan) 
                            VALUES
                            ('$pasien', '$bidang', '$id', '$tindakan', '$keluhan', '$rsekarang', '$rdahulu', '$diagnosa', '$resep', '$catatan', '$dokter', '$hasil', '$tindakanl' )");

    return mysqli_affected_rows($conn);
}

function editRekmed($id, $data){
    global $conn;
    $dokter   = $data['dokter'];
    $bidang   = $data['bidang'];
    $pasien   = $data['pasien'];
    $keluhan  = $data['keluhan'];
    $diagnosa = $data['diagnosis'];
    $tindakan = $data['tindakan'];
    $tindakanl = $data['tindakanl'];
    $catatan  = $data['catatan'];
    $rsekarang = $data['riwayat_sekarang'];
    $rdahulu   = $data['riwayat_dulu'];
    $hasil     = $data['hasil_tindakan'];
    $resep     = $data['resep'];

    mysqli_query($conn, "UPDATE rekmed SET  id_tindakan = '$tindakan', keluhan = '$keluhan', riwayat_penyakit_sekarang = '$rsekarang', riwayat_penyakit_dahulu = '$rdahulu', diagnosis = '$diagnosa', resep = '$resep', catatan = '$catatan', id_dokter = '$dokter', hasil_tindakan = '$hasil', tindakan_lanjutan = '$tindakanl' WHERE id_rekmed = $id");

    return mysqli_affected_rows($conn);
}

//CEK ERROR

function eror(){
    global $conn;
    if ($error = mysqli_error($conn)) {
        var_dump($error); // Tampilkan kesalahan
        return $error;    
    }
    return null;     
}

//pindah apotek
function pindahAp($data){
    global $conn;
    $id = $data['idk'];
    mysqli_query($conn, "UPDATE kunjungan SET status_antrian = 'Selesai' WHERE id_kunjungan = $id");
    return mysqli_affected_rows($conn);
}

//CRUD TRANSAKSI OBAT
function obatAP($data){
    global $conn;
    $idk    = $data['idk'];
    $ido    = $data['ido'];
    $jumlah = $data['jumlah'];

    $cekjumlah  = tampil("SELECT * FROM obat WHERE id_obat = $ido")[0];
    $jumlahasli = $cekjumlah['stok']; 
    if($jumlah > $cekjumlah['stok']){
        echo "<script>alert('Stok obat yang dipilih hanya tersisa $jumlahasli');</script>";
        return false;
    }

    mysqli_query($conn, "INSERT INTO obat_apotek (id_kunjungan, id_obat, jumlah) VALUES ('$idk', '$ido', '$jumlah')");

    return mysqli_affected_rows($conn);
}

function formatHarga($harga){
    $kembalian = number_format($harga, 0, ',', '.');
    return $kembalian;
}


function hapusTransaksiObat($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM pendapatan WHERE id_pemberian_obat = $id");
    mysqli_query($conn, "DELETE FROM obat_apotek WHERE id_pemberian_obat = $id");

    return mysqli_affected_rows($conn);
}

function ubahObatAp($data){
    global $conn;
    $id = $data['id'];
    $obat = $data['ido'];
    $jumlah = $data['jumlah'];

    mysqli_query($conn, "UPDATE obat_apotek SET id_obat = '$obat', jumlah = '$jumlah' WHERE id_pemberian_obat = $id");

    return mysqli_affected_rows($conn);
}

function transaksiSelesai($id){
    global $conn;
    mysqli_query($conn, "UPDATE kunjungan SET status_transaksi = 'Selesai' WHERE id_kunjungan = $id");

    return mysqli_affected_rows($conn);
}

function apotekSelesai($id){
    global $conn;
    mysqli_query($conn, "UPDATE kunjungan SET status_kunjungan = 'Selesai' WHERE id_kunjungan = $id");

    return mysqli_affected_rows($conn);
}


//SESI TINDAKAN LAB
function tambahTindakanLab($data){
    global $conn;
    $nama  = $data['nama'];
    $tarif = $data['tarif'];
    $desc  = $data['desc'];

    mysqli_query($conn, "INSERT INTO tindakan_lab (nama_tindakan_lab, tarif_lab, deskripsi_lab) VALUES ('$nama', '$tarif', '$desc')");

    return mysqli_affected_rows($conn);
}

function editTindakanLab($id, $data){
    global $conn;
    $nama  = $data['nama'];
    $tarif = $data['tarif'];
    $desc  = $data['desc'];

    mysqli_query($conn, "UPDATE tindakan_lab SET nama_tindakan_lab = '$nama', tarif_lab = '$tarif', deskripsi_lab = '$desc' WHERE id_tindakan_lab = $id");

    return mysqli_affected_rows($conn);
}

function pindahkanKeLab($id){
    global $conn;
    mysqli_query($conn,"UPDATE kunjungan SET status_antrian = 'Lab' WHERE id_kunjungan = $id");

    return mysqli_affected_rows($conn);
}

function tambahHasilLab($id, $data){
    global $conn;
    $tindakan       = $data['id_tindakan'];
    $hasil_tindakan = $data['hasil'];
    $foto           = upFotoHasil();

    mysqli_query($conn, "INSERT INTO hasil_lab (id_kunjungan, id_tindakan_lab, hasil_tindakan_lab, foto_lab) VALUES ('$id', '$tindakan', '$hasil_tindakan', '$foto')");
    return mysqli_affected_rows($conn);
}

function editHasilLab($id, $data){
    global $conn;
    $tindakan       = $data['id_tindakan'];
    $hasil_tindakan = $data['hasil'];

    if($_FILES['foto']['error'] === 4){
        $foto = $data['foto_lama'];
    }else{
        $foto           = upFotoHasil();
    }

    mysqli_query($conn, "UPDATE 
    hasil_lab SET  id_tindakan_lab = '$tindakan', 
    hasil_tindakan_lab = '$hasil_tindakan', 
    foto_lab = '$foto'
     WHERE id_lab = $id");
    return mysqli_affected_rows($conn);
}

function upFotoHasil(){
    $nama = $_FILES['foto']['name'];
    $eror = $_FILES['foto']['error'];
    $size = $_FILES['foto']['size'];
    $tmpN = $_FILES['foto']['tmp_name'];

    if($eror === 4){
        return '1';
    }
    
    //mengecek size dari file foto yang diunggah
    if($size > 1000000){
        echo "<script>alert('file yang diunggah harus berukuran kurang dari 1MB!');</script>";

        return false;
    }

    //mengecek ekstensi file 
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensifoto  = explode(".", $nama);
    $ekstensifoto  = strtolower(end($ekstensifoto));

    if(!in_array($ekstensifoto, $ekstensiValid)){
        echo "<script>alert('file yang dipload hanya jpg, jpeg, dan png');</script>";

        return false;
    }

    //mengupload file ke database dan direktori

    $namafoto = uniqid().".".$ekstensifoto;

    move_uploaded_file($tmpN, "../image/hasilLab/$namafoto");

    return $namafoto;
}

function pindahLb($data){
    global $conn;
    $id = $data['idk'];
    mysqli_query($conn, "UPDATE kunjungan SET status_antrian = 'Belum Selesai', status_lab = 'Selesai' WHERE id_kunjungan = $id");
    return mysqli_affected_rows($conn);
}

//tindakan lanjutan
function tambahTindakanLanjut($data){
    global $conn;
    $idT    = $data['id_tindakan'];
    $idK    = $data['id_kunjungan'];
    $idR    = $data['id_rekmed'];
    $hasil  = $data['hasil'];

    mysqli_query($conn, "INSERT INTO tindakan_lanjut (id_tindakan, id_kunjungan, id_rekmed, hasil) VALUES ('$idT', '$idK', '$idR', '$hasil')");
    return mysqli_affected_rows($conn);
}
?>