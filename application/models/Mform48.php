<?php
class Mform48 extends CI_Model {

    function tampil($id){
        $query=$this->db->select('*')->
        join('tb_rentut','tb_rentut.id_sop=tb_sopform.id_sop','LEFT')->
        get_where('tb_sopform',array('tb_sopform.id_sop'=>$id))->result_array();
        return $query;
    }

    public function rentut($id,$proses,$level,$nextLevel){
    	$data=array(
    		'id_sop'=>$id,
    		'pidana_pokok' =>$this->input->post('pidana_pokok'),
    		'pidana_tambahan' =>$this->input->post('pidana_tambahan'),
    		'tindakan' =>$this->input->post('tindakan'),
    		'bb_rentut' =>$this->input->post('bb_rentut'),
    		'biaya_perkara' =>$this->input->post('biaya_perkara'),
    		'pendapat' =>$this->input->post('pendapat'),
            'level' => $level
    	);
    	if($proses==0){
            $this->db->insert('tb_rentut',$data);
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $this->db->update('tb_sopform',array('posisi' => $nextLevel),$uri);
        }else{
            $uri['id_sop']=$this->Mcrypt->decrypt($this->uri->segment(4));
            $uri['level'] = $level;
            $this->db->update('tb_rentut',$data,$uri);
       }
    }




}
?>