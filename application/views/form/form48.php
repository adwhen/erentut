<!DOCTYPE html>
<html>
<head>
  <style>
    table, th, td {}
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KEJAKSAAN TINGGI PROVINSI BENGKULU</title>
  <link href="<?= base_url('asset/gambar/icon/kajati.png') ?>" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
  <!-- Tell the browser to be responsive to screen width -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
</head>
  <body onload="window.print();">
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
          <div>
            <table border="0" style="width: 100%;" align="justify">
              <tbody>
                <tr>
                  <td width="40%" align="center"><b><?php echo $data[0]['dari']?></b></td>       
                  <td width="60%" align="right"><b>SOP FORM - 48</b></td> 
                </tr>
              </tbody>
            </table>
            <br>
            <table border="0" style="width: 100%;" align="justify">
              <tbody>
                <tr>  
                  <td width="10%" align="justify">Nomor</td>       
                  <td width="2%" align="justify">:</td>           
                  <td width="38%" align="justify"><?php echo $data[0]['nomor_sop']?></td> 
                  <td width="10%" align="justify"></td>
                  <td width="40%" align="justify"><?php echo lokasi($data[0]['dari'])?>, <?php echo tgl_indo($data[0]['tanggal'])?></td>                  
                </tr>
                <tr>  
                  <td width="10%" align="justify">Sifat</td>       
                  <td width="2%" align="justify">:</td>           
                  <td width="38%" align="justify"><?php echo $data[0]['sifat']?></td>
                  <td width="10%" align="justify"></td>
                  <td width="40%" align="justify"></td>                   
                </tr>
                <tr>  
                  <td width="10%" align="justify">Lampiran</td>       
                  <td width="2%" align="justify">:</td>           
                  <td width="38%" align="justify"><?php echo $data[0]['lampiran']?></td> 
                  <td width="10%" align="justify"></td> 
                  <td width="40%" align="justify"></td>                 
                </tr>
                <tr>  
                  <td width="10%" valign="top">Perihal</span></td>       
                  <td width="2%" valign="top">:</td>           
                  <td width="38%" valign="top" align="justify"><?php echo $data[0]['perihal']?></td> 
                  <td width="10%" align="justify"></td>
                  <td width="40%" align="justify">KEPADA YTH : <br> KEPALA <?php echo strtoupper($data[0]['tujuan'])?> <br> DI <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u><?php echo strtoupper(lokasi($data[0]['tujuan']))?></u></td>                   
                </tr>
              </tbody>
            </table>
            <br>
            <table border="0" style="width: 100%;">
              <tbody>
                <tr>  
                  <td width="12%" align="justify"></td>                 
                  <td width="88%" align="justify"> &nbsp;&nbsp;&nbsp;Sehubungan dengan telah selesainya pemeriksaan di persidangan perkara tindak pidana <?php echo $data[0]['kategori'] ?> dengan nama Terdakwa/Anak*) <?php if($data[0]['terdakwa']=="Perorangan"){echo $form[0]['nama_orang'];}else{echo $form[0]['nama_korporasi'];} ?> bersama ini dengan hormat kami laporkan sebagai berikut : 
                  </td>           
                </tr>
                <tr>  
                  <td width="12%" align="justify"></td>                 
                  <td width="88%" align="justify">
                    <table width="100%">
                      	<tbody>
	                        <tr>
	                          	<td width="2%" valign="top">1.</td>
	                          	<td colspan="2">Identitas Terdakwa/Anak*)**) : </td>
	                        </tr>
	                        <?php if($form[0]['terdakwa'] == "Perorangan"){?>
	                        <tr>
		                      	<td width="2%" valign="top"></td>
		                      	<td width="98%"><b>Subjek orang perorangan (naturlijk person) </b></td>
		                    </tr>
		                    <tr>
		                    	<td width="2%" valign="top"></td>
		                    	<td width="98%">
		                    	<table width="100%">
		                    		<tbody>
		                    			 <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">Nama Lengkap</td>       
							                <td width="3%" valign="top">:</td> 
							                <td align="justify"><?php echo $form[0]['nama_orang'] ?></td> 
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">Tempat Lahir</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['tempat_lahirorang'] ?></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">Umur/Tanggal Lahir</td>       
							                <td width="3%" valign="top">:</td> 
							                <td align="justify"><?php echo tgl_indo($form[0]['tanggal_lahirorang']) ?></td> 
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">Jenis Kelamin</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['jk_orang'] ?></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">Kebangsaan</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['kebangsaan_orang'] ?></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">Tempat Tinggal</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['tempat_tinggalorang'] ?></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">Agama</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['agama_orang'] ?></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">Pekerjaan</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['pekerjaan_orang'] ?></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">Pendidikan</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['pendidikan_orang'] ?></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">Identitas lain</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">1. Foto Bewarna</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">2. Nomor KTP</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['ktp_orang'] ?></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">3. Nomor SIM</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['sim_orang'] ?></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">4. Nomor Passpor</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['passpor_orang'] ?></td>  
							              </tr>
							              <tr>
							                <td width="5%" valign="top"></td>
							                <td width="30%" valign="top">5. Lain-lain</td>       
							                <td width="3%" valign="top">:</td>
							                <td align="justify"><?php echo $form[0]['ket_orang'] ?></td>  
							              </tr>
		                    		</tbody>			             
					            </table>
		                      </td>
		                    </tr>
		                	<?php }else{ ?>
		                    <tr>
		                      <td width="2%" valign="top"></td>
		                      <td width="98%"><b>Subjek Korporasi</b> </td>
		                    </tr>
		                    <tr>
		                    	<td width="2%" valign="top"></td>
		                    	<td width="98%">
		                        	<table width="100%">
		                        		<tbody>
		                        			<tr>
		                        				<td width="5%" valign="top"></td>
		                        				<td width="95%"> (a) <b>Korporasi</b> </td>
		                        			</tr>
		                        			<tr>
					                        	<td width="5%" valign="top"></td>
					                        	<td width="95%">
					                        	<table width="100%">
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Nama Korporasi</td>       
										                <td width="3%" valign="top">:</td> 
										                <td align="justify"><?php echo $form[0]['nama_korporasi'] ?></td> 
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Tempat, tanggal pendirian</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['tempat_pendirian'] ?>, <?php echo tgl_indo( $form[0]['tanggal_pendirian']) ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Nomor anggaran dasar/akta pendirian/peraturan/dokumen/perjanjian serta perubahan terakhir</td>       
										                <td width="3%" valign="top">:</td> 
										                <td align="justify" valign="top"><?php echo $form[0]['nomor_anggaran'] ?></td> 
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Nomor Salinan Kep. Menkumham tentang Persetujuan Akta Pendirian Perseroan </td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify" valign="top"><?php echo $form[0]['nomor_pendirian'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Nomor Salinan Kep. Menkunham tentang Persetujuan Akta Perubahan Perseroan</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify" valign="top"><?php echo $form[0]['nomor_perubahan'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Nomor dan tanggal akta korporasi pada saat tindak pidana terjadi</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify" valign="top"><?php echo $form[0]['nomor_korporasi'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Tempat kedudukan</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify" valign="top"><?php echo $form[0]['tempat_korporasi'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Kebangsaan korporasi</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify" valign="top"><?php echo $form[0]['kebangsaan_korporasi'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Surat Keterangan terdaftar Mendagri untuk Ormas tidak berbadan hukum</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify" valign="top"><?php echo $form[0]['surat_korporasi'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Jenis Korporasi</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify" valign="top"><?php echo $form[0]['jenis_korporasi'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Bentuk kegiatan/usaha</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify" valign="top"><?php echo $form[0]['kegiatan_koporasi'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Alamat Korporasi</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify" valign="top"><?php echo $form[0]['alamat_korporasi'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Identitas Lain</td>       
										                <td width="3%" valign="top"></td>
										                <td align="justify"></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">1. NPWP</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['npwp'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">2. Nomor Wajib Daftar Perusahaan</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['nwdp'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">3. Lain-lain</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['kegiatan_korporasi'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top" colspan="3"><b>Identitas Orang Yang Mewakili Korporasi**)</b></td>         
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Nama Lengkap</td>       
										                <td width="3%" valign="top">:</td> 
										                <td align="justify"><?php echo $form[0]['nama_wakil'] ?></td> 
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Tempat Lahir</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['tempat_lahirwakil'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Umur/Tanggal Lahir</td>       
										                <td width="3%" valign="top">:</td> 
										                <td align="justify"><?php echo umur($form[0]['tanggal_lahirwakil']); ?>/<?php echo $form[0]['tanggal_lahirwakil'] ?></td> 
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Jenis Kelamin</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['jk_wakil'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Kebangsaan</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['kebangsaan_wakil'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Tempat Tinggal</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['alamat_wakil'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Agama</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['agama_wakil'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Pekerjaan</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['pekerjaan_wakil'] ?></td>  
									              	</tr>
									              	<tr>
										                <td width="3%" valign="top"></td>
										                <td width="10%" valign="top">Pendidikan</td>       
										                <td width="3%" valign="top">:</td>
										                <td align="justify"><?php echo $form[0]['pendidikan_wakil'] ?></td>  
									              	</tr>
								            	</table>
								        		</td>
								        	</tr>
									        <tr>
			                        			<td width="5%" valign="top"></td>
			                        			<td width="95%"> (b) <b>Orang Yang Mengendalikan Korporasi</b> </td>
			                        		</tr>
			                        		<tr>
					                        	<td width="5%" valign="top"></td>
					                        	<td width="95%">
					                        	<table width="100%">
									              	<tbody>
									              		<tr>
										                	<td width="3%" valign="top"></td>
										                	<td width="30%" valign="top">Nama Lengkap</td>       
										                	<td width="3%" valign="top">:</td> 
										                	<td align="justify"><?php echo $form[0]['nama_kendali'] ?></td> 
										              	</tr>
											            <tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">Tempat Lahir</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify"><?php echo $form[0]['tempat_lahirkendali'] ?></td>  
											            </tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">Umur/Tanggal Lahir</td>       
											                <td width="3%" valign="top">:</td> 
											                <td align="justify"><?php echo umur($form[0]['tanggal_lahirwakil']); ?>/<?php echo tgl_indo($form[0]['tanggal_lahirwakil']); ?></td> 
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">Jenis Kelamin</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify"><?php echo $form[0]['jk_kendali'] ?></td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">Kebangsaan</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify"><?php echo $form[0]['kebangsaan_kendali'] ?></td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">Tempat Tinggal</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify"><?php echo $form[0]['alamat_kendali'] ?></td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">Agama</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify"><?php echo $form[0]['agama_kendali'] ?></td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">Pekerjaan</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify"><?php echo $form[0]['pekerjaan_kendali'] ?></td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">Pendidikan</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify">.<?php echo $form[0]['pendidikan_kendali'] ?></td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">Identitas lain</td>       
											                <td width="3%" valign="top"></td>
											                <td align="justify"></td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">5. Foto Bewarna</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify">............</td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">6. Nomor KTP</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify"><?php echo $form[0]['ktp_kendali'] ?></td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">7. Nomor SIM</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify"><?php echo $form[0]['sim_kendali'] ?></td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">8. Nomor Passpor</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify"><?php echo $form[0]['passpor_kendali'] ?></td>  
										              	</tr>
										              	<tr>
											                <td width="3%" valign="top"></td>
											                <td width="30%" valign="top">Lain-lain</td>       
											                <td width="3%" valign="top">:</td>
											                <td align="justify"><?php echo $form[0]['ket_kendali'] ?></td>  
										              	</tr>
									              	</tbody>
									            </table>
									        	</td>
									        </tr>
		                        		</tbody>
							       	</table>
		                      	</td>
		                    </tr>
	                    	<?php } ?>
	                        <tr>
	                          <td valign="top" colspan="3">telah sampai pada tahap tuntutan pidana yang akan dibacakan oleh Penuntut Umum pada hari <?php echo hari_indo($form[0]['tanggal'])?> tanggal <?php echo tgl_indo($form[0]['tanggal'])?></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top">2.</td>
	                          <td colspan="2">Kasus Posisi :</td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2"><?php echo $form[0]['kasus']?></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top">3.</td>
	                          <td width="15%" valign="top" colspan="2">Pasal yang didakwakan <?php echo $form[0]['pasal_dakwa']?></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top">4.</td>
	                          <td width="15%" valign="top" colspan="2">Pasal dakwaan yang dapat dibuktikan <?php echo $form[0]['pasal_bukti']?></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top">5.</td>
	                          <td colspan="2">Barang Bukti :</td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2"><?php echo $form[0]['barang_bukti']?></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top">6.</td>
	                          <td width="15%" colspan="2">Akibat yang ditimbulkan :</td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2">
	                          	<table width="100%">
	                          		<tr>
						                <td width="5%" valign="top">(1)</td>
						                <td width="35%" valign="top">Kerugian Keuangan Negara</td>       
						                <td width="3%" valign="top">:</td> 
						                <td align="justify"><?php echo $form[0]['rugi']?></td> 
						            </tr>
						            <tr>
						                <td width="5%" valign="top">(2)</td>
						                <td width="35%" valign="top">Mati</td>       
						                <td width="3%" valign="top">:</td>
						                <td align="justify"><?php echo $form[0]['mati']?></td>  
						            </tr>
						            <tr>
						                <td width="5%" valign="top">(3)</td>
						                <td width="35%" valign="top">Luka</td>       
						                <td width="3%" valign="top">:</td> 
						                <td align="justify"><?php echo $form[0]['luka']?></td> 
						            </tr>
						            <tr>
						                <td width="5%" valign="top">(4)</td>
						                <td width="35%" valign="top">Akibat Lain</td>       
						                <td width="3%" valign="top">:</td>
						                <td align="justify"><?php echo $form[0]['akibat_lain']?></td>  
						            </tr>
	                          	</table>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top">7.</td>
	                          <td colspan="2">Keadaan yang Mempengaruhi Tuntutan :</td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2">
	                          	<table width="100%">
	                          		<tr>
						                <td width="5%" valign="top">(1)</td>
						                <td valign="top">Yang memberatkan : </td>        
						            </tr>
						            <tr>
						                <td width="5%" valign="top"></td>
						                <td valign="top">
						                	<table width="100%">
						                		<?php $x=0; $poin = range('a', 'z'); $memberatkan = $this->db->get_where('tb_keadaan',array('id_sop' => $form[0]['id_sop']))->result_array();
						                		foreach ($memberatkan as $brt) {
						                		?>
						                		<tr>
						                			<td width="5%" valign="top">(<?php echo $poin[$x];?>)</td>
						                			<td valign="top"><?php echo $brt['berat'];?></td>
						                		</tr>
						                		<?php $x++;} ?>
						                	</table>
						                </td>        
						            </tr>
						            <tr>
						                <td width="5%" valign="top">(2)</td>
						                <td valign="top">Yang meringankan :</td>        
						            </tr>
						            <tr>
						                <td width="5%" valign="top"></td>
						                <td valign="top">
						                	<table width="100%">
						                		<?php $y=0;
						                		foreach ($memberatkan as $brt) {
						                		?>
						                		<tr>
						                			<td width="5%" valign="top">(<?php echo $poin[$y];?>)</td>
						                			<td valign="top"><?php echo $brt['ringan'];?></td>
						                		</tr>
						                		<?php $y++;} ?>
						                	</table>
						                </td>        
						            </tr>
	                          	</table>
	                          </td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top">8.</td>
	                          <td colspan="2">Tolak Ukur :</td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2"><?php echo $form[0]['tolak_ukur'] ?></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top">9.</td>
	                          <td colspan="2">Hasil Penelitian Kemasyarakatan</td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2"><?php echo $form[0]['hasil'] ?></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top">10.</td>
	                          <td colspan="2">Laporan Sosial</td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2"><?php echo $form[0]['laporan'] ?></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top">11.</td>
	                          <td colspan="2">Rencana Tuntutan Pidana</td>
	                        </tr>


	                        <!-- -->

	                        <?php foreach ($data as $dt) { ?>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2"><b>Usul <?php echo posisi($dt['level']);?></b></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2">
	                          	<table width="100%">
	                          		<tr>
	                          			<td width="10%" valign="top">Pidana Pokok</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top"><?php echo $dt['pidana_pokok'];?></td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Pidana Tambahan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top"><?php echo $dt['pidana_tambahan'];?></td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Tindakan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top"><?php echo $dt['tindakan'];?></td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Barang Bukti</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top"><?php echo $dt['bb_rentut'];?></td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Biaya Perkara</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top"><?php echo $dt['biaya_perkara'];?></td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Pendapat/keadaan lain yang perlu dipertimbangkan sesuai fakta hukum di persidangan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top"><?php echo $dt['pendapat'];?></td>
	                          		</tr>
	                          	</table>
	                          </td>
	                        </tr>
	                        <tr>
	                        	<td><br></td>
	                        	<td><br></td>
	                        </tr>
	                        <?php } ?>

	                        
	                        <!-- -->


	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2"><b>Usul Direktur Tindak Pidana*****)</b></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2">
	                          	<table width="100%">
	                          		<tr>
	                          			<td width="10%" valign="top">Pidana Pokok</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Pidana Tambahan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Tindakan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Barang Bukti</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Biaya Perkara</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............***)</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Pendapat/keadaan lain yang perlu dipertimbangkan sesuai fakta hukum di persidangan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............****)</td>
	                          		</tr>
	                          	</table>
	                          </td>
	                        </tr>
	                        <tr>
	                        	<td><br></td>
	                        	<td><br></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2"><b>Usul Jaksa Agung Muda Tindak Pidana Umum*****)</b></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2">
	                          	<table width="100%">
	                          		<tr>
	                          			<td width="10%" valign="top">Pidana Pokok</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Pidana Tambahan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Tindakan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Barang Bukti</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Biaya Perkara</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............***)</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Pendapat/keadaan lain yang perlu dipertimbangkan sesuai fakta hukum di persidangan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............****)</td>
	                          		</tr>
	                          	</table>
	                          </td>
	                        </tr>
	                        <tr>
	                        	<td><br></td>
	                        	<td><br></td>
	                        </tr>
	                        <tr>
	                        	<td valign="top" colspan="2">****) Pejabat yang mengusulkan tuntutan pidana, pejabat yang menandatangani rencana tuntutan pidana dan pejabat yang mengendalikan tuntutan pidana disesuaikan dengan pendelegasian kewenangan pengendalian tuntutan pidana sebagaimana diatur dalam Surat Edaran Jaksa Agung tentang Pedoman Tuntutan Pidana Perkara Tindak Pidana Umum yang untuk tuntutan tertentu tetap dikendalikan olek Jaksa Agung</td>
	                        </tr>
	                        <tr>
	                        	<td><br></td>
	                        	<td><br></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2"><b>Tuntutan Jaksa Agung Republik Indonesia</b></td>
	                        </tr>
	                        <tr>
	                          <td width="2%" valign="top"></td>
	                          <td colspan="2">
	                          	<table width="100%">
	                          		<tr>
	                          			<td width="10%" valign="top">Pidana Pokok</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Pidana Tambahan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Tindakan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Barang Bukti</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Biaya Perkara</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............***)</td>
	                          		</tr>
	                          		<tr>
	                          			<td width="10%" valign="top">Pendapat/keadaan lain yang perlu dipertimbangkan sesuai fakta hukum di persidangan</td>
	                          			<td width="3%" valign="top">:</td>
	                          			<td valign="top">.............****)</td>
	                          		</tr>
	                          	</table>
	                          </td>
	                        </tr>
	                    </tbody>
                    </table>                        	
                </tr>
              </tbody>
            </table>
          </div>
          <br>
          <br>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
    </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->

  </body>
</html>
