<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct()
	{
		 parent::__construct();
	         if($this->session->userdata('logged_in_erentut')!=TRUE){
	            redirect('login');
	         }
		 	error_reporting(0);
	}
	public function index(){
		$where=array(
			'tb_terlibat.nip'=>$this->session->userdata('username'),
			'posisi !='		=> "6"
		);
		$data=array(
				'isi'=> 'jaksa/laporan/index',
				'judul' => 'LAPORAN RENTUT',
				'data' => $this->db->order_by('tb_sopform.id_sop','DESC')->
						join('tb_terlibat','tb_terlibat.id_sop=tb_sopform.id_sop')->
						get_where('tb_sopform',$where)->result_array()
			);
			$this->load->view('jaksa/snippet/template',$data);
	}
	public function tambah($id=null)
	{
		$this->form_validation->set_rules('tujuan', 'tujuan', 'required');
		$this->form_validation->set_rules('dari', 'dari', 'required');
		$this->form_validation->set_rules('nomor_sop', 'nomor_sop','required');
		$this->form_validation->set_rules('perihal', 'perihal', 'required');
		$this->form_validation->set_rules('lampiran', 'lampiran', 'required');
		$this->form_validation->set_rules('sifat', 'sifat', 'required');
		$this->form_validation->set_rules('terdakwa', 'terdakwa', 'required');
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');

		if($this->form_validation->run()===false){
			$uri=$this->Mcrypt->decrypt($id);
			$check=$this->Mnodis47->tampil($uri);
			$data=array(
				'isi'	=> 'jaksa/laporan/form',
				'jaksa'	=> $this->db->get_where('tb_pegawai',array('nip !='=>'admin'))->result_array(),
				'data'	=>$check,
				'keadaan' =>$this->db->get_where('tb_keadaan',array('id_sop'=>$uri))->result_array(),
			);
			$this->load->view('jaksa/snippet/template',$data);

		}else{
			$uri['id_sop']=$this->Mcrypt->decrypt($id);
			$check=$this->db->get_where('tb_sopform',$uri)->result_array();
			if(count($check)>0){
				$proses=1; #1 edit
				$this->Mlog->logAktivitas("mengubah sopform 47");
			}else{
				$proses=0; #0 tambah
				$this->Mlog->logAktivitas("menambakan sopform 47");
			}
			
			echo $id_sop=$this->Mnodis47->sopform($proses);

			$this->Mnodis47->terlibat($id_sop,$proses);

			$id_korporasi=$this->Mnodis47->korporasi($id_sop,$proses);
			$this->Mnodis47->kendalikorporasi($id_sop,$id_korporasi,$proses);
			$this->Mnodis47->wakilkorporasi($id_sop,$id_korporasi,$proses);
			$this->Mnodis47->perorangan($id_sop,$proses);
			$this->Mnodis47->kasus($id_sop,$proses);
			$this->Mnodis47->pasaldakwa($id_sop,$proses);
			$this->Mnodis47->pasalbukti($id_sop,$proses);
			$this->Mnodis47->kasus($id_sop,$proses);
			$this->Mnodis47->barangbukti($id_sop,$proses);
			$this->Mnodis47->akibat($id_sop,$proses);	
			$this->Mnodis47->keadaan($id_sop);
			$this->Mnodis47->ukur($id_sop,$proses);
			$this->Mnodis47->rentut($id_sop,$proses);
			$this->Mnodis47->hasil($id_sop,$proses);
			$this->Mnodis47->laporan($id_sop,$proses);
			$this->Mupload->uploadFotoOrang($id_sop);
			$this->Mupload->uploadFotoKoporasi($id_sop);
			$this->session->set_flashdata('msg','Laporan Berhasil Ditambahkan.');
			redirect('jaksa/laporan/index');


		}
		
	}
	public function hapus($id){
		$uri['id_sop']=$this->Mcrypt->decrypt($id);
		$this->db->delete('tb_sopform',$uri);
		$this->db->delete('tb_terlibat',$uri);
		$this->db->delete('tb_akibat',$uri);
		$this->db->delete('tb_barangbukti',$uri);
		$this->db->delete('tb_kasus',$uri);
		$this->db->delete('tb_keadaan',$uri);
		$this->db->delete('tb_kendalikorporasi',$uri);
		$this->db->delete('tb_korporasi',$uri);
		$this->db->delete('tb_orang',$uri);
		$this->db->delete('tb_pasalbukti',$uri);
		$this->db->delete('tb_pasaldakwa',$uri);
		$this->db->delete('tb_rentut',$uri);
		$this->db->delete('tb_sopform',$uri);
		$this->db->delete('tb_terlibat',$uri);
		$this->db->delete('tb_ukur',$uri);
		$this->db->delete('tb_wakilkorporasi',$uri);
		$this->Mlog->logAktivitas("menambahkan/mengubah sopform 47");
		$this->session->set_flashdata('msg','Laporan Berhasil Dihapus.');
		redirect('jaksa/laporan/index');
	}
	public function proses($id=null){
			$uri=$this->Mcrypt->decrypt($id);
			$check=$this->Mnodis47->tampil($uri);
			$data=array(
				'isi'	=> 'jaksa/laporan/form',
				'jaksa'	=> $this->db->get_where('tb_pegawai',array('nip !='=>'admin'))->result_array(),
				'data'	=> $check,
				'proses'=> "disabled"
			);
			$this->load->view('jaksa/snippet/template',$data);
	}
	public function selesai(){
		$where=array(
			'tb_terlibat.nip'=>$this->session->userdata('username'),
			'posisi'		=> "6"
		);
			$data=array(
				'isi'=> 'jaksa/laporan/selesai',
				'judul' =>'LAPORAN RENTUT SELESAI',
				'data' => $this->db->order_by('tb_sopform.id_sop','DESC')->
						join('tb_terlibat','tb_terlibat.id_sop=tb_sopform.id_sop')->
						get_where('tb_sopform',$where)->result_array()
			);
			$this->load->view('jaksa/snippet/template',$data);
	}
	public function rentut($jenis,$id){
		$id=$this->Mcrypt->decrypt($id);
		$data=array(
			
			'form' => $this->db->order_by('tb_rentut.id_sop','DESC')->
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
