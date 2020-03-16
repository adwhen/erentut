<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="invoice">
      <div class="row">
        <div class="col-xs-12">
          <ol class="breadcrumb" style="font-size: 15px">
            <li><a href="<?php echo base_url('admin/beranda');?>">Admin</a></li>
            <li class="active"> Manajemen Jaksa/User</li>
          </ol>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col" style="text-align: right;">   
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#tambah_struktural">
                Tambah Data
          </button>
        </div>
        <center>
        <p class="loading"></p>
        </center>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <br>
      <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center;">
          <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>MANAJEMEN JAKSA</strong></center></h3>    
      </div> <br>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <th>No.</th>
              <th>Nama</th>
              <th>NIP</th>
              <th>Jabatan/Pangkat/Golongan</th>
              <th>Keterangan pegawai</th>
              <th>Aksi</th>
            </thead>
            <tbody id="showdata">
            <?php $x=1; $no=0; foreach($data as $dt){?>
              <tr>
                <td><?php echo ++$no;?></td>
                <td><?php echo $dt['nama_pegawai'];?></td>
                <td><?php echo $dt['nip'];?></td>
                <td><?php echo $dt['jabatan_pegawai']."/".$dt['pangkat_pegawai']."/".$dt['golongan_pegawai']?></td>
                <td><?php echo $dt['keterangan_pegawai'];?></td>
                <td>
                  <center>
                    <div class="tooltip-demo">
                      
                        <button data-balloon="Edit" data-balloon-pos="up" data-toggle="modal" data-target="#ubah_struktural"  class="btn btn-info" title="Ubah"><i class="fa fa-pencil"></i></button>

    
                        <button  data-balloon-pos="up" data-toggle="modal" data-target="#hapus_struktural" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>

                    </div>
                  </center>
                </td>
              </tr>
            <?php }?>
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>

</div>
<script type="text/javascript">
  function struktural_ubah(id_struktural,id_file,nama_struktural,jabatan_struktural,nip_pegawai) {
    $('#jbtn1').removeAttr('selected');
    $('#jbtn2').removeAttr('selected');
    $('#jbtn3').removeAttr('selected');
    $('#jbtn4').removeAttr('selected');
    $('#jbtn5').removeAttr('selected');
    $('#jbtn6').removeAttr('selected');
    $('#jbtn7').removeAttr('selected');
    $('#jbtn8').removeAttr('selected');
    $('#jbtn9').removeAttr('selected');
    $('#jbtn10').removeAttr('selected');


    $('#id_struktural1').val(id_struktural);
    $('#id_file1').val(id_file);
    $('#nama_struktural1').val(nama_struktural);
    if(jabatan_struktural=="Kepala Kejaksaan Tinggi"){
      $('#jbtn1').attr('selected',"true");
    }else if(jabatan_struktural=="Wakil Kepala Kejaksaan Tinggi"){
      $('#jbtn2').attr('selected',"true");
    }else if(jabatan_struktural=="Kepala Bagian Tata Usaha"){
      $('#jbtn3').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Pembinaan"){
      $('#jbtn4').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Intelijen"){
      $('#jbtn5').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Tindak Pidana Umum"){
      $('#jbtn6').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Tindak Pidana Khusus"){
      $('#jbtn7').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Perdata dan Tata Usaha Negara"){
      $('#jbtn8').attr('selected',"true");
    }else if(jabatan_struktural=="Asisten Pengawasan"){
      $('#jbtn9').attr('selected',"true");
    }else if(jabatan_struktural=="Koordinator"){
      $('#jbtn10').attr('selected',"true");
    }
    $('#nip_pegawai1').val(nip_pegawai);

  }
</script>
<script type="text/javascript">
function struktural_hapus(id_struktural,id_file,no) {
  var str="apakah anda ingin menghapus pada baris ke "+no+" ?";
   $('#id_struktural3').val(id_struktural);
   $('#id_file3').val(id_file);
   $('#showstruktural').html(str);
  }
</script>
<div class="modal fade" id="tambah_struktural">
  <?php  echo form_open_multipart('admin/jaksa/tambah/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'tambahData')); ?>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Jaksa</h4>
              </div>
              <div class="modal-body">
                 
              <div class="modal-body form">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama</label>
                    <div class="col-md-9">
                      <input name="nama_pegawai" id="nama_pegawai" required="" value="" required placeholder="Nama" class="form-control" type="text">
                    </div>
                </div>              
                 <div class="form-group">
                    <label class="control-label col-md-2">NIP</label>
                    <div class="col-md-9">
                     <input  name="nip" id="nip" type="text" maxlength="18" size="18" class="form-control" required>
                    </div>
                </div>  
                <div class="form-group">
                      <label class="control-label col-md-2">Jabatan</label>
                      <div class="col-md-9">
                       <input  name="jabatan_pegawai" id="jabatan_pegawai" type="text" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-md-2">Pangkat</label>
                      <div class="col-md-9">
                       <input  name="pangkat_pegawai" id="pangkat_pegawai" type="text" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-md-2">Golongan</label>
                      <div class="col-md-9">
                       <input  name="golongan_pegawai" id="golongan_pegawai" type="text" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-md-2">Keterangan</label>
                      <div class="col-md-9">
                       <input  name="keterangan_pegawai" id="keterangan_pegawai" type="text" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-md-2">Password</label>
                      <div class="col-md-9">
                       <input  name="password" id="password" type="password" value="default123" class="form-control" required>
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
        </div>
  </form>          <!-- /.modal-dialog -->
</div>

