<?php $this->load->view('sidebar'); ?>
<?php $this->load->view('header'); ?>

<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <!-- <a class="btn btn-dark" style="margin-left : 10px; " href="<?php echo base_url('Keuangan/listpemasukan');  ?>">
                <i class="now-ui-icons education_paper"></i>
                LIST PEMASUKAN
                </a> -->
                <h5 class="title" style="margin-left : 10px; ">TAMBAH  PEMASUKAN</h5>
              </div>
              <div class="card-body all-icons">
                <div class="row">
                
                    <div class="table-responsive" style="margin-right: 40px; margin-left : 40px;"> 
                    <form method="post" action="<?php echo site_url('Keuangan/insertPemasukan'); ?>" 
                        enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">JUMLAH ANGKA PEMASUKAN</label>
                            <input type="NUMBER" name="pemasukan" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <label for="exampleFormControlInput1">TANGGAL</label>
                        <div class="form-group">
                          
                            <input type="date" name="tanggal" class="input-tanggal">
                        </div>

                        
                        <div class="form-group">
                            <label for="exampleFormControlInput1">KETERANGAN</label>
                            <input type="text" name="deskripsi" class="form-control" id="exampleFormControlInput1">
                        </div>

                        <!-- <a type="submit" class="btn btn-info" >
                        <i class="now-ui-icons ui-1_send"></i>
                            SIMPAN
                        </a> -->
                        <button style ="margin-bottom:25px" class="btn btn-info" 
                            type="submit">Simpan</button>
                    </form>
                    </div>
                
                  
                  
                </div>
              </div>

                <div class="card-header"  >
                <h5 class="title"style="margin-left: 30px;">LIST PEMASUKAN</h5>
                </div>
              <div class="card-body all-icons">
                <div class="row">
                  
                        <div class="table-responsive" style="margin-right: 35px; margin-left : 35px;"> 
                        <table class="table" id="dataTable">
                            <thead class="thead-dark">
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah Pemasukan</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Tindakan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $uang= $this->Keuangan_m->selectData();
                                $omsettrans= $this->Keuangan_m->sum_total_pemasukan_year();
                                $no = 1;
                                foreach ($uang as $row) {
                                    ?>  
                                    <tr>    
                                        <th scope="row"><?php echo $no++; ?></th>
                                        <td><?php echo $row->tanggal; ?></td>
                                        <td> <?php echo $this->Currency_m->rps($row->pemasukan); ?></td>
                                        <td><?php echo character_limiter($row->deskripsi,30); ?></td>
                                        <td>
                                            <a class="btn btn-outline-success" href="<?php echo site_url('Keuangan/editpemasukanform/' . $row->id_keuangan); ?>"> EDIT </a>
                                            <a class="btn btn-outline-danger" href="<?php echo site_url('Keuangan/deletePemasukan/'.$row->id_keuangan); ?>"onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus </a>  
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                        <h4> Total Pemasukan : </h4>  
                        <h2 class="count_omset" style=" padding-bottom:20px;" >0.0</h2>
                        </div>

                        



                </div>
              </div>
       


            </div>
          </div>
        </div>
      </div>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript">
  var tab = "";
    $(document).ready(function () {
       tab = $("#dataTable").DataTable({
        dom: 'Bfrtip',
         buttons: [
         'copyHtml5',
         'excelHtml5',
         'csvHtml5',
         'pdfHtml5'
         ]
       });

       $('.count_omset').html('<?php echo $this->Etc->rps($omsettrans->count_omset)?>');

    });


</script>


            

      



<?php $this->load->view('footer'); ?>