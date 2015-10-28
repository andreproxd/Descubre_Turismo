<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {

  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $this->load->library("gas");
        include("application/models/Administrador.php");
        $data['administrador'] = new Model\Administrador();
        $data['content'] = 'application/views/admin/administrador/administrador';
        $this->load->view('admin/index',$data);
    }

    public function save(){

        $this->load->library("gas");
        include("application/models/Administrador.php");

        $_POST['adm_estado'] = '1';
        $password=$_POST['adm_password'];
        $_POST['adm_password'] = md5($password);
         $email=Model\Administrador::where(array('adm_email'=>$_POST['adm_email']))->all();
        if ( count($email)>0){

            redirect('index.php/admin/administrador/index?USEREXISTS');
        }
        else{

        $administrador = Model\Administrador::make($_POST);
        $administrador->save();

        redirect('index.php/admin/administrador/index');
        }
    }

}
