
<?php $this->load->view('header'); ?>

<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">JADWAL SHOLAT</h1>
              <ol class="breadcrumb">
                <li><a href="<?php echo site_url('Home') ?>">Home</a></li>
                <li>Jadwal</li>
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
<div class="container">
    

    <div class="row">
      <div class="col-md-6">
      <div class="full">
          <div class="main_heading text_align_left">
            <h4>JADWAL SHOLAT HARI INI</h4>
          </div>
        </div>
            <p style="text-align: center;">
            <iframe src="https://jam.jadwalsholat.org/digitalclock/" frameborder="0" width="175" height="60"></iframe><br>
            <iframe src="https://www.jadwalsholat.org/adzan/ajax.row.php?id=307" frameborder="0" width="220" height="220"></iframe>
            </p>

      </div>

        <div class="col-md-6">
        <div class="full">
          <div class="main_heading text_align_left">
            <h4>JADWAL SHOLAT BULAN INI</h4>
          </div>
        </div>
        <p style="text-align: center;">
        <iframe src="https://www.jadwalsholat.org/adzan/monthly.php?id=307" height="940" width="430" frameborder="0"></iframe>
            <a href="https://www.jadwalsholat.org" target="_blank">
        </p>
            
        </div>

    </div>



</div>
    
   
<!-- end section -->

   



<!-- footer -->
<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Additional links</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_about.html"><i class="fa fa-angle-right"></i> About us</a></li>
              <li><a href="it_term_condition.html"><i class="fa fa-angle-right"></i> Terms and conditions</a></li>
              <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Privacy policy</a></li>
              <li><a href="it_news.html"><i class="fa fa-angle-right"></i> News</a></li>
              <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Contact us</a></li>
            </ul>
          </div>    
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Contact us</h2>
            </div>
            <p>123 Second Street Fifth Avenue,<br>
              Manhattan, New York<br>
              <span style="font-size:18px;"><a href="tel:+9876543210">+987 654 3210</a></span></p>
           
          </div>
        </div>
      </div>
      <div class="cprt">
        <p style="text-align: center;">LTI© Copyrights 2020 Design by lauwba.com</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="<?php echo base_url();?>js/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="<?php echo base_url();?>js/menumaker.js"></script>
<!-- wow animation -->
<script src="<?php echo base_url();?>js/wow.js"></script>
<!-- custom js -->
<script src="<?php echo base_url();?>js/custom.js"></script>
<!-- revolution js files -->
<script src="<?php echo base_url();?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- map js -->

<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>
