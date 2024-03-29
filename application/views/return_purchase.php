<section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <div class="pull pull-right">
                <a type="button" class="btn btn-danger btn-flat btn-sm" href="<?php echo base_url('purchase');?>" ><i class="fa fa-times" aria-hidden="true"></i> Purchase
                </a>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="box" id="print-section">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Buat Retur Pembelian :
            </h3>
        </div>
        <div class="box-body">
                <?php
                    $attributes = array('id'=>'create_purchase_form','method'=>'post','class'=>'');
                ?>
                <?php echo form_open_multipart('purchase/add_purchase',$attributes); ?>
                <div class="row">
                    <div class="col-md-12 ">
                        <h4 class="purchase-heading"><i class="fa fa-check-circle"></i>  Informasi Umum :</h4>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <?php echo form_label('Supplier'); ?>
                                <select name="pur_supplier" class="form-control input-lg">
                                    <?php 
                                    foreach ($supplier_list as $single_supplier) 
                                    {
                                    ?>
                                        <option value="<?php echo $single_supplier->id; ?>">
                                            <?php echo $single_supplier->customer_name; ?>     
                                        </option>
                                    <?php 
                                     }
                                    ?>
                                </select>
                            </div>
                        </div>                
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <?php echo form_label('Toko'); ?>
                                <select name="pur_store" class="form-control input-lg">
                                   <?php 
                                        if($store_list != NULL)
                                        {
                                            foreach ($store_list as $single_store) 
                                            {
                                    ?>
                                                <option value="<?php echo $single_store->id; ?>"><?php echo $single_store->name; ?> 
                                                </option>
                                    <?php
                                            }
                                        }

                                     ?>
                                </select>
                            </div>
                        </div>                
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <?php echo form_label('No Tagihan'); ?>
                                <?php
                                    $data = array('class'=>'form-control input-lg','type'=>'number','name'=>'pur_invoice','placeholder'=>'e.g 255','reqiured'=>'');
                                    echo form_input($data);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <h4 class="purchase-heading"><i class="fa fa-check-circle"></i>  Rincian Pembelian :</h4>
                        <div class="col-md-3 ">
                            <div class="form-group">
                                <?php echo form_label('Grand Total'); ?>
                                <?php
                                    $data = array('class'=>'form-control input-lg','type'=>'number','name'=>'pur_total','id'=>'grand_total','step'=>'.01','reqiured'=>'');
                                    echo form_input($data);
                                ?>
                            </div>                
                        </div>                    
                        <div class="col-md-3">                
                              <div class="form-group">
                                    <label>Upload image</label>
                                     <div class="input-group">
                                        <input type="file" name="pur_picture" data-validate="required" class="form-control input-lg" data-message-required="Value Required" >
                                    </div>
                              </div>
                             <small>capture atau scan gambar tagihan  </small>
                        </div>                 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="purchase-heading"><i class="fa fa-check-circle"></i>  Rincian Pembayaran :</h4>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php echo form_label('Metode Return'); ?>
                                <!-- <select name="pur_method" id="payment_id" class="form-control input-lg">
                                    <option value="Cash">Tunai</option>
                                     <option value="Cheque">Cek</option>
                                <
                                </select> -->
                                <select name="pur_method" id="payment_id" class="form-control input-lg">
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
                        </div>                
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php echo form_label('Tanggal Pembayaran'); ?>
                                <?php
                                    $data = array('class'=>'form-control input-lg','type'=>'date','name'=>'pur_date','reqiured'=>'');
                                    echo form_input($data);
                                ?>
                            </div>
                        </div>                
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php echo form_label('Jumlah Diterima'); ?>
                                <?php
                                    $data = array('class'=>'form-control input-lg','onkeyup'=>'calculate_func(this.value)','type'=>'number','name'=>'pur_paid','step'=>'.01','reqiured'=>'');
                                    echo form_input($data);
                                ?>
                            </div>
                        </div>                
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php echo form_label('Sisa'); ?>
                                <?php
                                    $data = array('class'=>'form-control input-lg','type'=>'number','id'=>'balance_field','name'=>'pur_balance','step'=>'.01','reqiured'=>'');
                                    echo form_input($data);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <br />
                    <div class="col-md-12">
                        <div class="bank-section-details">
                            <div class="col-md-9">
                                <div class="form-group ">
                                    <label>Deposit bank: </label>               
                                    <select class="form-control select2" name="bank_id" id="bank_id"  style="width: 100%;">
                                        <option value="0"> Akun Bank</option>
                                        <?php
                                        //category_names from mp_category table;
                                        if($bank_list != NULL)
                                        {       
                                            foreach ($bank_list as $single_bank)
                                            {
                                        ?>
                                            <option value="<?php echo $single_bank->id; ?>" ><?php echo $single_bank->bankname.' | Nama: '.$single_bank->title.' | Akun:  '.$single_bank->accountno.' | Cabang:  '.$single_bank->branch.' | Kode:  '.$single_bank->branchcode; ?> 
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
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" id="bank-cheque-no">
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
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h4 class="purchase-heading"><i class="fa fa-check-circle"></i>  Keterangan Retur:</h4>
                            <?php
                                $data = array('class'=>'form-control input-lg','type'=>'text','name'=>'pur_description','placeholder'=>'Tulis Keterangan','reqiured'=>'');
                                echo form_input($data); 

                                $data = array('type'=>'hidden','name'=>'status','value'=>'1','reqiured'=>'');
                                echo form_input($data);
                            ?>
                        </div>
                    </div>
                </div>            
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <?php
                                $data = array('class'=>'btn btn-info btn-flat margin btn-lg pull-right ','type' => 'submit','name'=>'btn_submit_customer','value'=>'true', 'content' => '<i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Retur');
                                
                                echo form_button($data);
                             ?>  
                        </div>
                    </div>
                </div>
                <?php form_close(); ?>
        </div>
    </div>
</section>
<script type="text/javascript">
    var timmer;
    function calculate_func(val)
    {
        clearTimeout(timmer);
        timmer = setTimeout(function callback()
          { 
             var grand_total = $('#grand_total').val();         
             var balance =  grand_total-val;
             $('#balance_field').val(balance);      

          }, 800);
    }

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
<!-- Bootstrap model  -->
<?php $this->load->view('bootstrap_model.php'); ?>
<!-- Bootstrap model  ends--> 