<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mading extends CI_Controller {

  function __construct()
  {
    parent::__construct();

    if( !$this->session->userdata('admin') OR empty($this->session->userdata('admin')) )
    {
      redirect('admin/login','refresh');
    }
  }

  public function index()
  {
    $data['mading']   = $this->Mading_model->tampil();
    $this->load->view("template/admin/header");
    $this->load->view("admin/mading/tampil", $data);
    $this->load->view("template/admin/footer");
  }

}
