<?php

class username_model extends CI_model {
	
	public function getAllreg(){
		
		return $this->db->get('reg')->result_array();	
		
		
		}
	
	public function tambahData(){
		
		$data = [
			"username"=> $this->input->post('username',true),
			"email"   => $this->input->post('email',true),
			"notelp"  => $this->input->post('notelp',true)
				
		];
		$this->db->insert('reg',$data);
		}
		
	public function hapusdata($id){
		$this->db->where('id','$id');
		$this->db->delete('reg');
		}
}
?>