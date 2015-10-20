<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Provincias extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/admin/provincias/provincias_list'; 
        $this->load->view('admin/index',$data);
    }
    
    public function ascope() {
        $data['content'] = 'application/views/admin/provincias/provincias_list'; 
        $this->load->view('admin/index',$data);
    }
}