<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slideshow extends MY_Controller {
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

	public function Render_mgmt()
	{
		$this->data['slideshow'] = $this->Crud->get_allrecord('slideshow');
		$this->render('back','slideshow_mgmt');
	}

	public function Render_add()
	{
		$this->render('back','slideshow_add');
	}

	public function Creator_add($formdata)
	{
		// _pre($formdata);

		$img1='image & slideshow & png|PNG|JPEG|jpeg|JPG|jpg & 1920 & 749 & true & old_image';

		$this->form_validation->set_rules('display_order'	, 'Display order',	'required|is_natural_no_zero');
		$this->form_validation->set_rules('image'  , 'Image',	'callback_image_check['.$img1.']');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->data['error']['display_order']	=	form_error('display_order');
        	$this->data['error']['image']			=	form_error('image');

        	$this->Render_add();

        } else {

        	$data = array(
        					'display_order'=>	$formdata['display_order'],
        					'image_path'	=>	$this->image_path[0],
        				 );

        	$this->Crud->only_insert_data('slideshow',$data);

        	redirect('slideshow/mgmt');
        }
	}

	public function Render_edit($value='')
	{
		$this->data['slideshow'] = $this->Crud->get_where('slideshow',array('id'=>$_GET['id']))->row();
		$this->render('back','slideshow_edit');
	}

	public function Creator_edit($formdata)
	{
		// _pre($formdata);

		$img1='image & slideshow & png|PNG|JPEG|jpeg|JPG|jpg & 1920 & 749 & true & old_image';

		$this->form_validation->set_rules('display_order'	, 'Display order',	'required|is_natural_no_zero');
		$this->form_validation->set_rules('image'  , 'Image',	'callback_image_check['.$img1.']');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->data['error']['display_order']	=	form_error('display_order');
        	$this->data['error']['image']			=	form_error('image');

        	$this->Render_edit();

        } else {

        	$data = array(
        					'display_order'=>	$formdata['display_order'],
        					'image_path'	=>	$this->image_path[0],
        				 );

        	$where['id']	=	$_GET['id'];
        	$this->Crud->get_update('slideshow',$where,$data);

        	redirect('slideshow/mgmt');
        }
	}

	public function Render_delete()
	{
		$where['id']	=	$_GET['id'];
		$this->Crud->row_delete('slideshow',$where);

		redirect('slideshow/mgmt');
	}
}
