<?php

//include koneksi database
include "koneksi.php";

//get data dari form
$koderegis            = $_POST['koderegis'];
$id_pasien            = $_POST['id_pasien'];
$nama_pasien          = $_POST['nama_pasien'];
$tempat_lahir         = $_POST['tempat_lahir'];

$tanggal              = $_POST['tgl_lahir'];
$tgl                  = explode('-',$tanggal);
$tgl_lahir            = $tgl[2]."-".$tgl[1]."-".$tgl[0];

$jenis_kelamin        = $_POST['jenis_kelamin'];
$status_kunjungan     = $_POST['status_kunjungan'];


//query insert data ke dalam database
$query = mysqli_query ($connection, "INSERT INTO tb_ridhuwan SET koderegis = '$koderegis', 
id_pasien = '$id_pasien', nama_pasien = '$nama_pasien', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin', 
status_kunjungan = '$status_kunjungan'") or die(mysqli_error($connection));


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($query) {

    //redirect ke halaman index.php 
    
    echo "<script>alert('Data Berhasil Di Tambah');document.location.href='index.php?alert=2'</script>";

} else {

    //pesan error gagal insert data
    // echo "Data Gagal Disimpan!";
    echo "<script>alert('Data Gagal Di Tambah');document.location.href='index.php?alert=1'</script>";

}

?>