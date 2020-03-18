<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentut extends CI_Controller {
	public $level = 4;
	public $nextLevel = 5;
	function __construct()
	{
		parent::__construct();
        if($this->session->userdata('logged_in_erentut')!=TRUE){
            redirect('login');
         }
	 	error_reporting(0);
	}
	public function index(){
		$data=array(
				'isi'=> 'aspidum/rentut/index',
				'data' => $this->db->order_by('id_sop','DESC')->
						get_where('tb_sopform',array('posisi'=>$this->session->userdata('level')))->result_array()
			);
		if(!empty($data)){
			$data['jumlah'] = count($data['data']);
		}
		$this->load->view('aspidum/snippet/template',$data);
	}
	public function usulan(){
		$jumlah = $this->db->order_by('id_sop','DESC')->get_where('tb_sopform',array('posisi'=>$this->session->userdata('level')))->result_array();
		$data=array(
				'isi'=> 'aspidum/rentut/usulan',
				'data' => $this->db->order_by('tb_rentut.id_sop','DESC')->
						join('tb_sopform', 'tb_rentut.id_sop=tb_sopform.id_sop','LEFT')->
						where('tb_rentut.level', $this->level)->
						get('tb_rentut')->result_array()
		);
		$data['jumlah'] = 0;
		if(!empty($data)){
			$data['jumlah'] = count($jumlah);
		}
		$this->load->view('aspidum/snippet/template',$data);
	}
	public function tambah($id=null)
	{
		$this->form_validation->set_rules('pidana_pokok', 'pidana_pokok', 'required');
		$this->form_validation->set_rules('pidana_tambahan', 'pidana_tambahan', 'required');
		$this->form_validation->set_rules('tindakan', 'tindakan','required');
		$this->form_validation->set_rules('bb_rentut', 'bb_rentut', 'required');
		$this->form_validation->set_rules('biaya_perkara', 'biaya_perkara', 'required');
		$this->form_validation->set_rules('pendapat', 'pendapat', 'required');

		if($this->form_validation->run()===false){
			$id=$this->Mcrypt->decrypt($id);
			$check=$this->db->get_where('tb_rentut',array('id_sop' => $id,'level' => $this->level))->result_array();
			$data=array(
				'isi'	=> 'aspidum/rentut/form',
				'data'	=> $check,
			);
			$this->load->view('aspidum/snippet/template',$data);

		}else{
			$id=$this->Mcrypt->decrypt($id);
			$check=$this->db->get_where('tb_rentut',array('id_sop' => $id,'level' => $this->level))->result_array();
			if(count($check)>0){
				echo $proses=1; #1 edit
			}else{
				echo $proses=0; #0 tambah
			};
			$this->Mform48->rentut($id,$proses,$this->level,$this->nextLevel);
			if($proses==0){
				$this->Mlog->logAktivitas("Aspidum ".$this->session->userdata('username')." menambahkan usulan");
				$this->session->set_flashdata('msg','Usulan Berhasil Ditambahkan.');
				redirect('aspidum/rentut/index');
			}else{
				$this->Mlog->logAktivitas("Aspidum ".$this->session->userdata('username')." mengubah usulan");
				$this->session->set_flashdata('msg','Usulan Berhasil Diubah.');
				redirect('aspidum/rentut/usulan');
			}
		}
		
	}
	public function form(){
		$jumlah = $this->db->order_by('id_sop','DESC')->get_where('tb_sopform',array('posisi'=>$this->session->userdata('level')))->result_array();
		$data=array(
				'isi'=> 'aspidum/rentut/manajemen_form',
				'data' => $this->db->order_by('id_sop','DESC')->
						get('tb_sopform')->result_array()
		);
		$data['jumlah'] = 0;
		if(!empty($data)){
			$data['jumlah'] = count($jumlah);
		}
		$this->load->view('aspidum/snippet/template',$data);
	}
	public function lihatForm($jenis){
		$data=array(
				'data' => $this->db->order_by('tb_rentut.id_sop','DESC')->
						join('tb_sopform', 'tb_rentut.id_sop=tb_sopform.id_sop','LEFT')->
						where('tb_rentut.level <=', $this->level)->
						get('tb_rentut')->result_array()
		);
		if($jenis == '47'){
			$this->load->view('form/form47',$data);
		}elseif ($jenis == '48') {
			$this->load->view('form/form48',$data);
		}elseif ($jenis == 'surat') {
			$this->load->view('form/surat',$data);
		}
	}
	
}
