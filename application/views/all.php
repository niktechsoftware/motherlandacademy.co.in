<?php

$this->load->view('topbar/headercss');
$this->load->view('topbar/header');
$this->load->view($page);
$this->load->view('bottombar/footer');
$this->load->view('bottombar/footerjs');

?>