<section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <div class="pull pull-right">
                <button class="btn btn-info btn-outline-primary" onclick="show_modal_page('<?php echo base_url().'supply/popup/add_vehicle_model/'; ?>')" ><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Kendaraan
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
                                if($vehicle_list != NULL)
                                {
                                    foreach ($vehicle_list as $single_vehicle)
                                    {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $single_vehicle->name; ?>
                                        </td>
                                        <td>
                                            <?php echo $single_vehicle->number; ?>
                                        </td>
                                        <td>
                                            <?php echo $single_vehicle->vehicle_id; ?>
                                        </td>
                                        <td>
                                            <?php echo $single_vehicle->chase_no; ?>
                                        </td>
                                        <td>
                                            <?php echo $single_vehicle->engine_no; ?>
                                        </td>
                                        <td>
                                            <?php echo $single_vehicle->date; ?>
                                        </td>                                              
                                        <td>
                                            <?php 
                                                if($single_vehicle->status == 0)
                                                {
                                                    echo "Aktif";
                                                } 
                                                else
                                                {
                                                    echo "Nonaktif";
                                                }
                                            ?>
                                        </td>

                                        <td>
                                            <div class="btn-group pull no-print pull-right">
                                                <button type="button" class="btn btn-info btn-flat">Aksi</button>
                                                <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">

                                                    <li onclick="show_modal_page('<?php echo base_url().'supply/popup/edit_vehicle_model/'.$single_vehicle->id; ?>')" ><a href="#"><i class="fa fa-pencil"></i> Lihat</a>
                                                    </li>
                                                    <li><a onclick="confirmation_alert('delete this','<?php echo base_url().'supply/delete/vehicle/'.$single_vehicle->id; ?>')"  href="javascript:void(0)" ><i class="fa fa-trash-o"></i> Hapus</a>
                                                    </li>
                                                    <?php
                                                        if($single_vehicle->status != 0)
                                                        {                                   
                                                    ?>
                                                        <li>
                                                            <a onclick="confirmation_alert('make this active','<?php echo base_url(); ?>supply/change_status/vehicle/<?php echo $single_vehicle->id; ?>/0')"  href="javascript:void(0)"  ><i class="fa fa-minus"></i> Aktifkan</a>
                                                        </li>
                                                        <?php
                                                            }

                                                             if($single_vehicle->status != 1)
                                                            {       
                                                        ?>
                                                            <li>
                                                                <a onclick="confirmation_alert('make this in active','<?php echo base_url(); ?>supply/change_status/vehicle/<?php echo $single_vehicle->id; ?>/1')"  href="javascript:void(0)" ><i class="fa fa-minus"></i> Nonaktifkan
                                                                </a>
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