<?php
class Mnodis47 extends CI_Model {
    function tampil($id){
        $query=$this->db->select('*')->
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
                              get_where('tb_sopform',array('tb_sopform.id_sop'=>$id))->result_array();
        return $query;
    }    
    function sopform($proses){
	   $sopform=array(
				'nip'=>$this->session->userdata('username'),
				'tujuan'	=>$this->input->post('tujuan'),
				'dari'	=>$this->input->post('dari'),
				'nomor_sop'	=>$this->input->post('nomor_sop'),
				'sifat'	=>$this->input->post('sifat'),
				'tanggal'	=>$this->input->post('tanggal'),
				'terdakwa'	=>$this->input->post('terdakwa'),
                'perihal'   =>$this->input->post('perihal'),
                'lampiran'   =>$this->input->post('lampiran'),
                'posisi'     => 2
			);
       if($proses==0){
            $this->db->insert('tb_sopform',$sopform);
            return $this->db->insert_id();
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_sopform',$sopform,$uri);
            return $uri['id_sop'];
       }
		 
		
    }
    function terlibat($id){
        $this->db->delete('tb_terlibat',array('id_sop'=>$id));
        $terlibat=$this->input->post('terlibat');
            foreach($terlibat as $tr){
                $data=array(
                    'id_sop'=>$id,
                    'nip'   =>$tr
                );
                $this->db->insert('tb_terlibat',$data);
            }
            return true;
    }
    function korporasi($id,$proses){
    	$korporasi=array(
    		'id_sop'=>$id,
    		'nama_korporasi'=>$this->input->post('nama_korporasi'),
    		'tempat_pendirian'=>$this->input->post('tempat_pendirian'),
    		'tanggal_pendirian'=>$this->input->post('tanggal_pendirian'),
    		'nomor_anggaran'=>$this->input->post('nomor_anggaran'),
    		'nomor_pendirian'=>$this->input->post('nomor_pendirian'),
    		'nomor_perubahan'=>$this->input->post('nomor_perubahan'),
    		'nomor_korporasi'=>$this->input->post('nomor_korporasi'),
    		'tempat_korporasi'=>$this->input->post('tempat_korporasi'),
    		'kebangsaan_korporasi'=>$this->input->post('kebangsaan_korporasi'),
    		'surat_korporasi'=>$this->input->post('surat_korporasi'),
    		'jenis_korporasi'=>$this->input->post('jenis_korporasi'),
    		'kegiatan_korporasi'=>$this->input->post('kegiatan_korporasi'),
    		'alamat_korporasi'=>$this->input->post('alamat_korporasi'),
    		'npwp'=>$this->input->post('npwp'),
    		'nwdp'=>$this->input->post('nwdp'),
    		'ket_korporasi'=>$this->input->post('ket_korporasi'),
    	);
        if($proses==0){
            $this->db->insert('tb_korporasi',$korporasi);
            return $this->db->insert_id();
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_korporasi',$korporasi,$uri);
            $query=$this->db->get_where('tb_korporasi',$uri)->result_array();
            return $query[0]['id_korporasi'];
       }
    	
    }

    function kendalikorporasi($id,$id_korporasi,$proses){
    	$korporasi=array(
    		'id_sop'=>$id,
    		'id_korporasi' => $id_korporasi,
    		'nama_kendali'=>$this->input->post('nama_kendali'),
    		'tempat_lahirkendali'=>$this->input->post('tempat_lahirkendali'),
    		'tanggal_lahirkendali'=>$this->input->post('tanggal_lahirkendali'),
    		'jk_kendali'=>$this->input->post('jk_kendali'),
    		'kebangsaan_kendali'=>$this->input->post('kebangsaan_kendali'),
    		'alamat_kendali'=>$this->input->post('alamat_kendali'),
    		'agama_kendali'=>$this->input->post('agama_kendali'),
    		'pekerjaan_kendali'=>$this->input->post('pekerjaan_kendali'),
    		'pendidikan_kendali'=>$this->input->post('pendidikan_kendali'),
    		'foto_kendali'=>$this->input->post('foto_kendali'),
    		'ktp_kendali'=>$this->input->post('ktp_kendali'),
    		'sim_kendali'=>$this->input->post('sim_kendali'),
    		'passpor_kendali'=>$this->input->post('passpor_kendali'),
    		'ket_kendali'=>$this->input->post('ket_kendali'),
    	);
    	
    	
        if($proses==0){
            $this->db->insert('tb_kendalikorporasi',$korporasi);
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_kendalikorporasi',$korporasi,$uri);
       }
    }
    function wakilkorporasi($id,$id_korporasi,$proses){
    	$korporasi=array(
    		'id_sop'=>$id,
    		'id_korporasi' => $id_korporasi,
    		'nama_wakil'=>$this->input->post('nama_wakil'),
    		'tempat_lahirwakil'=>$this->input->post('tempat_lahirwakil'),
    		'tanggal_lahirwakil'=>$this->input->post('tanggal_lahirwakil'),
    		'jk_wakil'=>$this->input->post('jk_wakil'),
    		'kebangsaan_wakil'=>$this->input->post('kebangsaan_wakil'),
    		'alamat_wakil'=>$this->input->post('alamat_wakil'),
    		'agama_wakil'=>$this->input->post('agama_wakil'),
    		'pekerjaan_wakil'=>$this->input->post('pekerjaan_wakil'),
    		'pendidikan_wakil'=>$this->input->post('pendidikan_wakil'),
    	);
    	
        if($proses==0){
           $this->db->insert('tb_wakilkorporasi',$korporasi);
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_wakilkorporasi',$korporasi,$uri);
       }
    }
    function perorangan($id,$proses){
    	$perorangan=array(
            'id_sop'=>$id,
            'nama_orang'=>$this->input->post('nama_orang'),
            'tempat_lahirorang'=>$this->input->post('tempat_lahirorang'),
            'tanggal_lahirorang'=>$this->input->post('tanggal_lahirorang'),
            'jk_orang'=>$this->input->post('jk_orang'),
            'kebangsaan_orang'=>$this->input->post('kebangsaan_orang'),
            'alamat_orang'=>$this->input->post('alamat_orang'),
            'agama_orang'=>$this->input->post('agama_orang'),
            'pekerjaan_orang'=>$this->input->post('pekerjaan_orang'),
            'pendidikan_orang'=>$this->input->post('pendidikan_orang'),
            'foto_orang'=>$this->input->post('foto_orang'),
            'ktp_orang'=>$this->input->post('ktp_orang'),
            'sim_orang'=>$this->input->post('sim_orang'),
            'passpor_orang'=>$this->input->post('passpor_orang'),
            'ket_orang'=>$this->input->post('ket_orang'),
        );
        if($proses==0){
           $this->db->insert('tb_orang',$perorangan);
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_orang',$perorangan,$uri);
       }

    }
    public function kasus($id,$proses){
    	$kasus=array(
    		'id_sop'=>$id,
    		'kasus' =>$this->input->post('kasus')
    	);
    	
        if($proses==0){
          $this->db->insert('tb_kasus',$kasus);
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_kasus',$kasus,$uri);
       }
    }
    public function pasaldakwa($id,$proses){
    	$data=array(
    		'id_sop'=>$id,
    		'pasal_dakwa' =>$this->input->post('pasal_dakwa')
    	);
    	
    	if($proses==0){
          $this->db->insert('tb_pasaldakwa',$data);
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_pasaldakwa',$data,$uri);
       }
    }
    public function pasalbukti($id,$proses){
    	$data=array(
    		'id_sop'=>$id,
    		'pasal_bukti' =>$this->input->post('pasal_bukti')
    	);
    	
    	if($proses==0){
         $this->db->insert('tb_pasalbukti',$data);
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_pasalbukti',$data,$uri);
       }
    }
    public function barangbukti($id,$proses){
    	$data=array(
    		'id_sop'=>$id,
    		'barang_bukti' =>$this->input->post('barang_bukti')
    	);
    	if($proses==0){
         $this->db->insert('tb_barangbukti',$data);
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_barangbukti',$data,$uri);
       }
    }
    public function akibat($id,$proses){
    	$data=array(
    		'id_sop'=>$id,
    		'rugi' =>$this->input->post('rugi'),
    		'mati' =>$this->input->post('mati'),
    		'luka' =>$this->input->post('luka'),
    		'akibat_lain' =>$this->input->post('akibat_lain'),
    	);
    	if($proses==0){
         $this->db->insert('tb_akibat',$data);
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_akibat',$data,$uri);
       }
    }
    public function keadaan($id){
        $this->db->delete('tb_keadaan',array('id_sop'=>$id));
        $berat=$this->input->post('berat');
        $ringan=$this->input->post('ringan');
        if(count($this->input->post('berat'))>=count($this->input->post('ringan'))){
            $keadaan=$this->input->post('berat');
        }else{
            $keadaan=$this->input->post('ringan');
        }
        $no=0;
        foreach($keadaan as $kd){
            $data=array(
                'id_sop'=>$id,
                'berat' =>$berat[$no],
                'ringan' =>$ringan[$no],
            );
            if(empty($berat[$no]) && empty($ringan[$no])){
                continue;
            }
            $this->db->insert('tb_keadaan',$data);  
            $no++;
        } 
   }
    public function ukur($id,$proses){
    	$data=array(
    		'id_sop'=>$id,
    		'tolak_ukur' =>$this->input->post('tolak_ukur'),

    	);
    	if($proses==0){
         $this->db->insert('tb_ukur',$data);
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_ukur',$data,$uri);
       }
    }
    public function rentut($id,$proses){
    	$data=array(
    		'id_sop'=>$id,
    		'pidana_pokok' =>$this->input->post('pidana_pokok'),
    		'pidana_tambahan' =>$this->input->post('pidana_tambahan'),
    		'tindakan' =>$this->input->post('tindakan'),
    		'bb_rentut' =>$this->input->post('bb_rentut'),
    		'biaya_perkara' =>$this->input->post('biaya_perkara'),
    		'saran' =>$this->input->post('saran'),
    		'pendapat' =>$this->input->post('pendapat'),
            'level' => 1

    	);
    	if($proses==0){
         $this->db->insert('tb_rentut',$data);
       }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_rentut',$data,$uri);
       }
    }




}
?>