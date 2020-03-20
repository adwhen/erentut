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
                  <td width="60%" align="left"><b><?php echo $form47[0]['dari'] ?></b></td>       
                  <td width="40%" align="right"><b>SOP FORM - 47</b></td> 
                </tr>
                <tr>
                	<td colspan="2"><br></td>
                </tr>
                <tr>
                	<td colspan="2" align="center"><b><u>NOTA DINAS</u></b></td>
                </tr>
              </tbody>
            </table>
            <br>
            <table border="0" style="width: 100%;" align="justify">
              <tbody>
                <tr>  
                  <td width="7%" align="justify" valign="top">Kepada Yth</td>       
                  <td width="2%" align="justify" valign="top">:</td>           
                  <td align="justify">Kepala Kejaksaan Negeri <?php echo lokasi($form47[0]['tujuan'])?>	</td>                   
                </tr>
                <tr>  
                  <td width="7%" align="justify" valign="top">Dari</td>       
                  <td width="2%" align="justify" valign="top">:</td>           
                  <td align="justify">Tim Penuntut Umum pada Kejaksaan Negeri <?php echo lokasi($form47[0]['dari'])?></td>                  
                </tr>
                <tr>  
                  <td width="7%" align="justify" valign="top">Nomor</td>       
                  <td width="2%" align="justify" valign="top">:</td>           
                  <td width="38%" align="justify"><?php echo $form47[0]['nomor_sop']?></td>                 
                </tr>
                <tr>  
                  <td width="7%" valign="top">Perihal</span></td>       
                  <td width="2%" valign="top">:</td>           
                  <td width="38%" valign="top" align="justify"><?php echo $form47[0]['perihal']?></td>                    
                </tr>
              </tbody>
            </table>
            <hr width="80%" align="right">
            <br>
            <table border="0" style="width: 100%;">
              	<tbody>
                    <tr>
                      	<td width="2%" valign="top">1.</td>
                      	<td width="98%">Perkara tindak pidana dengan nama Terdakwa :</td>
                    </tr>
                    <?php if($form47[0]['terdakwa']=="Perorangan"){ ?>
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
					                <td align="justify"><?php echo $form47[0]['nama_orang'] ?></td> 
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">Tempat Lahir</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['tempat_lahirorang'] ?></td>  
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">Umur/Tanggal Lahir</td>       
					                <td width="3%" valign="top">:</td> 
					                <td align="justify"><?php echo tgl_indo($form47[0]['tanggal_lahirorang']) ?></td> 
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">Jenis Kelamin</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['jk_orang'] ?></td>  
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">Kebangsaan</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['kebangsaan_orang'] ?></td>  
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">Tempat Tinggal</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['tempat_tinggalorang'] ?></td>  
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">Agama</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['agama_orang'] ?></td>  
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">Pekerjaan</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['pekerjaan_orang'] ?></td>  
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">Pendidikan</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['pendidikan_orang'] ?></td>  
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
					                <td align="justify"><?php echo $form47[0]['ktp_orang'] ?></td>  
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">3. Nomor SIM</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['sim_orang'] ?></td>  
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">4. Nomor Passpor</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['passpor_orang'] ?></td>  
					              </tr>
					              <tr>
					                <td width="5%" valign="top"></td>
					                <td width="30%" valign="top">5. Lain-lain</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['ket_orang'] ?></td>  
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
								                <td align="justify"><?php echo $form47[0]['nama_korporasi'] ?></td> 
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Tempat, tanggal pendirian</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify"><?php echo $form47[0]['tempat_pendirian'] ?>, <?php echo tgl_indo( $form47[0]['tanggal_pendirian']) ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Nomor anggaran dasar/akta pendirian/peraturan/dokumen/perjanjian serta perubahan terakhir</td>       
								                <td width="3%" valign="top">:</td> 
								                <td align="justify" valign="top"><?php echo $form47[0]['nomor_anggaran'] ?></td> 
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Nomor Salinan Kep. Menkumham tentang Persetujuan Akta Pendirian Perseroan </td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify" valign="top"><?php echo $form47[0]['nomor_pendirian'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Nomor Salinan Kep. Menkunham tentang Persetujuan Akta Perubahan Perseroan</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify" valign="top"><?php echo $form47[0]['nomor_perubahan'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Nomor dan tanggal akta korporasi pada saat tindak pidana terjadi</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify" valign="top"><?php echo $form47[0]['nomor_korporasi'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Tempat kedudukan</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify" valign="top"><?php echo $form47[0]['tempat_korporasi'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Kebangsaan korporasi</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify" valign="top"><?php echo $form47[0]['kebangsaan_korporasi'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Surat Keterangan terdaftar Mendagri untuk Ormas tidak berbadan hukum</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify" valign="top"><?php echo $form47[0]['surat_korporasi'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Jenis Korporasi</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify" valign="top"><?php echo $form47[0]['jenis_korporasi'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Bentuk kegiatan/usaha</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify" valign="top"><?php echo $form47[0]['kegiatan_koporasi'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Alamat Korporasi</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify" valign="top"><?php echo $form47[0]['alamat_korporasi'] ?></td>  
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
								                <td align="justify"><?php echo $form47[0]['npwp'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">2. Nomor Wajib Daftar Perusahaan</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify"><?php echo $form47[0]['nwdp'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">3. Lain-lain</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify"><?php echo $form47[0]['kegiatan_korporasi'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top" colspan="3"><b>Identitas Orang Yang Mewakili Korporasi**)</b></td>         
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Nama Lengkap</td>       
								                <td width="3%" valign="top">:</td> 
								                <td align="justify"><?php echo $form47[0]['nama_wakil'] ?></td> 
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Tempat Lahir</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify"><?php echo $form47[0]['tempat_lahirwakil'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Umur/Tanggal Lahir</td>       
								                <td width="3%" valign="top">:</td> 
								                <td align="justify"><?php echo umur($form[0]['tanggal_lahirwakil']); ?>/<?php echo $form47[0]['tanggal_lahirwakil'] ?></td> 
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Jenis Kelamin</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify"><?php echo $form47[0]['jk_wakil'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Kebangsaan</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify"><?php echo $form47[0]['kebangsaan_wakil'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Tempat Tinggal</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify"><?php echo $form47[0]['alamat_wakil'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Agama</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify"><?php echo $form47[0]['agama_wakil'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Pekerjaan</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify"><?php echo $form47[0]['pekerjaan_wakil'] ?></td>  
							              	</tr>
							              	<tr>
								                <td width="3%" valign="top"></td>
								                <td width="10%" valign="top">Pendidikan</td>       
								                <td width="3%" valign="top">:</td>
								                <td align="justify"><?php echo $form47[0]['pendidikan_wakil'] ?></td>  
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
								                	<td align="justify"><?php echo $form47[0]['nama_kendali'] ?></td> 
								              	</tr>
									            <tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">Tempat Lahir</td>       
									                <td width="3%" valign="top">:</td>
									                <td align="justify"><?php echo $form47[0]['tempat_lahirkendali'] ?></td>  
									            </tr>
								              	<tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">Umur/Tanggal Lahir</td>       
									                <td width="3%" valign="top">:</td> 
									                <td align="justify"><?php echo umur($form47[0]['tanggal_lahirwakil']); ?>/<?php echo tgl_indo($form47[0]['tanggal_lahirwakil']); ?></td> 
								              	</tr>
								              	<tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">Jenis Kelamin</td>       
									                <td width="3%" valign="top">:</td>
									                <td align="justify"><?php echo $form47[0]['jk_kendali'] ?></td>  
								              	</tr>
								              	<tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">Kebangsaan</td>       
									                <td width="3%" valign="top">:</td>
									                <td align="justify"><?php echo $form47[0]['kebangsaan_kendali'] ?></td>  
								              	</tr>
								              	<tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">Tempat Tinggal</td>       
									                <td width="3%" valign="top">:</td>
									                <td align="justify"><?php echo $form47[0]['alamat_kendali'] ?></td>  
								              	</tr>
								              	<tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">Agama</td>       
									                <td width="3%" valign="top">:</td>
									                <td align="justify"><?php echo $form47[0]['agama_kendali'] ?></td>  
								              	</tr>
								              	<tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">Pekerjaan</td>       
									                <td width="3%" valign="top">:</td>
									                <td align="justify"><?php echo $form47[0]['pekerjaan_kendali'] ?></td>  
								              	</tr>
								              	<tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">Pendidikan</td>       
									                <td width="3%" valign="top">:</td>
									                <td align="justify">.<?php echo $form47[0]['pendidikan_kendali'] ?></td>  
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
									                <td align="justify"><?php echo $form47[0]['ktp_kendali'] ?></td>  
								              	</tr>
								              	<tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">7. Nomor SIM</td>       
									                <td width="3%" valign="top">:</td>
									                <td align="justify"><?php echo $form47[0]['sim_kendali'] ?></td>  
								              	</tr>
								              	<tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">8. Nomor Passpor</td>       
									                <td width="3%" valign="top">:</td>
									                <td align="justify"><?php echo $form47[0]['passpor_kendali'] ?></td>  
								              	</tr>
								              	<tr>
									                <td width="3%" valign="top"></td>
									                <td width="30%" valign="top">Lain-lain</td>       
									                <td width="3%" valign="top">:</td>
									                <td align="justify"><?php echo $form47[0]['ket_kendali'] ?></td>  
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
                      <td width="2%"></td>
                      <td valign="top">telah sampai pada tahap tuntutan pidana yang akan dibacakan oleh Penuntut Umum pada hari <?php echo hari_indo($form47[0]['tanggal']) ?> tanggal <?php echo tgl_indo($form47[0]['tanggal']) ?></td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top">2.</td>
                      <td valign="top">Kasus Posisi :</td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top"></td>
                      <td valign="top"><?php echo $form47[0]['kasus'] ?></td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top">3.</td>
                      <td width="15%" valign="top">Pasal yang didakwakan <?php echo $form47[0]['pasal_dakwa'] ?></td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top">4.</td>
                      <td width="15%" valign="top">Pasal dakwaan yang dapat dibuktikan <?php echo $form47[0]['pasal_bukti'] ?></td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top">5.</td>
                      <td> Barang Bukti :</td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top"></td>
                      <td><?php echo $form47[0]['barang_bukti'] ?></td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top">6.</td>
                      <td valign="top">Akibat yang ditimbulkan :</td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top"></td>
                      <td valign="top">
                      	<table width="100%">
                      		<tbody>
                      			<tr>
					                <td width="2%" valign="top">-</td>
					                <td width="30%" valign="top">Kerugian Keuangan Negara</td>       
					                <td width="3%" valign="top">:</td> 
					                <td align="justify"> Rp <?php echo $form47[0]['rugi'] ?></td> 
					            </tr>
					            <tr>
					                <td width="2%" valign="top">-</td>
					                <td width="30%" valign="top">Mati</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['mati'] ?></td>  
					            </tr>
					            <tr>
					                <td width="2%" valign="top">-</td>
					                <td width="30%" valign="top">Luka</td>       
					                <td width="3%" valign="top">:</td> 
					                <td align="justify"><?php echo $form47[0]['luka'] ?></td> 
					            </tr>
					            <tr>
					                <td width="2%" valign="top">-</td>
					                <td width="30%" valign="top">Akibat Lain</td>       
					                <td width="3%" valign="top">:</td>
					                <td align="justify"><?php echo $form47[0]['akibat_lain'] ?></td>  
					            </tr>
                      		</tbody>
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
				                <td width="2%" valign="top">7.1</td>
				                <td valign="top">Yang memberatkan : </td>        
				            </tr>
				            <tr>
				                <td width="2%" valign="top"></td>
				                <td valign="top">
				                	<table width="100%">
				                		<tbody>
				                			<?php $x=0; $poin = range('a', 'z'); $memberatkan = $this->db->get_where('tb_keadaan',array('id_sop' => $form[0]['id_sop']))->result_array();
						                		foreach ($memberatkan as $brt) {
						                			if(!empty($brt['berat'])){
						                		?>
								                		<tr>
								                			<td width="5%" valign="top">(<?php echo $poin[$x];?>)</td>
								                			<td valign="top"><?php echo $brt['berat'];?></td>
								                		</tr>
						                		<?php 
								                	}else{
								                		continue;
								                	}
									                $x++;
									            } ?>
				                		</tbody>
				                	</table>
				                </td>        
				            </tr>
				            <tr>
				                <td width="2%" valign="top">7.2</td>
				                <td valign="top">Yang meringankan :</td>        
				            </tr>
				            <tr>
				                <td width="2%" valign="top"></td>
				                <td valign="top">
				                	<table width="100%">
				                		<tbody>
				                			<?php $y=0;
						                		foreach ($memberatkan as $brt) {
						                			if(!empty($brt['ringan'])){
						                		?>
						                		<tr>
						                			<td width="5%" valign="top">(<?php echo $poin[$y];?>)</td>
						                			<td valign="top"><?php echo $brt['ringan'];?></td>
						                		</tr>
						                		<?php }else{
						                			continue;
						                		}
						                		$y++;
						                	} ?>
				                		</tbody>
				                	</table>
				                </td>        
				            </tr>
                      	</table>
                      </td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top">8.</td>
                      <td valign="top">Tolak Ukur :</td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top"></td>
                      <td valign="top"><?php echo $form47[0]['tolak_ukur'] ?></td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top">9.</td>
                      <td valign="top">Rencana tuntutan pidana</td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top"></td>
                      <td valign="top">
                      	<table width="100%">
                      		<tbody>
                      			<tr>
                      				<td width="2%" valign="top">9.1</td>
                      				<td valign="top">Usul Pendapat Umum</td>
                      			</tr>
                      			<tr>
                      				<td></td>
                      				<td>
                      					<table width="100%">
                      						<tbody>
                      							<tr>
                      								<td width="2%" valign="top">-</td>
                      								<td width="20%" valign="top">Pidana pokok</td>
                      								<td width="2%" valign="top">:</td>
                      								<td valign="top" align="justify"><?php echo $form47[0]['pidana_pokok'] ?></td>
                      							</tr>
                      							<tr>
                      								<td width="2%" valign="top">-</td>
                      								<td width="20%" valign="top">Pidana tambahan</td>
                      								<td width="2%" valign="top">:</td>
                      								<td valign="top" align="justify"><?php echo $form47[0]['pidana_tambahan'] ?></td>
                      							</tr>
                      							<tr>
                      								<td width="2%" valign="top">-</td>
                      								<td width="20%" valign="top">Tindakan</td>
                      								<td width="2%" valign="top">:</td>
                      								<td valign="top" align="justify"><?php echo $form47[0]['tindakan'] ?></td>
                      							</tr>
                      							<tr>
                      								<td width="2%" valign="top">-</td>
                      								<td width="20%" valign="top">Barang bukti</td>
                      								<td width="2%" valign="top">:</td>
                      								<td valign="top" align="justify"><?php echo $form47[0]['bb_rentut'] ?></td>
                      							</tr>
                      							<tr>
                      								<td width="2%" valign="top">-</td>
                      								<td width="20%" valign="top">Biaya perkara</td>
                      								<td width="2%" valign="top">:</td>
                      								<td valign="top" align="justify"><?php echo $form47[0]['biaya_perkara'] ?></td>
                      							</tr>
                      						</tbody>
                      					</table>
                      				</td>
                      			</tr>
                      			<tr>
                      				<td width="2%" valign="top">9.2</td>
                      				<td valign="top">Saran Kasi Pidum*)</td>
                      			</tr>
                      			<tr>
                      				<td width="2%" valign="top"></td>
                      				<td valign="top"><?php echo $form47[0]['saran'] ?></td>
                      			</tr>
                      			<tr>
                      				<td width="2%"" valign="top">9.3</td>
                      				<td valign="top">Pendapat Kepala Kejaksaan Negeri*)</td>
                      			</tr>
                      			<tr>
                      				<td width="2%" valign="top"></td>
                      				<td valign="top"><?php echo $form47[0]['pendapat'] ?></td>
                      			</tr>
                      		</tbody>
                      	</table>
                      </td>
                    </tr>
                </tbody>                        	
            </table>
          </div>
          <br>
          <div style="page-break-inside: avoid;">
            <table border="0" style="width: 100%;">
                <tr>  
                  <td width="40%"></td>    
                  <td width="60%" align="center"><b>PENUNTUT UMUM</b></td>
                </tr>
                <?php 
                $terlibat = $this->db->join('tb_pegawai','tb_pegawai.nip=tb_terlibat.nip','LEFT')->
							where('tb_terlibat.id_sop', $form[0]['id'])->
							get('tb_terlibat')->result_array();
                foreach ($terlibat as $trl) {
                ?>
                <tr> 
                  <td width="40%"></td>   
                  <td width="60%" height="60" align="center">
                  	<?php $kode = $form[0]['id'];$nip = $trl['nip'];?>
					<img style="width:20%" src="<?php echo site_url('Generateqr/generate/'.$kode.'/'.$nip) ?>">
				  </td>   
                </tr>
                <tr>
                  <td width="40%"></td>    
                  <td width="60%" align="center"><u>( <?php echo $trl['nama_pegawai'] ?> )</u></td>                         
                </tr>
                <tr> 
                  <td width="40%"></td>     
                  <td width="60%" align="center">Pangkat/Nip. <?php echo $trl['pangkat_pegawai'].'/'.$trl['nip'];?></td>         
                </tr>
            <?php } ?>
            </table>
          </div>
          <br>
          <!-- /.row -->
        </section>
        <footer class="main-footer">
          <div class="pull-right hidden-xs">
          	<p>* Diisi sesuai unit organisasi (Kejari/Cabjari)</p>
             <u><b>Arsip.</u></b>
          </div>
          <hr width="5%" align="left">
        </footer>
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
