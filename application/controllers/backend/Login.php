<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function index(){
		if(count($_POST) > 0){

			$method 	=	'Creator_'.$this->input->post('action');
			$this->$method($_POST);

		}else{


			if (isset($this->segment[1])) {

				$method =	"Render_" . str_replace("-", "_", $this->segment[1]);

			} else {

				$method =	"Render_index";
			}
			$this->$method();
		}		
	}

	public function Render_index($value='')
	{
		$this->Render_admin();
	}

	public function Render_admin($data=array('invalid'=>'false'))
	{
		$this->load->view('backend/index',$data);
	}

	public function Creator_login($formdata)
	{
		$data	=	$this->Crud->get_where('admin',
			array(
				'username'	=>	$formdata['username'],
				'password'	=>	$formdata['password']
			)
		);
		if($data->num_rows() == 1)
		{
			$newdata = array(
				'user_id'  => $data->row()->id,
				'logged_in' => TRUE
			);

			$this->session->set_userdata($newdata);
			redirect(site_url('dashboard'));

		} else {
			$abc['invalid'] = 'true';
			$this->Render_admin($abc);
		}
	}

	public function Render_sign_out()
	{
		$this->session->sess_destroy();	
		redirect(site_url('admin'));
	}

}