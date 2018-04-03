<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller
{
    
   /*   global variables                  */

   


   /*                     */



   public function __construct()
   {
   	 parent::__construct();
   	 $this->load->model('Modelo');
   }


   public function index()
   {
   	 $this->load->view('header_home');
   	 $this->load->view('main');
   	 $this->load->view('foot');
   }


  public function login()
  {
    $data['info']="user trying to log in";
    $this->load->view('login',$data);
  }
   
  

 
 public function validate_form()
 {
   $this->load->library('form_validation');
   $this->form_validation->set_rules('email','Email','required');
   $this->form_validation->set_rules('password','Password','required');
   
   if($this->form_validation->run()){

      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $user = $this->Modelo->can_login($email,$password);

      if(count($user) > 0){
         
     
            $user_data = array(
            'userID' => $user[0]['id'],
            'cedula' => $user[0]['cedula'],
            'nombre' => $user[0]['nombre'],
            'apellido' => $user[0]['apellido'],
            'email' => $user[0]['email'],
            'password' => $user[0]['password'],
            'role' => $user[0]['role'],
            'foto_path'=>$user[0]['foto_path']
            );


            $this->session->set_userdata($user_data);
            redirect(base_url().'index.php/Controlador/entrar');
            


      }
      else
      {
         
         $this->session->set_flashdata('error','Correo o Contraseña Incorrectas');
         redirect(base_url().'index.php/Controlador/login');
      }

   }
   else
   {
      $this->login();
   }

 }


public function entrar()
{
   
   if($this->session->userdata('role') === 'admin')
     {  
        $doctores = $this->Modelo->getListaMedicos();
        $asistentes = $this->Modelo->getListaAsistentes();
        $citas = $this->Modelo->getCitas();

        $datos = array('doctores'=>$doctores,'asistentes'=>$asistentes,'citas'=>$citas);

        $this->load->view('header_admin');
        $this->load->view('home_admin',['datos'=>$datos]);
     }
       else if($this->session->userdata('role') === 'Asistente')
       {
         $doctores = $this->Modelo->getListaMedicos();
         $citas_asis = $this->Modelo->get_all_citas();  
         $provincias = $this->get_provincias();
         $pacientes = $this->Modelo->get_all_pacientes();
       

           $datos = array('doctores'=>$doctores,'citas'=>$citas_asis,'provincias'=>$provincias,'pacientes'=>$pacientes);
        
        
         $this->session->set_userdata(['provincias'=>$provincias]);
         $this->load->view('header_asistente');
         $this->load->view('home_asistente',['datos'=>$datos]);
     }
     else if($this->session->userdata('role') === 'Doctor')
     {

    $misCitas = $this->Modelo->getMisCitas($this->session->userdata('userID'));
       $this->load->view('header_doctor');
       $this->load->view('home_doctor',['citas'=>$misCitas]);
       
     }
     else
     {
       redirect(base_url().'index.php/Controlador/login');
     }


   }


   public function crear_usuario(){
         
         if($this->session->userdata('role')==='admin'){
            $this->load->view('header_admin');
            $this->load->view('registrar_personal');
         }else{

           $this->login();
         }
          
   }
   

   public function upload(){
    



       $this->form_validation->set_rules('nombre','Nombre','required');
       $this->form_validation->set_rules('apellido','Apellido','required');
       $this->form_validation->set_rules('cedula','Cedula','required');
       $this->form_validation->set_rules('email','Email','required');
       $this->form_validation->set_rules('f_nacimiento','Nacimiento','required');
       //$this->form_validation->set_rules('userfile','Foto','required');
        
    

      if($this->form_validation->run()){
         
        
        $datos = $this->input->post();

        $foto;

        $config['upload_path'] ='./images/'; 
        $config["allowed_types"] = 'jpg|jpeg|png|gif';
        $config['overwrite'] =TRUE;

        $this->load->library('upload',$config);

          if(!$this->upload->do_upload()) {               
               $error = array('error'=>$this->upload->display_errors());
               echo $error['error'];

           } else {

                $file_data = $this->upload->data();
                $data['img'] = base_url().'/images/'.$file_data['file_name'];
                $path = base_url().'/images/'.$file_data['file_name'];
                $datos['foto_path'] = $path;

                if($this->Modelo->registrar_usuario($datos) == TRUE){
                     $this->session->set_flashdata('registrado','Usuario Registrado Exitosamente.');
                      redirect(base_url().'index.php/Controlador/crear_usuario');
                  }else{
                       
                        $this->session->set_flashdata('registrado','Ya existe Un Usuario Con Este Correo');
                         redirect(base_url().'index.php/Controlador/crear_usuario');
                  }
                
           }

        }else{
        $this->crear_usuario();
      }

   }


 
 public function salir()
    { 
      
      $this->session->sess_destroy();
      $this->index();
    }



  public function add_patient()
  { 
    
    $provincias = $this->get_provincias();

    $this->load->view('header_asistente');
    $this->load->view('registrar_paciente',['provincias'=>$provincias]);
    $this->load->view('foot');

  }

  public function get_provincias()
  {
    $file = file_get_contents(base_url()."province.txt");
    $strs = explode(",", $file);
    return $strs;
  }




  public function register_patient(){
      

     $this->form_validation->set_rules('nombre','El Nombre','required');
     $this->form_validation->set_rules('apellido','El Apellido','required');
     $this->form_validation->set_rules('cedula','La Cedula','required');
     $this->form_validation->set_rules('fecha_nac','Fecha de Nacimiento','required');
     $this->form_validation->set_rules('calle','La Calle','required');
     $this->form_validation->set_rules('ciudad','Ciudad','required');
     $this->form_validation->set_rules('telefono','El Telefono','required');
     




   if($this->form_validation->run()){


     $datos = $this->input->post();
     
     $patient = elements(array('nombre','telefono', 'apellido', 'cedula','fecha_nac','genero','email','tipo_sangre'), $datos);

     $direccion = elements(array('calle','ciudad','provincia','zip'),$datos);

     $id = $this->Modelo->add_patient($patient);

     if($id !== false){
        
        $direccion['id_paciente']=$id;
        
        $this->Modelo->add_direccion($direccion);
        $this->session->set_flashdata('message','Patiente Registrado Exitosamente');
        redirect(base_url().'index.php/Controlador/add_patient');
      }
      else
      {


        $this->session->set_flashdata('message','Cedula Duplicada');
        redirect(base_url().'index.php/Controlador/add_patient');

      }

   
  }
   else
   {
      $this->add_patient();
   }

}



 public function buscar_paciente(){

     $cedula = $this->input->post('ced');
      
     $paciente = $this->Modelo->get_paciente($cedula);

     if($paciente == false){
         echo "not found";
      }else{
              $direccion = $this->Modelo->get_dir_paciente($paciente[0]['id']);
              echo json_encode(array_merge($paciente,$direccion));
            }

         }




public function guardar_cita()
 {
  
   $this->form_validation->set_rules('nombre','Nombre','required');
   $this->form_validation->set_rules('apellido','Apellido','required');
   $this->form_validation->set_rules('fecha_cita','La Fecha','required');
   $this->form_validation->set_rules('hora_inicio','La Hora','required');
   $this->form_validation->set_rules('fecha_nac','Nacimiento','required');
   $this->form_validation->set_rules('doctor','El Doctor','required');
   $this->form_validation->set_rules('hora_final','hora final','required');
   $this->form_validation->set_rules('calle','La Calle','required');
   $this->form_validation->set_rules('ciudad','La Ciudad','required');
   $this->form_validation->set_rules('email','El Correo','required');
   $this->form_validation->set_rules('telefono','El Telefono','required');
   $this->form_validation->set_rules('cedula','La Cedula','required');
   
   if($this->form_validation->run())
      { 
           $datos = $this->input->post();
            $info = $datos['info'];

            if(strlen($datos['comentario'])<=1){
               $datos['comentario'] = "Sin comentario";
            }
            
         
    if(strlen($info)===13)
      {
        
        try{   
             
              $cita = elements(array('fecha_cita','hora_inicio','hora_final','comentario'),$datos);

               $id_doctor = explode('-',$datos['doctor']);

               $cita['id_doctor']=$id_doctor[0];

               $id_paciente = $this->Modelo->get_paciente($datos['cedula'])[0]['id'];

               $cita['id_paciente']=$id_paciente;

               $cita['id_asistente']=$this->session->userdata('userID');

               $this->Modelo->guardar_cita($cita);

               $this->session->set_flashdata('registro_cita','Cita guardado exitosamente.');

               redirect(base_url()."index.php/Controlador/entrar");
           }
           catch(Exception $e)
           {
                echo $e->getMessage(); 
           }
            finally
            {

            }

         


           }
            else if(strlen($info) > 13)
           {
              //actualizar tabla paciente...
              // insertar en citas..
              // actualizar direccion..
            
             $cita = elements(array('fecha_cita','hora_inicio','hora_final','comentario'),$datos);

             $paciente = elements(array('cedula','nombre','apellido','genero','email','fecha_nac','tipo_sangre','telefono',),$datos);

             $id_paciente = $this->Modelo->getPacienteID($paciente['cedula']);
             $direccion = elements(array('calle','ciudad','provincia'),$datos);
             
               $id_doctor = explode('-',$datos['doctor']);

               $cita['id_doctor']=$id_doctor[0];

               $cita['id_paciente']=$id_paciente;

               $cita['id_asistente']=$this->session->userdata('userID');



               $this->Modelo->actualizar_paciente($paciente);

               $this->Modelo->actualizar_direccion($id_paciente,$direccion);

               $this->Modelo->guardar_cita($cita);

                $this->session->set_flashdata('registro_cita','Cita guardado exitosamente.');

                redirect(base_url()."index.php/Controlador/entrar");


           }
            else
            {
               
            $paciente = elements(array('cedula','nombre','apellido','genero','email','fecha_nac','tipo_sangre','telefono',),$datos);

            $direccion = elements(array('calle','ciudad','provincia'),$datos);
            
            $direccion['zip'] = "d_0011";

            $direccion['pais'] = "Republic Dominicana";



             $cita = elements(array('fecha_cita','hora_inicio','hora_final','comentario'),$datos);
             
               $id_paciente = $this->Modelo->add_patient($paciente);

               $direccion['id_paciente'] = $id_paciente;

               $this->Modelo->add_direccion($direccion);

               $id_doctor = explode('-',$datos['doctor']);

               $cita['id_doctor']=$id_doctor[0];

               $cita['id_paciente']=$id_paciente;

               $cita['id_asistente']=$this->session->userdata('userID');

               $this->Modelo->guardar_cita($cita);

               $this->session->set_flashdata('registro_cita','Cita guardado exitosamente.');

                redirect(base_url()."index.php/Controlador/entrar");


            }
              
          }
          else
          {
            $this->session->set_flashdata('registro_cita','Todos Los Campos Son Requeridas.');
           $this->entrar();



         }

         

         }


         public function toString($pacientes,$id)
         {
            $nombre = null;
            for($i=0;$i<count($pacientes);$i++)
            {
            if($pacientes[$i]['id'] == $id)
             {
              $nombre=$pacientes[$i]['nombre']." ".$pacientes[$i]['apellido'];
                break;
              }

            }
              return $nombre;
         }


      
      public function calendario_citas()
      { 



        // $doctores = $this->Modelo->getListaMedicos();
        // $citas_asis = $this->Modelo->get_all_citas();  
        // $pacientes = $this->Modelo->get_all_pacientes();

        $citas = $this->Modelo->getCitas();

        

       
        $datos = array('citas'=>$citas);


        $this->load->view("header_asistente",$datos);
        $this->load->view("calendario_citas");
      }




   public function modificar_usuario()
   {
     $this->load->view('header_admin');
     $this->load->view('modificar_registro');
   }


  public function buscar_usuario()
  {
     $cedula = $this->input->post('cedula');
    
     $usuario = $this->Modelo->get_usuario($cedula);
     
     if(count($usuario)>0)
     {
       echo json_encode($usuario);

     }else
     {
      echo "false";
     }

  }




public function modify_user()
 {
      

    $this->form_validation->set_rules('nombre','Nombre','required');
    $this->form_validation->set_rules('apellido','Apellido','required');
    //$this->form_validation->set_rules('userfile','Foto','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('f_nacimiento','Nacimiento','required');
       
        
    

      if($this->form_validation->run()){
         
        
        $datos = $this->input->post();

    

        $config['upload_path'] ='./images/'; 
        $config["allowed_types"] = 'jpg|jpeg|png|gif';
        $config['overwrite'] =TRUE;

        $this->load->library('upload',$config);

          if(!$this->upload->do_upload()) {               
               $error = array('error'=>$this->upload->display_errors());
               echo $error['error'];

           } else {

                $file_data = $this->upload->data();
                $data['img'] = base_url().'/images/'.$file_data['file_name'];
                $path = base_url().'/images/'.$file_data['file_name'];
                $datos['foto_path'] = $path;
                
                try{
                    $this->Modelo->actualizar_usuario($datos);
                    $this->session->set_flashdata('message',"<h4 style='color:green;'>Usuario actualizado Satisfactoriamente.</h4>");
                    redirect(base_url()."index.php/Controlador/modificar_usuario");


                 }catch(Exception $e)
                   {
                      $this->session->set_flashdata('message',"<h4 style='color:red;'>Usuario actualizado Satisfactoriamente</h4>  .".$e.getMessage());
                   }
                
                
              }

        }else{
             
             $this->modificar_usuario();
      }




 }





public function view_detail($id_cita)
{

    $cita = $this->Modelo->getCita($id_cita);
    $this->load->view('header_admin');
    $this->load->view('view_detalle',['cita'=>$cita]);
}



 
}
















?>