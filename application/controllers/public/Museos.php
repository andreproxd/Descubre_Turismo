<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Museos extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/public/museos/museos'; 
        $this->load->view('public/principal',$data);  
    }
    

    public function MuseoJuguete() {
        $data['content'] = 'application/views/public/museos/museodeljueguete'; 
        $this->load->view('public/principal',$data);
    }
}