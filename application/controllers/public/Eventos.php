<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Eventos extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
    public function index() {
        $data['content'] = 'application/views/public/eventos/subtipo/all_eventos'; 
        $this->load->view('public/principal',$data);
    }
    public function Culturales(){
        $data['content'] = 'application/views/public/eventos/subtipo/culturales'; 
        $this->load->view('public/principal',$data);    
    }
    public function Religiosos(){
        $data['content'] = 'application/views/public/eventos/subtipo/religiosos'; 
        $this->load->view('public/principal',$data);    
    }
    public function Gastronomicos(){
        $data['content'] = 'application/views/public/eventos/subtipo/gastronomicos'; 
        $this->load->view('public/principal',$data);    
    }
    public function ConcursoNacionalMarinera(){
        $data['content'] = 'application/views/public/eventos/evento_turistico/concursonacionalmarinera'; 
        $this->load->view('public/principal',$data);    
    }
       
       
  }