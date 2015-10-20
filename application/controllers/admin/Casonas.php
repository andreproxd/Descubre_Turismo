<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Casonas extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/admin/casonas/casonas_list'; 
        $this->load->view('admin/index',$data);
    }
    
}