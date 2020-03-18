  <?php $terlibat=$this->db->get_where('tb_terlibat',array('id_sop'=>$data[0]['id_sop']))->result_array(); ?>
  <div class="col-md-12" id="halaman0" style="display: block;">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">NOTA DINAS (1)</h3>
            </div>
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tujuan</label>
                  <div class="col-sm-10">
                    <select required class="form-control" id="tujuan" name="tujuan">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['tujuan']=='Kejaksaan Negeri Bengkulu'){echo "selected";} ?>>Kejaksaan Negeri Bengkulu</option>
                      <option <?php if($data[0]['tujuan']=='Kejaksaan Negeri Kepahiang'){echo "selected";} ?>>Kejaksaan Negeri Kepahiang</option>
                      <option <?php if($data[0]['tujuan']=='Kejaksaan Negeri Bengkulu Selatan'){echo "selected";} ?>>Kejaksaan Negeri Bengkulu Selatan</option>
                      <option <?php if($data[0]['tujuan']=='Kejaksaan Negeri Bengkulu Tengah'){echo "selected";} ?>>Kejaksaan Negeri Bengkulu Tengah</option>
                      <option <?php if($data[0]['tujuan']=='Kejaksaan Negeri Seluma'){echo "selected";} ?>>Kejaksaan Negeri Seluma</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Dari</label>

                  <div class="col-sm-4">
                    <input class="form-control" id="dari" name="dari" type="text" readonly="" value="<?php if(empty($data[0]['dari'])){echo $this->session->userdata('keterangan_pegawai');}else{
                      echo $data[0]['dari'];} ?>">
                  </div>
                  <label class="col-sm-1 control-label">Nomor</label>

                  <div class="col-sm-5">
                    <input required class="form-control" id="nomor_sop" name="nomor_sop" type="text" type="text" value="<?php if(empty($data[0]['nomor_sop'])){echo "-";}else{
                      echo $data[0]['dari'];} ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perihal</label>

                  <div class="col-sm-10">
                    <input required  class="form-control" id="perihal" name="perihal" type="text" value="<?php echo $data[0]['perihal'] ?>"  >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sifat</label>

                  <div class="col-sm-10">
                    <select required  class="form-control" id="sifat" name="sifat">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['sifat']=='Rahasia'){echo "selected";} ?>>Rahasia</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Terdakwa</label>
                  <div class="col-sm-4">
                    <select required  class="form-control" id="terdakwa" name="terdakwa">
                      <option <?php if($data[0]['terdakwa']=='Perorangan'){echo "selected";} ?>>Perorangan</option>
                      <option <?php if($data[0]['terdakwa']=='Koporasi'){echo "selected";} ?>>Koporasi</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Tanggal</label>

                  <div class="col-sm-5">
                    <input required  class="form-control" id="tanggal" name="tanggal" type="date" value="<?php if(empty($data[0]['tanggal'])){echo date('Y-m-d'); }else{echo $data[0]['tanggal'];} ?>"  >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Terlibat</label>
                  <div class="col-sm-10">
                    <select class="form-control select2" multiple="multiple" name="terlibat[]" data-placeholder="Jaksa Terlibat (Tidak Perlu Menambahkan Anda, Anda Sudah Terlibat)" style="width: 100%;">
                      <?php foreach($jaksa as $js){ ?>
                            <option
                            <?php foreach($terlibat as $tr){if($js['nip']==$tr['nip']){echo "selected";}} ?>
                             value="<?php echo $js['nip']  ?>"><?php echo $js['nama_pegawai'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default pull-right" onclick="halaman(1)" type="button">Lanjut</button>
              </div>
            </div>
          </div>
  </div>