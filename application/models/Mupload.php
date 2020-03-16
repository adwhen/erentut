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
		            // $simpan = array(
		            //     'url_file'  => $basePath,
		            //     'nama_file' => $nama,
		            //     'ket_file'  => "sementara",
		            //     'tgl_file'  => date('Y-m-d'),
		            //     'kat_file' =>'pembinaan'
		            // );

		        }
		        return $basePath;
        }
        function uploadFoto($post){
                $nmfile="foto_".time();
		        $config['upload_path']          = 'asset/gambar/foto';
		        $config['allowed_types']        = 'jpg|jpeg|png';
		        $config['max_size']             = 1048576;
		        $config['max_width']            = 10240;
        		$config['max_height']           = 7680;
		        $config['file_name']            = $nmfile;
		        $this->load->library('upload', $config);
		        if($this->upload->do_upload($post)){
		            $basePath=base_url('asset/file/'.$this->upload->file_name);
		        }
		        return $basePath;
        }
}
?>