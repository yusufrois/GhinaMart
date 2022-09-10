<<<<<<< HEAD


<section class="content">
       <!--  <div class="box-header text-center">
            <h3 class="box-title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <?php echo $title1; ?></h3>
        </div> -->
    <div class="box-body">

        <style type="text/css">
        p {
            margin: 0;
            line-height: 1.5;
            font-size: .75em;
            min-height: 10px;
        }
        hr {
            margin-top: 0px;
            margin-bottom: 0px;
            border-top-width: 0;
            border-left-width: 0;
            border-right-width: 0;
            border:dashed 1px gray;
        }
        th{text-align: left;}

        @media print {
            .hidden-print,
            .hidden-print * {
                display: none !important;
            }
        }

        </style>
         <div class="wrapper">
            <div class="container">
                <div id="print">
                    <table border="0" cellspacing="0" cellpadding="5" width="302.362px" bgcolor="white" align="center">
                        <tr>
                            <td>
                                <table border="0" cellspacing="0" cellpadding="15" width="100%">
                                    <tr>
                                        <td>
                                            <table border="0" cellspacing="0" cellpadding="0" width="100%">

                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="text-align: center;">
                                                            <tr>
                                                                <td width="100%">
                                                                     <img src="<?php echo base_url();?>assets/img/logogm.png" width="50%" height="auto" style="vertical-align: sub; margin-bottom: 10px;" alt="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p style="margin-bottom: 10px;"><strong>GHINA MART</strong><br>
                                                                        Jl Simpang 4 Pasar Batu Bintang<br> Batumarmar Pamekasan Jawa Timur<br>
                                                                        Telp. 081913714045
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <tr>
                                                                <td width="50%" valign="top" align="center">
                                                                    <strong><p style="min-height: 10px;"><?php echo $general_info['receipt'];?></p></strong>
                                                                </td>
                                                                <td width="50%" valign="top" align="center">
                                                                    <strong><p style="min-height: 10px;"><?php echo date('d-m-Y');?></p></strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="50%" valign="top" align="center">
                                                                    <strong><p style="min-height: 10px;">Kasir: <?php echo $general_info['served'];?></p></strong>
                                                                </td>
                                                                <td width="50%" valign="top" align="center">
                                                                    <strong><p style="min-height: 10px;"><?php echo date('h:i:sa');?></p></strong>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <hr>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="quantity"><p>Item</p></th>
                                                                    <th class="description"><p>Qty</p></th>
                                                                    <th class="price" style="text-align: right;"><p>Harga</p></th>
                                                                    <th class="price" style="text-align: right;"><p>Jumlah</p></th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php foreach ($data_prod['item_data'] as $item) {?>
                                                                    <tr>
                                                                        <td width="50%" valign="top" align="left">
                                                                            <p style="min-height: 0;"><?=$item->product_name;?></p>
                                                                        </td>
                                                                        <td width="10%" valign="top" align="center">
                                                                            <p style="min-height: 0;"><?=$item->qty;?></p>
                                                                        </td>
                                                                        <td width="20%" valign="top" align="right">
                                                                            <p style="min-height: 0;"><?=$item->price;?></p>
                                                                        </td>
                                                                        <td width="20%" valign="top" align="right">
                                                                            <p style="min-height: 0;"><?=$item->price * $item->qty ;?></p>
                                                                        </td>
                                                                    </tr>
                                                                <?php }?>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <hr>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <tr>
                                                                <td width="20%" valign="top" align="left">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="10%" valign="top" align="center">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="50%" valign="top" align="right">
                                                                    <p style="min-height: 0;">Subtotal :</p>
                                                                </td>
                                                                <td width="20%" valign="top" align="right">
                                                                    <p style="min-height: 0;"><?php echo $data_prod['total_bill'] + $data_prod['discount'];?></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="20%" valign="top" align="left">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="10%" valign="top" align="center">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="50%" valign="top" align="right">
                                                                    <p style="min-height: 0;">Diskon :</p>
                                                                </td>
                                                                <td width="20%" valign="top" align="right">
                                                                    <p style="min-height: 0;"><?php echo $data_prod['discount'];?></p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <hr>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <tr>
                                                                <td width="20%" valign="top" align="left">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="10%" valign="top" align="center">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="50%" valign="top" align="right">
                                                                    <p style="min-height: 0;">Total :</p>
                                                                </td>
                                                                <td width="20%" valign="top" align="right">
                                                                    <p style="min-height: 0;"><?php echo $data_prod['total_bill'];?></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="20%" valign="top" align="left">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="10%" valign="top" align="center">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="50%" valign="top" align="right">
                                                                    <p style="min-height: 0;">Tunai :</p>
                                                                </td>
                                                                <td width="20%" valign="top" align="right">
                                                                    <p style="min-height: 0;"><?php echo $amount_recieved;?></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="20%" valign="top" align="left">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="10%" valign="top" align="center">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="50%" valign="top" align="right">
                                                                    <p style="min-height: 0;">Kembali :</p>
                                                                </td>
                                                                <td width="20%" valign="top" align="right">
                                                                    <p style="min-height: 0;"><?php echo $amount_recieved - $data_prod['total_bill'];?></p>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <hr>
                                                    </td>
                                                </tr>
                                                <tr align="center" >
                                                    <td >
                                                        <p style="margin-top: 10px;"><strong>TERIMA KASIH</strong><br>
                                                            ---------- Selamat belanja kembali -----------
                                                        </p>
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>

                </div>
                <!-- <div style="padding-top: 20px;">
                    <button type="button" class="hidden-print" id="btnPrint"
                    style="background-color:gray; color: white; padding: .25rem .5rem; line-height: 1.5; border-radius: .25rem; cursor: pointer; border-width: 0;">Print</button>
                </div> -->
        </div>
    </div>
    </div>
</section>
<script type="text/javascript">
    const $btnPrint = document.querySelector("#btnPrint");
$btnPrint.addEventListener("click", () => {
    window.print();
});
</script>

<script type="text/javascript">

$(document).ready(function() {
    window.print();
    window.onafterprint = (event) => {
        var url = '<?php echo base_url('invoice')?>';
        window.location = url;
    };
    
});

</script>
=======
<style type="text/css">
    .judul .tgl span{
        margin-right: 5px;
        font-weight: bold;
       /* border-right: 2px solid #222;*/
    }
    .pem{
        border: dashed 1px gray;
        width: 100%;
        margin: 5px 0 5px 0;
    }
    .cart{
        justify-content: space-between;
        display: flex;
    }
    p {
        margin: 0;
        line-height: 1.5;
        font-size: .75em;
        min-height: 10px;
    }
    hr {
        margin-top: 0px;
        margin-bottom: 0px;
        border-top-width: 0;
        border-left-width: 0;
        border-right-width: 0;
        border:dashed 1px gray;
    }
    th{text-align: left;}

    @media print {
        .hidden-print,
        .hidden-print * {
            display: none !important;
        }
    }
    .ve{
        border-right:solid 1px #222;
    }
</style>
<div class="content-wrapper">
        <section class="content text-center">
            <div class="col-12" style="display: none;">
                <div class="struk" style="width:302.362px">
                	<div class="logo" style="margin-bottom:10px;">
                       <img src="<?php echo base_url();?>/assets/img/GM.png" width="30%">
                   </div>
                   <div class="judul">
                        <p><strong>GHINA MART</strong><br>
                            Jl Simpang 4 Pasar Batu Bintang<br> Batumarmar Pamekasan Jawa Timur<br>
                            Telp. 081913714045
                        </p>
                        <div class="tgl d-flex text-left">
                            <span class="">9897878</span> |
                            <span>23/08/2022</span> |
                            <span>Kasir: Ghina</span> |
                            <span>20:19</span>
                        </div>
                        <div class="pem"></div>
                        <div class="cart text-left">
                            <div style="width:55%;">GG Signature 16 </div>
                            <div> 2 </div>
                            <div>23.500</div>
                            <div>23.500</div>
                        </div> 
                        <div class="cart text-left">
                            <div style="width:55%;">GG Signature 16 </div>
                            <div> 2 </div>
                            <div>23.500</div>
                            <div>23.500</div>
                        </div>
                        <div class="pem"></div>
                        <div class="cart text-left">
                            <div style="width:55%; font-weight: bold;">Subtotal </div>
                            <div> 2 </div>
                            <div style="opacity:0;">00.000</div>
                            <div>23.500</div>
                        </div> 
                        <div class="cart text-left">
                            <div style="width:55%; font-weight: bold;">Diskon </div>
                            <!-- <div style="opacity:0;"> 0 </div>
                            <div style="opacity:0;">00.000</div> -->
                            <div>0</div>
                        </div>
                        <div class="pem"></div>
                         <div class="cart text-left">
                            <div style="width:55%; font-weight: bold;">Total</div>
                            <!-- <div style="opacity:0;"> 0 </div>
                            <div style="opacity:0;">00.000</div> -->
                            <div>47.000</div>
                        </div>
                        <div class="cart text-left">
                            <div style="width:55%; font-weight: bold;">Tunai </div>
                            <!-- <div style="opacity:0;"> 0 </div>
                            <div style="opacity:0;">00.000</div> -->
                            <div>0</div>
                        </div>
                        <div class="cart text-left">
                            <div style="width:55%; font-weight: bold;">Kembali </div>
                            <!-- <div style="opacity:0;"> 0 </div>
                            <div style="opacity:0;">00.000</div> -->
                            <div>0</div>
                        </div>
                        <p><strong>TERIMA KASIH</strong><br>
                        ---------- Selamat belanja kembali -----------
                        </p>
                    </div>
                </div>
                <button type="button" name="button" onclick="print()" style="background-color: #5f7161; border-color: #5f7161; color: white; padding: .25rem .5rem; line-height: 1.5; border-radius: .25rem; cursor: pointer; border-width: 0;">Download
                PDF</button>
            </div>
              <div id="print">
                    <table border="0" cellspacing="0" cellpadding="5" width="302.362px" bgcolor="white" align="center">
                        <tr>
                            <td>
                                <table border="0" cellspacing="0" cellpadding="15" width="100%">
                                    <tr>
                                        <td>
                                            <table border="0" cellspacing="0" cellpadding="0" width="100%">

                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="text-align: center;">
                                                            <tr>
                                                                <td width="100%">
                                                                     <img src="<?php echo base_url();?>assets/img/logogm.png" width="50%" height="auto" style="vertical-align: sub; margin-bottom: 10px;" alt="">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p style="margin-bottom: 10px;"><strong>GHINA MART</strong><br>
                                                                        Jl Simpang 4 Pasar Batu Bintang<br> Batumarmar Pamekasan Jawa Timur<br>
                                                                        Telp. 081913714045
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="margin-bottom: 12px;">
                                                            <tr>
                                                                <td width="25%" valign="top" align="center" class="ve">
                                                                    <strong><p style="min-height: 10px;">9897878</p></strong>
                                                                </td>
                                                                <td width="25%" valign="top" align="center" class="ve">
                                                                    <strong><p style="min-height: 10px;">Kasir: Ghina</p></strong>
                                                                </td>
                                                                <td width="25%" valign="top" align="center" class="ve">
                                                                    <strong><p style="min-height: 10px;">23/08/2022 </p></strong>
                                                                </td>
                                                                 <td width="25%" valign="top" align="center">
                                                                    <strong><p style="min-height: 10px;">20:17</p></strong>
                                                                </td>
                                                            </tr>
                                                          <!--   <tr>
                                                                <td width="50%" valign="top" align="center">
                                                                    <strong><p style="min-height: 10px;">Kasir: Ghina</p></strong>
                                                                </td>
                                                                <td width="50%" valign="top" align="center">
                                                                    <strong><p style="min-height: 10px;">20:19</p></strong>
                                                                </td>
                                                            </tr> -->
                                                        </table>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <hr>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="quantity"><p>Item</p></th>
                                                                    <th class="description"><p>Qty</p></th>
                                                                    <th class="price" style="text-align: right;"><p>Harga</p></th>
                                                                    <th class="price" style="text-align: right;"><p>Jumlah</p></th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <tr>
                                                                    <td width="50%" valign="top" align="left">
                                                                        <p style="min-height: 0;">Coffee Milk Abc</p>
                                                                    </td>
                                                                    <td width="10%" valign="top" align="center">
                                                                        <p style="min-height: 0;">2</p>
                                                                    </td>
                                                                    <td width="20%" valign="top" align="right">
                                                                        <p style="min-height: 0;">3000</p>
                                                                    </td>
                                                                    <td width="20%" valign="top" align="right">
                                                                        <p style="min-height: 0;">6000</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="50%" valign="top" align="left">
                                                                        <p style="min-height: 0;">Coffee Milk Abc</p>
                                                                    </td>
                                                                    <td width="10%" valign="top" align="center">
                                                                        <p style="min-height: 0;">2</p>
                                                                    </td>
                                                                    <td width="20%" valign="top" align="right">
                                                                        <p style="min-height: 0;">3000</p>
                                                                    </td>
                                                                    <td width="20%" valign="top" align="right">
                                                                        <p style="min-height: 0;">6000</p>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <hr>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <tr>
                                                                <td width="20%" valign="top" align="left">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="10%" valign="top" align="center">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="50%" valign="top" align="right">
                                                                    <p style="min-height: 0;">Subtotal :</p>
                                                                </td>
                                                                <td width="20%" valign="top" align="right">
                                                                    <p style="min-height: 0;">12.000</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="20%" valign="top" align="left">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="10%" valign="top" align="center">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="50%" valign="top" align="right">
                                                                    <p style="min-height: 0;">Diskon :</p>
                                                                </td>
                                                                <td width="20%" valign="top" align="right">
                                                                    <p style="min-height: 0;">0</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <hr>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <tr>
                                                                <td width="20%" valign="top" align="left">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="10%" valign="top" align="center">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="50%" valign="top" align="right">
                                                                    <p style="min-height: 0;">Total :</p>
                                                                </td>
                                                                <td width="20%" valign="top" align="right">
                                                                    <p style="min-height: 0;">12.000</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="20%" valign="top" align="left">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="10%" valign="top" align="center">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="50%" valign="top" align="right">
                                                                    <p style="min-height: 0;">Tunai :</p>
                                                                </td>
                                                                <td width="20%" valign="top" align="right">
                                                                    <p style="min-height: 0;">20.000</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="20%" valign="top" align="left">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="10%" valign="top" align="center">
                                                                    <p style="min-height: 0;"></p>
                                                                </td>
                                                                <td width="50%" valign="top" align="right">
                                                                    <p style="min-height: 0;">Kembali :</p>
                                                                </td>
                                                                <td width="20%" valign="top" align="right">
                                                                    <p style="min-height: 0;">8.000</p>
                                                                </td>
                                                            </tr>

                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <hr>
                                                    </td>
                                                </tr>
                                                <tr align="center" >
                                                    <td >
                                                        <p style="margin-top: 10px;"><strong>TERIMA KASIH</strong><br>
                                                            ---------- Selamat belanja kembali -----------
                                                        </p>
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
               <!--  <div style="padding-top: 20px;">
                    <button type="button" class="hidden-print" id="btnPrint"
                    style="background-color:gray; color: white; padding: .25rem .5rem; line-height: 1.5; border-radius: .25rem; cursor: pointer; border-width: 0;">Print</button>
                </div> -->
       </section>
</div>
<!-- Bootstrap model  -->
<?php $this->load->view('bootstrap_model.php'); ?>
<!-- Bootstrap model  ends--> 
>>>>>>> b0e5b231b85998ac5d84bb1a37abedfeed6539f0
