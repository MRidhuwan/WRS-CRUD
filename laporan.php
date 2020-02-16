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

    <table class="table table-bordered">
      <thead class="thead-light">
        <tbody>
           <?php 
              include 'koneksi.php';
                $no = 1;
                  $query = mysqli_query($connection, 
                  "SELECT SUM(CASE WHEN jenis_kelamin = 'laki-laki' THEN 1 ELSE 0 END) L
                        , SUM(CASE WHEN jenis_kelamin = 'perempuan' THEN 1 ELSE 0 END) P 
                        , COUNT(*) AS total
                        , SUM(CASE WHEN status_kunjungan = 'baru' THEN 1 ELSE 0 END) B
                        , SUM(CASE WHEN status_kunjungan = 'lama' THEN 1 ELSE 0 END) L
                   FROM tb_ridhuwan" ) or die (mysqli_error($connection));
                    
            while($row = mysqli_fetch_assoc($query)){   
            ?>

    <tr>
      
      <th scope="col">Data Pasien</th>
      <th colspan="3" style="text-align:center;">Jumlah Pasien</th>
      <th colspan="4" style="text-align:center;">Jumlah Kunjungan</th>
    </tr>

    <tr>
      <th colspan="2"></th>
      <th>Jumlah Pasien <?= " Laki-Laki adalah "  . $row['L'] . ' pasien' ?></th>
      <th>Jumlah Pasien <?= " Perempuan adalah "  . $row['P'] . ' pasien' ?></th>
      <th>Jumlah Kunjungan <?= " Yang Baru adalah "  . $row['B'] . ' Kunjungan' ?></th>
      <th>Jumlah Kunjungan <?= " Yang Lama adalah "  . $row['L'] . ' Kunjungan' ?></th>
    </tr>
  
    <tr>
      
      <th colspan="6" style="text-align:center;">Total Keseluruhan  <?= $row['total'] . ' Pasien' ?></th>
      
     </tr>
  </thead>
    <?php } ?>
  </tbody>
</table>

        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
