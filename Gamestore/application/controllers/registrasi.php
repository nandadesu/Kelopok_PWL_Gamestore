<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Registrasi extends CI_Controller {

        public function index()
        {
            $data['title'] = "Halaman Register";
            $this->load->view('Template/header',$data);
            $this->load->view('registrasi');
            $this->load->view('Template/footer');
        }

        public function process(){
            $this->load->model('model_register');
            
            if ($this->input->post()) {
                $data['email'] = htmlspecialchars($this->input->post('email'));
                $data['username'] = htmlspecialchars($this->input->post('username'));
                $data['password'] = htmlspecialchars($this->input->post('password'));

                if ($this->register_model->getUsername($data['username'])) {
                    $data['pesan'] = "Username sudah digunakan";
                    $data['title'] = "Halaman Register";
                    $this->load->view('Template/header',$data);
                    $this->load->view('registrasi',$data);
                    $this->load->view('Template/footer');
                } else {
                    $createUser = $this->register_model->createUser($data);
                    if ($createUser) {
                        redirect('auth/index','refresh');
                    }
                }

            } else {
                redirect('registrasi','refresh');
            }
        }
    
    }
    
    /* End of file Registrasi.php */
    
?>