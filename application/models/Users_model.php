<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function getAllUsers(){
			$query = $this->db->get('admin');
			return $query->result(); 
		}
		
 
		public function insertuser($user){
			return $this->db->insert('admin', $user);
		}
 
		public function getUser($id){
			$query = $this->db->select('*')->where('id',$id)
			                             ->get('admin');
			return $query->row();
		}
		public function dashboard(){
		$data['result']=$this->Users_model->getAllUsers();
		$this->load->view('dashboard',$data);

		
	}
	
public function uploadimg($formArray){
//to set the array data
$this->db->set($formArray);
// function to insert the data
$this->db->insert('admin',$formArray);
return true;
}
 



}


?>



























