<?php
class User_Model extends CI_Model 
{
	function __construct() { 
		parent::__construct(); 
	} 

	public function insert($data) { 
		if ($this->db->insert("register", $data)) { 
			return true; 
		} 
	} 

	public function update($data,$id) { 
		$this->db->set($data); 
		$this->db->where("id", $id); 
		$this->db->update("register", $data); 

	} 

	public function delete($id) { 
		if ($this->db->delete("register", "id = ".$id)) { 
			return true; 
		} 
	} 

}
?>