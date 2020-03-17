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
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#tambah">
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
            <?php echo $data; ?>
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
  function ubah(id,nip,nama,jabatan,pangkat,golongan,keterangan_pegawai,level) {
    $('#level1').removeAttr('selected')
    $('#level2').removeAttr('selected')
    $('#level3').removeAttr('selected')
    $('#level4').removeAttr('selected')
    $('#level5').removeAttr('selected')

    if(level==1){
      $('#level1').attr('selected','true')
    }else if(level==2){
      $('#level2').attr('selected','true')
    }else if(level==3){
      $('#level3').attr('selected','true')
    }else if(level==4){
      $('#level4').attr('selected','true')
    }else if(level==5){
      $('#level5').attr('selected','true')
    }

    $('#knb').removeAttr('selected')
    $('#knbu').removeAttr('selected')
    $('#knbs').removeAttr('selected')
    $('#knbt').removeAttr('selected')
    $('#knm').removeAttr('selected')
    $('#knk').removeAttr('selected')
    $('#kns').removeAttr('selected')
    $('#knrl').removeAttr('selected')
    $('#knl').removeAttr('selected')
    $('#knke').removeAttr('selected')

    $('#idU').val(id)
    $('#nipU').val(nip)
    $('#nama_pegawaiU').val(nama)
    $('#jabatan_pegawaiU').val(jabatan)
    $('#pangkat_pegawaiU').val(pangkat)
    $('#golongan_pegawaiU').val(golongan)

    if(keterangan_pegawai=="KEJAKSAAN NEGERI BENGKULU"){
      $('#knb').attr('selected','true')
    }else if(keterangan_pegawai=="KEJAKSAAN NEGERI BENGKULU UTARA"){
      $('#knbu').attr('selected','true')
    }else if(keterangan_pegawai=="KEJAKSAAN NEGERI BENGKULU SELATAN"){
      $('#knbs').attr('selected','true')
    }else if(keterangan_pegawai=="KEJAKSAAN NEGERI BENGKULU TENGAH"){
      $('#knbt').attr('selected','true')
    }else if(keterangan_pegawai=="KEJAKSAAN NEGERI MUKO-MUKO"){
      $('#knm').attr('selected','true')
    }else if(keterangan_pegawai=="KEJAKSAAN NEGERI KAUR"){
      $('#knk').attr('selected','true') 
    }else if(keterangan_pegawai=="KEJAKSAAN NEGERI SELUMA"){
      $('#kns').attr('selected','true')
    }else if(keterangan_pegawai=="KEJAKSAAN NEGERI REJANG LEBONG"){
      $('#knrl').attr('selected','true')
    }else if(keterangan_pegawai=="KEJAKSAAN NEGERI LEBONG"){
      $('#knl').attr('selected','true')
    }else if(keterangan_pegawai=="KEJAKSAAN NEGERI KEPAHIANG"){
      $('#knke').attr('selected','true')
    }
  }
  function hapus(id,no) {
    var string="Apakah Anda Ingin Menghapus Jaksa Pada Baris Ke-"+no;
    $('#idH').val(id)
    $('#baris').html(string)
  }
</script>
<div class="modal fade" id="tambah">
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
                    <div class="col-md-1" id="nip_result"></div>
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
                      <label class="control-label col-md-2">Instasi</label>
                      <div class="col-md-9">
                       <select class="form-control" name="keterangan_pegawai" required>
                        <option value="">PILIH</option>
                        <option >KEJAKSAAN NEGERI BENGKULU</option>
                        <option >KEJAKSAAN NEGERI BENGKULU UTARA</option>
                        <option  >KEJAKSAAN NEGERI BENGKULU SELATAN</option>
                        <option >KEJAKSAAN NEGERI BENGKULU TENGAH</option>
                        <option >KEJAKSAAN NEGERI MUKO-MUKO</option>
                        <option >KEJAKSAAN NEGERI KAUR </option>
                        <option>KEJAKSAAN NEGERI SELUMA</option>
                        <option >KEJAKSAAN NEGERI REJANG LEBONG</option>
                        <option>KEJAKSAAN NEGERI LEBONG</option>
                        <option >KEJAKSAAN NEGERI KEPAHIANG</option>

                      </select>
                      </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-md-2">Password</label>
                      <div class="col-md-9">
                       <input  name="password" id="password" type="password" value="default123" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-md-2">Level Jabatan</label>
                      <div class="col-md-9">
                      <select class="form-control" name="level" required>
                        <option value="1">Jaksa</option>
                        <option value="2">KASI PIDUM</option>
                        <option value="3">KAJARI</option>
                        <option value="4">ASPIDUM</option>
                        <option value="5">KAJATI/WAKAJATI</option>
                      </select>
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
<div class="modal fade" id="ubah">
  <?php  echo form_open_multipart('admin/jaksa/ubah/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'ubahData')); ?>
      <input type="hidden" name="id_pegawai" id="idU">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button id="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Jaksa</h4>
              </div>
              <div class="modal-body">
                 
              <div class="modal-body form">
                <div class="form-group">
                  <label class="control-label col-md-2">Nama</label>
                    <div class="col-md-9">
                      <input name="nama_pegawai" id="nama_pegawaiU" required="" value="" required class="form-control" type="text">
                    </div>
                </div>              
                 <div class="form-group">
                    <label class="control-label col-md-2">NIP</label>
                    <div class="col-md-9">
                     <input  name="nip" id="nipU" type="text" maxlength="18" size="18" class="form-control" required>
                    </div>
                    <div class="col-md-1" id="nip_result"></div>
                </div>  
                <div class="form-group">
                      <label class="control-label col-md-2">Jabatan</label>
                      <div class="col-md-9">
                       <input  name="jabatan_pegawai" id="jabatan_pegawaiU" type="text" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-md-2">Pangkat</label>
                      <div class="col-md-9">
                       <input  name="pangkat_pegawai" id="pangkat_pegawaiU" type="text" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-md-2">Golongan</label>
                      <div class="col-md-9">
                       <input  name="golongan_pegawai" id="golongan_pegawaiU" type="text" class="form-control" required>
                      </div>
                </div>
                <div class="form-group">
                      <label class="control-label col-md-2">Instasi</label>
                      <div class="col-md-9">
                       <select class="form-control" name="keterangan_pegawai" required>
                        <option value="">PILIH</option>
                        <option id="knb" >KEJAKSAAN NEGERI BENGKULU</option>
                        <option id="knbu" >KEJAKSAAN NEGERI BENGKULU UTARA</option>
                        <option id="knbs" >KEJAKSAAN NEGERI BENGKULU SELATAN</option>
                        <option id="knbt" >KEJAKSAAN NEGERI BENGKULU TENGAH</option>
                        <option id="knm" >KEJAKSAAN NEGERI MUKO-MUKO</option>
                        <option id="knk" >KEJAKSAAN NEGERI KAUR </option>
                        <option id="kns" >KEJAKSAAN NEGERI SELUMA</option>
                        <option id="knrl" >KEJAKSAAN NEGERI REJANG LEBONG</option>
                        <option id="knl" >KEJAKSAAN NEGERI LEBONG</option>
                        <option id="knke" >KEJAKSAAN NEGERI KEPAHIANG</option>

                      </select>
                      </div>
                  </div>
                      <div class="form-group">
                        <label class="control-label col-md-2">Level Jabatan</label>
                        <div class="col-md-9">
                          <select class="form-control" name="level" required>
                            <option id="level1" value="1">Jaksa</option>
                            <option id="level2" value="2">KASI PIDUM</option>
                            <option id="level3" value="3">KAJARI</option>
                            <option id="level4" value="4">ASPIDUM</option>
                            <option id="level5" value="5">KAJATI/WAKAJATI</option>
                          </select>
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
          </div>
        </div>
  </form>          <!-- /.modal-dialog -->
</div>
<div class="modal fade" id="hapus">
  <?php  echo form_open_multipart('admin/jaksa/hapus/',array('class'=>"form-horizontal",'method'=>'POST','id'=>'hapusData')); ?>
      <input type="hidden" name="id_pegawai" id="idH">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Jaksa</h4>
              </div>
              <div class="modal-body">
                <center><label class="control-label" id="baris"></label></center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" id="button_hapus" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
        </div>
  </form>          <!-- /.modal-dialog -->
</div>
