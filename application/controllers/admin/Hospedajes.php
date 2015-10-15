<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Hospedajes extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/public/hospedajes/hospedajes'; 
        $this->load->view('public/principal',$data); 
    }
    
        public function HosteriaElsol() {
        $data['content'] = 'application/views/public/hospedajes/hosteriaelsol'; 
        $this->load->view('public/principal',$data);
    }
}