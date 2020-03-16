<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versi</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2020 <a href="http://kejati-bengkulu.go.id/">Kejaksaan Tinggi Provinsi Bengkulu</a>.</strong>
  </footer>
</div>
<div class="modal fade" id="modal-default">
  <?php  echo form_open_multipart('admin/galeri/tambah/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'tambahData')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Galeri Foto</h4>
              </div>
              <div class="modal-body">
                 
              <div class="modal-body form">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Foto</label>
                    <div class="col-md-9">
                      <input name="nama_file" id="nama_file" required="" value="" required placeholder="Nama Foto" class="form-control" type="text">
                    </div>
                </div>              
                 <div class="form-group">
                    <label class="control-label col-md-2">Kateogri</label>
                    <div class="col-md-9">
                     <select class="form-control" name="kat_file" id="kat_file" required="">
                        <option value="">Pilih</option>
                        <option value="sarana">Sarana</option>
                        <option value="galeri">Galeri</option>
                      </select>
                    </div>
                </div>  
              </div>
              <div class="form-group">
                    <label class="control-label col-md-2">File</label>
                    <div class="col-md-9">
                     <input type="file" name="file" id="file" required>
                    </div>
                </div>  
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="button_tambah" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
  </form>          <!-- /.modal-dialog -->
</div>
<div class="modal modal-primary fade" id="modal_ubah">
         <?php  echo form_open_multipart('admin/galeri/ubah/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'ubahData')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Galeri Foto</h4>
              </div>
              <div class="modal-body">
              <input type="hidden" name="id_file" id="id_file2">
              <div class="modal-body form">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama Foto</label>
                    <div class="col-md-9">
                      <input name="nama_file" id="nama_file2" value="" required placeholder="Nama Foto" class="form-control" type="text">
                    </div>
                </div>              
                 <div class="form-group">
                    <label class="control-label col-md-2">Kateogri</label>
                    <div class="col-md-9">
                     <select class="form-control" name="kat_file" id="kat_file2">
                        <option value="">Pilih</option>
                        <option id="sarana" value="sarana">Sarana</option>
                        <option id="galeri" value="galeri">Galeri</option>
                      </select>
                    </div>
                </div>  
                <div class="form-group">
                    <label class="control-label col-md-2">File</label>
                    <div class="col-md-9">
                     <input type="file" name="file" id="file2" required>
                    </div>
                </div>  
              </div>
              <div  class="form-group">
                <div class="col-md-12">
                  <center>
                    <div id="preview"></div>
                  </center>
                </div>
              </div>

              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="button_edit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
            </form> 
          </div>
</div>
<div class="modal modal-danger fade" id="hapus-data">
  <?php  echo form_open_multipart('admin/galeri/hapus/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'hapusData')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Galeri Foto</h4>
              </div>
              <div class="modal-body">
               <input type="hidden" name="id_file" id="id_file3"> 
              <div class="modal-body form">
                <div class="form-group"><center>
                  Apakah Anda Ingin Menghapus Foto ini?</center>
                </div>              
                 <div hidden="" class="form-group">
                    <label class="control-label col-md-2">Kateogri</label>
                    <div class="col-md-9">
                     <select  readonly class="form-control" name="kat_file" id="kat_file3" required="">
                        <option value="">Pilih</option>
                       <option id="sarana3" value="sarana">Sarana</option>
                        <option id="galeri3" value="galeri">Galeri</option>
                      </select>
                    </div>
                </div> 
                <div  class="form-group">
                <div class="col-md-12">
                  <center>
                    <div id="preview3"></div>
                  </center>
                </div>
              </div> 
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="button_hapus" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
  </form>          <!-- /.modal-dialog -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('/asset/adminlte') ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('/asset/adminlte/') ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('/asset/adminlte') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/asset/adminlte') ?>/dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/asset/adminlte') ?>/dist/js/demo.js"></script>
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- DataTables -->
    <script src="<?php echo base_url('asset/admin/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/admin/vendor/datatables-responsive/dataTables.responsive.js'); ?>"></script>
<!-- CK Editor -->
<script src="<?php echo base_url('/asset/adminlte') ?>/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('/asset/adminlte') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url('/asset/control') ?>/javascript.js"></script>

<script>
  $(function () {
    $('#table1').DataTable({
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'scrollY': 300,
      'scrollCollapse': true,
      'scrollX'   : true
</script>
    })
  })
<script type="text/javascript">
 $(document).ready(function(){
  $('#nip').change(function(){
   var nip = $('#nip').val();
   if(nip != ''){
    $.ajax({
     url: "<?php echo base_url(); ?>admin/jaksa/nip",
      method : "POST",
     data: {nip:nip},
     success: function(data){
      $('#nip_result').html(data);
     },error : function(data){
              alert('something wrong...');
    }
    });
   }
  });
 });
</script>