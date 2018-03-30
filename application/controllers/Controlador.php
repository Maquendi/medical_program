<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller
{

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
        $this->load->view('header_admin');
        $this->load->view('home_admin');
     }
     else if($this->session->userdata('role') === 'Asistente')
     {
       $this->load->view('header_asistente');
       $this->load->view('home_asistente');
     }
     else if($this->session->userdata('role') === 'Doctor')
     {
       $this->load->view('home_doctor');
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
    
    $file = file_get_contents(base_url()."province.txt");
    $strs = explode(",", $file);

    $this->load->view('header_asistente');
    $this->load->view('registrar_paciente',['provincias'=>$strs]);
    $this->load->view('foot');

  }






  public function register_patient(){
      

     $this->form_validation->set_rules('nombre','Nombre','required');
     $this->form_validation->set_rules('apellido','Apellido','required');
     $this->form_validation->set_rules('cedula','Cedula','required');
     $this->form_validation->set_rules('fecha_nac','Fecha de Nacimiento','required');
     $this->form_validation->set_rules('calle','Calle','required');
     $this->form_validation->set_rules('ciudad','Ciudad','required');




   if($this->form_validation->run()){


     $datos = $this->input->post();
     $this->load->helper('array');
     $patient = elements(array('nombre', 'apellido', 'cedula','fecha_nac','genero','email','tipo_sangre'), $datos);

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
            
         
         
             //var_dump($paciente);

              $direccion = $this->Modelo->get_dir_paciente($paciente[0]['id']);


              //var_dump($direccion);
              echo json_encode(array_merge($paciente,$direccion));
         
          //redirect(base_url().'index.php/Controlador/entrar');

       }

     
 }


public function guardar_cita()
 {
   $cita = $this->input->post();

   var_dump($cita);



 }




}



















?>