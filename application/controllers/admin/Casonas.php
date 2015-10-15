<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Casonas extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/public/casonas/casonas'; 
        $this->load->view('public/principal',$data);
    }
    
    public function CasaBracamonte() {
        $data['content'] = 'application/views/public/casonas/casabracamonte'; 
        $this->load->view('public/principal',$data);
    }
}