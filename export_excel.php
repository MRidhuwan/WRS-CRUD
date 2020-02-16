<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pasien.xls");
	?>

	<center>
		<h1>Export Data Ke Excel Dengan PHP <br/> RUMAH SAKIT</h1>
	</center>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode Registrasi</th>
			<th>ID Pasien</th>
			<th>Nama Pasien</th>
            <th>Tempat </th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Status Kunjungan</th>
		</tr>
		<?php 
		// koneksi database
		include "koneksi.php";

		// menampilkan data 
		$data = mysqli_query($connection,"SELECT * FROM tb_ridhuwan");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['koderegis']; ?></td>
			<td><?php echo $d['id_pasien']; ?></td>
			<td><?php echo $d['nama_pasien']; ?></td>
            <td><?php echo $d['tempat_lahir']; ?></td>
            <td><?php echo $d['tgl_lahir']; ?></td>
            <td><?php echo $d['jenis_kelamin']; ?></td>
            <td><?php echo $d['status_kunjungan']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>