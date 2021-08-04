<?php $this->load->view('header');  ?>
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Detail Berita</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo site_url('Home'); ?>">Home</a></li>
                <li><a href="<?php echo site_url('Home/berita'); ?>">Berita</a></li>
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
<div class="section padding_layout_1 blog_grid">
  <div class="container">

    <div class="row">
         
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
          <?php
            $news = $this->Berita_m->selectid($this->uri->segment(3));
            // $news = $this->Berita_m->detailnews();
            foreach ($news as $row) {
          ?>
        <div class="full">
          <div class="blog_section margin_bottom_0">
            <div class="blog_feature_img"> <img src="<?php echo base_url(); ?>admin/assets/upload/<?php echo $row->gambar_berita; ?>">  </div>
            <div class="blog_feature_cantant">
              <p class="blog_head"><?php echo $row->judul_berita; ?></p>
              <div class="post_info">
                <ul>
                 <!--  <li><i class="fa fa-user" aria-hidden="true"></i> Marketing</li>
                  <li><i class="fa fa-comment" aria-hidden="true"></i> 5</li> -->
                  <li><i class="fa fa-calendar" aria-hidden="true">  </i><?php echo $this->Etc->tgl($row->tanggal_berita); ?></li>
                </ul>
              </div>
              <p><?php echo $row->isi_berita; ?></p>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left">
        <div class="side_bar">
          <div class="side_bar_blog">
            <h4>SEARCH</h4>
            <div class="side_bar_search">
              <div class="input-group stylish-input-group">
                <input class="form-control" placeholder="Search" type="text">
                <span class="input-group-addon">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span> </div>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>RECENT POST</h4>
            <div class="recent_post">
              <ul>
                <li>
                  <p class="post_head"><a href="#">How To Look Up</a></p>
                  <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> Aug 20, 2017</p>
                </li>
                <li>
                  <p class="post_head"><a href="#">Compatible Inkjet Cartridge</a></p>
                  <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> Aug 20, 2017</p>
                </li>
                <li>
                  <p class="post_head"><a href="#">Treat That Oral Thrush Now</a></p>
                  <p class="post_date"><i class="fa fa-calendar" aria-hidden="true"></i> Aug 20, 2017</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>CATEGORIES</h4>
            <div class="categary">
              <ul>
                <li><a href="#"><i class="fa fa-caret-right"></i> Change Oil and Filter</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Brake Pads Replacement</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Timing Belt Replacement</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Pre-purchase Car Inspection</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Starter Replacement</a></li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>TAG</h4>
            <div class="tags">
              <ul>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
                <li><a href="#">Wordpress</a></li>
                <li><a href="#">Bootstrap</a></li>
                <li><a href="#">HTML5</a></li>
              </ul>
            </div>
          </div>
          <div class="side_bar_blog">
            <h4>CATEGORIES</h4>
            <div class="categary">
              <ul>
                <li><a href="#"><i class="fa fa-caret-right"></i> June (12)</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> January (12)</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> March (12)</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> November (12)</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> December (12)</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
  </div>
</div>
<!-- end section -->

<!-- section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
        <div class="contact_us_section">  
            <div class="inner_cont">
              <h2>MAU MENGHUBUNGI KAMI ?</h2>
              <p>Klik tombol CONTACT US disamping kanan</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="<?php echo site_url('Home/kontak'); ?>">Contact us</a> </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class="section padding_layout_1" style="padding: 50px 0;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <ul class="brand_list">
            <!-- <li><img src="images/it_service/brand_icon1.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon2.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon3.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon4.png" alt="#" /></li>
            <li><img src="images/it_service/brand_icon5.png" alt="#" /></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
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