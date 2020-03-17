<?php
class Majax extends CI_Model {
        
        function tampil_jaksa(){
        	$stringjs="";
        	$no=1;
           	$jaksa=$this->db->get_where('tb_pegawai',array('nip !='=>'admin'))->result_array();
           	foreach($jaksa as $js){
           		$string='"'.$this->Mcrypt->encrypt($js['id_pegawai']).'","'.$js['nip'].'","'.$js['nama_pegawai'].'","'.$js['jabatan_pegawai'].'","'.$js['pangkat_pegawai'].'","'.$js['golongan_pegawai'].'","'.$js['keterangan_pegawai'].'","'.$js['level'].'"';
           		$stringjs.="<tr>".
           						"<td>".$no."</td>".
           						"<td>".$js['nama_pegawai']."</td>".
           						"<td>".$js['nip']."</td>".
           						"<td>".$js['jabatan_pegawai']."/".$js['pangkat_pegawai']."/".$js['golongan_pegawai']."</td>".
           						"<td>".$js['keterangan_pegawai']."</td>".
           						"<td><center><div class='tooltip-demo'>".
           						"<button onclick='ubah(".$string.")' data-balloon='Edit' data-balloon-pos='up' data-toggle='modal' data-target='#ubah'  class='btn btn-info' title='Ubah'><i class='fa fa-pencil'></i></button>".
           						'<button onclick="hapus('."'".$this->Mcrypt->encrypt($js['id_pegawai'])."','".$no++."'".')" data-balloon-pos="up" data-toggle="modal" data-target="#hapus" class="btn btn-danger" title="Hapus"><i class="fa fa-trash"></i></button>';
           						
           	}
           	return $stringjs;
        }
}
?>