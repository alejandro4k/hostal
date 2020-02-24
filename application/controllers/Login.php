<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('Auth');
    }
	public function index()
	{
		/*
        $this->load->view('plantillas/header');
        $this->load->view('login');
        $this->load->view('plantillas/footer');
		*/
		//$this->load->view('footer');
		if($this->session->userdata('is_loged')){
			redirect('Dashboard');
		}else{

			$datos['contenido_title'] = "Login";
			$datos['contenido'] = "login";
			$datos['javascripts'] = "Jslogin";
			$this->load->view('plantillas/plantilla_login', $datos);

		}	

	}
	
	public function test(){
		echo $this->db->query("SELECT VERSION()")->row('version');
	}
	public function Validate(){
		$username = $this->input->post('user');
		$pass = $this->input->post('pass');
		$res = $this->Auth->login($username,$pass);
		if($res){
			$data_res['status']= True;
			$data_res['url']= base_url('Dashboard');
			$data = array(
				"id"=> $res->id_usuario,
				"nombre_usuario" =>$res->nombre,
				"is_loged"=> TRUE
			);
			$this->session->set_userdata($data);
		}else{
			$data_res['status']= False;
			$data_res['msg']='Usuario o contraseña incorrectos';
		}
		/*
		var_dump($res->id_usuario);
		die;
		*/
		echo json_encode($data_res);
		die;

	}
	public function Dashboard(){
		$datos['contenido_title'] = "Login";
		$datos['contenido'] = "dashboard";
		$datos['javascripts'] = "Jslogin";
        $this->load->view('plantillas/plantilla_login', $datos);
	}
	public function logout(){
		$keys = array('id','nombre_usuario','is_loged');
		$this->session->unset_userdata($keys);
		$this->session->sess_destroy();
		redirect('login');

	}
}