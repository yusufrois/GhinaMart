<section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <div class="pull pull-right">
                <button class="btn btn-info btn-outline-primary" onclick="show_modal_page('<?php echo base_url().'initilization/popup/add_stores_model/'; ?>')" ><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Toko
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
                    <h3 class="box-title"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> 
                        <?php echo $table_name; ?>
                    </h3>
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
                                if($store_list != NULL)
                                {
                                    foreach ($store_list as $single_store)
                                    {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $single_store->name; ?>
                                        </td> 
                                        <td>
                                            <?php echo $single_store->code; ?>
                                        </td> 
                                        <td>
                                            <?php echo $single_store->address; ?>
                                        </td>
                                        <td>
                                            <div class="btn-group pull no-print pull-right">
                                                <button type="button" class="btn btn-info btn-flat">Tindakan</button>
                                                <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li onclick="show_modal_page('<?php echo base_url().'initilization/popup/edit_stores_model/'.$single_store->id; ?>')" ><a href="#"><i class="fa fa-pencil"></i> Lihat</a>
                                                    </li>
                                                    <li><a onclick="confirmation_alert('delete this  ','<?php echo base_url().'initilization/delete/stores/'.$single_store->id; ?>')" href="javascript:void(0)" ><i class="fa fa-trash-o"></i> Hapus </a>
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