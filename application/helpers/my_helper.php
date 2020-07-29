<?php
function _ec($value='')
{
	echo $value;
	exit();
}

function _pre($value=array())
{
	echo "<pre>";
	print_r($value);
	echo "<pre>";
	exit();
}


function _image($path)
{
	if(file_exists($path) && is_file($path)) {
		return base_url($path);
	} else {
		return base_url('assets/front/image/default.jpeg');
	}
}

function active($segment,$pg='')
{
	echo  ($segment[1]==$pg) ? 'active' : '';
}


function _error($name='')
{
	$CI =& get_instance();
	return isset($CI->data['error'][$name]) ? $CI->data['error'][$name] : '';
}




function get_user ($where=array()) {
	$CI =& get_instance();

	$permissions	=	$CI->Crud->get_where('user',$where)->row_array();

	return $permissions;
}

function _redirect ($name,$msg) {
	$CI =& get_instance();

	$CI->session->set_flashdata($name,$msg);


	$url = $CI->config->site_url($CI->uri->uri_string());
	redirect($_SERVER['QUERY_STRING'] ? $url.'?'.$_SERVER['QUERY_STRING'] : $url);
}

function cms($id) {
	$CI =& get_instance();

	$where['id']	=	$id;
	$cms	=	$CI->Crud->get_where('page',$where)->row();

	return $cms;
}

function general($field) {
	$CI =& get_instance();

	$where['id']	=	'1';
	$cms	=	$CI->Crud->get_where('general',$where)->row_array();

	return $cms[$field];
}

function get_row ($tbl,$where=array()) {
	$CI =& get_instance();

	$permissions	=	$CI->Crud->get_where($tbl,$where)->row_array();

	return $permissions;
}

function _get_row ($tbl,$where=array()) {
	$CI =& get_instance();

	$permissions	=	$CI->Crud->get_where($tbl,$where);

	return $permissions;
}


function _get_byorder ($tbl,$id='id', $orderby = 'DESC',$dis='0',$where=array(1=>1)) {
	$CI =& get_instance();

	$result	=	$CI->Crud->get_allrecord($tbl,$id,$orderby,$dis,$where);

	return $result;
}

function _captch()
{
	$CI =& get_instance();
	$CI->load->library('session');
	$CI->load->helper('captcha');

	$config = array(
			            'img_path' => './captcha_images/',
			            'img_url' => base_url('captcha_images/'),
			            'img_width' => '150',
			            'img_height' => 30,
			            'expiration' => 7200,
			        );
        $captcha = create_captcha($config);
        
        // Unset previous captcha and set new captcha word
        $captchaarr = is_array($CI->session->userdata('captchaCode')) ? $CI->session->userdata('captchaCode') : array();
        array_push($captchaarr, $captcha['word']);
        $CI->session->set_userdata('captchaCode', $captchaarr);
        
        // Pass captcha image to view
        return $captcha['image'];
}



function socialsharingbuttons($social='', $params=''){
	$button= '';
	switch ($social) {
		case 'facebook':
		$button='http://www.facebook.com/share.php?u='. $params['url'];
		break;
		case 'twitter':
		$button='https://twitter.com/share?url='.$params['url'];
		break;
		case 'google-plus':
		$button='https://plus.google.com/share?url='. $params['url'];
		break;
		case 'whatsapp':
		if(preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])){
			$button='whatsapp://send?text='. $params['url'];
		}else{
			$button='https://web.whatsapp.com/send?text='. $params['url'];
		}
		break;
		case 'linkedin':
		$button='http://www.linkedin.com/shareArticle?mini=true&amp;url='. $params['url'];
		break;
		default:
		break;
	}
	return $button;      
}
?>