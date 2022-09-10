<?php
/*

*/
defined('BASEPATH') OR exit('No direct script access allowed');
class print_struk extends CI_Controller
{
	// Layout
	public function index()
	{
		// DEFINES PAGE TITLE
		//$data['title1'] = 'Print Struk';

		// DEFINES PAGE TITLE
		//$data['title2'] = 'Pengaturan Layout Website :';

		// DEFINES WHICH PAGE TO RENDER
		$data['main_view'] = 'print_struk';

		// DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
		$this->load->model('Crud_model');

		// FETCHING THE RECORD FROM TABLE GIVEN
		$company_record = $this->Crud_model->fetch_record('mp_langingpage', '');
		$data['company_record'] = $company_record;

		$data['items'] = $this->Crud_model->view_letter();
		//var_dump($data['items']);
		// DEFINES GO TO MAIN FOLDER FOND INDEX.PHP  AND PASS THE ARRAY OF DATA TO THIS PAGE
		$this->load->view('main/index.php', $data);
	}

	public function print()
	{
		$data['main_view'] = 'print_struk';
		$data['items'] = $this->Crud_model->view_letter();
		$this->load->view('main/index.php', $data);
	}

	
}