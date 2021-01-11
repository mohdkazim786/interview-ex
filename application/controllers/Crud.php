<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('crudModel');
	}
	
	public function index()
	{
		$this->load->view('crud/index');
	}
	function register()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstName','firstName','required');
		$this->form_validation->set_rules('lastname','lastname','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('dob','dob','required');
		$this->form_validation->set_rules('mobile','mobile','required');
		$this->form_validation->set_rules('designation','designation','required');
		$this->form_validation->set_rules('hobbies[]', 'hobbies', 'required');
		$this->form_validation->set_rules('gender', 'gender', 'required');
		if($this->form_validation->run()==FALSE)
		{
			$this->index();
		}
		else
		{			
			$data['firstName']= $this->input->post('firstName');
			$data['lastname']=$this->input->post('lastname');
			$data['email']=$this->input->post('email');
			$data['dob']=$this->input->post('dob');
			$data['mobile']=$this->input->post('mobile');
			$data['designation']=$this->input->post('designation');
			$lists=$this->input->post('hobbies[]');
			$data['hobbies']= implode("," ,$lists);			
			$data['gender']=$this->input->post('gender');			
		    $this->crudModel->register($data);
		    return redirect(base_url('Crud/userInfo'));
			// echo "Your Form is Submited Successfully";
			// echo "<br/><a href='".."'>Go Back</a>";
		}		
	}

	public function userInfo()
	{
		$data["lists"]=$this->crudModel->userInfo();
		$this->load->view('crud/userInfo',$data);
		
	}
}
