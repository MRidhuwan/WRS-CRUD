
<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Edit Data Pasien
        </h4>
      </div> <!-- /.page-header -->

      <?php
      if (isset($_GET['koderegis'])) {
        $koderegis   = $_GET['koderegis'];
          $query = mysqli_query($connection, "SELECT * FROM tb_ridhuwan WHERE koderegis='$koderegis'") 
            or die('Query Error : '.mysqli_error($connection));
              while ($data  = mysqli_fetch_assoc($query)) {

          $koderegis            = $data['koderegis'];
          $id_pasien            = $data['id_pasien'];
          $nama_pasien          = $data['nama_pasien'];
          $tempat_lahir         = $data['tempat_lahir'];
          
          $tanggal              = $data['tgl_lahir'];
          $tgl                  = explode('-',$tanggal);
          $tanggal_lahir        = $tgl[2]."-".$tgl[1]."-".$tgl[0];
          
          $jenis_kelamin        = $data['jenis_kelamin'];
          $status_kunjungan     = $data['status_kunjungan'];
          
        }
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="update_pasien.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Kode Registrasi</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="koderegis" value="<?php echo $koderegis; ?>" readonly>
          
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">ID Pasien</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_pasien" value="<?php echo $id_pasien; ?>" readonly>
          
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Pasien</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_pasien" autocomplete="off" 
                    value="<?php echo $nama_pasien; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tempat Lahir</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" 
                    value="<?php echo $tempat_lahir; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Tanggal Lahir</label>
              <div class="col-sm-2">
                <div class="input-group">
                  <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" 
                  name="tgl_lahir" autocomplete="off" value="<?php echo $tanggal_lahir; ?>" required>
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-4">

              <?php
              if ($jenis_kelamin=='Laki-laki') { ?>
                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
                </label>

                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </label>

              <?php
              } else { ?>
                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                </label>

                <label class="radio-inline">
                  <input type="radio" name="jenis_kelamin" value="Perempuan" checked> Perempuan
                </label>
              <?php
              }
              ?>
              </div>
            </div>
            
            <div class="form-group">
              <label class="col-sm-2 control-label">Status Kunjungan</label>
              <div class="col-sm-3">
                <select class="form-control" name="status_kunjungan" placeholder="Pilih status_kunjungan" required>
                  <option value="<?php echo $status_kunjungan; ?>"><?php echo $status_kunjungan; ?></option>
                    <option value="baru">Baru</option>
                    <option value="lama">Lama</option>
                </select>
              </div>
            </div>
            <hr/>
            
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
