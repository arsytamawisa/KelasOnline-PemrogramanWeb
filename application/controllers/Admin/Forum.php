<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

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
    $data['forum']   = $this->Forum_model->tampil();

    $this->load->view("template/admin/header");
    $this->load->view("admin/forum/tampil", $data);
    $this->load->view("template/admin/footer");
  }

}
