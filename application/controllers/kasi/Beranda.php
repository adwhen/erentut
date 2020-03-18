<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
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
		$jumlah = $this->db->order_by('id_sop','DESC')->get_where('tb_sopform',array('posisi'=>$this->session->userdata('level'),'tujuan' => $this->session->userdata('keterangan_pegawai')))->result_array();
		$data=array(
			'isi'=> 'kasi/index'
		);
		$data['jumlah'] = 0;
		if(!empty($data)){
			$data['jumlah'] = count($jumlah);
		}
		$this->load->view('kasi/snippet/template',$data);
	}
	
}
