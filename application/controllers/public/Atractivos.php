uci<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Atractivos extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $this->load->view('public/index');
    }
    public function search() {
        $data['content'] = 'application/views/public/search'; 
        $this->load->view('public/principal',$data);
    }
    
    public function all_atractivos() {
        $data['content'] = 'application/views/public/atractivos/subtipo/all_atractivos'; 
        $this->load->view('public/principal',$data);
    }
    public function Sitios_Arqueologicos(){
        $data['content'] = 'application/views/public/atractivos/subtipo/sitios_arqueologicos'; 
        $this->load->view('public/principal',$data);    
    }
    public function Arquitectura_Edificacion(){
        $data['content'] = 'application/views/public/atractivos/subtipo/arquitectura_edificacion'; 
        $this->load->view('public/principal',$data);    
    }
    public function Recursos_Naturales(){
        $data['content'] = 'application/views/public/atractivos/subtipo/recursos_naturales'; 
        $this->load->view('public/principal',$data);    
    }
        public function chanchan(){
        $data['content'] = 'application/views/public/atractivos/atractivo_turistico/chanchan'; 
        $this->load->view('public/principal',$data);    
    }

  }