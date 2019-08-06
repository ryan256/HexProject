<?php

class account_model extends CI_model {
	
	public function tambahDataAk(){
		
		$data = [
			"username"=> $this->input->post('username',true),
			"email"   => $this->input->post('email',true),
			"notelp"  => $this->input->post('notelp',true)
				
		];
		$this->db->insert('reg',$data);
		}
}
?>