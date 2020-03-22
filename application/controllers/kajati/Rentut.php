<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentut extends CI_Controller {
	public $level = 5;
	public $nextLevel = 6;
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
				'isi'=> 'kajati/rentut/index',
				'data' => $this->db->order_by('id_sop','DESC')->
						get_where('tb_sopform',array('posisi'=>$this->session->userdata('level')))->result_array()
			);
		if(!empty($data)){
			$data['jumlah'] = count($data['data']);
		}
		$this->load->view('kajati/snippet/template',$data);
	}
	public function usulan(){
		$jumlah = $this->db->order_by('id_sop','DESC')->get_where('tb_sopform',array('posisi'=>$this->session->userdata('level')))->result_array();
		$data=array(
				'isi'=> 'kajati/rentut/usulan',
				'data' =>  $this->db->order_by('tb_rentut.id_sop','DESC')->
						join('tb_sopform', 'tb_rentut.id_sop=tb_sopform.id_sop','LEFT')->
						where('tb_rentut.level', $this->level)->
						get('tb_rentut')->result_array()
		);
		$data['jumlah'] = 0;
		if(!empty($data)){
			$data['jumlah'] = count($jumlah);
		}
		$this->load->view('kajati/snippet/template',$data);
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
			$jumlah = $this->db->order_by('id_sop','DESC')->get_where('tb_sopform',array('posisi'=>$this->session->userdata('level')))->result_array();
			$id=$this->Mcrypt->decrypt($id);
			$check=$this->db->get_where('tb_rentut',array('id_sop' => $id,'level' => $this->level))->result_array();
			$jaksa = $this->db->get_where('tb_rentut',array('id_sop' => $id,'level' => 1))->result_array();
			$kasi = $this->db->get_where('tb_rentut',array('id_sop' => $id,'level' => 2))->result_array();
			$kajari = $this->db->get_where('tb_rentut',array('id_sop' => $id,'level' => 3))->result_array();
			$aspidum = $this->db->get_where('tb_rentut',array('id_sop' => $id,'level' => 4))->result_array();
			$data=array(
				'isi'	=> 'kajati/rentut/form',
				'data'	=> $check,
				'jaksa' => $jaksa,
				'kasi' => $kasi,
				'kajari' => $kajari,
				'aspidum' => $aspidum
			);
			$data['jumlah'] = 0;
			if(!empty($data)){
				$data['jumlah'] = count($jumlah);
			}
			$this->load->view('kajati/snippet/template',$data);

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
				$this->Mlog->logAktivitas("Kajati ".$this->session->userdata('username')." menambahkan usulan");
				$this->session->set_flashdata('msg','Usulan Berhasil Ditambahkan.');
				redirect('kajati/rentut/index');
			}else{
				$this->Mlog->logAktivitas("Kajati ".$this->session->userdata('username')." mengubah usulan");
				$this->session->set_flashdata('msg','Usulan Berhasil Diubah.');
				redirect('kajati/rentut/usulan');
			}
		}
		
	}
	public function form(){
		$jumlah = $this->db->order_by('id_sop','DESC')->get_where('tb_sopform',array('posisi'=>$this->session->userdata('level')))->result_array();
		$data=array(
				'isi'=> 'kajati/rentut/manajemen_form',
				'data' => $this->db->order_by('tb_sopform.id_sop','DESC')->
                  		join('tb_rentut','tb_rentut.id_sop=tb_sopform.id_sop','LEFT')->
                  		where('tb_rentut.level',$this->level)->
						get('tb_sopform')->result_array()
		);
		$data['jumlah'] = 0;
		if(!empty($data)){
			$data['jumlah'] = count($jumlah);
		}
		$this->load->view('kajati/snippet/template',$data);
	}
	public function lihatForm($jenis,$id){
		$id=$this->Mcrypt->decrypt($id);
		$data=array(
			'data' => $this->db->order_by('tb_rentut.id_sop','DESC')->
					join('tb_sopform', 'tb_rentut.id_sop=tb_sopform.id_sop','LEFT')->
					where('tb_rentut.level <=', $this->level)->
					where('tb_rentut.id_sop', $id)->
					get('tb_rentut')->result_array(),
			'form' => $this->db->select('*, tb_sopform.id_sop as id')->order_by('tb_rentut.id_sop','DESC')->
					join('tb_korporasi','tb_korporasi.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_kendalikorporasi','tb_kendalikorporasi.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_wakilkorporasi','tb_wakilkorporasi.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_orang','tb_orang.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_kasus','tb_kasus.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_pasaldakwa','tb_pasaldakwa.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_pasalbukti','tb_pasalbukti.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_barangbukti','tb_barangbukti.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_akibat','tb_akibat.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_keadaan','tb_keadaan.id_sop=tb_sopform.id_sop','LEFT')->
                  	join('tb_ukur','tb_ukur.id_sop=tb_sopform.id_sop','LEFT')->
                  	join('tb_rentut','tb_rentut.id_sop=tb_sopform.id_sop','LEFT')->
                  	join('tb_hasil','tb_hasil.id_sop=tb_sopform.id_sop','LEFT')->
                  	join('tb_laporan','tb_laporan.id_sop=tb_sopform.id_sop','LEFT')->
					where('tb_sopform.id_sop', $id)->
					get('tb_sopform')->result_array(),
			'kajari'=>$this->db->get_where('tb_rentut',array('id_sop'=>$id,'level'=>3))->result_array(),
			'form47'=>$this->Mnodis47->tampil($id),
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
