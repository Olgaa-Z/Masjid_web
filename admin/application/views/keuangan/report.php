<div class="inner-block">
    <div class="blank">          
        <div class="col-md-12 compose-right">
            <div class="inbox-details-default">
                <div class="col-sm-8 col-md-4"  >
                </div>
                <div class="inbox-details-heading">
                    DETAIL LAPORAN KAS
                </div>
                <br>

            <div class="col-sm-8 col-md-4"  >
                <div class="profile_details" style="margin-right: 50px;" >     
                    <ul>
                            <a href="#" class="dropdown-toggle btn btn-danger btn-block" data-toggle="dropdown" aria-expanded="false"> 
                                <div class="profile_img">   
                                    Filter Laporan/Waktu :  
                                </div> 
                                
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                
                                <li>
                                    <button type="button" class="btn btn-primary btn-block" 
                                    id="tambah" onclick="bulanini()">
                                    Bulan Ini
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-primary btn-block" 
                                    id="tambah" onclick="tahunini()">
                                    Tahun Ini
                                    </button> 
                            </li>
                           <li>
                               <button type="button" class="btn btn-primary btn-block" 
                               id="tambah" data-toggle="modal" data-target=".bs-example-modal-sm">
                               Input Tanggal/Bulan
                           </button>
                           </li>
                            
                            </ul>
                  
                    </ul>


                </div>
            </div>  

               <!--  <div style="width:50%; align-self:center; margin: 0 auto" >
                <?php //$this->load->view('chartpie'); ?>
                </div>
 -->
                <!-- Button all -->


                <!--END of Button all -->
                
                <!-- Dont Delete -->
                <div class="inbox-details-body">
                    <div class="response">
                        
                    </div>

                    <div style=" padding-left:100px;" >
                        <!--<h4 >Total Pemasukan :</h4>-->
                        <!--<h2 class="count_omset" style="color: #0A0606; padding-bottom:20px;" >0.0</h2>-->
                    </div>
                    <!--Button yang 3  -->
                        <!-- <div style="text-align:center;  margin-left: 250px">
                            <div class="price-tables">

                                <div class="col-md-4 price-grid">
                                    <div class="price-block">
                                        <div class="price-gd-top pric-clr1">
                                            <h4 >Total Omset</h4>
                                            <br/>
                                            <br/>
                                            <h2 class="count_omset " style="color: #FFFFFF; padding-bottom:20px;" >0.0</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 price-grid" >
                                    <div class="price-block">
                                        <div class="price-gd-top pric-clr3">
                                            <h4>Total Transaksi</h4>
                                            <br />
                                            <br />
                                            <h2 class="count_transaksi" style="color: #FFFFFF;padding-bottom:20px;">0</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-sm-12' style="height: 1000px"></div>
                                <div class="clearfix"> </div>
                            </div>
                        </div> -->
                        <!--Akhir Button yang 3  -->
                    
                    
                </div>
            </div>
        </div>   
    </div>
</div>

<!-- Modal -->
<div id="hilang" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="antara">
                <input type="date" name="inputtanggalsatu">
                <input type="date" name="inputtanggaldua">
                <button  type="submit">Lihat</button>
            </form>
        </div>
    </div>
</div>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
    function bulanini(){
        var url = "<?php echo site_url('Keuangan/saldomonth') ?>";
        $.ajax({
            url:url,
            type:"get",
            success:function(data,textstatus,j){
                $(".response").html(data);
            },
            error:function(data,textstatus,j){

            }
        });
    }

    function tahunini(){
        var url = "<?php echo site_url('Keuangan/saldoyear') ?>";
        $.ajax({
            url:url,
            type:"get",
            success:function(data,textstatus,j){
                $(".response").html(data);
            },
            error:function(data,textstatus,j){

            }
        });
    }

  
    $(document).ready(function(){
        bulanini();
    });

  

    $('.lihat').click(function(){
        alert("click");
    });
    
      $('#antara').submit(function(e){
        e.preventDefault();
        var Data = $(this).serialize();
         var url = "<?php echo site_url('Keuangan/saldorange') ?>";
        $.ajax({
            url:url,
            type:"get",
            data:Data,
            success:function(res,textstatus,j){
                $(".response").html(res);
                $('#hilang').modal('hide');
            },
            error:function(res,textstatus,j){

            }
        });
    });
    
</script>