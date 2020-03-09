<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class model_auth extends CI_Model {
    
        public function getUser(){
            $this->db->where('level', '2');
            return $this->db->get('user')->result_array();
        }
    
        public function activateUser($id){
            $this->db->set('status', 'active');
            $this->db->where('id', $id);
            $this->db->update('user');	
        }
    
        public function disableUser($id){
            $this->db->set('status', 'diactive');
            $this->db->where('id', $id);
            $this->db->update('user');	
        }
    
    }
    
    /* End of file auth.php */
    
?>