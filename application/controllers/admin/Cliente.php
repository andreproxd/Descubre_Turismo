<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Cliente extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/admin/cliente/cliente_list'; 
        $this->load->view('admin/index',$data);
    }
    public function create() {
        $data['content'] = 'application/views/admin/cliente/form'; 
        $this->load->view('admin/index',$data);
    }
    public function save() {
        $data['content'] = 'application/views/admin/cliente/form'; 
        $this->load->view('admin/index',$data);
    }
    
}