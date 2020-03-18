<div class="content-wrapper">
<br>
<?php echo validation_errors(); ?>
<?php  echo form_open_multipart('kajari/rentut/tambah/'.$this->uri->segment(4),array('class'=>"form-horizontal",'method'=>'POST','id'=>"form_nodis")); ?>
<div class="row rowForm">
  <div class="col-md-10">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">FORM USULAN</h3>
      </div>
      <div class="form-horizontal">
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
          <button class="btn btn-default pull-right" type="submit">Lanjut</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
</div>