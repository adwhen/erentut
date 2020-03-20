<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generateqr extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}
	public function generate($kode,$nip){
		$url = base_url('generateqr/authenticationQr/'.$kode.'/'.$nip);
		QRCode::png(
            $url,
            $outfile = false,
            $level = QR_ECLEVEL_H,
            $size = 5,
            $margin = 2
        );
	}
	public function authenticationQr($id,$nip){
		$data = array(
			'data' => $this->db->select('*, tb_sopform.id_sop as id')->order_by('tb_rentut.id_sop','DESC')->
					join('tb_korporasi','tb_korporasi.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_kendalikorporasi','tb_kendalikorporasi.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_wakilkorporasi','tb_wakilkorporasi.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_orang','tb_orang.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_terlibat','tb_terlibat.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_pegawai','tb_pegawai.nip=tb_terlibat.nip','LEFT')->
					join('tb_kasus','tb_kasus.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_pasaldakwa','tb_pasaldakwa.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_pasalbukti','tb_pasalbukti.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_barangbukti','tb_barangbukti.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_akibat','tb_akibat.id_sop=tb_sopform.id_sop','LEFT')->
					join('tb_keadaan','tb_keadaan.id_sop=tb_sopform.id_sop','LEFT')->
	              	join('tb_ukur','tb_ukur.id_sop=tb_sopform.id_sop','LEFT')->
	              	join('tb_rentut','tb_rentut.id_sop=tb_sopform.id_sop','LEFT')->
					where('tb_sopform.id_sop', $id)->
					where('tb_pegawai.nip', $nip)->
					get('tb_sopform')->result_array(),
		);
		$this->load->view('authQR',$data);
	}
}
