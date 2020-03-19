  
  <div class="col-md-12" id="halaman2" style="display: none;">
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">NOTA DINAS (2)</h3>
            </div>
            <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kasus</label>

                  <div class="col-sm-4">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['kasus']; ?>" class="form-control" id="kasus" name="kasus" type="text">
                  </div>
                  <label class="col-sm-1 control-label">Pasal Yang Didakwakan</label>

                  <div class="col-sm-5">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['pasal_dakwa']; ?>" class="form-control" id="pasal_dakwa" name="pasal_dakwa" type="text" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pasal Barang Bukti</label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['pasal_bukti']; ?>" class="form-control" id="pasal_bukti" name="pasal_bukti" type="text"  >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Barang Bukti</label>

                  <div class="col-sm-10">
                    <textarea <?php echo $proses ?> class="form-control" id="barang_bukti" name="barang_bukti" type="text"  ><?php echo $data[0]['barang_bukti'] ?></textarea>
                  </div>
                </div>

                <div class="col-md-12" style="background-color: #00a65a;margin-bottom: 10px;"><center><label class="control-label">AKIBAT YANG DITIMBULKAN</label></center></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kerugian Keuangan Negara (Rp.)</label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['rugi']; ?>" class="form-control" id="rugi" name="rugi" type="text" placeholder="10000000"  >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Mati</label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['mati']; ?>" class="form-control" id="mati" name="mati" type="text"  >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Luka</label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['luka']; ?>" class="form-control" id="luka" name="luka" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Akibat Lain </label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['akibat_lain']; ?>" class="form-control" id="akibat_lain" name="akibat_lain" type="text">
                  </div>
                </div>
                <div class="col-md-12" style="background-color: #00a65a;margin-bottom: 10px;"><center><label class="control-label">KEADANAAN YANG MEMPENGARUHI TUNTUTAN</label></center></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yang Memberatkan <button type="button" onclick="memberatkan()">+</button></label>

                  <div class="col-sm-10" id="memberatkan">
                   <?php foreach($keadaan as $kd){ 
                      if(!empty($kd['berat'])){?>
                        <input <?php echo $proses ?> class="form-control" id="berat" name="berat[]" type="text" value="<?php echo $kd['berat']; ?>">
                      <?php }
                      } ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yang Meringankan <button type="button" onclick="meringankan()">+</button></label>
                  <div class="col-sm-10" id="meringankan">
                    <?php foreach($keadaan as $kd){
                          if(!empty($kd['ringan'])){ ?>
                      <input <?php echo $proses ?> class="form-control" id="ringan" name="ringan[]" type="text" value="<?php echo $kd['ringan']; ?>">
                          <?php }
                        } ?>
                  </div>
                  
                </div>
                <div class="col-md-12" style="background-color: #00a65a;margin-bottom: 10px;"><center><label class="control-label"></label></center></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tolak Ukur</label>

                  <div class="col-sm-10">
                    <textarea <?php echo $proses ?> class="form-control" id="tolak_ukur" name="tolak_ukur" type="text"><?php echo $data[0]['tolak_ukur']; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Hasil Penelitian Kemasyarakatan</label>

                  <div class="col-sm-10">
                    <textarea <?php echo $proses ?> class="form-control" id="hasil" name="hasil" type="text"><?php echo $data[0]['hasil']; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Laporan Sosial</label>

                  <div class="col-sm-10">
                    <textarea <?php echo $proses ?> class="form-control" id="laporan" name="laporan" type="text"><?php echo $data[0]['laporan']; ?></textarea>
                  </div>
                </div>
                <div class="col-md-12" style="background-color: #00a65a;margin-bottom: 10px;"><center><label class="control-label">RENCANA TUNTUTAN PIDANA</label></center></div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pidana Pokok</label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['pidana_pokok']; ?>" class="form-control" id="pidana_pokok" name="pidana_pokok" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pidana Tambahan</label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['pidana_tambahan']; ?>" class="form-control" id="pidana_tambahan" name="pidana_tambahan" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tindakan</label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['tindakan']; ?>" class="form-control" id="tindakan" name="tindakan" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Rentut Barang Bukti</label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?> value="<?php echo $data[0]['bb_rentut']; ?>" class="form-control" id="bb_rentut" name="bb_rentut" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Biaya Perkara</label>

                  <div class="col-sm-10">
                    <input <?php echo $proses ?>  value="<?php echo $data[0]['biaya_perkara']; ?>" class="form-control" id="biaya_perkara" name="biaya_perkara" type="text">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Saran Kasi Pidum (Sesuai Unit Organisasi)</label>

                  <div class="col-sm-10">
                    <textarea <?php echo $proses ?>  class="form-control" id="saran" name="saran" type="text"><?php echo $data[0]['saran']; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Pendapat Kepala Kejaksaan Negeri (Sesuai Unit Organisasi)</label>

                  <div class="col-sm-10">
                    <textarea <?php echo $proses ?> class="form-control" id="pendapat" name="pendapat" type="text"><?php echo $data[0]['pendapat']; ?></textarea>
                  </div>
                </div>





              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button class="btn btn-default" onclick="halaman(1)" type="button">Kembali</button>
                <button <?php echo $proses ?> class="btn btn-info pull-right" onclick="check()" type="button">Simpan</button>
              </div>
            </div>
          </div>
  </div>
  <script type="text/javascript">
    
    var rupiah = document.getElementById('rugi');
    rupiah.addEventListener('keyup', function(e){
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
 
    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix){
      var number_string = angka.replace(/[^,\d]/g, '').toString(),
      split       = number_string.split(','),
      sisa        = split[0].length % 3,
      rupiah        = split[0].substr(0, sisa),
      ribuan        = split[0].substr(sisa).match(/\d{3}/gi);
 
      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
 
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
    }
  </script>
  <script type="text/javascript">
    function memberatkan() {
      $('#memberatkan').append('<input class="form-control" id="berat" name="berat[]" type="text" >')
    }
    function meringankan(){
      $('#meringankan').append('<input  class="form-control" id="ringan" name="ringan[]" type="text" >')
    }
  </script>