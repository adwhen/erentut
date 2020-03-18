<?php 
$this->load->view('kasi/snippet/header');
$this->load->view('kasi/snippet/sidebar');
if(!empty($isi)){$this->load->view($isi);}
$this->load->view('kasi/snippet/footer');
?>
