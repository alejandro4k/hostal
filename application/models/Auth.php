<?php
class Auth extends CI_Model{
    function __construct(){
        $this->load->database();
    }
    public function login($user,$pass){
        $data = $this->db->get_where('usuarios',array('nombre'=> $user, 'contraseña'=>$pass),1);
        if($data->result_array()){

            return $data->row();
        }else{
            return false;
        }

    }
}

?>