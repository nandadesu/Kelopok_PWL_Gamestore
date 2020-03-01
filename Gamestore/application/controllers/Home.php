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
        public function detail($id_barang)
        {
            $data['game']= $this->model_barang->detail_barang($id_barang);
            $this->load->view('Template/Header');
            $this->load->view('Template/Sidebar');
            $this->load->view('Admin/detail_barang',$data) ;
            $this->load->view('Template/Footer');
        }


        public function user()
        {
            $this->load->view('Template_user/Header');
            $this->load->view('Template_user/Sidebar');
            $this->load->view('Akun/User_profile') ;
            $this->load->view('Template_user/Footer');
        }

        // public function bayar_pesanan(){
        //     $this->db->select('id_game, harga');
        //     $this->db->from('game g');

        // }
    
    }
    
    /* End of file Admin.php */
    
?>