<!DOCTYPE html>
<html>
<head>
  <style>
    table, th, td {}
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KEJAKSAAN TINGGI BENGKULU</title>
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
                  <td rowspan="4" align="left" width="2%"> <img src="<?= base_url('asset/gambar/icon/kajati.png') ?>" width="120" height="90" style="float:left;margin-right:-100;"></td>    
                  <td align="center" style="font-size: 20px;">KEJAKSAAN REPUBLIK INDONESIA</td> 
                </tr>
                <tr>
                	<td align="center" style="font-size: 30px;" >KEJAKSAAN TINGGI BENGKULU</td>
                </tr>
                <tr>
                	<td align="center">Jalan S. Parman Nomor 2 Kota Bengkulu</td>
                </tr>
                <tr>
                	<td align="center">Telp. (0736) 342006 email <u>pidumkjtbkl@gmail.com</u></td>
                </tr>
              </tbody>
            </table>
            <hr style="border-style:solid;border-color:black;border-width:3;">
            <table border="0" style="width: 100%;" align="justify">
              <tbody>
                <tr>  
                  <td width="10%" align="justify">Nomor</td>       
                  <td width="2%" align="justify">:</td>           
                  <td width="55%" align="justify"><?php echo $form47[0]['nomor_sop'] ?></td> 
                  <td width="2%" align="justify"></td>
                  <td align="justify">Bengkulu, 28 Februari 2018</td>                  
                </tr>
                <tr>  
                  <td width="10%" align="justify">Sifat</td>       
                  <td width="2%" align="justify">:</td>           
                  <td width="55%" align="justify"><?php echo $form47[0]['sifat'] ?></td>
                  <td width="2%" align="justify"></td>
                  <td align="justify"></td>                   
                </tr>
                <tr>  
                  <td width="10%" align="justify">Lampiran</td>       
                  <td width="2%" align="justify">:</td>           
                  <td width="55%" align="justify"><?php echo $form47[0]['lampiran'] ?></td> 
                  <td width="2%" align="justify"></td> 
                  <td align="justify"></td>                 
                </tr>
                <tr>  
                  <td width="10%" valign="top">Perihal</span></td>       
                  <td width="2%" valign="top">:</td>           
                  <td width="55%" valign="top" align="justify"><?php echo $form47[0]['perihal'] ?></td> 
                  <td width="2%" align="justify"></td>
                  <td align="justify"></td>                   
                </tr>
                <tr>  
                  <td width="10%" valign="top"></span></td>       
                  <td width="2%" valign="top"></td>           
                  <td width="55%" valign="top" align="justify"><hr align="left"></td> 
                  <td width="2%" align="justify"></td>
                  <td align="justify"></td>                   
                </tr>
              </tbody>
            </table>
            <p>Yth. <br> <b><?php echo $form47[0]['dari'] ?></b> <br> Di - <br> &nbsp;&nbsp; <b><u><?php echo strtoupper(lokasi($form47[0]['dari']))?></u></b></p>
            <p align="justify"> &nbsp;&nbsp;&nbsp;Sehubungan dengan surat dari <?php echo ucwords(strtolower($form47[0]['dari'])) ?> Nomor : <?php echo $form47[0]['nomor_sop'] ?> tanggal <?php echo tgl_indo($form47[0]['tanggal']) ?>, perihal sebagaimana tersebut pada pokok surat diatas, bersama ini disampaikan petunjuk pimpinan agar Jaksa Penuntut Umum menuntut :</p>
            <table border="0" style="width: 100%;">
              	<tbody>
                    <tr>
                      	<td width="2%" valign="top">1.</td>
                      	<td width="98%" valign="top" align="justify ">Terdakwa <?php if($data[0]['terdakwa']=="Perorangan"){echo $form[0]['nama_orang'];}else{echo $form[0]['nama_korporasi'];} ?> terbukti secara sah dan meyakinkan telah melakukan tindak pidana <?php echo $form[0]['kategori'] ?> sebagaimana diatur dalam melanggar <?php echo $form[0]['pasal_dakwa'] ?></td>
                    </tr>
                    <tr>
                      	<td width="2%" valign="top">2.</td>
                      	<td width="98%" valign="top" align="justify">Agar terdakwa Terdakwa <?php if($data[0]['terdakwa']=="Perorangan"){echo $form[0]['nama_orang'];}else{echo $form[0]['nama_korporasi'];} ?> dituntut pidana penjara selama <?php echo $form[0]['pidana_pokok'] ?> dan denda <?php echo $form[0]['denda'] ?></td>
                    </tr>
                    <tr>
                      <td width="2%" valign="top">3.</td>
                      <td valign="top" align="justify">Barang bukti Conform dengan Usul Kajari Bengkulu dan agar terdakwa membayar biaya perkara sebesar <?php echo $kajari[0]['biaya_perkara'] ?></td>
                    </tr>
                </tbody>                        	
            </table>
            <p align="justify">&nbsp;&nbsp;&nbsp;Demikianlah untuk dilaksanakan pembacaan tuntutan (P 43) dan putusan perkara ini agar dilaporkan kepada Kepala kejaksaan Tinggi Bengkulu serta tembusannya kepada Asisten Tindak Pidana Umum Kejaksaan Tinggi Bengkulu</p>
          </div>
          <br>
          <div style="page-break-inside: avoid;">
            <table border="0" style="width: 100%;">
                <tr>  
                  <td width="40%"></td>    
                  <td width="60%" align="center">AN KEPALA KEJAKSAAN TINGGI BENGKULU</td>
                </tr>
                <tr>  
                  <td width="40%"></td>    
                  <td width="60%" align="center">ASISTEN TINDAK PIDANA UMUM</td>
                </tr>
                <tr> 
                  <td width="40%"></td>   
                  <td width="60%" height="60"></td>   
                </tr>
                <tr>
                  <td width="40%"></td>    
                  <td width="60%" align="center"><u>(.................)</u></td>                         
                </tr>
                <tr> 
                  <td width="40%"></td>     
                  <td width="60%" align="center">Pangkat/Nip. .........</td>         
                </tr>
            </table>
          </div>
          <br>
          <!-- /.row -->
        </section>
        <footer class="main-footer">
          <div class="pull-right hidden-xs">
             <u><b>Tembusan</u></b>
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
