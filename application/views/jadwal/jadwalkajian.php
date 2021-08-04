<?php $this->load->view('header'); ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">JADWAL KAJIAN</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo site_url('Home'); ?>">Home</a></li>
                <li class="active">Jadwal Kajian</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->



<!-- section -->
    <div class="row" style="margin-bottom: 200px;">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row" style="margin-top: 100px;">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php
                            $masjid = $this->Home_m->selectData();
                            foreach ($masjid as $row){                         
                ?>
              <div class="main_heading text_align_center">
                <h2>JADWAL KAJIAN MASJID <?php echo $row->nama_masjid; ?> </h2>
              </div>
              <?php } ?>
            </div>

                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kajian</th>
                    <th scope="col">Ustadz/Pemateri</th>
                    <th scope="col">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                $kajian = $this->Jadwal_m->selectDataKajian();
                                $no = 1;
                                foreach ($kajian as $row){                         
                    ?>
                    <tr>
                    <th scope="row"><?php echo $no++; ?></th>
                    <td><?php echo $row->judul_kajian; ?></td>
                    <td><?php echo $row->ustadz; ?></td>
                    <td><?php echo $this->Etc->tgl($row->tanggal); ?></td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
                </table>
     
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 60px;">
               
                    <div class="main_heading text_align_center">
                        <h2> KAJIAN</h2>
                    </div>
                </div>
         
         

       <div class="table-responsive" style="margin-right: 10px; margin-left : 10px;"> 
          <table class="table" id="dataTable">

              <?php
                                    $kajian = $this->Jadwal_m->selectDataKajian();
                                    $no = 1;
                                    foreach ($kajian as $row){                         
              ?>

              <tr>

                  <div class="blog_feature_cantant">
                   <p class="blog_head"><?php echo $row->judul_kajian; ?></p>
                   <div class="post_info">
                     <ul>
                       <li><i  aria-hidden="true">Oleh : </i> <?php echo $row->ustadz; ?></li>
                     </ul>
                   </div><br>
                   <p><?php echo word_limiter($row->keterangan,25); ?> </p>
                   <div class="bottom_info">
                     <div class="pull-left"><a class="btn sqaure_bt" href="<?php echo site_url('Jadwal/select_by/'.$row->id); ?>">Baca Lagi...<i class="fa fa-angle-right"></i></a></div>
                     <div class="pull-right">
                       <div class="shr">Share: </div>
                       <div class="social_icon">
                         <ul>
                           <li class="fb"><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li class="twi"><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li class="gp"><a href="https://myaccount.google.com/intro/profile"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                           <li class="pint"><a href="https://id.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                         </ul>
                       </div>
                     </div>
                   </div>
                 </div>

              </tr>

              <?php } ?>

          </table>
        </div>

     
         <!--   <div class="center">
             <ul class="pagination style_1">
               <li><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
               <li class="active"><a href="#">1</a></li>
               <li><a href="it_blog_grid.html">2</a></li>
               <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
             </ul>
           </div> -->
          </div>
        </div>
      </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<?php $this->load->view('footer'); ?>