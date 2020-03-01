<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Auth extends CI_Controller {
    
        public function login()
        {
            $this->form_validation->set_rules('username' , 'Username' , 'required');
            $this->form_validation->set_rules('password' , 'Password' , 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('Template/header');
                $this->load->view('form_login');
                $this->load->view('Template/footer');
            }else{
                $auth = $this->model_auth->cek_login();

                if($auth == FALSE){
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username atau Password Salah
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
                  
                  redirect('Auth/login');
                  
                    
                }else{
                    $this->session->set_userdata('username',$auth->username);
                    redirect('Home/index');
                }
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            
            redirect('auth/login');
            
        }
    
    }
    
    /* End of file auth.php */
    
?>