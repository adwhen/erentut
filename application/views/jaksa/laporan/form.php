<div class="content-wrapper">
  <br>
  <?php echo validation_errors(); ?>
<?php  echo form_open_multipart('jaksa/laporan/tambah/'.$this->uri->segment(4),array('class'=>"form-horizontal",'method'=>'POST','id'=>"form_nodis")); ?>
<?php $this->load->view('jaksa/laporan/nodis');?>
<?php $this->load->view('jaksa/laporan/terdakwa_perorangan');?>
<?php $this->load->view('jaksa/laporan/terdakwa_koporasi');?>
<?php $this->load->view('jaksa/laporan/nodis2');?>
</form>
</div>



<script type="text/javascript">
  function halaman(hal) {
    $('#halaman0').hide();
    $('#halaman1p').hide();
    $('#halaman1k').hide();
    $('#halaman2').hide();

    if(hal==0){
      $('#halaman0').show();
    }else if(hal==1){
      var terdakwa=$('#terdakwa').val()
      if(terdakwa=="Perorangan"){
        $('#halaman1p').show();
      }else{
        $('#halaman1k').show();
      }
      
    }else if(hal==2){
      $('#halaman2').show();
    }
  }
  function check(){
    var tujuan  = $("#tujuan").val()
    var dari    = $("#dari").val()
    var nomor_sop  = $("#nomor_sop").val()
    var perihal  = $("#perihal").val()
    var sifat  = $("#sifat").val()
    var terdakwa  = $("#terdakwa").val()
    var tanggal  = $("#tanggal").val()  
    if(tujuan=="" || dari=="" || nomor_sop=="" || perihal=="" || sifat=="" || terdakwa =="" || tanggal==""){
      alert("Form Nota Dinas (1) Harus Diisi Semua.")
    }else{
      $("#form_nodis").submit()
    }

  }
</script>