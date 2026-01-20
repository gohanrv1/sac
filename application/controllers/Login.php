<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {

	 public function __construct()

    {
         parent::__construct();     
         $this->load->model('Model_login');
		 $this->load->library(array('session','form_validation'));
		 $this->load->helper(array('url','form'));
		 $this->load->database('default');
    }

    public function index()
	{
	switch ($this->session->userdata('is_logued_in')) {
		 case '':
		 $data['token'] = $this->token();		 
		 $this->load->view('login.php',$data);
		 break;
		 case 'TRUE':
		 if($this->session->userdata('rol')=="admin"){
		 	redirect(base_url().'index.php/dashboard/');
		 }
		 if($this->session->userdata('rol')=="usuario"){
		 	redirect(base_url().'index.php/crud');
		 }
		 
		 break;		 
		 default: 		  
		  $this->load->view('login.php',$data);
		 break; 
		 }
		

	}
	public function recuperar_pass(){

		 $this->load->view('recuperar_pass_view');

	}
 	
 	public function verificar_user(){
 		 $usuario = $this->input->post("usuario");
         $usuario = $this->security->xss_clean($usuario);
         $result=$this->Model_login->verificar_user($usuario);
         echo $result;
 	}

 	public function nuevaclave($token){ 
 		if($token=="" || $token==" "){
 			  redirect(base_url().'index.php/Login');
 			}else{
 				 $data['tokenclave'] = $token;	
 		 		$this->load->view('nuevaclave_view',$data);
 			}	
 		
         
 	}

 	public function registro(){
 		$this->load->view('registro_view');
 	}

 	public function guardarclave(){ 		
 		
 		 $pass = $this->input->post("pass");
         $pass = $this->security->xss_clean($pass);

          $tokenclave = $this->input->post("tokenclave");
         $tokenclave = $this->security->xss_clean($tokenclave);

         $result=$this->Model_login->guardarclave($tokenclave,$pass);
         echo $result;	
 	}
 	public function guardar_new_usuer($movil){
 	    if($movil==true){

 			$usuario = $this->input->post("usuario");
      		$usuario = $this->security->xss_clean($usuario);

      		$nombre = $this->input->post("nombre");
      		$nombre = $this->security->xss_clean($nombre);
      		
      		$Celular = $this->input->post("Celular");
      		$Celular = $this->security->xss_clean($Celular);

      		$pass = $this->input->post("pass");
      		$pass = $this->security->xss_clean($pass);

      		 $pass = sha1($pass);
					// aquiiiiii
					 $resul= $this->Model_login->guardar_usuario($usuario,$nombre,$pass ,$Celular);

					 if($resul==2){
					 		$resul= $this->Model_login->buscarusuario($usuario);
					 		 $this->Model_login->insertar_consultas($resul->id_user);
      		$htmlContent = '<h1>Nuevo Usuario: '.$usuario.'</h1>';
			$htmlContent .= '<p>Hola, Nuevo registro en la plataforma <br /><strong>Correo:</strong> '.$usuario.' <br /> <strong>Empresa:</strong> '.$nombre.'<br /> <strong>Enviar Correo de validacion:</strong> '.base_url().'index.php/login/enviarcorreo/'.$resul->id_user;
					    
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					$this->email->to('admisac@hotmail.com');
					//$this->email->to('aldairbarahonar@gmail.com');
					$this->email->from('noresponder@electo.com.co','SAC');
					$this->email->subject('Nuevo usuario '.$usuario);
					$this->email->message($htmlContent);
					
					$this->email->send();
				
					  
					 echo "1";
					}else{
						echo "2";
					} 
 	        
 	    } else{
 	        
 	        if(isset($_FILES["file"]["name"])) {
 			
 			$path = $_FILES["file"]["tmp_name"];

 			/*$par=explode(".", $_FILES["file"]["name"]);*/

 			$ruta_destino_archivo = "excel/{$_FILES["file"]["name"]}";
            $archivo_ok = move_uploaded_file($path , $ruta_destino_archivo);


 			$usuario = $this->input->post("usuario");
      		$usuario = $this->security->xss_clean($usuario);

      		$nombre = $this->input->post("nombre");
      		$nombre = $this->security->xss_clean($nombre);
      		
      		$Celular = $this->input->post("Celular");
      		$Celular = $this->security->xss_clean($Celular);

      		$pass = $this->input->post("pass");
      		$pass = $this->security->xss_clean($pass);

      		 $pass = sha1($pass);
					// aquiiiiii
					 $resul= $this->Model_login->guardar_usuario($usuario,$nombre,$pass ,$Celular);

					 if($resul==2){
					 		$resul= $this->Model_login->buscarusuario($usuario);
					 		 $this->Model_login->insertar_consultas($resul->id_user);
      		$htmlContent = '<h1>Nuevo Usuario: '.$usuario.'</h1>';
			$htmlContent .= '<p>Hola, Nuevo registro en la plataforma <br /><strong>Correo:</strong> '.$usuario.' <br /> <strong>Empresa:</strong> '.$nombre.'<br /> <strong>Enviar Correo de validacion:</strong> '.base_url().'index.php/login/enviarcorreo/'.$resul->id_user;
					    
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					$this->email->to('admisac@hotmail.com');
					//$this->email->to('aldairbarahonar@gmail.com');
					$this->email->from('noresponder@electo.com.co','SAC');
					$this->email->subject('Nuevo usuario '.$usuario);
					$this->email->message($htmlContent);
					$this->email->attach($ruta_destino_archivo);
					$this->email->send();
				
					 unlink($ruta_destino_archivo);
					 echo "1";
					}else{
						echo "2";
					} 
 
   		 }
 	        
 	    }
 		


 	}

public function enviarcorreo($id){

	  $result =  $this->Model_login->enviarcorreo($id);

	 		$htmlContent = '<!DOCTYPE html>';
			$htmlContent .= '<html><head><meta charset="UTF-8"></head><body style="font-family: Arial, sans-serif;">';
			$htmlContent .= '<div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9;">';
			$htmlContent .= '<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 30px; text-align: center; border-radius: 10px 10px 0 0;">';
			$htmlContent .= '<h1 style="color: white; margin: 0;">Activa tu Cuenta SAC</h1>';
			$htmlContent .= '</div>';
			$htmlContent .= '<div style="background: white; padding: 30px; border-radius: 0 0 10px 10px;">';
			$htmlContent .= '<p style="font-size: 16px;">Hola <strong>'.($result->nombres ? $result->nombres : $result->username).'</strong>,</p>';
			$htmlContent .= '<p>¡Bienvenido a SAC! Tu cuenta ha sido creada exitosamente.</p>';
			$htmlContent .= '<p>Para comenzar a usar tu cuenta, haz clic en el siguiente botón para activarla:</p>';
			$htmlContent .= '<div style="text-align: center; margin: 30px 0;">';
			$htmlContent .= '<a href="'.base_url().'index.php/login/activarusuario/'.$id.'" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px 40px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block;">ACTIVAR CUENTA AHORA</a>';
			$htmlContent .= '</div>';
			$htmlContent .= '<p style="color: #666; font-size: 14px;">O copia y pega este enlace en tu navegador:</p>';
			$htmlContent .= '<p style="word-break: break-all; color: #667eea; font-size: 12px;">'.base_url().'index.php/login/activarusuario/'.$id.'</p>';
			$htmlContent .= '</div></div></body></html>';

					$correo=$result->username;
					$this->email->clear();
					$config = array('mailtype' => 'html', 'charset' => 'utf-8', 'newline' => "\r\n");
					$this->email->initialize($config);
					$this->email->from($this->config->item('smtp_user') ? $this->config->item('smtp_user') : 'noreply@sac.com', 'Sistema SAC');
					$this->email->to($correo);
					$this->email->subject('Activa tu Cuenta - SAC');
					$this->email->message($htmlContent);				
					
					if($this->email->send()){
						log_message('info', 'Email de activación enviado a: '.$correo);
					} else {
						log_message('error', 'Error enviando email de activación: '.$this->email->print_debugger());
					}

			 	 
	 echo "<script> alert('Correo de activacion enviado al usuario.');  window.location='".base_url()."'</script>";

	 }

   public function activarusuario($id){

	  $result =  $this->Model_login->activarusuario($id);

	 		/*$htmlContent = '<h1>Tu cuenta fue activada con éxito</h1>';
			$htmlContent .= '<p> ingresa a la plataforma con tu usuario y contraseña en el siguiente enlace: <b><a href="'.base_url().'index.php/login/">INGRESAR</a></b> <br />';

					$correo=$result->username;
					$config['mailtype'] = 'html';
					$this->email->initialize($config);
					$this->email->to($correo);
					$this->email->from('noresponder@electo.com.co','SAC');
					$this->email->subject('Cuenta Activada '. $correo);
					$this->email->message($htmlContent);				
					$this->email->send();*/
			 	 
	echo "<script> alert('Usuario activado!, ingresa con tu correo y contraseña registrado en SAC');  window.location='".base_url()."'</script>";

	 }


 

	public function new_user()
		 {
			 if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
				 {
				           
 
						 $username = $this->input->post('username');
						 $password = sha1($this->input->post('password'));
						 $check_user = $this->Model_login->login_user($username,$password);



						  if($check_user == TRUE)
							{
								 $id= $check_user->id_user;
								 date_default_timezone_set('America/Bogota');
								 $con = date("Y-m-d H:i:s");    
								 $ip=$this->get_client_ip();
								 $this->Model_login->ultima_con($con,$id,$ip);


								 $data = array(
								                 'is_logued_in' => TRUE,
								                 'id_usuario' => $check_user->id_user,
								                 'rol' => $check_user->rol,
								                 'username' => $check_user->username,
								                 'ip' => $check_user->ip,
								                 'ultima_con' =>$check_user->ultima_cone,
								                 'nombres'=>$check_user->nombres,
								                 'apellidos' =>$check_user->apellidos,
								                 'rubros'=>'0'
								             ); 

								 
								 $this->session->set_userdata($data);
								 
								  redirect(base_url().'index.php/dashboard/');
							}
				 
					 }
					 else{

						   redirect(base_url().'index.php/Login');
						 } 
				
		 }



		 
		 public function token()
		 {
		 $token = md5(uniqid(rand(),true));
		 $this->session->set_userdata('token',$token);
		 return $token;
		 }
		 
		 public function logout_ci()
		 {
		 $this->session->sess_destroy();
		 redirect(base_url().'index.php/Login');
		 }
		public function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }




}
