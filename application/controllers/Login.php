<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
		// if($this->session->userdata('logged_in')==TRUE){
  //               redirect('admin/beranda');
  //       }
        error_reporting(0);
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		
		if($this->form_validation->run()===false){
			$this->load->view('login');
		}else{
			$akun=array(
				'nip'=>$this->input->post('username'),
				'password'=>md5($this->input->post('password'))
			);
			$check=$this->db->get_where('tb_pegawai',$akun)->result_array();

			if(count($check)==0){
				$this->session->set_flashdata('msg', 'Username atau Password Salah');
				redirect('login');
			}else{
				$session=array(
					'logged_in_erentut' 	=>TRUE,
					'username' 				=>$this->input->post('username'),
					'nama_pegawai'			=>$check[0]['nama_pegawai'],
					'keterangan_pegawai'	=>$check[0]['keterangan_pegawai'],
					'level'					=>$check[0]['level']
				);
				$this->session->set_userdata($session);
				$this->Mlog->logAktivitas('Login ke sistem');
				if($session['username']=='admin'){
					redirect('Admin/beranda');
				}elseif($session['level']==1){
					redirect('jaksa/beranda');
				}elseif($session['level']==2){
					redirect('kasi/beranda');
				}elseif($session['level']==3){
					redirect('kajari/beranda');
				}elseif($session['level']==4){
					redirect('aspidum/beranda');
				}elseif($session['level']==5){
					redirect('kajati/beranda');
				}
			}
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
