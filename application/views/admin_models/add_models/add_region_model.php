<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h4 class="modal-title"><i class="fa fa-plus-square" aria-hidden="true"></i>
	 	Tambah Region
	</h4>
</div>
<div class="modal-body">
	<div class="row">
 	 	<div class="box box-danger">
        	<div class="box-body">
	         	<div class="col-md-12">
				 <?php
					$attributes = array('id'=>'region_form','method'=>'post','class'=>'form-horizontal');
				  ?>
					<?php echo form_open($link,$attributes); ?>  
			         <div class="form-group">    
						<?php
							echo form_label('Nama Region:');
							$data = array('class'=>'form-control input-lg','type'=>'text','name'=>'region','placeholder'=>'Contoh Jawa Barat','reqiured'=>'');
							echo form_input($data);							
						?>           
			         </div>			         
			         <div class="form-group">    
						<?php
							echo form_label('Kode Region:');
							$data = array('class'=>'form-control input-lg','type'=>'text','name'=>'code','placeholder'=>'Masukkan Kode Region','reqiured'=>'');
							echo form_input($data);							
						?>           
			         </div>			           
					 <div class="form-group">  				
						<?php
							$data = array('class'=>'btn btn-info btn-flat btn-lg','type' => 'submit','name'=>'btn_submit_category','value'=>'true', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Region');
							
							echo form_button($data);	
						 ?>    
			         </div>
						<?php echo form_close(); ?>			    		
	        	</div>	
     		</div>				  
		</div>
	</div>
</div>
<!-- Form Validation -->
<script src="<?php echo base_url(); ?>assets/dist/js/custom.js"></script>