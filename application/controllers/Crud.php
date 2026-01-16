<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Crud extends CI_Controller {

	 public function __construct()

    {
         parent::__construct();     
         $this->load->model('Model_crud');
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
    
    	$this->load->view('consultar',$data);
	}

	
	public function guardar()
	{
	 
 	$this->verificar_login();
	$data['nombres'] = $this->session->userdata('nombres');
    $data['apellidos'] = $this->session->userdata('apellidos');
    $data["username"] = $this->session->userdata('username');
    $data["rol"] = $this->session->userdata('rol');
    
    	$this->load->view('guardar',$data);
	}
	
		public function actualizar()
	{
	 
 	$this->verificar_login();
	$data['nombres'] = $this->session->userdata('nombres');
    $data['apellidos'] = $this->session->userdata('apellidos');
    $data["username"] = $this->session->userdata('username');
    $data["rol"] = $this->session->userdata('rol');
    
    	$this->load->view('actualizar',$data);
	}
	
	
	
	
public function eliminar(){
    $cc = $this->input->post("cc");
      $cc = $this->security->xss_clean($cc);
     $user =  $this->session->userdata('id_usuario');
      $datos= $this->Model_crud->eliminar($cc,$user);
      
      echo 2;

  }


public function consultarcc(){
      $cc = $this->input->post("cc");
      $cc = $this->security->xss_clean($cc);
      
        $user =  $this->session->userdata('id_usuario');
      $datos2= $this->Model_crud->contador_consulta($user);
      $datos= $this->Model_crud->consultarcc($cc);
      
       
      echo json_encode($datos);

  }
  public function consultarcca(){
      
      $cc = $this->input->post("cc");
      $cc = $this->security->xss_clean($cc);
      
        $user =  $this->session->userdata('id_usuario');
      $datos= $this->Model_crud->consultarcca($cc,$user);
      
       
      echo json_encode($datos);

  }
  
    public function placa(){
      
      $cc = $this->input->post("cc");
      $cc = $this->security->xss_clean($cc);
      
        $user =  $this->session->userdata('id_usuario');
      $datos= $this->Model_crud->consultarplaca($cc,$user);
      
       
      echo json_encode($datos);

  }
  
  
  
  
  public function crear_reporte(){

        $data = json_decode(file_get_contents('php://input'), true);
        // echo json_encode($data);
           $cc = $data['cc'];
           $user = $this->session->userdata('id_usuario');
          $datos= $this->Model_crud->consultarcca($cc,$user);
          
          
         
        if ($datos != NULL ){
             echo "duplicado";
        }else{
  
           $nombres = strtoupper($data['nombres']);
           $apellidos = strtoupper($data['apellidos']);
           $placa = $data['placa'];
           $d_reporte = strtoupper($data['d_reporte']);
           $Valor_Reporte = strtoupper($data['Valor_Reporte']);
           $fecha_reporte = strtoupper($data['fecha_reporte']);
           $Estado =strtoupper($data['Estado']);
           $registra =  $this->session->userdata('id_usuario');

            $result=$this->Model_crud->crear_reporte($cc,$nombres,$apellidos,$placa,$d_reporte,$Valor_Reporte,$fecha_reporte,$Estado,$registra);
           echo json_encode($result);
    
}
          
        
    } 
 
  
  public function actualizar_reporte(){

        $data = json_decode(file_get_contents('php://input'), true);
        // echo json_encode($data);
        
        

           $cc = $data['cc'];
           $nombres = strtoupper($data['nombres']);
           $apellidos = strtoupper($data['apellidos']);
           $placa = $data['placa'];
           $d_reporte = strtoupper($data['d_reporte']);
           $Valor_Reporte = strtoupper($data['Valor_Reporte']);
         
           $Estado =strtoupper($data['Estado']);
           $registra =  $this->session->userdata('id_usuario');
           $F_r = $data['fecha_reporte'];
           $f_C = $data['f_cierre'];


            $result=$this->Model_crud->actualizar_reporte($cc,$nombres,$apellidos,$placa,$d_reporte,$Valor_Reporte,$Estado,$registra,$F_r,$f_C);
           echo json_encode($result);
        
    } 
 
  public function actualizar_reporte_id(){
        $data = json_decode(file_get_contents('php://input'), true);
        
        $id = $data['id'];
        $nombres = strtoupper($data['nombres']);
        $apellidos = strtoupper($data['apellidos']);
        $placa = strtoupper($data['placa']);
        $d_reporte = strtoupper($data['d_reporte']);
        $Valor_Reporte = $data['Valor_Reporte'];
        $Estado = strtoupper($data['Estado']);
        $F_r = $data['fecha_reporte'];
        $f_C = $data['f_cierre'];

        $result = $this->Model_crud->actualizar_reporte_por_id($id,$nombres,$apellidos,$placa,$d_reporte,$Valor_Reporte,$Estado,$F_r,$f_C);
        echo json_encode($result);
    }
  
  public function eliminar_id(){
        $id = $this->input->post("id");
        $id = $this->security->xss_clean($id);
        $resultado = $this->Model_crud->eliminar_por_id($id);
        echo $resultado ? 2 : 0;
    }
  
  
  


 public function verificar_login(){

    if($this->session->userdata('is_logued_in') == FALSE )
      {
         redirect(base_url().'index.php/login');
        }
    if($this->session->userdata('rol')=="admin" || $this->session->userdata('rol')=="usuario"  ){

    }else{
        return  redirect(base_url().'index.php/login');
    }

  }


}