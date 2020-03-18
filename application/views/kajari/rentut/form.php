<div class="content-wrapper">
<br>
<?php echo validation_errors(); ?>
<?php  echo form_open_multipart('kajari/rentut/tambah/'.$this->uri->segment(4),array('class'=>"form-horizontal",'method'=>'POST','id'=>"form_nodis")); ?>
<div class="row rowForm">
  <div class="col-md-10">
    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Usulan Anda</a></li>
        <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Jaksa</a></li>
        <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Kasi</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          <div class="box-body">
            <div class="col-md-12" style="background-color: #00a65a;margin-bottom: 20px;color:white;"><center><label class="control-label">Rencana Tuntutan Pidana</label></center></div>
            <br>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pidana Pokok</label>

              <div class="col-sm-10">
                <input class="form-control" id="pidana_pokok" name="pidana_pokok" type="text" value="<?php if(!empty($data[0]['pidana_pokok'])){echo $data[0]['pidana_pokok'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pidana Tambahan</label>

              <div class="col-sm-10">
                <input class="form-control" id="pidana_tambahan" name="pidana_tambahan" type="text" value="<?php if(!empty($data[0]['pidana_tambahan'])){echo $data[0]['pidana_tambahan'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tindakan</label>

              <div class="col-sm-10">
                <input class="form-control" id="tindakan" name="tindakan" type="text" value="<?php if(!empty($data[0]['tindakan'])){echo $data[0]['tindakan'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Barang Bukti</label>

              <div class="col-sm-10">
                <input class="form-control" id="bb_rentut" name="bb_rentut" type="text" value="<?php if(!empty($data[0]['bb_rentut'])){echo $data[0]['bb_rentut'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Biaya Perkara</label>

              <div class="col-sm-10">
                <input class="form-control" id="biaya_perkara" name="biaya_perkara" type="text" value="<?php if(!empty($data[0]['biaya_perkara'])){echo $data[0]['biaya_perkara'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pendapat</label>

              <div class="col-sm-10">
                <textarea class="form-control" id="pendapat" name="pendapat"><?php if(!empty($data[0]['pendapat'])){echo $data[0]['pendapat'];} ?></textarea>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button <?php if($data[0]['posisi']>4){echo "disabled";} ?> class="btn btn-success pull-right" type="submit">Simpan</button>
          </div>
        </div>
        <div class="tab-pane" id="tab_2">
          <div class="box-body">
            <div class="col-md-12" style="background-color: #00a65a;margin-bottom: 20px;color:white;"><center><label class="control-label">Rencana Tuntutan Pidana Oleh Jaksa</label></center></div>
            <br>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pidana Pokok</label>

              <div class="col-sm-10">
                <input class="form-control" readonly="" type="text" value="<?php if(!empty($jaksa[0]['pidana_pokok'])){echo $jaksa[0]['pidana_pokok'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pidana Tambahan</label>

              <div class="col-sm-10">
                <input class="form-control" readonly="" type="text" value="<?php if(!empty($jaksa[0]['pidana_tambahan'])){echo $jaksa[0]['pidana_tambahan'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tindakan</label>

              <div class="col-sm-10">
                <input class="form-control" readonly="" type="text" value="<?php if(!empty($jaksa[0]['tindakan'])){echo $jaksa[0]['tindakan'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Barang Bukti</label>

              <div class="col-sm-10">
                <input class="form-control" readonly="" type="text" value="<?php if(!empty($jaksa[0]['bb_rentut'])){echo $jaksa[0]['bb_rentut'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Biaya Perkara</label>

              <div class="col-sm-10">
                <input class="form-control" readonly="" type="text" value="<?php if(!empty($jaksa[0]['biaya_perkara'])){echo $jaksa[0]['biaya_perkara'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pendapat</label>

              <div class="col-sm-10">
                <textarea class="form-control" readonly=""><?php if(!empty($jaksa[0]['pendapat'])){echo $jaksa[0]['pendapat'];} ?></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="tab_3">
          <div class="box-body">
            <div class="col-md-12" style="background-color: #00a65a;margin-bottom: 20px;color:white;"><center><label class="control-label">Rencana Tuntutan Pidana Oleh Kasi</label></center></div>
            <br>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pidana Pokok</label>

              <div class="col-sm-10">
                <input class="form-control" readonly="" type="text" value="<?php if(!empty($kasi[0]['pidana_pokok'])){echo $kasi[0]['pidana_pokok'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pidana Tambahan</label>

              <div class="col-sm-10">
                <input class="form-control" readonly="" type="text" value="<?php if(!empty($kasi[0]['pidana_tambahan'])){echo $kasi[0]['pidana_tambahan'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Tindakan</label>

              <div class="col-sm-10">
                <input class="form-control" readonly="" type="text" value="<?php if(!empty($kasi[0]['tindakan'])){echo $kasi[0]['tindakan'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Barang Bukti</label>

              <div class="col-sm-10">
                <input class="form-control" readonly="" type="text" value="<?php if(!empty($kasi[0]['bb_rentut'])){echo $kasi[0]['bb_rentut'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Biaya Perkara</label>

              <div class="col-sm-10">
                <input class="form-control" readonly="" type="text" value="<?php if(!empty($kasi[0]['biaya_perkara'])){echo $kasi[0]['biaya_perkara'];} ?>">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Pendapat</label>

              <div class="col-sm-10">
                <textarea class="form-control" readonly=""><?php if(!empty($kasi[0]['pendapat'])){echo $kasi[0]['pendapat'];} ?></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.tab-content -->
    </div>
    <!-- nav-tabs-custom -->
  </div>
</div>
</form>
</div>