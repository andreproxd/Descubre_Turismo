<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Cliente extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
       
    }
    
    public function contacto() {
        $data['content'] = 'application/views/cliente/contacto'; 
        $this->load->view('public/principal',$data);
    }
}