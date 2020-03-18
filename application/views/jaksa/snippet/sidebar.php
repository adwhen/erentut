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
          <a  href="<?php echo base_url('jaksa/beranda');?>">
            <i class="fa fa-home" aria-hidden="true"></i><span>Beranda</span>
          </a>
        </li>
        <li style="font-size: 12px;">
          <a href="<?php echo base_url('jaksa/laporan/tambah');?>">
            <i class="fa fa-file-text" aria-hidden="true"></i><span>Lapor</span>
          </a>
        </li>
        <li style="font-size: 12px;">
          <a href="<?php echo base_url('jaksa/laporan/index');?>">
            <i class="fa fa-file-text-o" aria-hidden="true"></i><span>Laporan</span>
          </a>
        </li>
        <li style="font-size: 12px;">
          <a href="<?php echo base_url('jaksa/laporan/selesai');?>">
            <i class="fa fa-check-square" aria-hidden="true"></i><span>Laporan Selesai</span>
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
