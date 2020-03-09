<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Data_game extends CI_Controller {

        public function __construct(){
            parent::__construct();

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
            $data['game'] = $this->model_barang->tampil_data()->result();
            $this->load->view('Template_admin/header');
            $this->load->view('Template_admin/sidebar');
            $this->load->view('Akun/data_game', $data) ;
            $this->load->view('Template_admin/footer');
        }

        public function tambah_aksi()
        {
            $nama_game    = $this->input->post('nama_game');
            $deskripsi      = $this->input->post('deskripsi');
            $harga          = $this->input->post('harga');
            $gambar         = $_FILES['gambar']['name'];
            if ($gambar = ''){}else{  
                $config ['upload_path'] = './uploads';
                $config ['allowed_types'] = 'jpg|jpeg|png|gif';
                
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('gambar')){
                    echo "Gambar Gagal Upload :(";
                }else{
                    $gambar=$this->upload->data('file_name');
                }
            }
            $data = array(
                'nama_game'   => $nama_game,
                'deskripsi'     => $deskripsi,
                'harga'         => $harga,
                'gambar'        => $gambar
            );

            $this->model_game->tambah_barang($data, 'game');
            
            redirect('Data_game');
            
        }

        public function edit($id)
        {
            $where = array('id_game' => $id);
            $data['game'] = $this->model_barang->edit_barang($where, 'game')->result();
            $this->load->view('Template_admin/header');
            $this->load->view('Template_admin/sidebar');
            $this->load->view('Edit_barang', $data) ;
            $this->load->view('Template_admin/footer');
        }

        public function update()
        {
            $id             = $this->input->post('id_game');
            $nama_game    = $this->input->post('nama_game');
            $deskripsi      = $this->input->post('deskripsi');
            $harga          = $this->input->post('harga');


            $data = array(
                'nama_game'   => $nama_game,
                'deskripsi'     => $deskripsi,
                'harga'         => $harga,
            );

            $where = array(
                'id_game' => $id
            );

            $this->model_barang->update_data($where,$data,'game');
            
            redirect('Data_game/index');
            
        }

        public function hapus($id)
        {
            $where = array('id_game' => $id);
            $this->model_barang->hapus_data($where,'game');
            redirect('Data_game/index');
        }

    
    }
    
    /* End of file Controllername.php */
    
?>