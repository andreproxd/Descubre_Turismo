<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ubicacion extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('ubicacion_model');
    }

    function index()
    {
        $this->load->model('ubicacion_model');
        $data['dptos'] = $this->ubicacion_model->devolverDepartamentos();
        $data['content'] = 'application/views/admin/lugar/create';
        $this->load->view('admin/index',$data);
    }
    function prov()
    {
        $this->ubicacion_model->devolverProvincias($this->input->get('id'));
    }
}
