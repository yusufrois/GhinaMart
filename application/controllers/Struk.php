<?php
/*

*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Struk extends CI_Controller
{

  public function index()
	{
		// DEFINES PAGE TITLE
		$data['title'] = 'Struk Baru';

		// DEFINES WHICH PAGE TO RENDER
		$data['main_view'] = 'struk';

		
		// DEFINES GO TO MAIN FOLDER FOND INDEX.PHP  AND PASS THE ARRAY OF DATA TO THIS PAGE
		$this->load->view('main/index.php', $data);
	}

	public function print($general_info,$data_prod)
	{
		$data['title'] = 'Struk Baru';
		$data['main_view'] = 'struk';
		$data['general_info'] = $general_info;
		$data['data_prod'] = $data_prod;
		//$data['items'] = $this->Crud_model->view_letter();
		$this->load->view('main/index.php', $data);
	}


}