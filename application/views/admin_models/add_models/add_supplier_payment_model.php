<!-- Select2 -->
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title"><i class="fa fa-money" aria-hidden="true"></i>
		Pembayaran Ke Supplier
	 </h4>
</div>
  <div class="modal-body">
	<div class="row">
      <div class="box box-danger">
        <div class="box-body">
          <div class="col-md-12">
				 <?php
						$attributes = array('id'=>'supplier_payment','method'=>'post','class'=>'form-horizontal');
				?>
				<?php echo form_open('supplier/add_supplier_payments',$attributes); ?>  
					<div class="form-group">
			       		<?php echo form_label('Nama Supplier'); ?>
			        	<select name="pur_supplier" class="form-control select2 input-lg">
			            <?php 
			            var_dump($supplier_list);
			            if($supplier_list  != NULL)
			            {
				            foreach ($supplier_list as $single_supplier) 
				            {
				            ?>
				                <option value="<?php echo $single_supplier->id; ?>">
				                    <?php //echo $single_supplier->customer_name 	; ?>
									 <?php echo 'Nama: '.$single_supplier->customer_name.' - '.$single_supplier->cus_company.' - '.$single_supplier->cus_contact_2.' - '.$single_supplier->cus_type.' - '.$single_supplier->cus_region;

                                         ?>       
				                </option>
				            <?php 
				             }
			            }
			            ?>
			        	</select>
			        </div>	
			      <div class="form-group">
			       		<?php echo form_label('Mode Pembayaran'); ?>
			        	<select name="mode" class="form-control input-lg">
				                <option value="0">Pembayaran</option>
				                <option value="1">Penerimaan</option>
			        	</select>
			      </div>          	          
			      <div class="form-group">    
					<?php
							echo form_label('Jumlah :');
							$data = array('class'=>'form-control input-lg','type'=>'text','name'=>'amount','placeholder'=>'e.g 3200','reqiured'=>'');
							echo form_input($data);							
					?>           
			      </div>	
			     <div class="form-group">
					<label>Metode Pembayaran : </label>	
					<select name="payment_id" id="payment_id" class="form-control input-lg">
					<?php
                                        //category_names from mp_category table;
					if($akun_list != NULL)
					{       
						foreach ($akun_list as $single_akun)
						{
							?>
							<option value="<?php echo $single_akun->id; ?>" ><?php echo $single_akun->name; ?> 
						</option>
						<?php
					}
				}
				else
				{
					echo "No Record Found";
				}
				?>
			</select>
				 </div>
				<div class="bank-section-details">
					<div class="form-group ">
							<label>Akun Deposit / Penarikan: </label>				
							<select class="form-control select2" name="bank_id" id="bank_id"  style="width: 100%;">
								<option value="0"> Akun Bank</option>
								<?php
								//category_names from mp_category table;
								if($bank_list != NULL)
								{		
									foreach ($bank_list as $single_bank)
									{
								?>
									<option value="<?php echo $single_bank->id; ?>" ><?php echo $single_bank->bankname.' | Nama Bank : '.$single_bank->title.' | Akun : '.$single_bank->accountno.' | Cabang : '.$single_bank->branch.' | Kode : '.$single_bank->branchcode; ?> 
									</option>
								<?php
										}
									}
									else
									{
										echo "No Record Found";
									}
								?>	
							</select>
							<h5>Saldo Tersedia <b id="available_balance"> 0 </b></h5>
						</div>
						<div class="form-group " id="bank-cheque-no">
							<?php echo form_label('Nomor Cek:'); ?>
							<?php				
								$data = array('class'=>'form-control input-lg','type'=>'text','name'=>'ref_no','reqiured'=>'');
								echo form_input($data);				
							?>
							<?php				
								$data = array('type'=>'hidden','id'=>'save_available_balance','name'=>'save_available_balance','value'=>'0','reqiured'=>'');
								echo form_input($data);				
							?>
						</div>
					</div>  
			      <div class="form-group">  
						<?php
							echo form_label('Deskripsi :');
							$data = array('class'=>'form-control input-lg','type'=>'text','name'=>'description','placeholder'=>'Rincian Pembayaran','reqiured'=>'');
							echo form_input($data);	
						 ?>	
				  </div>
				  <div class="form-group">  				
					<?php
						$data = array('class'=>'btn btn-info btn-outline-primary','type' => 'submit','name'=>'btn_submit_category','value'=>'true', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan');
						
						echo form_button($data);	
					 ?>    
			      </div>
				<?php echo form_close(); ?>			    		
			    </div>	
		      </div>				  
	    </div>
	</div>
</div>
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript">
	  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });

  $('#payment_id').change(function(){
	var method = $('#payment_id').val();
	if(method == 'Cheque')
	{
		$('.bank-section-details').css('display','block');
	}
	else
	{
		$('.bank-section-details').css('display','none');
	}
});

$('#bank_id').change(function(){
	var bank_id = $('#bank_id').val();


	if(bank_id != 0)
	{
		// SHOW AJAX RESPONSE ON REQUEST SUCCESS
        $.ajax({
            url: '<?php echo base_url('bank/check_available_balance/'); ?>'+bank_id,
            success: function(response)
            {
                $('#available_balance').html(response);
                $('#save_available_balance').val(response);
            }
        });

		$('#bank-cheque-no').css('display','block');
	}
});
</script>
 <!-- Form Validation -->
<script src="<?php echo base_url(); ?>assets/dist/js/custom.js"></script>