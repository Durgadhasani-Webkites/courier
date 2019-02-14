<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
	//call CodeIgniter's default Constructor
		parent::__construct();

	//load Model
		$this->load->model('User_Model');
	}

	public function index()
	{

		$this->load->view('register');
	}
    
	
	public function register() {

		if($this->input->post('save')){
			
			$this->load->model('User_Model');

			$data = array( 
				'name'=> $this->input->post('name'),
				'phone_no'=> $this->input->post('phone_no'),
				'email'=> $this->input->post('email'),
				'password'=> $this->input->post('password'),
				'qualification'=> $this->input->post('qualification'),
				'dob'=> $this->input->post('dob'),
				'address'=> $this->input->post('address')
			); 
			
			$this->User_Model->insert($data); 
		}

		$query = $this->db->get("register"); 
		$data['records'] = $query->result(); 
		$this->load->view('view',$data); 
	}

	// public function view()
	// {
	// $query = $this->db->get("register"); 
	// 	$data['records'] = $query->result(); 
	// 	$this->load->view('view',$data); 

	// }

	public function edit($id)
	{
		$query = $this->db->get_where("register",array("id"=>$id));
		$data['records'] = $query->result(); 
		$this->load->view('edit',$data,$id);	

	}

	public function update_student(){ 
		$this->load->model('User_Model');
		
		if($this->input->post('save')){
			$data = array( 
				'name'=> $this->input->post('name'),
				'phone_no'=> $this->input->post('phone_no'),
				'email'=> $this->input->post('email'),
				'password'=> $this->input->post('password'),
				'qualification'=> $this->input->post('qualification'),
				'dob'=> $this->input->post('dob'),
				'address'=> $this->input->post('address')
			); 
			$id = $this->input->post('id'); 
			$this->User_Model->update($data,$id); 
		}
		
		$query = $this->db->get("register"); 
		$data['records'] = $query->result(); 
		$this->load->view('view',$data); 
	}

	public function delete_student() { 

		$this->load->model('User_Model'); 
		$id = $this->uri->segment('3'); 
		$this->User_Model->delete($id); 
		
		$query = $this->db->get("register"); 
		$data['records'] = $query->result(); 
		$this->load->view('view',$data); 
	} 
   
    public function login()
	{
		
		$this->load->view('login');	

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */