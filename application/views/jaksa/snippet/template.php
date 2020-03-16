<?php 
$this->load->view('jaksa/snippet/header');
$this->load->view('jaksa/snippet/sidebar');
if(!empty($isi)){$this->load->view($isi);}
$this->load->view('jaksa/snippet/footer');
?>
