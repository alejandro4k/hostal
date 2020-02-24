<?php

$this->load->view('plantillas/header');
//$this->load->view('plantillas/west_seguimiento');
if(isset($datos)){
    
    $this->load->view($contenido, $datos);
}else{
    $this->load->view($contenido);
}
$this->load->view('plantillas/footer');
if (isset($javascripts)) {
    $this->load->view($javascripts);
}

/*
if ($this->session->userdata('is_loged')) {
} else {
    redirect('login');
    
}
*/
