<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Auth');
    }
    public function index(){
        if($this->session->userdata('is_loged')){

            $datos['contenido_title'] = "Login";
            $datos['contenido'] = "dashboard";
            $datos['javascripts'] = "Jslogin";
            $this->load->view('plantillas/plantilla_login', $datos);
        }else{
            redirect('login');
        }
    }

}

?>