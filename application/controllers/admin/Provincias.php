<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Provincias extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/admin/provincias/provincias_list'; 
        $this->load->view('admin/index',$data);
    }
    
    public function create() {
        $data['content'] = 'application/views/admin/provincias/form'; 
        $this->load->view('admin/index',$data);
    }
    
    public function save() {
        $data['content'] = 'application/views/admin/provincias/provincias_list'; 
        $this->load->view('admin/index',$data);
    }
    
    public function get($idDepartamento){
        
        $this->load->model('ubicacion_model');
        
        $list = array();
        $list = $this->ubicacion_model->devolverProvincias();
        
        die(json_encode($list));
    }
}