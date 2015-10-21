<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Iglesias extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/public/iglesias/iglesias'; 
        $this->load->view('public/principal',$data);  
    }
    
    public function SantaAna() {
        $data['content'] = 'application/views/public/iglesias/iglesiassantaana'; 
        $this->load->view('public/principal',$data);
    }
}