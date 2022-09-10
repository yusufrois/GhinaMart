

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
                                                                    <strong><p style="min-height: 10px;">9897878</p></strong>
                                                                </td>
                                                                <td width="50%" valign="top" align="center">
                                                                    <strong><p style="min-height: 10px;">23/08/2022</p></strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td width="50%" valign="top" align="center">
                                                                    <strong><p style="min-height: 10px;">Kasir: Ghina</p></strong>
                                                                </td>
                                                                <td width="50%" valign="top" align="center">
                                                                    <strong><p style="min-height: 10px;">20:19</p></strong>
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
                                                                <?php foreach ($items as $item) {?>
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
                <div style="padding-top: 20px;">
                    <button type="button" class="hidden-print" id="btnPrint"
                    style="background-color:gray; color: white; padding: .25rem .5rem; line-height: 1.5; border-radius: .25rem; cursor: pointer; border-width: 0;">Print</button>
                </div>
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