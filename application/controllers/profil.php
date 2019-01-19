<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller{

  public function index()
  {
    $data['konten']="profil";
    $this->load->view('template', $data);
  }
}
 ?>
