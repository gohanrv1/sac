<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model

{
    public function __construct()

    {
        parent::__construct();
        $this->load->library('email');
    }

    public function login_user($username,$password)
	 {
		 $this->db->where('username',$username);
		 $this->db->where('password',$password);
		 $this->db->where('isactive',1);
		 $query = $this->db->get('users');
		 if($query->num_rows() == 1)
		 {
		 	return $query->row();
		 }else{
			 $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos...');
			 redirect(base_url().'index.php/login','refresh');
		 }
	 }

	 public function enviarcorreo($id){
 
        	$this->db->select('username');
		    $this->db->from('users');   
		    $this->db->where('id_user',$id);
		    $query = $this->db->get();
		    $query =$query->row(); 
		    

		    return $query;
	 }

	 	 public function activarusuario($id){
	 	$data = array(            
            'isactive' => 1         
        );
         $dat = array(
         'user_id' =>$id);

	 	$this->db->insert('consultas', $dat); 
        $this->db->where('id_user', $id);
         $this->db->update('users', $data);

        	$this->db->select('username');
		    $this->db->from('users');   
		    $this->db->where('id_user',$id);
		    $query = $this->db->get();
		    $query =$query->row(); 
		    

		    return $query;
	 }

	 public function guardarclave($token, $pass){
	 	 		if($token=="" || $token==" "){
	 	 			 return "2";
	 	 		}else{
	 	 		$pass = sha1($pass);
	 	        $data = array(         
		         'password' => $pass,
		         'token' =>''
		      );
	 	         $this->db->where('token', $token);
	 	         $this->db->update('users', $data);
	 	          return "1";
	 	 		}
	 	 		
       
	 }

	 public function guardar_usuario($usuario,$nombre,$pass,$Celular){
	 	 $data = array(
         'username' =>$usuario,
         'rol' => 'usuario',
         'password' => $pass,
         'nombres' => $nombre,
         'Celular' =>$Celular,
         'isactive' => '0'
      );  
			$this->db->select('id_user, username, nombres, rol, ultima_cone');
		    $this->db->from('users');   
		    $this->db->where('username',$usuario);
    	$query = $this->db->get();

		     if($query->num_rows()>0){
		        return "1";        
		     }
		      else{
		       $this->db->insert('users', $data); 
		       return "2";        
		      }

	 }

	 public function insertar_consultas($id){
	 	 $data = array(
         'user_id' =>$id
      );  

	 	   $this->db->insert('consultas', $data); 
	 }
	    public function buscarusuario($usuario){

       $this->db->where('username',$usuario);
       $query = $this->db->get('users');
       return $query->row(); 
    
    }

	 public function verificar_user($usuario){
	 		$this->db->select('id_user, username, nombres, rol, ultima_cone');
	 	 	$this->db->from('users');   
		    $this->db->where('username',$usuario);
		    $query = $this->db->get();
		    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		     if($query->num_rows()==1){
		     	$token = substr(str_shuffle($permitted_chars), 0, 10);
		     	 	$this->db->set('token',$token);
					$this->db->where('username', $usuario);
					$this->db->update('users');
					//enviar correo con token
					$htmlContent = '<h1>Recupera tu contraseña: '.$usuario.'</h1>';
					$htmlContent .= '<p>Hola, ingresa en el siguente enlace para cambiar tu contraseña: '.base_url().'index.php/login/nuevaclave/'.$token.'</p>';
					    
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					$this->email->to($usuario);
					$this->email->from('noresponder@electo.com.co','Recuperar contraseña');
					$this->email->subject('Correo de recuperación de contraseña');
					$this->email->message($htmlContent);
					$this->email->send();
		        return "1";       
		     }
		      else{		       
		       return "2";        
		      }
	 }

	 public function ultima_con($con,$id,$ip){

	 	$data = array(
            'ultima_cone' => $con,
            'ip' => $ip          
        );
        $this->db->where('id_user', $id);
        return $this->db->update('users', $data);

	 }

 
}