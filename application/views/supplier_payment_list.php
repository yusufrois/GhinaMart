<section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <div class="pull pull-right">
                <button type="button" onclick="show_modal_page('<?php echo base_url('supplier/popup/add_supplier_payment_model');?>')" class="btn btn-primary btn-outline-primary" ><i class="fa fa-plus-square" aria-hidden="true"></i>  Pembayaran Baru
                </button>
                <button onclick="printDiv('print-section')" class="btn btn-default btn-outline-primary   pull-right "><i class="fa fa-print  pull-left"></i> Cetak</button>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box" id="print-section">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> Pembayaran Supplier
                    </h3> <br>
                </div>
                    <div class="box-body">
                        <div class="row">
                        <?php
                            $attributes = array('id'=>'invoice_form','method'=>'post',);
                        ?>
                        <?php echo form_open('supplier/payment_list',$attributes); ?>
                        <div class="col-md-3">
                            <div class="form-group ">
                                <?php echo form_label('Dari Tanggal:'); ?>
                                <div class="input-group date ">
                                    <div class="input-group-addon   ">
                                        <i class="fa fa-calendar "></i>
                                    </div>
                                    <?php
                                        $data = array('class'=>'form-control  input-lg','type'=>'date','id'=>'datepicker','name'=>'date1','placeholder'=>'e.g 12-08-2018','reqiured'=>'');
                                        echo form_input($data);
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <?php echo form_label('Sampai Tanggal:'); ?>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <?php
                                            $data = array('class'=>'form-control  input-lg' ,'type'=>'date','id'=>'datepicker','name'=>'date2','placeholder'=>'e.g 12-08-2018','reqiured'=>'');
                                            echo form_input($data);
                                        ?>
                                    </div>
                            </div>
                        </div>
                            <div class="col-md-3"  style="margin-top:17px">
                                <?php
                                    $data = array('class'=>'btn btn-info btn-outline-primary margin  input-lg','type' => 'submit','name'=>'searchecord','value'=>'true', 'content' => '<i class="fa fa-search" aria-hidden="true"></i> Cari Pembayaran');
                                    echo form_button($data);
                                 ?>
                            </div>
                            <?php echo form_close(); ?>
                    </div>
                    <div class="col-md-12 table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <?php
                                    foreach ($table_heading_names_of_coloums as $table_head)
                                    {
                                    ?>
                                        <th>
                                            <?php echo $table_head; ?>
                                        </th>
                                    <?php
                                    }
                                    ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if($supplier_payment != NULL)
                                {
                                    foreach ($supplier_payment as $single_supplier)
                                    {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $single_supplier->id; ?>
                                        </td>
                                        <td>
                                            <?php echo $this->db->get_where('mp_payee', array('id' => $single_supplier->supplier_id))->result_array()[0]['customer_name'] ; ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if($single_supplier->mode == 0)
                                                {
                                                    echo 'Dibayar';
                                                } 
                                                else
                                                {
                                                    echo 'Diterima';
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo number_format($single_supplier->amount,0,",","."); ?>
                                        </td>
                                        <td>
                                            <?php echo $single_supplier->name; ?>
                                        </td>
                                        <td>
                                            <?php echo $single_supplier->date; ?>
                                        </td>
                                        <td>
                                            <?php echo substr($single_supplier->description,0,45); ?>..
                                        </td>
                                        <td>
                                            <div class="btn-group pull no-print pull-right">
                                                <button type="button" class="btn btn-info btn-flat">Tindakan</button>
                                                <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li onclick="show_modal_page('<?php echo base_url().'supplier/popup/edit_supplier_payment/'.$single_supplier->id; ?>')" ><a href="#"><i class="fa fa-pencil"></i> Lihat</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                            }
                                        }

                                     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Bootstrap model  -->
<?php $this->load->view('bootstrap_model.php'); ?>
<!-- Bootstrap model  ends--> 