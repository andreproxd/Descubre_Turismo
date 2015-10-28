<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

  function __construct() {
    parent::__construct();

  //  $this->load->library("session");
    $this->load->helper('url');

  }

  public function index() {

    $this->load->view('public/login');
  }

 /* public function login(){
      $this->load->library("gas");
      include("application/models/Cliente.php");

      $user= $this->input->post('email');
      $password =$this->input->post('password');

      $clientes = Model\Cliente::find_by_email($user);

      if ( count($clientes) == 0 ){
        //No hay Usuarios, redirect

      }else{

          if ( $clientes[0]->password == md5($password) ){
            $_SESSION['user']['idcliente'] = $clientes[0]->idcliente;
            $_SESSION['user']['email'] = $clientes[0]->email;
            $_SESSION['user']['nombres'] = $clientes[0]->nombres;
            $_SESSION['user']['apellidos'] = $clientes[0]->apellidos;
            $data = array(
                'idcliente'=>$clientes[0]->idcliente,
                'email'=>$user
            );
            $this->session->set_userdata($data);
            redirect("public/pedido/create");
            die();
          }
      }


      redirect("Auth/index");
  }

  public function logout(){
    $this ->session->sess_destroy();
    redirect('Auth/index');
  }
     public function recovery(){

  }

  public function password($key){

        $this->load->library("gas");
        include("application/models/Cliente.php");
        $clientes = Model\Cliente::find_by_recovery($key);
        if ( count($clientes) == 0 ) die("NOT FOUND");

        $cliente = $clientes[0];
        $data = array();
        $data['cliente'] = $cliente;

        $this->load->view("public/cliente/cambiarpassword",$data);
  }

    public function setPassword(){
        $this->load->library("gas");
        include("application/models/Cliente.php");
        $key = $this->input->post("recovery","");
        if ( $key == '' ) die("NOTKEY");
        $clientes = Model\Cliente::find_by_recovery($key);
        if ( count($clientes) == 0 ) DIE("NOTFOUND");
        $cliente = $clientes[0];
        $cliente->password = md5($this->input->post("password"));
        $cliente->recovery = "";
        $cliente->save();

        redirect('Auth/index');
    }
   */
}
