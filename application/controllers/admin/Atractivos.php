<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Atractivos extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
    public function index() {
        $data['content'] = 'application/views/admin/atractivos/atractivos_list'; 
        $this->load->view('admin/index',$data);
    }

  }