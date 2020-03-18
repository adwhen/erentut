  <div class="col-md-12" id="halaman1p" style="display: none;">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">TERDAKWA PERORANGAN</h3>
            </div>
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['nama_orang'] ?>" class="form-control" id="nama_orang" name="nama_orang" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Tempat Lahir</label>
                  <div class="col-sm-4">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['tempat_lahirorang'] ?>" class="form-control" id="tempat_lahirorang" name="tempat_lahirorang" type="text">
                  </div>
                  <label class="col-sm-1 control-label"> Tanggal Lahir</label>
                  <div class="col-sm-5">
                    <input <?php echo $proses ?> class="form-control" value="<?php echo $data[0]['tanggal_lahirorang'] ?>" id="tanggal_lahirorang" name="tanggal_lahirorang" type="date">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Jenis Kelamin</label>
                  <div class="col-sm-4">
                    <select <?php echo $proses ?> class="form-control" id="jk_orang" name="jk_orang">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['jk_orang']=="laki-laki"){echo "selected";} ?> value="laki-laki">Laki-Laki</option> 
                      <option  <?php if($data[0]['jk_orang']=="laki-laki"){echo "selected";} ?> value="perempuan">Perempuan</option>                      
                    </select>
                  </div>
                  <label class="col-sm-1 control-label"> Kebangsaan</label>
                  <div class="col-sm-5">
                    <select <?php echo $proses ?> class="form-control" id="kebangsaan_orang" name="kebangsaan_orang">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['kebangsaan_orang']=="WNI"){echo "selected";} ?>>WNI</option> 
                      <option <?php if($data[0]['kebangsaan_orang']=="WNA"){echo "selected";} ?>>WNA</option>                      
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Alamat</label>
                  <div class="col-sm-10">
                    <textarea <?php echo $proses ?> class="form-control" id="alamat_orang" name="alamat_orang"><?php echo $data[0]['alamat_orang'] ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Agama</label>
                  <div class="col-sm-4">
                    <select <?php echo $proses ?> class="form-control" id="agama_orang" name="agama_orang">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['agama_orang']=="Islam"){echo "selected";} ?>>Islam</option> 
                      <option <?php if($data[0]['agama_orang']=="Kristen"){echo "selected";} ?>>Kristen</option>                      
                    </select>
                  </div>
                  <label class="col-sm-1 control-label"> Pekerjaan</label>
                  <div class="col-sm-5">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['pekerjaan_orang'] ?>" class="form-control" id="pekerjaan_orang" name="pekerjaan_orang" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Pendidikan</label>
                  <div class="col-sm-4">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['pendidikan_orang'] ?>" class="form-control" id="pendidikan_orang" name="pendidikan_orang" type="text">
                  </div>
                  <label class="col-sm-1 control-label"> Foto</label>
                  <div class="col-sm-5">
                    <input <?php echo $proses ?>  class="form-control" id="foto_orang" name="foto_orang" type="file">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Identitas Lain :</label>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nomor KTP</label>
                  <div class="col-sm-4">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['ktp_orang'] ?>" class="form-control" id="ktp_orang" name="ktp_orang" type="text">
                  </div>
                  <label class="col-sm-1 control-label"> Nomor SIM</label>
                  <div class="col-sm-5">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['sim_orang'] ?>" class="form-control" id="sim_orang" name="sim_orang" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nomor PASSPOR</label>
                  <div class="col-sm-4">
                    <input <?php echo $proses ?>  value="<?php echo $data[0]['passpor_orang'] ?>" class="form-control" id="passpor_orang" name="passpor_orang" type="text">
                  </div>
                  <label class="col-sm-1 control-label"> Lainnya</label>
                  <div class="col-sm-5">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['ket_orang'] ?>" class="form-control" id="ket_orang" name="ket_orang" type="text">
                  </div>
                </div>


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default" onclick="halaman(0)" type="button">Kembali</button>
                <button class="btn btn-default pull-right" onclick="halaman(2)" type="button">Lanjut</button>
              </div>
            </div>
          </div>
  </div>