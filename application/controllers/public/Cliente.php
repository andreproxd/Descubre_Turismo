<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {

  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }

    public function create() {
        $this->load->library("gas");
        include("application/models/Cliente.php");
        $data['cliente'] = new Model\Cliente();

        $this->load->view('public/create',$data);
    }

    public function save(){

        $this->load->library("gas");
        include("application/models/Cliente.php");

        $_POST['cli_estado'] = '1';
        $password=$_POST['cli_password'];
        $_POST['cli_password'] = md5($password);
         $email=Model\Cliente::where(array('cli_email'=>$_POST['cli_email']))->all();
        if ( count($email)>0){

            redirect('index.php/public/cliente/create?USEREXISTS');
        }
        else{

        $cliente = Model\Cliente::make($_POST);
        $cliente->save();

        redirect('index.php/auth/index');
        }
    }

    public function change() {
        $data['content'] = 'application/views/public/cliente/change';
        $this->load->view('public',$data);
    }
}
