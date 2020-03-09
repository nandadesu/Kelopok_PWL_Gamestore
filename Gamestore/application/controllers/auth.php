<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Auth extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('model_login');
        }

        public function index(){
            $data['title'] = "Halaman Login";
                $this->load->view('Template/header',$data);
                $this->load->view('form_login');
                $this->load->view('Template/footer');
        }
        
        public function proses_login(){
            $username = htmlspecialchars($this->input->post('username'));
            $password = htmlspecialchars($this->input->post('password'));
            $ceklogin = $this->model_login->login($username, $password);
    
            if ($ceklogin) {
                foreach ($ceklogin as $row);
                $this->session->set_userdata('user', $row->username);
                $this->session->set_userdata('level', $row->level);
    
                if ($this->session->userdata('level')=="1") {
                    redirect('Data_game');
                } elseif ($this->session->userdata('level')=="2") {
                    redirect('Home/index');
                }
            } else {
                $data['title'] = "Login";
                $data['pesan'] = "Username dan Password anda salah";
                $this->load->view('Template/header',$data);
                $this->load->view('form_login',$data);
                $this->load->view('Template/footer');
            }
        }


        public function logout(){
            $this->session->sess_destroy();
            
            redirect('auth/index');
            
        }
    
    }
    
    /* End of file auth.php */

?>
