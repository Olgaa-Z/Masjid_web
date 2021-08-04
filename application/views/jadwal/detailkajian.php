<?php $this->load->view('header'); ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">PROFIL MASJID </h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li><a href="index.html">Tentang Kami</a></li>
                <li class="active">Sejarah</li>
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
  <?php
              $masjid = $this->Home_m->selectData();
              foreach ($masjid as $row){                         
  ?>
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2><?php echo $row->nama_masjid; ?></h2>
            <p class="large">Fastest repair service with best price!</p>
          </div>
        </div>
      </div>
    </div>

  
    <!-- section -->
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="full">
              <div class="contact_us_section">  
                <div class="inner_cont">
                  <h2>SEJARAH</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end section -->
    <div  style="text-align: justify; margin-top: 40px; padding-left: 30px; padding-right: 30px; padding-top: 30px; padding-bottom: 30px;">
      <?php echo $row->sejarah; ?>
    </div> <br>


    <div class="row" style="margin-top: 35px">
      <div class="col-md-12">
        <?php
          $masjid= $this->Home_m->selectData();
          foreach ($masjid as $row) {
          ?>
        <div class="full margin_bottom_30">
          <div class="accordion border_circle">
            <div class="bs-example">
              <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><i class="fa fa-bar-chart" aria-hidden="true"></i> Sejarah Masjid<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p><?php echo $row->sejarah; ?></p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="fa fa-plane"></i> Visi dan Misi<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p><?php echo $row->visimisi; ?> </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="fa fa-star"></i> Deskripsi<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p><td><?php echo $row->deskripsi; ?></td></p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <p class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><i class="fa fa-bar-chart" aria-hidden="true"></i> Alamat  Kontak  Email<i class="fa fa-angle-down"></i></a> </p>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>ALAMAT : <td><?php echo $row->alamat_masjid; ?> </p>
                      <p>KONTAK : <td><?php echo $row->no_telp; ?> </p>
                      <p>EMAIL : <td><?php echo $row->email_masjid; ?> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>

      <!-- <div class="col-md-4">
        <div class="full" style="margin-top: 35px;">
          <h3>Need file recovery?</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et 
            quasi architecto beatae vitae dicta sunt explicabo.. </p>
          <p><a class="btn main_bt" href="#">Read More</a></p>
        </div>
      </div> -->
    </div>
  </div>
</div>
<?php } ?>
<!-- end section -->

<!-- <div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_left">
            <h2>TAKMIR MASJID</h2>
            <p class="large">Our experts have been featured in press numerous times.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
              $takmir = $this->Home_m->selectTakmir();
              foreach ($takmir as $row){                         
      ?>
      <div class="col-md-3 col-sm-6">
        <div class="full team_blog_colum">
          <div class="it_team_img"> <img src="<?php echo base_url(); ?>admin/assets/img/<?php echo $row->foto_takmir; ?>"/></div>
          <div class="team_feature_head">
            <h4><?php echo $row->nama_takmir; ?></h4>
            <p><?php echo $row->bidang; ?></p>
          </div>
         
          <div class="team_feature_social">
            <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div> -->


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