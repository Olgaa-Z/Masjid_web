
<div class="table-responsive">
    <br>
    <h4 style="text-align:center;  margin: 0 auto">Laporan berdasarkan Range Tanggal</h4><br>
    <table class="table table-hover" id="dataTable">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Debit</th>
      <th scope="col">Kredit</th>
      <th scope="col">Saldo</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    

    // $omsettrans= $this->Pemasukan_m->sum_total_pemasukan_day();
    $tgl1= $this->input->get("inputtanggalsatu");
    $tgl2= $this->input->get("inputtanggaldua");
    $detail= $this->Keuangan_m->show_saldo_range($tgl1,$tgl2);
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









