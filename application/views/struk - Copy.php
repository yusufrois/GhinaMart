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
</style>
<div class="content-wrapper">
        <section class="content text-center">
            <div class="row">
                <div class="sa" style="width:302.362px">
                    <div class="logo" style="margin-bottom:10px;">
                       <img src="<?php echo base_url();?>/assets/img/gm.png" width="30%">
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
                        <div
                   </div>
                </div>
            </div>
        </section>
       
</div>
<!-- Bootstrap model  -->
<?php $this->load->view('bootstrap_model.php'); ?>
<!-- Bootstrap model  ends--> 

<script type="text/javascript">

$(document).ready(function() {
    window.print();
    window.onafterprint = (event) => {
        var url = '<?php echo base_url('invoice')?>';
        window.location = url;
    };
    
});

</script>