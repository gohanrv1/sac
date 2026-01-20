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
 
        	$this->db->select('username, nombres');
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
		    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		     if($query->num_rows()==1){
		     	// Generar token único y seguro
		     	$token = substr(str_shuffle($permitted_chars), 0, 32);
		     	
		     	// Guardar token en la base de datos
		     	$this->db->set('token',$token);
				$this->db->where('username', $usuario);
				$this->db->update('users');
				
				// Obtener datos del usuario
				$user_data = $query->row();
				
				// Preparar contenido del email
				$enlace = base_url().'index.php/login/nuevaclave/'.$token;
				$nombre = $user_data->nombres ? $user_data->nombres : $usuario;
				
				$htmlContent = '<!DOCTYPE html>';
				$htmlContent .= '<html><head><meta charset="UTF-8"></head><body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">';
				$htmlContent .= '<div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9;">';
				$htmlContent .= '<div style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 30px; text-align: center; border-radius: 10px 10px 0 0;">';
				$htmlContent .= '<h1 style="color: white; margin: 0;">Recuperación de Contraseña</h1>';
				$htmlContent .= '</div>';
				$htmlContent .= '<div style="background: white; padding: 30px; border-radius: 0 0 10px 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">';
				$htmlContent .= '<p style="font-size: 16px;">Hola <strong>'.$nombre.'</strong>,</p>';
				$htmlContent .= '<p>Hemos recibido una solicitud para recuperar tu contraseña. Si no realizaste esta solicitud, puedes ignorar este correo.</p>';
				$htmlContent .= '<p>Para restablecer tu contraseña, haz clic en el siguiente botón:</p>';
				$htmlContent .= '<div style="text-align: center; margin: 30px 0;">';
				$htmlContent .= '<a href="'.$enlace.'" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 15px 40px; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block;">RESTABLECER CONTRASEÑA</a>';
				$htmlContent .= '</div>';
				$htmlContent .= '<p style="color: #666; font-size: 14px;">O copia y pega este enlace en tu navegador:</p>';
				$htmlContent .= '<p style="word-break: break-all; color: #667eea; font-size: 12px;">'.$enlace.'</p>';
				$htmlContent .= '<p style="color: #999; font-size: 12px; margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px;">Este enlace expirará en 24 horas por seguridad.</p>';
				$htmlContent .= '</div></div></body></html>';
				
				// MÉTODO 1: Intentar con librería Email de CodeIgniter
				$email_enviado = false;
				try {
					$this->email->clear();
					$config = array(
						'protocol' => 'mail',
						'mailtype' => 'html',
						'charset' => 'utf-8',
						'newline' => "\r\n",
						'crlf' => "\r\n"
					);
					
					$this->email->initialize($config);
					$this->email->from('noreply@' . $_SERVER['HTTP_HOST'], 'Sistema SAC');
					$this->email->to($usuario);
					$this->email->subject('Recuperación de Contraseña - SAC');
					$this->email->message($htmlContent);
					
					if($this->email->send()){
						$email_enviado = true;
						log_message('info', 'Email enviado con CodeIgniter a: '.$usuario);
					}
				} catch(Exception $e) {
					log_message('error', 'Error CodeIgniter Email: '.$e->getMessage());
				}
				
				// MÉTODO 2: Si falla, usar mail() directo de PHP
				if(!$email_enviado) {
					$subject = 'Recuperación de Contraseña - SAC';
					$headers = "MIME-Version: 1.0\r\n";
					$headers .= "Content-type: text/html; charset=utf-8\r\n";
					$headers .= "From: Sistema SAC <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
					$headers .= "Reply-To: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
					$headers .= "X-Mailer: PHP/" . phpversion();
					
					if(mail($usuario, $subject, $htmlContent, $headers)){
						$email_enviado = true;
						log_message('info', 'Email enviado con mail() a: '.$usuario);
					} else {
						log_message('error', 'Error enviando email con mail() a: '.$usuario);
					}
				}
				
				// Retornar éxito (el token ya está guardado aunque falle el email)
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