<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class model_invoice extends CI_Model {
    
        public function index(){
            date_default_timezone_set('Asia/Jakarta');
            $metode       = $this->input->post('metode');
            $nama       = $this->input->post('nama');
            $email      = $this->input->post('email');

            $data = array(
                'nama'          => $nama,
                'email'             => $email,
                'tgl_pembelian'     => date('Y-m-d H:i:s'),
            );
            $this->db->insert('history', $data);
            $id_history = $this->db->insert_id();

            foreach($this->cart->contents() as $item){
                $data  = array(
                    'id_history'    => $id_history,
                    'id_game'     => $item['id'],
                    'nama_game'   => $item['name'],
                    'harga'         => $item['price'],
                );
                $this->db->insert('transaksi', $data);
               
            }
            return TRUE;
        }
        public function tampil_data(){
            $result = $this->db->get('transaksi');
            if($result->num_rows() > 0){
                return $result->result();
            }else {
                return FALSE;
            }
        }

        public function ambil_id_invoice($id_transaksi){
            $result = $this->db->where('id', $id_transaksi)->limit(1)->get('transaksi');
            if($result->num_rows() > 0){
                return $result->row();
            }else {
                return FALSE;
            }
        }

        public function ambil_id_pesanan($id_transaksi){
            $result = $this->db->where('id_transaksi', $id_transaksi)->get('invoice');
            if($result->num_rows() > 0){
                return $result->result();
            }else {
                return FALSE;
            }
        }
    }
    
    /* End of file model_invoice.php */
    
?>