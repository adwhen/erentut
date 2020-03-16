<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versi</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2020 <a href="http://kejati-bengkulu.go.id/">Kejaksaan Tinggi Provinsi Bengkulu</a>.</strong>
  </footer>
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
    $('#example1').DataTable()
    $('#table1').DataTable({
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'scrollY': 300,
      'scrollCollapse': true,
      'scrollX'   : true
    })
  })
</script>
<script type="text/javascript">
 $(document).ready(function(){
  var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>',
    csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
  $('#nip').change(function(){
   var nip = $('#nip').val();
   if(nip != ''){
    $.ajax({
     url: "<?php echo base_url(); ?>admin/jaksa/nip",
     method : "POST",
     data: {nip:nip,[csrfName]: csrfHash},
     success: function(data){
      $('#nip_result').html(data);
     }
    });
   }
  });
 });
</script>