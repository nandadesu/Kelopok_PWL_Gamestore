<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_login extends CI_Model {

	public function login($username, $password){
		$this->db->select('username, password, level');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('status', 'active');
		$this->db->limit(1);

		$query = $this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		} else{
			return false;
		}
	}

}

/* End of file login_models.php */

?>
