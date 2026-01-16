<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_dashboard extends CI_Model

{
    public function __construct()

    {
        parent::__construct();
        $this->load->library(array('session'));
    }

  public function guardar($usuario, $rol, $pass, $nombres,$Celular){
      
      if($rol=="A"){ $rol="admin"; } 
      if($rol=="U"){ $rol="usuario";}

        $data = array(
         'username' =>$usuario,
         'rol' => $rol,
         'password' => $pass,
         'nombres' => $nombres,
         'Celular' =>$Celular,
         'isactive' =>1
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
    
    
   public function eliminarmbase($id){
      $query = $this->db->query("DELETE FROM `personas` WHERE `id` = $id");
          return 1;
    }
    
     public function eliminarm2(){
      $query = $this->db->query('SELECT *, " . " as nd FROM personas');
          return $query->result_array();
    }
 public function contador(){
      $query = $this->db->query('SELECT * FROM `consultas` INNER JOIN users on consultas.user_id = users.id_user');
          return $query->result_array();
    }
    public function mostrar_users(){
      $query = $this->db->query('SELECT * FROM users');
          return $query->result_array();
    }

    public function get_user_by_id($id_user){
      $this->db->select('id_user, username, nombres, Celular, rol');
      $this->db->from('users');
      $this->db->where('id_user', $id_user);
      $query = $this->db->get();
      
      if($query->num_rows() > 0){
        return $query->row_array();
      }
      return false;
    }

    public function eliminar($id_user){
       $this->db->where('id_user', $id_user);
                $this->db->delete('users');
    }
  }