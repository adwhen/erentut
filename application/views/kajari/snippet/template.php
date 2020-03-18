<?php 
$this->load->view('kajari/snippet/header');
$this->load->view('kajari/snippet/sidebar');
if(!empty($isi)){$this->load->view($isi);}
$this->load->view('kajari/snippet/footer');
?>
