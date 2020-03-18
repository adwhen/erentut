<?php 
$this->load->view('kajati/snippet/header');
$this->load->view('kajati/snippet/sidebar');
if(!empty($isi)){$this->load->view($isi);}
$this->load->view('kajati/snippet/footer');
?>
