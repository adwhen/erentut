<?php
class Mlog extends CI_Model {
        
    function logAktivitas($aktivitas=null){
	   $data=array(
	   	'username' 	=>$this->session->userdata('username'),
	   	'ip'		=>getIP(),
	   	'aktivitas'	=>$aktivitas,
	   	'datetime'	=>date('Y-m-d h:i:s')
	   );
	   $this->db->insert('log_aktv',$data); 
    }
}
?>