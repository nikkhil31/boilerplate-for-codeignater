<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends MY_Controller {
	function __construct(){
		parent::__construct();

		$login = $this->session->userdata('logged_in');
		if(!isset($login)){
			redirect(site_url());
		}
	}

	public function index(){
		if(count($_POST) > 0){
			$method 	=	'Creator_'.$this->input->post('action');
			$this->$method($_POST);

		}else{


			if (isset($this->segment[2])) {

				$method =	"Render_" . str_replace("-", "_", $this->segment[2]);

			} else {

				$method =	"Render_index";
			}
			$this->$method();
		}		
	}

	public function Render_edit($value='')
	{
		$where['id']		=	'1';
		$this->data['gen']	=	$this->Crud->get_where('general',$where)->row_array();
		$this->render('back','general');
	}

	public function Creator_edit($formdata)
	{
		// _pre($formdata);
		$this->form_validation->set_rules('phone'		 	, 'Phone', 		   	'required');
		$this->form_validation->set_rules('email'		 	, 'Email', 		   	'required');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->data['error']['phone']			=	form_error('phone');
        	$this->data['error']['email']			=	form_error('email');
        	$this->Render_edit();
        } else {
        	$data = array(
        				'phone'			=>	$formdata['phone'],
        				'email'			=>	$formdata['email'],
        				'address'		=>	$formdata['address'],
        				'footer_desc'	=>	$formdata['footer_desc'],
        				'fb'			=>	$formdata['fb'],
        				'google-plus'	=>	$formdata['google-plus'],
        				'twitter'		=>	$formdata['twitter'],
        				'map'			=>	$formdata['map'],
        			);

        	// _pre($data);
        			$where['id']	=	'1';
        			$this->Crud->get_update('general',$where,$data);
        			redirect('general/edit');
        }

	}

	public function Render_newpass()
	{
		$this->data['user'] 		= 		$this->Crud->get_where('admin',array('id'=>1))->row();
		// _pre($this->data['user']);
		$this->render('back','newpass');

	}

	public function Creator_newpass($filedata)
	{
		// _pre($filedata);
		$this->form_validation->set_rules('opassword', 'old password', 'required|callback_password_check');
        $this->form_validation->set_rules('npassword','Password','required|max_length[20]');
        $this->form_validation->set_rules(
        									'cpassword',
        									'Confirm Password',
        									'trim|required|matches[npassword]|max_length[20]'
        								 );

        if($this->form_validation->run()==false)
		{
			$this->data['error']['opassword']	=	form_error('opassword');
			$this->data['error']['npassword']	=	form_error('npassword');
			$this->data['error']['cpassword']	=	form_error('cpassword');

			$this->Render_newpass();

		} else {
			$results	=	array(
									'password'		=>	$filedata['npassword'],
								);
			$this->Crud->get_update(
											'admin',
											array(
													'id'	=>	'1'
												 ),
											$results
										);

			_redirect('general','<div class="alert alert-success" role="alert">Password Change Successfully</div>');

		}

	}

	public function password_check($oldpass)
    {
        $user = $this->Crud->get_where('admin',array('id'=>1))->row();
        if($oldpass=='')
        {
        	$this->form_validation->set_message('password_check', 'The field is required.');
        }
        elseif($user->password !== $oldpass) 
        {
            $this->form_validation->set_message('password_check', 'The {field} does not match');
            return false;
        }

        return true;
    }

}