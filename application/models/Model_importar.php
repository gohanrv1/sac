<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_importar extends CI_Model

{
    public function __construct()

    {
        parent::__construct();
        $this->load->library(array('session'));
    }

  
   public function insert_planilla($data){
     if(!empty($data)){
       $this->db->trans_start(); // Iniciar transacción
       $this->db->insert_batch('personas', $data);
       $this->db->trans_complete(); // Completar transacción
       
       if($this->db->trans_status() === FALSE){
         return false;
       }
       return true;
     }
     return false;
   }

  }