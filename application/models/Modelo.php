<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}


  
  public function can_login($email,$password)
  {

  	  $this->db->where('email',$email);
  	  $this->db->where('password',$password);

  	  $query = $this->db->get('Personal');

  	  if($query->num_rows()>0)
  	  {
        return $query->result_array();
  	  }

  }




 
 public function registrar_usuario($usuario){
     
      $this->db->where('email',$usuario['email']);
      $query = $this->db->get('personal');

      if($query->num_rows()>0){
        return FALSE;
      }
      else
      {
         
         $this->db->insert('personal',$usuario);
         return TRUE;
      }
 }




 public function add_patient($patient)
 {
   $this->db->where('cedula',$patient['cedula']);
   $query = $this->db->get('paciente');

   if($query->num_rows()>0){
     return false;
   }else
   {
     $this->db->insert('paciente',$patient);
     return $this->db->insert_id();
   }

 }

  
 public function add_direccion($dir)
 {
   $this->db->insert('direccion',$dir);
 }


 public function get_paciente($cedula){
   $this->db->where('cedula',$cedula);
   $query = $this->db->get('paciente');
  
    if($query->num_rows()>0){
       return $query->result_array();
    }else{
      return false;
    }

 }


 public function get_dir_paciente($id_paciente){

       $this->db->where('id_paciente',$id_paciente);
       $query = $this->db->get('direccion');

       if($query->num_rows()>0){
          return $query->result_array();
       }else{
        return false;
       }
 }










}









?>