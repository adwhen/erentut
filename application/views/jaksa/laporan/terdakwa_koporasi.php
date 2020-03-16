  <div class="col-md-12" id="halaman1k" style="display: none;">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">TERDAKWA KORPORASI</h3>
            </div>
            <div class="form-horizontal">
              <div class="box-body">


                <div class="col-md-12" style="background-color: #00a65a;margin-bottom: 10px;"><center><label class="control-label">KORPORASI</label></center></div>

                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nama Korporasi</label>
                  <div class="col-sm-10">
                    <input class="form-control" id="nama_korporasi" name="nama_korporasi" type="text" value="<?php echo $data[0]['nama_korporasi']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Tempat Pendirian</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['tempat_pendirian']; ?>" class="form-control" id="tempat_pendirian" name="tempat_pendirian" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Tanggal Pendirian</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['tanggal_pendirian']; ?>" class="form-control" id="tanggal_pendirian" name="tanggal_pendirian" type="date">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nomor Anggaran Dasar / Akta Pendirian / Peraturan / Dokumen / Perjanjian Serta Perubahan Terakhir</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['nomor_anggaran']; ?>" class="form-control" id="nomor_anggaran" name="nomor_anggaran" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nomor Salinan Kep. Menkumham Tentang Persetujuan Akta Pendirian Perseroan</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['nomor_pendirian']; ?>" class="form-control" id="nomor_pendirian" name="nomor_pendirian" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nomor Salinan Kep. Menkumham Tentang Persetujuan Akta Perubahan Perseroan</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['nomor_perubahan']; ?>" class="form-control" id="nomor_perubahan" name="nomor_perubahan" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nomor dan Tanggal Akta Korporasi Pada Saat Tindak Pidana Terjadi</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['nomor_korporasi']; ?>" class="form-control" id="nomor_korporasi" name="nomor_korporasi" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nomor Salinan Kep. Menkumham Tentang Persetujuan Akta Pendirian Perseroan</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['nomor_pendirian']; ?>" class="form-control" id="nomor_pendirian" name="nomor_pendirian" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Tempat Kedudukan</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['tempat_korporasi']; ?>" class="form-control" id="tempat_korporasi" name="tempat_korporasi" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Kebangsaan Korporasi</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['kebangsaan_korporasi']; ?>" class="form-control" id="kebangsaan_korporasi" name="kebangsaan_korporasi" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Surat Keterangan Terdaftar Mendagri untuk Ormas tidak Berbadan Hukum</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['surat_korporasi']; ?>" class="form-control" id="surat_korporasi" name="surat_korporasi" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Jenis Korporasi</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['jenis_korporasi']; ?>" class="form-control" id="jenis_korporasi" name="jenis_korporasi" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Bentuk Kegiatan/Usaha</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['kegiatan_korporasi']; ?>" class="form-control" id="kegiatan_korporasi" name="kegiatan_korporasi" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Alamat Korporasi</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="alamat_korporasi" name="alamat_korporasi" type="text"><?php echo $data[0]['alamat_korporasi']; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Identitas Lain :</label>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> NPWP</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['npwp']; ?>" class="form-control" id="npwp" name="npwp" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nomor Wajib Daftar Perusahaan</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['nwdp']; ?>" class="form-control" id="nwdp" name="nwdp" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Lain-Lain </label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['ket_korporasi']; ?>" class="form-control" id="ket_korporasi" name="ket_korporasi" type="text">
                  </div>
                </div>

                <div class="col-md-12" style="background-color: #00a65a;margin-bottom: 10px;"><center><label class="control-label">IDENTITAS ORANG YANG MEWAKILI KORPORASI</label></center></div>

                  <div class="form-group">
                  <label class="col-sm-2 control-label"> Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['nama_wakil']; ?>" class="form-control" id="nama_wakil" name="nama_wakil" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Tempat Lahir</label>
                  <div class="col-sm-4">
                    <input value="<?php echo $data[0]['tempat_lahirwakil']; ?>" class="form-control" id="tempat_lahirwakil" name="tempat_lahirwakil" type="text">
                  </div>
                  <label class="col-sm-1 control-label"> Tanggal Lahir</label>
                  <div class="col-sm-5">
                    <input value="<?php echo $data[0]['tanggal_lahirwakil']; ?>" class="form-control" id="tanggal_lahirwakil" name="tanggal_lahirwakil" type="date">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Jenis Kelamin</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="jk_wakil" name="jk_wakil">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['jk_wakil']=='laki-laki'){echo "selected";} ?> value="laki-laki">Laki-Laki</option> 
                      <option <?php if($data[0]['jk_wakil']=='perempuan'){echo "selected";} ?> value="perempuan">Perempuan</option>                      
                    </select>
                  </div>
                  <label class="col-sm-1 control-label"> Kebangsaan</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="kebangsaan_wakil" name="kebangsaan_wakil">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['kebangsaan_wakil']=='WNI'){echo "selected";} ?>>WNI</option> 
                      <option <?php if($data[0]['kebangsaan_wakil']=='WNA'){echo "selected";} ?>>WNA</option>                      
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="alamat_wakil" name="alamat_wakil"><?php echo $data[0]['alamat_wakil']; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Agama</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="agama_wakil" name="agama_wakil">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['agama_wakil']=='Islam'){echo "selected";} ?>>Islam</option> 
                      <option <?php if($data[0]['agama_wakil']=='Kristen'){echo "selected";} ?>>Kristen</option>                      
                    </select>
                  </div>
                  <label class="col-sm-1 control-label"> Pekerjaan</label>
                  <div class="col-sm-5">
                    <input value="<?php echo $data[0]['pekerjaan_wakil']; ?>" class="form-control" id="pekerjaan_wakil" name="pekerjaan_wakil" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Pendidikan</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['pendidikan_wakil']; ?>" class="form-control" id="pendidikan_wakil" name="pendidikan_wakil" type="text">
                  </div>
                </div>


                <div class="col-md-12" style="background-color: #00a65a;margin-bottom: 10px;"><center><label class="control-label">ORANG YANG MENGENDALIKAN KORPORASI</label></center></div>

                  <div class="form-group">
                  <label class="col-sm-2 control-label"> Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input value="<?php echo $data[0]['nama_kendali']; ?>" class="form-control" id="nama_kendali" name="nama_kendali" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Tempat Lahir</label>
                  <div class="col-sm-4">
                    <input value="<?php echo $data[0]['tempat_lahirkendali']; ?>" class="form-control" id="tempat_lahirkendali" name="tempat_lahirkendali" type="text">
                  </div>
                  <label class="col-sm-1 control-label"> Tanggal Lahir</label>
                  <div class="col-sm-5">
                    <input value="<?php echo $data[0]['tanggal_lahirkendali']; ?>" class="form-control" id="tanggal_lahirkendali" name="tanggal_lahirkendali" type="date">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Jenis Kelamin</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="jk_kendali" name="jk_kendali">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['jk_kendali']=='laki-laki'){echo "selected";} ?> value="laki-laki">Laki-Laki</option> 
                      <option <?php if($data[0]['jk_kendali']=='perempuan'){echo "selected";} ?> value="perempuan">Perempuan</option>                      
                    </select>
                  </div>
                  <label class="col-sm-1 control-label"> Kebangsaan</label>
                  <div class="col-sm-5">
                    <select class="form-control" id="kebangsaan_kendali" name="kebangsaan_kendali">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['kebangsaan_kendali']=='WNI'){echo "selected";} ?>>WNI</option> 
                      <option <?php if($data[0]['kebangsaan_kendali']=='WNA'){echo "selected";} ?>>WNA</option>                      
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Alamat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="alamat_kendali" name="alamat_kendali"><?php echo $data[0]['alamat_kendali']; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Agama</label>
                  <div class="col-sm-4">
                    <select class="form-control" id="agama_kendali" name="agama_kendali">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['agama_kendali']=='Islam'){echo "selected";} ?>>Islam</option> 
                      <option <?php if($data[0]['agama_kendali']=='Kristen'){echo "selected";} ?>>Kristen</option>                      
                    </select>
                  </div>
                  <label class="col-sm-1 control-label"> Pekerjaan</label>
                  <div class="col-sm-5">
                    <input value="<?php echo $data[0]['pekerjaan_kendali']; ?>" class="form-control" id="pekerjaan_kendali" name="pekerjaan_kendali" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Pendidikan</label>
                  <div class="col-sm-4">
                    <input value="<?php echo $data[0]['pendidikan_kendali']; ?>" class="form-control" id="pendidikan_kendali" name="pendidikan_kendali" type="text">
                  </div>
                  <label class="col-sm-1 control-label"> Foto</label>
                  <div class="col-sm-5">
                    <input  class="form-control" id="foto_kendali" name="foto_kendali" type="file">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Identitas Lain :</label>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nomor KTP</label>
                  <div class="col-sm-4">
                    <input value="<?php echo $data[0]['ktp_kendali']; ?>" class="form-control" id="ktp_kendali" name="ktp_kendali" type="text">
                  </div>
                  <label class="col-sm-1 control-label"> Nomor SIM</label>
                  <div class="col-sm-5">
                    <input value="<?php echo $data[0]['sim_kendali']; ?>" class="form-control" id="sim_kendali" name="sim_kendali" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"> Nomor PASSPOR</label>
                  <div class="col-sm-4">
                    <input value="<?php echo $data[0]['passpor_kendali']; ?>" class="form-control" id="passpor_kendali" name="passpor_kendali" type="text">
                  </div>
                  <label class="col-sm-1 control-label"> Lainnya</label>
                  <div class="col-sm-5">
                    <input value="<?php echo $data[0]['ket_kendali']; ?>" class="form-control" id="ket_kendali" name="ket_kendali" type="text">
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