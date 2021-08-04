<?php $this->load->view('header'); ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">KAJIAN</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo site_url('Home'); ?>">Home</a></li>
                <li><a href="<?php echo site_url('Home/jadwalkajian'); ?>">Jadwal Kajian</a></li>
                <li class="active">Detail</li>
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
              $detailkajian = $this->Jadwal_m->selectid($this->uri->segment(3));
              foreach ($detailkajian as $row){                         
  ?>
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="main_heading text_align_center">
            <h2><?php echo $row->judul_kajian; ?></h2>
            <p class="large">Materi Oleh :   <?php echo $row->ustadz; ?>!</p>
          </div>
        </div>
      </div>
    </div>

    <div  style="text-align: justify; margin-top: 10px; padding-left: 50px; padding-right: 50px; padding-bottom: 30px; word-spacing: 10px; letter-spacing: 1px;">
      <?php echo $row->keterangan; ?>
    </div> <br>


   
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