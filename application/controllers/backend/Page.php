<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {
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

	public function Render_mgmt($value='')
	{
		$this->data['page'] = $this->Crud->get_allrecord('page','id','asc'); 
		$this->render('back','page_mgmt');
	}

	public function Render_edit($value='')
	{
		$this->data['page']	=	$this->Crud->get_where('page',array('id'=>$_GET['id']))->row();
		$this->render('back','page_edit');
	}

	public function Creator_edit($formdata)
	{
		$img1='image & banner & png|PNG|JPEG|jpeg|JPG|jpg & 1170 & 400 & false & old_image';

		$this->form_validation->set_rules('image'  , 'Image',	'callback_image_check['.$img1.']');

		if ($this->form_validation->run() == FALSE)
        {
        	$this->data['error']['image']			=	form_error('image');
        	$this->Render_edit();
        } else {
        	$data = array(
        					'name'			=> $formdata['name'],
        					'page_title'	=> $formdata['page_title'],
        					'title'			=> $formdata['title'],
        					'small_desc'	=> $formdata['small_desc'],
        					'image_path'	=> $this->image_path[0],
        					'alt'			=> $formdata['alt'],
        					'seo_linktitle'	=> $formdata['seo_linktitle'],
        					'meta_title'	=> $formdata['meta_title'],
        					'meta_keyword'	=> $formdata['meta_keyword'],
        					'meta_desc'		=> $formdata['meta_desc'],
        					'description'	=> $formdata['description'],
        				 );
        	$where['id']	=	$_GET['id'];
        	$this->Crud->get_update('page',$where,$data);

        	redirect('page/mgmt');

        }
	}
}