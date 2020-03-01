<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Registrasi extends CI_Controller {
    
        public function index()
        {
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password_1','Password','required|matches[password_2]'); 
            $this->form_validation->set_rules('password_2','Password','required|matches[password_1]'); 
            if($this->form_validation->run() == FALSE ){
                
            
                $this->load->view('registrasi');
                $this->load->view('Template/header');
                $this->load->view('Template/footer');
            }else{
                $data = array(
                    'id'    => '',
                    'email'  =>$this->input->post('email'),
                    'username'  =>$this->input->post('username'),
                    'password'  =>$this->input->post('password_1'),
                );
                $this->db->insert('user',$data);
                redirect('auth/login');
            }
        }
    
    }
    
    /* End of file Registrasi.php */
    
?>