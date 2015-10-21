<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Restaurantes extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/public/restaurantes/restaurantes'; 
        $this->load->view('public/principal',$data);
    }

        public function elmochica() {
        $data['content'] = 'application/views/public/restaurantes/elmochica'; 
        $this->load->view('public/principal',$data);
    }
}