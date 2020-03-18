  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <div style="height: 75px;"  class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('asset/gambar/icon/kajatilogo.png')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama_pegawai') ?></p>
          <p><?php echo $this->session->userdata('username') ?></p>
          <a id="jaringan" onblur="jaringan()" href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li style="font-size: 12px;margin-top: 12px;color: gray;" class="header"><center><?php echo $this->session->userdata('keterangan_pegawai') ?></li>
        <li style="font-size: 12px;">
          <a  href="<?php echo base_url('aspidum/beranda');?>">
            <i class="fa fa-home" aria-hidden="true"></i><span>Beranda</span>
          </a>
        </li>
        <li style="font-size: 12px;">
          <a href="<?php echo base_url('aspidum/rentut/index');?>">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Antrian Proses
              <?php if($jumlah!=0){?>
              <span class="pull-right-container">
                <small class="label pull-right bg-red"><?php echo $jumlah;?></small>
              </span>
            <?php } ?>
            </span>
          </a>
        </li>
        <li style="font-size: 12px;">
          <a href="<?php echo base_url('aspidum/rentut/usulan');?>">
            <i class="fa fa-user" aria-hidden="true"></i><span>Manajemen Usulan Rentut</span>
          </a>
        </li>
        <li style="font-size: 12px;">
          <a href="<?php echo base_url('aspidum/rentut/form');?>">
            <i class="fa fa-user" aria-hidden="true"></i><span>Manajemen Form</span>
          </a>
        </li>
            
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <script type="text/javascript">
    function jaringan() {
      var ifConnected = window. navigator. onLine;
        if (ifConnected) {
          $("#jaringan").html('<i class="fa fa-circle text-success"></i> Online')
        } else {
          $("#jaringan").html('<i class="fa fa-circle text-warning"></i> Offline')
      }
    }  
  </script>
