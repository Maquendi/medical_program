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

  	  $query = $this->db->get('personal');

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


 public function get_patient($id_paciente)
 {
   $this->db->where('id',$id_paciente);
   $query = $this->db->get('paciente');
   return $query->result_array();
 }

public function get_all_pacientes()
{
   $query = $this->db->get('paciente');
   return $query->result_array();
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


public function getListaAsistentes(){
    $this->db->where('role','Asistente');
    $query =$this->db->get('personal');


    if($query->num_rows()>0){
      return $query->result_array();
    }
 }

public function get_all_citas()
{
  $query = $this->db->get('cita');
  return $query->result_array();
}

 public function getListaMedicos(){
    $this->db->where('role','Doctor');
    $query =$this->db->get('personal');


    if($query->num_rows()>0){
      return $query->result_array();
    }
 }

 public function getMisCitas($doctorID)
 {
  
   $sql = "select concat(d.nombre,' ',d.apellido) as title ,concat(p.nombre,' ',p.apellido) as Paciente,p.cedula,p.fecha_nac,p.email,p.tipo_sangre,p.genero,p.telefono, concat(c.fecha_cita,' ',c.hora_inicio) as start, concat(c.fecha_cita,' ',c.hora_final) as end,c.comentario,c.hora_registrada,c.id_cita,c.id_doctor,c.id_paciente,c.id_asistente,dir.provincia,dir.calle,dir.ciudad from personal d inner join cita c on c.id_doctor=d.id inner join paciente p on p.id=c.id_paciente inner join direccion dir on dir.id_paciente = p.id where d.id = {$doctorID}";


   $query = $this->db->query($sql);
   return $query->result_array();

 }



 public function guardar_cita($cita)
 {
   $this->db->insert('cita',$cita);
   return $this->db->insert_id();
 }

 

 public function actualizar_paciente($paciente)
 {
      $this->db->set($paciente);
      $this->db->where('cedula',$paciente['cedula']);
      $this->db->update('paciente');
 }

 public function actualizar_direccion($id_paciente,$direccion)
 {
      
      $this->db->set('calle',$direccion['calle']);

      $this->db->set('ciudad',$direccion['ciudad']);

      $this->db->set('provincia',$direccion['provincia']);

      $this->db->where('id_paciente',$id_paciente);

      $this->db->update('direccion');

 }

public function getPacienteID($cedula){
   
    $sql = "select p.id from paciente p where p.cedula='{$cedula}'";

    $query = $this->db->query($sql);
   
    
    if($query->num_rows()>0){
      $arr = $query->result_array();
      return $arr[0]['id'];
    }

  }

   

   public function getCitas()
   {
     $sql = "select concat(d.nombre,' ',d.apellido) as title ,concat(p.nombre,' ',p.apellido) as Paciente,p.cedula,p.fecha_nac,p.email,p.tipo_sangre,p.genero,p.telefono,
concat(c.fecha_cita,' ',c.hora_inicio) as start, concat(c.fecha_cita,' ',c.hora_final) as end,c.comentario,c.hora_registrada,c.id_cita,c.id_doctor,c.id_paciente,c.estado,c.id_asistente,dir.provincia,dir.calle,dir.ciudad from personal d inner join cita c on c.id_doctor=d.id inner join paciente p on p.id=c.id_paciente inner join direccion dir on dir.id_paciente = p.id";


       $result = $this->db->query($sql);

       return $result->result_array();

   }




   public function getCita($id_cita)
   {
     $sql = "select concat(d.nombre,' ',d.apellido) as title ,concat(p.nombre,' ',p.apellido) as Paciente,p.cedula,p.fecha_nac,p.email,p.tipo_sangre,p.genero,p.telefono, c.fecha_cita,c.hora_inicio, c.fecha_cita ,c.hora_final,c.comentario,c.hora_registrada,c.id_cita,c.id_doctor,c.id_paciente,c.estado,c.id_asistente,dir.provincia,dir.calle,dir.ciudad from personal d inner join cita c on c.id_doctor=d.id inner join paciente p on p.id=c.id_paciente inner join direccion dir on dir.id_paciente = p.id where c.id_cita = {$id_cita}";


       $result = $this->db->query($sql);
       return $result->result_array();

   }





  public function get_usuario($cedula)
  {  
      $this->db->where('cedula',$cedula);
      $query = $this->db->get('personal');
      return $query->result_array();
  }

 


 public function actualizar_usuario($usuario)
    {
       $this->db->where('cedula',$usuario['cedula']);
       $this->db->set($usuario);
       $this->db->update('personal');

    }





public function getMisPacientes($id_doctor)
{
  $sql = "select p.id,concat(p.nombre,' ',p.apellido) as paciente,p.fecha_nac,p.genero,p.reg,p.telefono,p.tipo_sangre,p.cedula,p.email,c.fecha,c.comentario_medico from paciente p
inner join consulta c on c.id_paciente = p.id where c.id_doctor = {$id_doctor}";

  $query = $this->db->query($sql);

  return $query->result_array();

}



 public function guardar_consulta($consulta)
 {
     $this->db->insert('consulta',$consulta);
     
 }


}


?>