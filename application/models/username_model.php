<?php

class username_model extends CI_model {
	
	public function getAllreg(){
		
		return $this->db->get('reg')->result_array();	
		
		
		}
	
	public function tambahData()
	{
		
		$data = [
			"username"=> $this->input->post('username',true),
			"email"   => $this->input->post('email',true),
			"notelp"  => $this->input->post('notelp',true)
				
		];
		$this->db->insert('reg',$data);
	}
		
	public function hapusData($username)
	{
		//$this->db->where('id','$id');
		//$this->db->delete('reg');
		$this->db->delete('reg',array('username'=>$username));

	}

	public function getDetail($username)
	{
			
		return $this->db->get_where('reg',['username' => $username])->row_array();
		//$this->db->select('username','email','notelp');
		//$this->db->get('reg');
	}

	public function ubahData()
	{
		$data = [
			"username"=> $this->input->post('username',true),
			"email"   => $this->input->post('email',true),
			"notelp"  => $this->input->post('notelp',true)
				
		];
		$this->db->where('username', $this->input->post('username'));
		$this->db->update('reg', $data);

	}
	public function cariData()
	{
		$keyword = $this->input->post('keyword',true);
		$this->db->like('username', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('notelp', $keyword);

		return $this->db->get('reg')->result_array();
	}

}
?>