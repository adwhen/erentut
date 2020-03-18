<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
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
			'isi'=> 'admin/log',
			'data'=>$this->db->join('tb_pegawai','tb_pegawai.nip=log_aktv.username')->order_by('datetime','DESC')->get('log_aktv')->result_array()
		);
		$this->load->view('admin/snippet/template',$data);
	}
}
