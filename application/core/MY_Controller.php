<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public $image_path = array();

	function __construct(){
		parent::__construct();

		$this->segment = $this->uri->segment_array();

		$this->data['content'] = '';
		$this->data['error'] = array();
		$this->data['css'] = ''; 
        // $this->data['captcha'] = _captch();
	}

    function _iscaptcha($code,$frm)
    {
        if(!in_array($code, $this->session->userdata('captchaCode'))) {
            _redirect($frm,'<div class="alert alert-danger" role="alert">Please Enter Valid Captcha</div>');
            return false;
        }
    }

   

    public function meta($id='',$pg='')
    {   
        if($id) {
           $page = $this->Crud->get_where('page',array('id'=>$id))->row();
           $this->data['titletag']      =   $page->meta_title;
           $this->data['meta_title']    =   $page->meta_title;
           $this->data['meta_keyword']  =   $page->meta_keyword;
           $this->data['meta_desc']     =   $page->meta_desc;
       } elseif($pg) {
           $this->data['titletag']      =   $pg['meta_title'];
           $this->data['meta_title']    =   $pg['meta_title'];
           $this->data['meta_keyword']  =   $pg['meta_keyword'];
           $this->data['meta_desc']     =   $pg['meta_desc'];
       }
    }

    public function mailsend($body='',$subject='',$attach=array(),$to='info@carpartsdubai.com',$cc='',$bcc='')
    {
        $this->load->library('email');

        $this->email->set_mailtype("html");
        $this->email->from('info@carpartsdubai.com', 'Carparts Dubai');
        $this->email->to($to);
        $this->email->cc($cc);
        $this->email->bcc($bcc);

        foreach ($attach as $key => $value) {
        $this->email->attach($value);
        }


        $this->email->subject($subject);
        $this->email->message($body);

        if($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }

	protected function render($template,$path) {
        // save the controller and action names in session
		$dir           =    ($template=='main') ? 'frontend' : 'backend';
        $view_path     =    $dir.'/'.$path . '.php'; //set the path off the view

        if (file_exists(APPPATH . 'views/' . $view_path)) {
            $this->data['content'] .= $this->load->view($view_path, $this->data, true);  //load the view
        }

        $this->load->view("layouts/".$dir.".tpl.php", $this->data);  //load the template
    }

    public function image_check($str,$img)
    {
    	$image=explode(' & ', $img);

    	if(!empty($_FILES[$image[0]]['name'])){
    		$config['upload_path']   = 'assets/front/image/'.$image[1];
    		$config['allowed_types'] = $image[2];           
    		$config['file_name'] = 'image/'.time();          
    		$this->upload->initialize($config);
    		if (!$this->upload->do_upload($image[0])) {
    			$this->form_validation->set_message('image_check',$this->upload->display_errors());
    			return false;
    		}   
    		else
    		{

                $config['encrypt_name'] = TRUE;
                $config['overwrite'] = TRUE;
                $config['remove_spaces'] = true;      
                $config['image_library'] = 'gd2';
                $config['source_image'] = $this->upload->upload_path.$this->upload->file_name;
                $config['create_thumb'] = TRUE;
                $config['thumb_marker'] = "";
                $config['maintain_ratio'] = false;
                $config['width'] = $image[3];
                $config['height'] = $image[4];
                $this->load->library('image_lib', $config);
                if($this->image_lib->resize()) {
                    $this->image_path[]=$image[1].'/'.$this->upload->file_name;     
                    return true;
                } else {
                    $this->form_validation->set_message('image_check', $this->image_lib->display_errors());
                    return false;  
                }
    		}   
    	}   
    	else
    	{
    		if($this->input->post($image[6])!="")
    		{

    			$this->image_path[]=$this->input->post($image[6]);
    			return true;
    		}
    		else
    		{
                if($image[5] == 'true') {
                    $this->form_validation->set_message('image_check', "No file selected");
                    return false;
                } else {
                    $this->image_path[]='';
        			return true;
                }
    		}   
    	} 
    }
}

?>