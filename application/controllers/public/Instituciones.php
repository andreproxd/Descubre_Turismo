<<<<<<< HEAD
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Instituciones extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/public/instituciones/instituciones'; 
        $this->load->view('public/principal',$data);  
    }
    
    public function Dircetur() {
        $data['content'] = 'application/views/public/instituciones/dircetur'; 
        $this->load->view('public/principal',$data);
    }
=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Instituciones extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/public/instituciones/instituciones'; 
        $this->load->view('public/principal',$data);  
    }
    
    public function Dircetur() {
        $data['content'] = 'application/views/public/instituciones/dircetur'; 
        $this->load->view('public/principal',$data);
    }
>>>>>>> f715f51d5f673893028e94a581ed42d7e4a1d48d
}