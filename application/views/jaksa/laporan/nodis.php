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
                    <select <?php echo $proses ?> required class="form-control" id="tujuan" name="tujuan">

                      <option value="">PILIH</option>
                        <option <?php if($data[0]['tujuan']=='KEJAKSAAN NEGERI BENGKULU'){echo "selected";} ?>>KEJAKSAAN NEGERI BENGKULU</option>
                        <option <?php if($data[0]['tujuan']=='KEJAKSAAN NEGERI BENGKULU UTARA'){echo "selected";} ?>>KEJAKSAAN NEGERI BENGKULU UTARA</option>
                        <option  <?php if($data[0]['tujuan']=='KEJAKSAAN NEGERI BENGKULU SELATAN'){echo "selected";} ?>>KEJAKSAAN NEGERI BENGKULU SELATAN</option>
                        <option <?php if($data[0]['tujuan']=='KEJAKSAAN NEGERI BENGKULU TENGAH'){echo "selected";} ?>>KEJAKSAAN NEGERI BENGKULU TENGAH</option>
                        <option <?php if($data[0]['tujuan']=='KEJAKSAAN NEGERI MUKO-MUKO'){echo "selected";} ?>>KEJAKSAAN NEGERI MUKO-MUKO</option>
                        <option <?php if($data[0]['tujuan']=='KEJAKSAAN NEGERI KAUR'){echo "selected";} ?>>KEJAKSAAN NEGERI KAUR </option>
                        <option <?php if($data[0]['tujuan']=='KEJAKSAAN NEGERI SELUMA'){echo "selected";} ?>>KEJAKSAAN NEGERI SELUMA</option>
                        <option <?php if($data[0]['tujuan']=='KEJAKSAAN NEGERI REJANG LEBONG'){echo "selected";} ?>>KEJAKSAAN NEGERI REJANG LEBONG</option>
                        <option <?php if($data[0]['tujuan']=='KEJAKSAAN NEGERI LEBONG'){echo "selected";} ?>>KEJAKSAAN NEGERI LEBONG</option>
                        <option <?php if($data[0]['tujuan']=='KEJAKSAAN NEGERI KEPAHIANG'){echo "selected";} ?>>KEJAKSAAN NEGERI KEPAHIANG</option>

                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pelapor</label>

                  <div class="col-sm-4">
                    <input <?php echo $proses ?> class="form-control" id="dari" name="dari" type="text" readonly="" value="<?php if(empty($data[0]['dari'])){echo $this->session->userdata('keterangan_pegawai');}else{
                      echo $data[0]['dari'];} ?>">
                  </div>
                  <label class="col-sm-1 control-label">Nomor</label>

                  <div class="col-sm-5">
                    <input <?php echo $proses ?> required class="form-control" id="nomor_sop" name="nomor_sop" type="text" type="text" value="<?php if(empty($data[0]['nomor_sop'])){echo "-";}else{
                      echo $data[0]['nomor_sop'];} ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Perihal</label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?> required  class="form-control" id="perihal" name="perihal" type="text" value="<?php echo $data[0]['perihal'] ?>"  >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Sifat</label>

                  <div class="col-sm-10">
                    <select <?php echo $proses ?> required  class="form-control" id="sifat" name="sifat">
                      <option value="">Pilih</option>
                      <option <?php if($data[0]['sifat']=='Rahasia'){echo "selected";} ?>>Rahasia</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Terdakwa</label>
                  <div class="col-sm-4">
                    <select <?php echo $proses ?> required  class="form-control" id="terdakwa" name="terdakwa">
                      <option <?php if($data[0]['terdakwa']=='Perorangan'){echo "selected";} ?>>Perorangan</option>
                      <option <?php if($data[0]['terdakwa']=='Koporasi'){echo "selected";} ?>>Koporasi</option>
                    </select>
                  </div>
                  <label class="col-sm-1 control-label">Tanggal</label>

                  <div class="col-sm-5">
                    <input <?php echo $proses ?> required  class="form-control" id="tanggal" name="tanggal" type="date" value="<?php if(empty($data[0]['tanggal'])){echo date('Y-m-d'); }else{echo $data[0]['tanggal'];} ?>"  >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Terlibat</label>
                  <div class="col-sm-10">
                    <select <?php echo $proses ?> class="form-control select2" multiple="multiple" name="terlibat[]" data-placeholder="Masukan Anda Terlebih Dahulu!!" style="width: 100%;">
                      <?php foreach($jaksa as $js){ ?>
                        <?php if(empty($terlibat)){ ?>
                          <option <?php if($this->session->userdata('username')==$js['nip']){echo "selected";} ?> value="<?php echo $js['nip']  ?>"><?php echo $js['nama_pegawai'] ?></option>
                        <?php }else{ ?>
                            <option
                            <?php foreach($terlibat as $tr){if($js['nip']==$tr['nip']){echo "selected";}} ?>
                             value="<?php echo $js['nip']  ?>"><?php echo $js['nama_pegawai'] ?></option>
                      <?php } 
                      } ?>
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