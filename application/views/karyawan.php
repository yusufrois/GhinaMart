<section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <div class="pull pull-right">
                <button type="button" class="btn btn-info btn-outline-primary"  onclick="show_modal_page('<?php echo base_url().'karyawan/popup/add_karyawan_model/'; ?>')" ><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Karyawan
                </button>
                <!---------- added new button ------------>
                 <button type="button" onclick="show_modal_page('<?php echo base_url();?>customers/popup/add_csv_model')" class="btn btn-success btn-outline-primary ">
                    <i class="fa fa-upload" aria-hidden="true"></i>
                    Upload CSV
                </button>
                <a href="<?php echo base_url('customers/export'); ?>" class="btn btn-primary btn-outline-primary ">
                    <i class="fa fa-file-excel-o" aria-hidden="true"></i>
                    Export CSV
                </a>
                <!---------- End new button ------------>
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
                                if($karyawan_list != NULL)
                                {
                                    foreach ($karyawan_list as $key=>$obj_karyawan_list)
                                    {
                            ?>
                                <tr>
                                     <td>
                                        <?php echo $key+1; ?>
                                    </td>
                                    <td>
                                        <?php echo $obj_karyawan_list->customer_name; ?>
                                    </td>
                                     <td>
                                        <?php echo $obj_karyawan_list->cus_contact_2; ?>
                                    </td>
                                     <td>
                                        <?php echo $obj_karyawan_list->cus_contact_1; ?>
                                    </td>
                                    <td>
                                        <?php echo $obj_karyawan_list->cus_email; ?>
                                    </td>
                                   
                                    <td>
                                        <?php echo $obj_karyawan_list->cus_type; ?>
                                    </td>
                                    <td>
                                        <?php echo $obj_karyawan_list->cus_region; ?>
                                    </td>
                                    <td>
                                        <?php echo $obj_karyawan_list->cus_town; ?>
                                    </td>

                                    <td>
                                        <?php echo img(array('width'=>'40','height'=>'40','class'=>'img-circle','src'=>'uploads/karyawan/'.$obj_karyawan_list->cus_picture)); ?>
                                    </td>
                                    <td>
                                    <?php 
                                        if($obj_karyawan_list->cus_status == 0)
                                        {
                                         echo "Aktif";
                                        }
                                        else
                                        {
                                            echo "Tidak Aktif";
                                        }
                                    ?>
                                    </td>
                                    <td>
                                        <div class="btn-group pull no-print pull-right">
                                            <button type="button" class="btn btn-info btn-flat">Tindakan</button>
                                            <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">

                                                <li onclick="show_modal_page('<?php echo base_url().'karyawan/popup/edit_karyawan_model/'.$obj_karyawan_list->id; ?>')" ><a href="#"><i class="fa fa-pencil"></i> Lihat</a></li>
                                                <li>
                                                    <a onclick="confirmation_alert('delete this  ','<?php echo base_url().'karyawan/delete/'.$obj_karyawan_list->id; ?>')"  href="javascript:void(0)" ><i class="fa fa-trash-o"></i> Hapus
                                                    </a>
                                                </li>  
                                                <?php
                                                if($obj_karyawan_list->cus_status != 0)
                                                {                                   
                                                ?>
                                                    <li>
                                                        <a onclick="confirmation_alert('make this active','<?php echo base_url(); ?>karyawan/change_status/<?php echo $obj_karyawan_list->id; ?>/0')"  href="javascript:void(0)"  ><i class="fa fa-minus"></i> Aktif</a>
                                                    </li>
                                                    <?php
                                                    }
                                                     if($obj_karyawan_list->cus_status != 1)
                                                    {       
                                                    ?>
                                                        <li>
                                                            <a onclick="confirmation_alert('make this in active','<?php echo base_url(); ?>karyawan/change_status/<?php echo $obj_karyawan_list->id; ?>/1')"  href="javascript:void(0)" ><i class="fa fa-minus"></i> Tidak Aktif</a>
                                                        </li>
                                                    <?php
                                                    }
                                                    ?>  
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