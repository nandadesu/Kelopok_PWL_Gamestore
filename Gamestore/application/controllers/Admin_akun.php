<?php  
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin_akun extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('model_auth');

            if($this->session->userdata('level') != '1'){
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>');
            
              redirect('auth/index');
              
            }
        
        }
        public function index()
        {   
            $data['user'] = $this->model_auth->getUser();
            $this->load->view('Template_admin/Header');
            $this->load->view('Template_admin/Sidebar');
            $this->load->view('Akun/data_user', $data);
            $this->load->view('Template_admin/Footer');
        }

        public function activate($id){
            $this->model_auth->activateUser($id);
            redirect('Admin_akun','refresh');
        }
    
        public function disable($id){
            $this->model_auth->disableUser($id);
            redirect('Admin_akun','refresh');
        }
    
    }
    
    /* End of file Controllername.php */
    
?>