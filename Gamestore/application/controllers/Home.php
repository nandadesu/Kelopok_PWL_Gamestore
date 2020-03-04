<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Home extends CI_Controller {
        
        public function index()
        {
            
            $data['game']= $this->model_barang->tampil_data()->result();
            $this->load->view('Template/Header');
            $this->load->view('Template/Sidebar');
            $this->load->view('Admin/Home',$data) ;
            $this->load->view('Template/Footer');
        }

        public function tambah_keranjang($id)
        {
            $game = $this->model_barang->find($id);
            $data = array(
                'id'            => $game->id_game,
                'qty'           => 1,
                'price'         => $game->harga,
                'name'          => $game->nama_game,
            );
            
            $this->cart->insert($data);
            
            redirect('Home');   
        }

        public function detail_keranjang()
        {
            $data['game']= $this->model_barang->tampil_data()->result();
            $this->load->view('Template/Header');
            $this->load->view('Template/Sidebar');
            $this->load->view('Admin/detail_keranjang') ;
            $this->load->view('Template/Footer');
        }

        public function hapus_keranjang()
        {
            $this->cart->destroy();
            redirect('Home/detail_keranjang');
        }

    
        public function pembayaran()
        {
            $this->load->view('Template/Header');
            $this->load->view('Template/Sidebar');
            $this->load->view('Admin/pembayaran') ;
            $this->load->view('Template/Footer');
        }

        public function proses_pesanan()
        {
            $is_processed = $this->model_invoice->index();
            if($is_processed){
                $this->cart->destroy();
                $this->load->view('Template/Header');
                $this->load->view('Template/Sidebar');
                $this->load->view('Admin/proses') ;
                $this->load->view('Template/Footer');
            }else{
                echo "Maaf, Pesanan Anda Gagal diproses :(";
            }
            
        }
        
    }
    
    /* End of file Admin.php */
    
?>