<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Hospedajes extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/admin/hospedajes/hospedajes_list'; 
        $this->load->view('admin/index',$data); 
    }
   public function create() {
        $data['content'] = 'application/views/admin/hospedajes/form'; 
        $this->load->view('admin/index',$data); 
    }
   public function save() {
        $data['content'] = 'application/views/admin/hospedajes/hospedajes_list'; 
        $this->load->view('admin/index',$data); 
    }

}