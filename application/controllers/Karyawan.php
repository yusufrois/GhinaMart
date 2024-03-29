<?php
/*

*/
defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan extends CI_Controller
{
	// Karyawan
	public function index()
	{
		// DEFINES PAGE TITLE
		$data['title'] = 'Daftar Karyawan';

		// DEFINES NAME OF TABLE HEADING
		$data['table_name'] = 'DAFTAR KARYAWAN :';

		// DEFINES BUTTON NAME ON THE TOP OF THE TABLE
		$data['page_add_button_name'] = 'Tambah Karyawan';

		// DEFINES THE TITLE NAME OF THE POPUP
		$data['page_title_model'] = 'Tambah Karyawan';

		// DEFINES THE NAME OF THE BUTTON OF POPUP MODEL
		$data['page_title_model_button_save'] = 'Simpan Karyawan';

		// DEFINES WHICH PAGE TO RENDER
		$data['main_view'] = 'karyawan';

		// DEFINES THE TABLE HEAD
		$data['table_heading_names_of_coloums'] = array(
			'No',
			'Nama',
			'No HP',			
			'No Telp',			
			'Email',
			'Jenis',
			'Region',
			'Kota',
			'Foto',
			'Status',
			'Aksi'
		);

		// DEFINES TO LOAD THE CATEGORY LIST FROM DATABSE TABLE mp_Categoty
		$this->load->model('Crud_model');
		$result = $this->Crud_model->fetch_payee_record('employee',NULL);
		$data['karyawan_list'] = $result;

		// DEFINES GO TO MAIN FOLDER FOND INDEX.PHP  AND PASS THE ARRAY OF DATA TO THIS PAGE
		$this->load->view('main/index.php', $data);
	}

	public function export()
	{
		$args_fileheader  = array(
			'ID Karyawan', 
			'Jenis', 
			'Nama Customer', 
			'No HP',   
			'No Telp',	   
			'Email',
			'Perusahaan',  
			'Alamat',  
			'Region',  
			'Kota'  
		);

		$args_table_header  = array(
			'id',  
			'cus_type',  
			'customer_name',       
			'cus_contact_2',   
			'cus_contact_1',
			'cus_email',   
			'cus_company',  
			'cus_address',
			'cus_region',
			'cus_town'  
		);

    //DEFINED IN HELPER FOLDER
		export_csv('karyawan_list',$args_fileheader,$args_table_header,'mp_payee',"type = 'employee'");

		redirect('karyawan');

	}

	//	Customers/add_customer
	public function add_karyawan()
	{
		// DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
		$this->load->model('Crud_model');
		$this->load->model('Transaction_model');

		// DEFINES READ MEDICINE details FORM MEDICINE FORM
		$customer_name = html_escape($this->input->post('customer_name'));
		$customer_email = html_escape($this->input->post('customer_email'));
		$customer_cnic = html_escape($this->input->post('customer_cnic'));
		$customer_type = html_escape($this->input->post('customer_type'));
		$customer_address = html_escape($this->input->post('customer_address'));
		$customer_contatc1 = html_escape($this->input->post('customer_contatc1'));
		$customer_contact_two = html_escape($this->input->post('customer_contact_two'));
		$customer_company = html_escape($this->input->post('customer_company'));
		$customer_region = html_escape($this->input->post('customer_region'));
		$customer_town = html_escape($this->input->post('customer_town'));
		$customer_description = html_escape($this->input->post('customer_description'));
		$picture = $this->Crud_model->do_upload_picture("customer_picture", "./uploads/karyawan/");

		// ASSIGN THE VALUES OF TEXTBOX TO ASSOCIATIVE ARRAY
		$args = array(
			'customer_name' => $customer_name,
			'cus_email' => $customer_email,
			'cus_address' => $customer_address,
			'cus_contact_1' => $customer_contatc1,
			'cus_contact_2' => $customer_contact_two,
			'cus_company' => $customer_company,
			'cus_region' => $customer_region,
			'cus_town' => $customer_town,
			'cus_description' => $customer_description,
			'cus_type' => $customer_type,
			'cus_date' => date('Y-m-d'),
			'cus_picture' => $picture,
			'customer_nationalid' => $customer_cnic,
			'type' => 'employee'
		);

		// CHECK WEATHER EMAIL ADLREADY EXISTS OR NOT IN THE TABLE
		$email_record_data = $this->Crud_model->check_email_address('mp_payee', 'cus_email', $customer_email);

	//	if ($email_record_data == NULL)
		if ($email_record_data == NULL)
		{
			// DEFINES CALL THE FUNCTION OF insert_data FORM Crud_model CLASS
			$result = $this->Crud_model->insert_data('mp_payee',$args);
			if ($result != NULL)
			{
				$array_msg = array(
					'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> karyawan added Successfully',
					'alert' => 'info'
				);
				$this->session->set_flashdata('status', $array_msg);
			}
			else
			{
				$array_msg = array(
					'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error karyawan cannot be added',
					'alert' => 'danger'
				);
				$this->session->set_flashdata('status', $array_msg);
			}
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i>Sorry Email already exists !',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}

		redirect('karyawan');
	}

	// Karyawan/Delete
	function delete($args)
	{
		// DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
		$this->load->model('Crud_model');

		// DEFINES TO DELETE IMAGE FROM FOLDER PARAMETER REQIURES ARRAY OF IMAGE PATH AND ID
		$this->Crud_model->delete_image('./uploads/karyawan/', $args, 'mp_payee');

		// DEFINES TO DELETE THE ROW FROM TABLE AGAINST ID
		$result = $this->Crud_model->delete_record('mp_payee', $args);
		if ($result == 1)
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-trash-o" aria-hidden="true"></i> karyawan record removed',
				'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error karyawan record cannot be changed',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		redirect('karyawan');
	}

	//Karyawan/Edit
	function edit()
	{
		// DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
		$this->load->model('Crud_model');

		// DEFINES READ MEDICINE details FORM MEDICINE FORM
		$edit_customer_id = html_escape($this->input->post('edit_customer_id'));
		$customer_name = html_escape($this->input->post('customer_name'));
		$customer_email = html_escape($this->input->post('customer_email'));
		$customer_cnic = html_escape($this->input->post('customer_cnic'));
		$customer_type = html_escape($this->input->post('customer_type'));
		$customer_address = html_escape($this->input->post('customer_address'));
		$customer_contatc1 = html_escape($this->input->post('customer_contatc1'));
		$customer_contact_two = html_escape($this->input->post('customer_contact_two'));
		$customer_company = html_escape($this->input->post('customer_company'));
		$customer_region = html_escape($this->input->post('customer_region'));
		$customer_town = html_escape($this->input->post('customer_town'));
		$customer_description = html_escape($this->input->post('customer_description'));
		$picture = $this->Crud_model->do_upload_picture("customer_picture", "./uploads/karyawan/");

		$upload_data = $this->upload->data();
		$file_name =   $upload_data['file_name'];

		// TABLENAME AND ID FOR DATABASE Actions
		$args = array(
			'table_name' => 'mp_payee',
			'id' => $edit_customer_id
		);

		// DATA ARRAY FOR UPDATE QUERY array('abc'=>abc)
		// DEFINES IF NO IMAGES IS SELECTED SO PRIVIOUS PICTURE REMAINS SAME
		if ($picture == "default.jpg")
		{
			// ASSIGN THE VALUES OF TEXTBOX TO ASSOCIATIVE ARRAY
			$data = array(
				'customer_name' => $customer_name,
				'cus_email' => $customer_email,
				'customer_nationalid' => $customer_cnic,
				'cus_address' => $customer_address,
				'cus_contact_1' => $customer_contatc1,
				'cus_contact_2' => $customer_contact_two,
				'cus_company' => $customer_company,
				'cus_region' => $customer_region,
				'cus_town' => $customer_town,
				'cus_description' => $customer_description,
				'cus_type' => $customer_type,
				'cus_date' => date('Y-m-d'),
				'type' => 'employee'
			);
		}
		else
		{
			// ASSIGN THE VALUES OF TEXTBOX TO ASSOCIATIVE ARRAY
			$data = array(
				'customer_name' => $customer_name,
				'cus_email' => $customer_email,
				'customer_nationalid' => $customer_cnic,
				'cus_address' => $customer_address,
				'cus_contact_1' => $customer_contatc1,
				'cus_contact_2' => $customer_contact_two,
				'cus_company' => $customer_company,
				'cus_region' => $customer_region,
				'cus_town' => $customer_town,
				'cus_description' => $customer_description,
				'cus_type' => $customer_type,
				'cus_date' => date('Y-m-d'),
				'cus_picture' => $picture,
				'type' => 'employee'
			);

			// DEFINES TO DELETE IMAGE FROM FOLDER PARAMETER REQIURES ARRAY OF IMAGE PATH AND ID
			$this->Crud_model->delete_image('./uploads/karyawan/', $edit_customer_id, 'mp_payee');
		}

		// CALL THE METHOD FROM Crud_model CLASS FIRST ARG CONTAINES TABLENAME AND OTHER CONTAINS DATA
		$result = $this->Crud_model->edit_record_id($args, $data);
		if ($result == 1)
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-pencil-square-o" aria-hidden="true"></i> karyawan Editted',
				'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> karyawan Category cannot be Editted',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		redirect('karyawan');
	}

	//Customer/popup
	//DEFINES A POPUP MODEL OG GIVEN PARAMETER
	function popup($page_name = '',$param = '')
	{
		$this->load->model('Crud_model');
		if($page_name  == 'edit_karyawan_model')
		{
			//USED TO REDIRECT LINK
			$data['link'] = 'karyawan/edit';
			$data['single_karyawan'] = $this->Crud_model->fetch_record_by_id('mp_payee',$param);
			//model name available in admin models folder
			$this->load->view( 'admin_models/edit_models/edit_karyawan_model.php',$data);
		}
		else if($page_name  == 'add_karyawan_model')
		{
			//USED TO REDIRECT LINK
			$data['link'] = 'karyawan/add_karyawan';
			//model name available in admin models folder
			$this->load->view( 'admin_models/add_models/add_karyawan_model.php',$data);
		}
		 else if($page_name  == 'add_csv_model')
			{
			$data['path'] = 'karyawan/upload_csv';
			//model name available in admin models folder
			$this->load->view('admin_models/add_models/add_csv_model.php',$data);
			} 
		else if($page_name  == 'add_karyawan_payment_model')
		{
			//DEFINES TO FETCH THE LIST OF BANK ACCOUNTS 
			$data['bank_list'] = $this->Crud_model->fetch_record('mp_banks','status');

			$data['customer_list'] = $this->Crud_model->fetch_payee_record('karyawan',NULL);
			$this->load->view( 'admin_models/add_models/add_customer_payment_model.php',$data);
		}
		else if($page_name  == 'edit_karyawan_payment_model')
		{
			//DEFINES TO FETCH THE LIST OF BANK ACCOUNTS 
			$data['bank_list'] = $this->Crud_model->fetch_record('mp_banks','status');

			$data['karyawan_list'] = $this->Crud_model->fetch_payee_record('employee',NULL);

			$data['karyawan_payments'] = $this->Crud_model->fetch_record_by_id('mp_karyawan_payments',$param );
			$this->load->view( 'admin_models/edit_models/edit_karyawan_payment_model.php',$data);
		}

	}

	function upload_csv()
		{
		$this->load->model('Crud_model');

		$user_name = $this->session->userdata('user_id');
		$added_by = $user_name['name'];

		//FETCHING THE CSV FILE TO UPLOAD RECORD INTO DATABASE TABLE
		$filename = $_FILES['upload_file']['tmp_name'];

		if($_FILES["upload_file"]["size"] > 0)
		{
		$file = fopen($filename, "r");
		while (($importdata = fgetcsv($file)))
		{
			$productid = $importdata[0];
			$customername = $importdata[2];
			$data = array(  
			'cus_type' => $importdata[1], 
			'customer_name' => $importdata[2],   
			'cus_email' => $importdata[3],  
			'cus_contact_2' => $importdata[4],  
			'cus_contact_1' => $importdata[5],
			'customer_nationalid' => $importdata[6],  
			'cus_company' => $importdata[7],  
			'cus_address' => $importdata[8],  
			'cus_region' => $importdata[9],
			'cus_town' => $importdata[10],
			'type' => 'employee'
			);
			$data2 = array(
			'id' => $productid,  
			'cus_type' => $importdata[1], 
			'customer_name' => $importdata[2],   
			'cus_email' => $importdata[3],  
			'cus_contact_2' => $importdata[4],  
			'cus_contact_1' => $importdata[5],
			'customer_nationalid' => $importdata[6],  
			'cus_company' => $importdata[7],  
			'cus_address' => $importdata[8],  
			'cus_region' => $importdata[9],
			'cus_town' => $importdata[10]
			);

			if(!empty($customername)){
				if(!empty($productid)){
				$this->db->where('id', $productid);
				$insert_result = $this->db->update('mp_payee',$data2); 
				}else{
				$insert_result =  $this->Crud_model->insert_data('mp_payee',$data);      
				}
			}

			}
			fclose($file);

			if ($insert_result == 1)
			{
			$array_msg = array(
			'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> '.'uploaded_successfully',
			'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
			}
			else
			{
			$array_msg = array(
			'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> '.'error_in_uploading',
			'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
			}
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> '.'empty_file',
				'alert' => 'danger'
				);   
			$this->session->set_flashdata('status', $array_msg);
		}

		redirect('karyawan');
		}

		//USED TO LIST THE CUSTOMER PAYMENT
	//Customer/payment_list
	

	function payment_list()
	{
		// DEFINES PAGE TITLE
		$data['title'] = 'Pembayaran Karyawan';

		// DEFINES NAME OF TABLE HEADING
		$data['table_name'] = 'PEMBAYARAN KARYAWAN:';

		// DEFINES WHICH PAGE TO RENDER
		$data['main_view'] = 'karyawan_payment_list';

		// DEFINES THE TABLE HEAD
		$data['table_heading_names_of_coloums'] = array(
			'ID Transaksi',
			'Nama Karyawan',
			'Jumlah',
			'Metode',
			'Tanggal',
			'Keterangan',
			'Aksi'
		);

		//FETCHING DATES FROM TEXT FIELDS 
		$date1 = html_escape($this->input->post('date1'));
		$date2 = html_escape($this->input->post('date2'));	

		if($date1 == NULL AND $date2 == NULL)
		{
			//ASSIGNING DEFAULT DATES 
			$date1 = date('Y-m').'-1';
			$date2 = date('Y-m').'-31';
		}
		
		// DEFINES TO LOAD THE DATA USING GIVEN DATES 
		$this->load->model('Accounts_model');
		$data['karyawan_payment']  = $this->Accounts_model->fetch_record_date('mp_karyawan_payments', $date1, $date2);

		// DEFINES GO TO MAIN FOLDER FOND INDEX.PHP  AND PASS THE ARRAY OF DATA TO THIS PAGE
		$this->load->view('main/index.php', $data);
	}

	//USED TO ADD CUSTOMERS PAYMENTS
	//Customer/add_customer_payments
	// function add_customer_payments()
	// {
	// 	// DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
	// 	$this->load->model('Transaction_model');
	// 	$this->load->model('Crud_model');

	// 	// DEFINES READ MEDICINE details FORM MEDICINE FORM
	// 	$customer_id = html_escape($this->input->post('customer_id'));
	// 	$amount = html_escape($this->input->post('amount'));
	// 	$method_id = html_escape($this->input->post('payment_id'));
	// 	$description = html_escape($this->input->post('description'));
	// 	$user_date = Date('Y-m-d');
	// 	$user_name = $this->session->userdata('user_id');
	// 	$bank_id = html_escape($this->input->post('bank_id'));
	// 	$ref_no = html_escape($this->input->post('ref_no'));
	// 	$save_available_balance = html_escape($this->input->post('save_available_balance'));

		
	// 		// ASSIGN THE VALUES OF TEXTBOX TO ASSOCIATIVE ARRAY
	// 		$args = array(
	// 			'customer_id' => $customer_id,
	// 			'date' => $user_date,
	// 			'amount' => $amount,
	// 			'method' => $method_id,
	// 			'description' => $description,
	// 			'agentname' => $user_name['name'],
	// 			'bank_id' => $bank_id,
	// 			'credithead' => ($method_id == 'Cash' ? '2' : '16'),
	// 			'ref_no' => $ref_no
	// 		);

	// 		// DEFINES CALL THE FUNCTION OF insert_data FORM Crud_model CLASS
	// 		$result = $this->Transaction_model->customer_payment_collection($args);
	// 		if ($result != NULL)
	// 		{
	// 			$array_msg = array(
	// 				'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"/> Added successfully',
	// 				'alert' => 'info'
	// 			);
	// 			$this->session->set_flashdata('status', $array_msg);
	// 		}
	// 		else
	// 		{
	// 			$array_msg = array(
	// 				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"/> Cannot be added',
	// 				'alert' => 'danger'
	// 			);
	// 			$this->session->set_flashdata('status', $array_msg);
	// 		}
			
	// 	redirect('customers/payment_list');
	// }

	//USED TO UPDATE CUSTOMER PAYMENTS
	//customer/edit_customer_payments
	// function edit_customer_payments()
	// {

	// 	// DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
	// 	$this->load->model('Crud_model');
	// 	// USER'S ACTIVE SESSION
	// 	$user_name = $this->session->userdata('user_id');
	// 	// RETRIEVING UPDATED VALUES FROM FORM MEDICINE FORM
	// 	$post_id = html_escape($this->input->post('post_id'));
	// 	$customer_id = html_escape($this->input->post('customer_id'));
	// 	$amount = html_escape($this->input->post('amount'));
	// 	$description = html_escape($this->input->post('description'));


	// 	$get_transaction_result = $this->Crud_model->fetch_record_by_id('mp_customer_payments',$post_id);
	// 	$transaction_id =  $get_transaction_result[0]->transaction_id;

	// 	$data2  = array(
	// 		'amount' => $amount, 
	// 	);

	// 	// TABLENAME AND ID FOR DATABASE Actions
	// 	$args2 = array(
	// 		'table_name' => 'mp_sub_entry',
	// 		'id' => $transaction_id
	// 	);

	// 	// CALL THE METHOD FROM Crud_model CLASS FIRST ARG CONTAINES TABLENAME AND OTHER CONTAINS DATA
	// 	$result = $this->Crud_model->edit_record_transac($args2, $data2);

	// 	// DATA ARRAY FOR UPDATE QUERY array('abc'=>abc)
	// 	$data = array(
	// 		'customer_id' => $customer_id,
	// 		'amount' => $amount,
	// 		'description' => $description
	// 	);

	// 	// TABLENAME AND ID FOR DATABASE Actions
	// 	$args = array(
	// 		'table_name' => 'mp_customer_payments',
	// 		'id' => $post_id
	// 	);

	// 	// CALL THE METHOD FROM Crud_model CLASS FIRST ARG CONTAINES TABLENAME AND OTHER CONTAINS DATA
	// 	$result = $this->Crud_model->edit_record_id($args, $data);
	// 	if ($result == 1)
	// 	{
	// 		$array_msg = array(
	// 			'msg' => '<i style="color:#fff" class="fa fa-pencil-square-o" aria-hidden="true"/> Payment Editted',
	// 			'alert' => 'info'
	// 		);
	// 		$this->session->set_flashdata('status', $array_msg);
	// 	}
	// 	else
	// 	{
	// 		$array_msg = array(
	// 			'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"/> Payment cannot be editted',
	// 			'alert' => 'danger'
	// 		);
	// 		$this->session->set_flashdata('status', $array_msg);
	// 	}

	// 	redirect('customers/payment_list');
	// }

	// Customer/change_status/id/status
	function change_status($id, $status)
	{

		// TABLENAME AND ID FOR DATABASE Actions
		$args = array(
			'table_name' => 'mp_payee',
			'id' => $id
		);

		// DATA ARRAY FOR UPDATE QUERY array('abc'=>abc)
		$data = array(
			'cus_status' => $status
		);

		// DEFINES LOAD CRUDS_MODEL FORM MODELS FOLDERS
		$this->load->model('Crud_model');

		// CALL THE METHOD FROM Crud_model CLASS FIRST ARG CONTAINES TABLENAME AND OTHER CONTAINS DATA
		$result = $this->Crud_model->edit_record_id($args, $data);
		if ($result == 1)
		{
			$array_msg = array(
				'msg' => '<i style="color:#fff" class="fa fa-check-circle-o" aria-hidden="true"></i> Status changed Successfully!',
				'alert' => 'info'
			);
			$this->session->set_flashdata('status', $array_msg);
		}
		else
		{
			$array_msg = array(
				'msg' => '<i style="color:#c00" class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error Status cannot be changed',
				'alert' => 'danger'
			);
			$this->session->set_flashdata('status', $array_msg);
		}

		redirect('karyawan');
	}

}

