<<<<<<< HEAD
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Lugar extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
    public function index() {
        $data['content'] = 'application/views/admin/lugar/lugar_list'; 
        $this->load->view('admin/index',$data);
    }
    public function create() {
        $data['content'] = 'application/views/admin/lugar/form'; 
        $this->load->view('admin/index',$data);
    }

=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Lugar extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
    public function index() {
        $data['content'] = 'application/views/admin/lugar/lugar_list'; 
        $this->load->view('admin/index',$data);
    }
    public function create() {
        $data['content'] = 'application/views/admin/lugar/form'; 
        $this->load->view('admin/index',$data);
    }

>>>>>>> f715f51d5f673893028e94a581ed42d7e4a1d48d
  }