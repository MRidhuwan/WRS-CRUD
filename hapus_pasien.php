
<?php
// include koneksi database
include "koneksi.php";

if (isset($_GET['koderegis'])) {

	$koderegis = $_GET['koderegis'];
	
	// perintah query untuk menghapus data pada tabel is_siswa
	$delete = mysqli_query($connection, "DELETE FROM tb_ridhuwan WHERE koderegis='$koderegis'");

	// cek hasil query
	if($delete) {

        //redirect ke halaman index.php 
        
        echo "<script>alert('Data Berhasil Di Hapus');document.location.href='index.php?alert=4'</script>";
    
    } else {
    
        //pesan error gagal insert data
        // echo "Data Gagal Disimpan!";
        echo "<script>alert('Data Gagal Di Hapus');document.location.href='index.php?alert=1'</script>";
    
    }
}							
