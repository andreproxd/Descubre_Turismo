<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Welcome extends CI_Controller {
 
    function __construct() {
    
        parent::__construct();
    }
    
    public function index(){

        $this->load->view("welcome_message"); 
    }
    
    public function listar(){
        
        $this->load->library("gas");
        include("application/models/Mensajero.php");
        $mensajeros = Model\Mensajero::all();

        echo '<pre>';
        foreach ($mensajeros as $m)
        {
            print_r($m->idmensajero);
            print_r($m->nombres);
            print_r($m->apellidos);
            print_r($m->telefono);
            print_r($m->email);
            print_r($m->direccion);
            print_r($m->foto);
            print_r($m->estado);
            print_r($m->alcance);
            print_r($m->dni);
            print_r($m->codpromocional);
            print_r($m->idreferido);
            print_r($m->password);
            print_r($m->activo);
        }
        echo '</pre>'; 
    }
    
    public function create(){
        
        $this->load->library("gas");
        include("application/models/Mensajero.php");
        $mensajero = Model\Mensajero::make($_POST)->save();

    }    
    public function finder(){
        
        $this->load->library("gas");
        include("application/models/Mensajero.php");
        $idmensajero = $this->input->post("idmensajero");
        $mensajeros = Model\mensajero::find($idmensajero);

            echo($mensajeros->idmensajero);
            echo($mensajeros->nombres);
            echo($mensajeros->apellidos);
            echo($mensajeros->telefono);
            echo($mensajeros->email);
            echo($mensajeros->direccion);
            echo($mensajeros->foto);
            echo($mensajeros->estado);
            echo($mensajeros->alcance);
            echo($mensajeros->dni);
            echo($mensajeros->codpromocional);
            echo($mensajeros->idreferido);
            echo($mensajeros->password);
            echo($mensajeros->activo);
    }
    
    public function edit(){

        $this->load->library("gas");
        include("application/models/Mensajero.php");
        $idmensajero = $this->input->post("idmensajero");
        $mensajero = Model\Mensajero::find($idmensajero);

        $mensajero->nombres = $this->input->post("nombres");
        $mensajero->nombres = $this->input->post("apellidos");
        $mensajero->nombres = $this->input->post("telefono");
        $mensajero->nombres = $this->input->post("email");
        $mensajero->nombres = $this->input->post("direccion");
        $mensajero->nombres = $this->input->post("foto");
        $mensajero->nombres = $this->input->post("estado");
        $mensajero->nombres = $this->input->post("alcance");
        $mensajero->nombres = $this->input->post("dni");
        $mensajero->nombres = $this->input->post("codpromocional");
        $mensajero->nombres = $this->input->post("idreferido");
        $mensajero->nombres = $this->input->post("password");
        $mensajero->nombres = $this->input->post("activo");

        $mensajero->save();
    }
    
    public function delete(){

        $this->load->library("gas");
        include("application/models/Mensajero.php");
        $idmensajero = $this->input->post("idmensajero");
        $mensajero = Model\Mensajero::find($idmensajero);
        $mensajero -> delete();
    }  

}
