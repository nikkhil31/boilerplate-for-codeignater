<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

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


			if (isset($this->segment[1])) {

				$method =	"Render_" . str_replace("-", "_", $this->segment[1]);

			} else {

				$method =	"Render_index";
			}
			$this->$method();
		}		
	}

	public function Render_csv($value='')
	{
		$data = array();
        $memData = array();

        $insertCount = $updateCount = $rowCount = $notAddCount = 0;
                
                $this->load->library('CSVReader');
                    
                    // Parse data from CSV file
                    $csvData = $this->csvreader->parse_csv('assets/front/image/csv/image1592050396.csv');
                    _pre($csvData);
                    
                   
               
	}

	public function Render_dashboard()
	{
		$this->render('back','dashboard');
	}
}