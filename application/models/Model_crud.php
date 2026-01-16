<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_crud extends CI_Model

{
    public function __construct()

    {
        parent::__construct();
        $this->load->library(array('session'));
    }

     public function consultarcc($cc){

 
   
    $query = $this->db->query("SELECT * FROM `personas` inner join users on personas.Reportante_Nombres = users.id_user  where Numero_Documento = $cc");
    return $query->result_array(); 
    //return $cc;
    
    
    }
        public function consultarcca($cc,$user){

 
   
    $query = $this->db->query("SELECT * FROM `personas` inner join users on personas.Reportante_Nombres = users.id_user  where Numero_Documento = $cc and Reportante_Nombres = $user");
    return $query->row(); 
    //return $cc;
    
    
    }
            public function consultarplaca($cc,$user){

 
   
    $query = $this->db->query("SELECT placa FROM `personas` inner join users on personas.Reportante_Nombres = users.id_user  where Numero_Documento = $cc and Reportante_Nombres = $user ");
    return $query->result_array(); 
    //return $cc;
    
    
    }
    
    
    
 public function contador_consulta( $user){
            $query = $this->db->query("UPDATE consultas SET `count` = `count` + 1  where `user_id` =  $user");
    }
    

 public function crear_reporte($cc,$nombres,$apellidos,$placa,$d_reporte,$Valor_Reporte,$fecha_reporte,$Estado,$registra){

        date_default_timezone_set('America/Bogota');
          $day = date("Y-m-d H:i:s"); 
 
 
 
             $data = array(
         'Numero_Documento' =>$cc,
         'Nombres' => $nombres,
         'Apellidos' => $apellidos,
         'Placa' => $placa,
         'Valor_Reporte' => $Valor_Reporte,
         'Descripcion_Reporte' => $d_reporte,
         'Fecha_Reporte' => $fecha_reporte,
         'Reportante_Nombres' => $registra,
         'Estado' =>$Estado
         
      ); 
        $this->db->insert('personas', $data); 
            
            return 2;
        
        
    }
    
    
    
    
         public function eliminar($cc,$user){
        $this->db->where('Numero_Documento', $cc);
         $this->db->where('Reportante_Nombres', $user);
        $this->db->delete('personas');
    }
    
    public function eliminar_por_id($id){
        $this->db->where('id', $id);
        $this->db->delete('personas');
        return $this->db->affected_rows() > 0;
    }
    
     public function actualizar_reporte($cc,$nombres,$apellidos,$placa,$d_reporte,$Valor_Reporte,$Estado,$registra,$F_r,$f_C){

        date_default_timezone_set('America/Bogota');
          $day = date("Y-m-d H:i:s"); 
 
 
 
             $data = array(
         'Nombres' => $nombres,
         'Apellidos' => $apellidos,
         'Placa' => $placa,
         'Valor_Reporte' => $Valor_Reporte,
         'Descripcion_Reporte' => $d_reporte,
         'Reportante_Nombres' => $registra,
         'Estado' =>$Estado,
         'Fecha_cierre' => $f_C,
         'Fecha_Reporte' => $F_r
         
      ); 
        $this->db->where('Numero_Documento', $cc);
        $this->db->where('Reportante_Nombres', $registra);
         $this->db->update('personas', $data);
            
            return 2;
        
        
    }
    
    public function actualizar_reporte_por_id($id,$nombres,$apellidos,$placa,$d_reporte,$Valor_Reporte,$Estado,$F_r,$f_C){
        date_default_timezone_set('America/Bogota');
        $data = array(
            'Nombres' => $nombres,
            'Apellidos' => $apellidos,
            'Placa' => $placa,
            'Valor_Reporte' => $Valor_Reporte,
            'Descripcion_Reporte' => $d_reporte,
            'Estado' =>$Estado,
            'Fecha_cierre' => $f_C,
            'Fecha_Reporte' => $F_r
        ); 
        
        $this->db->where('id', $id);
        $this->db->update('personas', $data);
        return $this->db->affected_rows() > 0 ? 2 : 0;
    }






  }