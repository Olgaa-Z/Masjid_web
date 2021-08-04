<footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.lauwba.com" target="_blank">lauwba.com</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
      <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
      <div class="ps__rail-y" style="top: 0px; right: 0px; height: 757px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 709px;"></div></div>
    </div>
  </div>

  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu" style="">
        <!-- <ul class="dropdown-menu show" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-231px, 38px, 0px);" x-placement="bottom-start"> -->
			<li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors text-center">
						<span class="badge filter badge-yellow" data-color="yellow"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red active" data-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>

            

            
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/now-ui-dashboard" target="_blank" class="btn btn-primary btn-block btn-round">Download Now</a>
                <a href="https://demos.creative-tim.com/now-ui-dashboard/docs/1.0/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block btn-round">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    Documentation
                </a>
            </li>
            

            <li class="header-title">Thank you for 95 shares!</li>

            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-info sharrre"><i class="fab fa-twitter"></i> · 45</button>
                <button id="facebook" class="btn btn-round btn-info sharrre"><i class="fab fa-facebook-f"></i> · 50</button>
                <br>
                <br>
                <span></span>
            </li>
        </ul>
    </div>
</div>

  <!--   Core JS Files   -->
  <script src="<?php echo base_url() ?>/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo base_url() ?>/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url() ?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url() ?>/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url() ?>/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initGoogleMaps();
    });
  </script>
<!-- JS GetBootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="<?php echo base_url();?>asset/datatable/jquery.dataTables.min.js"></script>  
<script src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap.min.js"></script>          
<script src="<?php echo base_url();?>assets/summernote/summernote.js"></script> 
<!-- Jquery JS-->
<!-- <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script> -->


<script type="text/javascript">
// menginisialisasi summernote dengan element id="summernote"
        $(document).ready(function(){
            $('#summernote').summernote({
                height: "300px",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    }, 
                    onMediaDelete : function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });
 // untuk melakukan upload dan menampilkan kembali 
            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image);
                $.ajax({
                    url: "<?php echo site_url('post/upload_image')?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(url) {
                        $('#summernote').summernote("insertImage", url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
 
            function deleteImage(src) {
                $.ajax({
                    data: {src : src},
                    type: "POST",
                    url: "<?php echo site_url('post/delete_image')?>",
                    cache: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            }
 
        });
         
    </script>
    
</body>



</html>