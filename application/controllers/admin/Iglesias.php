<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Iglesias extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/admin/iglesias/iglesias_list'; 
        $this->load->view('admin/index',$data);  
    }
   public function create() {
        $data['content'] = 'application/views/admin/iglesias/form'; 
        $this->load->view('admin/index',$data);  
    }
   public function save() {
        $data['content'] = 'application/views/admin/iglesias/iglesias_list'; 
        $this->load->view('admin/index',$data);  
    }
    
}