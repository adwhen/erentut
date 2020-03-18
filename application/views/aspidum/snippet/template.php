<?php 
$this->load->view('aspidum/snippet/header');
$this->load->view('aspidum/snippet/sidebar');
if(!empty($isi)){$this->load->view($isi);}
$this->load->view('aspidum/snippet/footer');
?>
