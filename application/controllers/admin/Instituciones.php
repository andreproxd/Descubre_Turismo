<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instituciones extends CI_Controller {

  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/admin/instituciones/instituciones_list';
        $this->load->view('admin/index',$data);
    }

   public function create() {
        $data['content'] = 'application/views/admin/instituciones/form';
        $this->load->view('admin/index',$data);
    }

    public function save() {
        $data['content'] = 'application/views/admin/restaurantes/instituciones_list';
        $this->load->view('admin/index',$data);
    }
}
