
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
$update = mysqli_query ($connection, "UPDATE tb_ridhuwan  SET 
                                                               id_pasien = '$id_pasien', 
                                                                nama_pasien = '$nama_pasien', 
                                                                tempat_lahir = '$tempat_lahir', 
                                                                tgl_lahir = '$tgl_lahir', 
                                                                jenis_kelamin = '$jenis_kelamin', 
                                                                status_kunjungan = '$status_kunjungan'
                                                                WHERE  koderegis = '$koderegis'")
                                                            or die(mysqli_error($connection));


//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($update) {

    //redirect ke halaman index.php 
    // header('location: index.php?alert=3');
    echo "<script>alert('Data Berhasil Di Update');document.location.href='index.php?alert=3'</script>";

} else {

    //pesan error gagal insert data
    // echo "Data Gagal Disimpan!";
    // header('location: index.php?alert=1');
    echo "<script>alert('Data Gagal Di Update');document.location.href='index.php?alert=1'</script>";

}

?>