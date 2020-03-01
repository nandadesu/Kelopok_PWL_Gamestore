<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class History extends CI_Controller {

    
        public function index()
        {
            $data['history'] = $this->model_invoice->tampil_data();
            $this->load->view('Template_user/header');
            $this->load->view('Template_user/sidebar');
            $this->load->view('Admin/History',$data) ;
            $this->load->view('Template_user/footer');
        }

        public function tambah_keranjang($id)
        {
            $game = $this->model_barang->find($id);
            $data = array(
                'id'            => $game->id_game,
                'price'         => $game->harga,
                'name'          => $game->nama_game,
            );
            
            $this->cart->insert($data);
            redirect('Home');
            
        }
    
    }
    
    /* End of file invoice.php */
    
?>