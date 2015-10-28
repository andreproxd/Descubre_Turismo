<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lugar extends CI_Controller {

  function __construct() {
    parent::__construct();
        $this->load->helper('url');
        $this->load->model('ubicacion_model');
  }
    public function index() {
        $data['content'] = 'application/views/admin/lugar/lugar_list';
        $this->load->view('admin/index',$data);
    }
    public function create() {
        $data['dptos'] = $this->ubicacion_model->devolverDepartamentos();
        $data['provs'] = $this->ubicacion_model->devolverProvincias();
        $data['diss'] = $this->ubicacion_model->devolverDistritos();
        $data['content'] = 'application/views/admin/lugar/form';
        $this->load->view('admin/index',$data);
    }

    function prov()
    {
        $iddepartamento=$this->input->get('iddepartamento');
        $this->ubicacion_model->devolver_provincias($iddepartamento);

    }

  }

