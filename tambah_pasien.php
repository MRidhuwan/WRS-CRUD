<?php

include "koneksi.php";
$today = date("Ymd");
$query = mysqli_query($connection, "SELECT max(koderegis) as koderegis FROM tb_ridhuwan") 
                          or die (mysqli_error($connection));

$data = mysqli_fetch_array($query);
if ($data) {
  

  $nilai = substr($data[0], 1);
  $koderegis = (int) $nilai;
  
  $noUrut = $koderegis + 1;
  
  $char = $today;
  $koderegis = $char . str_pad($noUrut, 3, "0", STR_PAD_LEFT);
} else {
  $koderegis = "RS001";
}
?>

<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Input data 
        </h4>
      </div> <!-- /.page-header -->

      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="simpan_pasien.php">

            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Registrasi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="koderegis" value ="" maxlength="10" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">ID Pasien</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="id_pasien" value="<?php echo $noUrut++?>" readonly autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pasien</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_pasien" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Lahir</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-2">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_lahir" 
                  autocomplete="off" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-4">
                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                </label>

                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </label>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Status Kunjungan</label>
              <div class="col-sm-3">
                <select class="form-control" name="status_kunjungan" placeholder="Pilih status kunjungan" required>
                  <option value=""></option>
                  <option value="baru">Baru</option>
                  <option value="lama">Lama</option>
                  
                </select>
              </div>
            </div>

                        
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-success btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->