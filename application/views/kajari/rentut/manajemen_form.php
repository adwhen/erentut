
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>
    <section class="invoice">
      
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-6 invoice-col">
        </div>
        <!-- /.col -->
        <div class="col-sm-6 invoice-col" style="text-align: right;">
          
        </div>
        <!-- /.col -->
      </div>
      <center>
        <?php echo $this->session->flashdata('msg'); ?>
      </center>
      <!-- /.row -->
      <br>
      <div style="width: 100%;background-color: #edf2f0;color: white;height: 25px;text-align: center;vertical-align: center;">
          <h3 style="font-size: 20px;color: #3e3f3f;"><center><strong>FORM RENCANA TUNTUTAN PIDANA</strong></center></h3>    
      </div> <br>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <th>No.</th>
              <th>Ditujukan</th>
              <th>Pelapor</th>
              <th>Nomor Surat</th>
              <th>Sifat Surat</th>
              <th>Perihal</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </thead>
            <tbody>
            <?php $x=1; $no=0; foreach($data as $dt){?>
              <tr>
                <td><?php echo ++$no;?></td>
                <td><?php echo $dt['tujuan'];?></td>
                <td><?php echo $dt['dari'];?></td>
                <td><?php echo $dt['nomor_sop'];?></td>
                <td><?php echo $dt['sifat'];?></td>
                <td><?php echo $dt['perihal'];?></td>
                <td><?php echo $dt['tanggal'];?></td>
                <td>
                  <center>
                    <div class="tooltip-demo">
                      <a href="<?php echo base_url('kajari/rentut/lihatForm/47');?>">
                      <button  class="btn btn-primary" title="Hapus"><i class="fa fa-file"></i>&nbsp;&nbsp;FORM 47</button>
                      </a>
                      <?php if($dt['posisi'] >= 2){ ?>
                      <a href="<?php echo base_url('kajari/rentut/lihatForm/48/'.$dt['posisi'].'/'.$this->Mcrypt->encrypt($dt['id_sop']));?>" target="_blank">
                      <button  class="btn btn-primary" title="Hapus"><i class="fa fa-file"></i>&nbsp;&nbsp;FORM 48</button>
                      </a>
                      <?php }; ?>
                      <?php if($dt['posisi'] == 6){?>
                      <a href="<?php echo base_url('kajari/rentut/lihatForm/surat');?>">
                      <button  class="btn btn-primary" title="Hapus"><i class="fa fa-file"></i>&nbsp;&nbsp;SURAT</button>
                      </a>
                    <?php } ?>
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


