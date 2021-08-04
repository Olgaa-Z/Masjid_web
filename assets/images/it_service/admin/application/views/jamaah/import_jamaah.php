<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>


<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">DATA JAMAAH</h5>
                <a class="btn btn-info" style="margin-left : 10px; " href="<?php echo site_url('Jamaah/formJamaah'); ?>">
                <i class="now-ui-icons education_paper"></i>
                TAMBAH JAMAAH 
                </a>
                <a href="<?php echo base_url("excell/format_excell.xlsx"); ?>">Download Format Excell</a>
              </div>
              <div class="card-body all-icons">
                <div class="row">

                <?php $this->load->view('jamaah/import'); ?>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




<?php $this->load->view('footer'); ?>