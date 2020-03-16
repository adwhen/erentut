<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jaksa extends CI_Controller {
	function __construct()
	{
		 parent::__construct();
	         if($this->session->userdata('logged_in_erentut')!=TRUE){
	            redirect('login');
	         }
		 	error_reporting(0);
	}
	public function index()
	{
		$data=array(
			'isi'=> 'admin/jaksa/index',
			'data'=>$this->Majax->tampil_jaksa()
		);
		$this->load->view('admin/snippet/template',$data);
	}
	public function tambah(){
			$data=array(
				'nip'	=>$this->input->post('nip'),
				'nama_pegawai'	=>$this->input->post('nama_pegawai'),
				'jabatan_pegawai'	=>$this->input->post('jabatan_pegawai'),
				'pangkat_pegawai'	=>$this->input->post('pangkat_pegawai'),
				'golongan_pegawai'	=>$this->input->post('golongan_pegawai'),
				'keterangan_pegawai'	=>$this->input->post('keterangan_pegawai'),
				'password'	=>md5($this->input->post('password')),
			);
			$this->db->insert('tb_pegawai',$data);
            $data = array(
                    'message'   => 'Data Berhasil Di Tambahkan',
                    'baris'		=> $this->Majax->tampil_jaksa(),
            );
            echo json_encode($data); 
	}
	public function nip(){
				$reponse = array(
	                'csrfName' => $this->security->get_csrf_token_name(),
	                'csrfHash' => $this->security->get_csrf_hash()
                );
			$check=$this->db->get_where('tb_pegawai',array('nip'=>$this->input->post('nip')))->result_array();
		    if(count($check)>0){
		      echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
		   </i></span></label>';
		    }else{
		      echo '<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i></span></label>';
		    }
	}
	public function ubah(){
		$where['id_pegawai']=$this->Mcrypt->decrypt($this->input->post('id_pegawai'));
		$data=array(
				'nip'	=>$this->input->post('nip'),
				'nama_pegawai'	=>$this->input->post('nama_pegawai'),
				'jabatan_pegawai'	=>$this->input->post('jabatan_pegawai'),
				'pangkat_pegawai'	=>$this->input->post('pangkat_pegawai'),
				'golongan_pegawai'	=>$this->input->post('golongan_pegawai'),
				'keterangan_pegawai'	=>$this->input->post('keterangan_pegawai'),
				'password'	=>md5($this->input->post('password')),
			);
			$this->db->update('tb_pegawai',$data,$where);
            $data = array(
                    'message'   => 'Data Berhasil Di Ubah',
                    'baris'		=> $this->Majax->tampil_jaksa(),
            );
            echo json_encode($data); 
	}
	public function hapus(){
		$where['id_pegawai']=$this->Mcrypt->decrypt($this->input->post('id_pegawai'));
			$this->db->delete('tb_pegawai',$where);
            $data = array(
                    'message'   => 'Data Berhasil Di Ubah',
                    'baris'		=> $this->Majax->tampil_jaksa(),
            );
            echo json_encode($data); 
	}
	
}
