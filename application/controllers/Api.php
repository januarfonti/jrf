<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_frontend','frontend');
  }

  public function index()
  {
      echo "Hello World";
  }

  public function profile()
  {

    $profile = $this->frontend->get_profile();

    $this->output
      ->set_status_header(200)
      ->set_content_type('application/json', 'utf-8')
      ->set_output(json_encode($profile, JSON_PRETTY_PRINT))
      ->_display();
      exit;

  }

  public function update()
  {
      {
       $data['isi'] = $this->input->post('isi');
       $this->frontend->update($data);
       $respone = array("status" => TRUE);
       $this->output
         ->set_status_header(200)
         ->set_content_type('application/json', 'utf-8')
         ->set_output(json_encode($respone, JSON_PRETTY_PRINT))
         ->_display();
         exit;
   }
    }

}
