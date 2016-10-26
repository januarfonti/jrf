<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_frontend extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_profile()
  {
      $this->db->select('isi');
      $this->db->from('jrf_profile');
      return $this->db->get()->row();
  }



  public function update($data)
  {
      $this->db->where('id','1');
      $this->db->update('jrf_profile', $data);

  }
}
