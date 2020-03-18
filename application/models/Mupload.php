<?php
class Mupload extends CI_Model {
        
        function uploadBB($post){
                $nmfile="BB_".time();
		        $config['upload_path']          = 'asset/file/';
		        $config['allowed_types']        = 'pdf';
		        $config['max_size']             = 1048576;
		        $config['file_name']            = $nmfile;
		        $this->load->library('upload', $config);
		        if($this->upload->do_upload($post)){

		            $basePath=base_url('asset/file/'.$this->upload->file_name);

		        }
		        return $basePath;
        }
        function uploadFotoOrang($id_sop){
                $nmfile="foto_".time();
		        $config['upload_path']          = 'asset/gambar/foto';
		        $config['allowed_types']        = 'jpg|jpeg|png';
		        $config['max_size']             = 1048576;
		        $config['max_width']            = 10240;
        		$config['max_height']           = 7680;
		        $config['file_name']            = $nmfile;
		        $this->load->library('upload', $config);
		        if($this->upload->do_upload('foto_orang')){
		            $basePath=base_url('asset/file/'.$this->upload->file_name);
		            $this->db->update('tb_orang',array('foto_orang'=>$this->upload->file_name),array('id_sop'=>$id_sop));
		        }
		        return $basePath;
        }
        function uploadFotoKoporasi($id_sop){
        	 $nmfile="foto_".time();
		        $config['upload_path']          = 'asset/gambar/foto';
		        $config['allowed_types']        = 'jpg|jpeg|png';
		        $config['max_size']             = 1048576;
		        $config['max_width']            = 10240;
        		$config['max_height']           = 7680;
		        $config['file_name']            = $nmfile;
		        $this->load->library('upload', $config);
		        if($this->upload->do_upload('foto_kendali')){
		            $basePath=base_url('asset/file/'.$this->upload->file_name);
		            $this->db->update('tb_kendalikorporasi',array('foto_kendali'=>$this->upload->file_name),array('id_sop'=>$id_sop));
		        }
		        return $basePath;
        }
}
?>