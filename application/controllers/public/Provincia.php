<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Provincia extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
       
    }
    
    public function ascope() {
        $data['content'] = 'application/views/public/atractivos/provincia/ascope'; 
        $this->load->view('public/principal',$data);
    }
}