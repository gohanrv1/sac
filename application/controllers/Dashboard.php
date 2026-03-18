<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends CI_Controller {

	 public function __construct()

    {
    parent::__construct();     
         $this->load->model('Model_dashboard');
		 $this->load->library(array('session','form_validation'));
		 $this->load->helper(array('url','form'));
		 $this->load->database('default');
    }

    public function index()
	{
	 
 	$this->verificar_login();
	$data['nombres'] = $this->session->userdata('nombres');
    $data['apellidos'] = $this->session->userdata('apellidos');
    $data["username"] = $this->session->userdata('username');
    $data["rol"] = $this->session->userdata('rol');
    
    	$this->load->view('dashboard',$data);
	}
	
	    public function eliminarm()
	{
	 
 	$this->verificar_login();
	$data['nombres'] = $this->session->userdata('nombres');
    $data['apellidos'] = $this->session->userdata('apellidos');
    $data["username"] = $this->session->userdata('username');
    $data["rol"] = $this->session->userdata('rol');
    
    	$this->load->view('eliminar',$data);
	}
	



	    public function consultas()
	{
	 
 	$this->verificar_login();
	$data['nombres'] = $this->session->userdata('nombres');
    $data['apellidos'] = $this->session->userdata('apellidos');
    $data["username"] = $this->session->userdata('username');
    $data["rol"] = $this->session->userdata('rol');
    
    	$this->load->view('consultas',$data);
	}
	
	
    public function guardar(){

    $usuario = $this->input->post("usuario");
    $usuario = $this->security->xss_clean($usuario);

    $rol = $this->input->post("rol");
    $rol = $this->security->xss_clean($rol);
    
    $Celular = $this->input->post("Celular");
    $Celular = $this->security->xss_clean($Celular);
    

    $pass = $this->input->post("pass");
    $pass = $this->security->xss_clean($pass);
    $pass = sha1($pass);
    $nombre = $this->input->post("nombre");
    $nombre = $this->security->xss_clean($nombre);

    //aqui
    $datos = $this->Model_dashboard->guardar($usuario, $rol, $pass, $nombre,$Celular);
    echo $datos;   
    
  }
public function mostrar_users(){
    $datos= $this->Model_dashboard->mostrar_users();
    echo json_encode($datos);
  }

  public function eliminar($id){
     $usuario_que_elimina = $this->session->userdata('id_usuario');
     $datos= $this->Model_dashboard->eliminar($id, $usuario_que_elimina);
     echo $id;
  }
  
  public function obtener_usuario($id){
    $datos= $this->Model_dashboard->get_user_by_id($id);
    echo json_encode($datos);
  }
  
  public function actualizar_usuario(){
    $id_user = $this->input->post("id_user");
    $id_user = $this->security->xss_clean($id_user);
    
    $usuario = $this->input->post("usuario");
    $usuario = $this->security->xss_clean($usuario);

    $rol = $this->input->post("rol");
    $rol = $this->security->xss_clean($rol);
    
    $Celular = $this->input->post("Celular");
    $Celular = $this->security->xss_clean($Celular);
    
    $pass = $this->input->post("pass");
    $pass = $this->security->xss_clean($pass);
    
    $nombre = $this->input->post("nombre");
    $nombre = $this->security->xss_clean($nombre);

    $datos = $this->Model_dashboard->actualizar_usuario($id_user, $usuario, $rol, $pass, $nombre, $Celular);
    echo $datos;   
  }
  
  public function contador(){
     $datos= $this->Model_dashboard->contador();
     echo json_encode($datos);
  }

public function eliminarm2(){
    $datos= $this->Model_dashboard->eliminarm2();
    echo json_encode($datos);
  }
  
  public function eliminarmbase($id){
    $datos= $this->Model_dashboard->eliminarmbase($id);
    echo json_encode($datos);
  }


 public function verificar_login(){

    if($this->session->userdata('is_logued_in') == FALSE )
      {
         redirect(base_url().'index.php/login');
        }
    if($this->session->userdata('rol')=="admin"){

    }else{
        return  redirect(base_url().'index.php/login');
    }

  }


}

  