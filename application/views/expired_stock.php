<section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <div class="pull pull-right">
                <button onclick="printDiv('print-section')" class="btn btn-default btn-outline-primary pull-right "><i class="fa fa-print pull-left"></i> Cetak</button>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-sm-12">
            <div class="box " id="print-section">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> <?php echo $table_name; ?></h3>
                </div>
                <div class="box-body">
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
                				if($expire_result != NULL)
                                {
                					foreach ($expire_result as $single_item)
                                    {
                				?>
                                <tr>
                                    <td>
                                        <?php echo $single_item->product_name; ?>
                                    </td> 
                                    <td>
                                        <?php echo $single_item->mg.' '.$single_item->unit_type; ?>
                                    </td>
                                    <td>
                                        <?php echo $single_item->manufacturing; ?>
                                    </td>
                                    <td>
                                        <?php echo $single_item->expire; ?>
                                    </td>
                                    <td><input type="text" class="supply_fields" name="jml_return" id="jml_return" value="<?php echo $single_item->jumlah; ?>">
                                    </td>
                                    <td>
                                        <?php echo number_format($single_item->purchase,'0',',','.'); ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($single_item->retail,'0',',','.'); ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($single_item->quantity*$single_item->retail,'0',',','.'); ?>
                                    </td>
                                    <td>
                                        <?php echo $single_item->location; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group pull no-print pull-right">
                                            <button type="button" class="btn btn-info btn-flat">Tindakan
                                            </button>
                                            <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"> </span>
                                                <span class="sr-only">Toggle Dropdown </span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                 <li >
                                                    <a onclick="confirmation_alert('update back this to stock  ','<?php echo base_url();?>product/update_return/<?php echo $single_item->id.'/'; ?>'+ $('#jml_return').val())"  href="javascript:void(0)" > 
                                                        <i class="fa fa-pencil"> </i> Update kembali ke stok
                                                    </a>
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