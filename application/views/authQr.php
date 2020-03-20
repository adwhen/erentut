<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
      <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
      <title>Kejaksaan Tinggi Bengkulu </title>
  	  <link href="<?= base_url('asset/gambar/icon/kajati.png') ?>" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
      <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets_front/css/responsive.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>asset/assets_front/css/styles.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/assets_front/vendor/bootstrap/bootstrap.css">
      <link href="<?php echo base_url(); ?>asset/assets_front/vendor/fontawesome/css/all.css" rel="stylesheet">
</head>
<body id="loginBody">
    <div style="text-align:center;width:100%">
        <br>
        <div class="row justify-content-md-center">
            <div class="container">
                <div class="container" id="containerLogin">
                    <div class="col">
	                    <div class="card shadow">
	                        <div class="card-header bg-success text-white">
	                            <h4><b>Otentikasi Tanda Tangan</b></h4>
	                        </div>
	                        <div class="card-body" style="font-size: 14px;">
	                        	<center>
				                <img src="<?php echo base_url(); ?>asset/assets_front/img/logovisi.png" class="img-fluid logoLogin" style="text-align:center;" alt="Responsive image">
				                <br>
				                <br>
				                </center>
	                            <div class="form-group">
	                                Jaksa dengan identitas dibawah ini :
	                            </div>
	                            <div class="form-group">
	                                <label><b>NIP</b></label>
	                                <br>
	                                <?php echo $data[0]['nip'];?>
	                            </div>
	                            <div class="form-group">
	                                <label for="exampleInputPassword1"><b>Nama</b></label>
	                                <br>
	                                <?php echo $data[0]['nama_pegawai'];?>
	                            </div>
	                            <div class="form-group">
	                                telah menandatangani Nota Dinas dengan keterangan sebagai berikut :
	                            </div>
	                            <div class="form-group">
	                                <table class="table table-borderless">
	                                	<tbody style="text-align: left;">
	                                		<tr>
	                                			<td><b>Nomor</b></td>
	                                			<td>:</td>
	                                			<td><?php echo $data[0]['nomor_sop']?></td>
	                                		</tr>
	                                		<tr>
	                                			<td><b>Tujuan</b></td>
	                                			<td>:</td>
	                                			<td><?php echo $data[0]['tujuan']?></td>
	                                		</tr>
	                                		<tr>
	                                			<td><b>Tanggal</b></td>
	                                			<td>:</td>
	                                			<td><?php echo tgl_indo($data[0]['tanggal'])?></td>
	                                		</tr>
	                                	</tbody>
	                                </table>
	                            </div>
	                        </div>
	                    </div>
                	</div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    
    <footer id="footer">
        <div class="footer-one footer-widgets bg-success fixed-bottom" style="padding-top:10px; padding-bottom:10px">
            <div class="container">
                <div class="col-md-12 text-white text-center">
                    <p style="margin-bottom:unset; font-size:13px">Copyright © 2020 Website Resmi Kejaksaan Tinggi Bengkulu. All Right Reserved.</p>
                </div>
            </div>
        </div> 
    </footer>

	<script src="<?php echo base_url(); ?>asset/assets_front/vendor/jquery/jquery.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url(); ?>assetsasset/assets_front/vendor/popper/popper.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url(); ?>asset/assets_front/vendor/bootstrap/bootstrap.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url(); ?>asset/assets_front/js/scrolling.js" type="text/javascript">
    </script>

    <script>
    var modal = document.getElementById("modalSarana");
    var modalImg = document.getElementById("imgModal");

    function getSrc(src,nama,ket) {
        modalImg.src = src;
        $("#modalTitle").text(nama);
        $("#namaSarana").text(nama);
        $("#ketSarana").text(ket);
    }

    var span = document.getElementsByClassName("closeFoto")[0];
    span.onclick = function() { 
      modal.style.display = "none";
    }
    </script>

</body>
</html>