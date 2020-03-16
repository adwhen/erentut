
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Small boxes (Stat box) -->

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Sandi</h3>
              <center>
              <p class="loading"></p>
              </center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            

            <?php  echo form_open_multipart('admin/beranda/user/',array('class'=>"form-horizontal",'method'=>'POST','id' =>'')); ?>
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="inputEmail3">Sandi</label>

                  <div class="col-sm-10">
                    <input class="form-control" name="password" onkeyup="sandi()" id="password"  type="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="inputPassword3">Konfirmasi Sandi</label>

                  <div class="col-sm-10">
                    <input class="form-control" onkeyup="sandi()" name="passwordC" id="passwordC" type="password" placeholder="Password Confirmation">
                  </div>
                </div>
                <div class="box-footer">
                  <div id="notice">
                    <span style="color: red;"> <i class="fa  fa-close"></i> Sandi Minimal 6 Huruf!!</span>
                  </div>
                  <button disabled="" id="button_sandi" class="btn btn-info pull-right" type="submit">Simpan</button>
                </div>
              <!-- /.box-footer -->
            </div>
            </form>
      </div>
  </div>
</div>


      <!-- /.row -->

    </section>
    <!-- /.content -->
</div>

<script type="text/javascript">
  function sandi() {
   var password=$('#password').val()
   var passwordC=$('#passwordC').val()

    if(password.length>=5 & passwordC.length>=5){
      

      if(password == passwordC){
        $('#button_sandi').removeAttr('disabled');  
        $('#notice').html('<span style="color: green;"> <i class="fa fa-check"></i> Sandi Cocok!!</span>')
      }else{
        $('#notice').html('<span style="color: red;"> <i class="fa  fa-close"></i> Sandi Tidak Cocok!!</span>')
        $('#button_sandi').attr('disabled','');
      }

    }else{
      $('#button_sandi').attr('disabled','');
      $('#notice').html('<span style="color: red;"> <i class="fa  fa-close"></i> Sandi Minimal 6 Huruf!!</span>')
    }
  }
</script>
