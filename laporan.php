<div class="row">
    <div class="col-md-12">
      <div class="page-header">
      <div class="pull-right ">
        <a class="btn btn-success" href="?page=excel">
              
                <i class="glyphicon glyphicon-file"></i> Export
              </a>
              </div>
        <h4>
          <i class="glyphicon glyphicon-file"></i> 
          Data Laporan 
        </h4>
      </div> <!-- /.page-header -->
      <div class="panel panel-default">
        <div class="panel-body">
        <table class="table">
  <thead>
    <tr>
      <th colspan="2">Total Pasien RS</th>
      <th colspan="2" class="text-center">Data Pasien</th>
      <th colspan="2" class="text-center">Kunjungan</th>
    </tr>
   
    <tr>
      <th colspan="1">Data Total Pasien</th>
      <th colspan="2">Laki-Laki</th>
      <th colspan="2">Perempuan</th>
    </tr>

  </thead>
  <tbody>
    <?php 
        include 'koneksi.php';
          $no = 1;
            $query = mysqli_query($connection, "SELECT id_pasien,jenis_kelamin, COUNT(jenis_kelamin) AS jumlah
            FROM tb_ridhuwan GROUP by jenis_kelamin ") or die (mysqli_error($connection));
              while($row = mysqli_fetch_array($query)){
    ?>
    <tr>
                      
      <td colspan="1"><?= $row['jumlah'] . ' Pasien' ?></td>
      <td colspan="2"><?php echo " Laki-Laki adalah "  . $row['jumlah'] . ' Pasien' ?></td>
      <td colspan="3"><?php echo " Perempuan adalah "  . $row['jumlah'] . ' Pasien' ?></td>
    </tr>
    
    <?php } ?>

  </tbody>
</table>

        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->