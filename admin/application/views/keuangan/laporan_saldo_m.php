<div class="table-responsive">
    <br>
    <h4 style="text-align:center;  margin: 0 auto">BULAN INI</h4><br>
    <table class="table table-hover" id="dataTable">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Masuk</th>
      <th scope="col">Keluar</th>
      <th scope="col">Saldo</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $detail= $this->Keuangan_m->show_saldo();

    // $omsettrans= $this->Pemasukan_m->sum_total_pemasukan_day();

    $no=1;
    $saldo=0;
    foreach ($detail as $dt) {
     
        $pemasukan= $dt->pemasukan;
        $pengeluaran =$dt->pengeluaran;
      ?>
     
     <?php
            if($pengeluaran !=  0   || !empty($pengeluaran)){
                $saldo -= $pengeluaran;
            }
           if($pemasukan != 0 || !empty($pemasukan)){
                $saldo += $pemasukan;
             }
     ?>
             
       <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $this->Etc->tgl($dt->tanggal); ?></td>
        <td><?php echo $this->Currency_m->rps($pemasukan); ?>
        </td>
        <td><?php echo $this->Currency_m->rps($pengeluaran); ?>
        </td>
        <td><?php echo $this->Currency_m->rps($saldo); ?></td>
        <td><?php echo character_limiter($dt->deskripsi,15); ?></td>
      </tr>
    <?php } ?>
  </tbody>
  
</table>
</div>

<!-- 
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').DataTable({
          dom: 'Bfrtip',
          buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
          ]
        });
    });
</script>