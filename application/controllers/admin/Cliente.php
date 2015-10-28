<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {

  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $this->load->library("gas");
        include("application/models/Cliente.php");
        $clientes = Model\Cliente::where('cli_estado','1')->all();
        $data = array('clientes'=>$clientes);
        $data['content'] = 'application/views/admin/cliente/cliente_list';
        $this->load->view('admin/index',$data);
    }

    public function delete($idcliente){

        $this->load->library("gas");
        include("application/models/Cliente.php");
        $cliente = Model\Cliente::find($idcliente);
        $cliente->cli_estado = '0';
        $cliente->save();
        redirect('admin/cliente/index');
    }
}

