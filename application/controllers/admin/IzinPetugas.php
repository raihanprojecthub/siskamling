<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class IzinPetugas extends CI_Controller{
  
  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'admin'){
        redirect('auth');
    }
}

  public function index(){
      $data['title'] = 'Absen Izin Petugas';
      $data['izinpetugas'] = $this->db->get('izin')->result();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/izin-petugas', $data);
      $this->load->view('admin/templates/admin-footer');
  }

}

?>