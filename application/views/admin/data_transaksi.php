<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Data Transaksi</h1>
    </div>

    <table class="table table-responsive table-bordered table-striped">
      <tr>
        <th>No</th>
        <th>Customer</th>
        <th>Tenda</th>
        <th>Tgl. Rental</th>
        <th>Tgl. Kembali</th>
        <th>Harga/Hari</th>
        <th>Denda/Hari</th>
        <th>Total Denda</th>
        <th>Tgl. Dikembalikan</th>
        <th>Status Pengembalian</th>
        <th>Status Rental</th>
        <th>Cek Pembayaran</th>
        <th>Total Pembayaran</th>
        <th>Action</th>
      </tr>

      <?php 
      $no = 1;
      foreach($transaksi as $tr): ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $tr->nama; ?></td>
        <td><?= $tr->merek; ?></td>
        <td><?= date('d/m/Y', strtotime($tr->tgl_rental)); ?></td>
        <td><?= date('d/m/Y', strtotime($tr->tgl_kembali)); ?></td>
        <td>Rp.<?= number_format($tr->harga, 0,',','.'); ?>,-</td>
        <td>Rp.<?= number_format($tr->denda, 0,',','.'); ?>,-</td>
        <td>Rp.<?= number_format($tr->total_denda, 0,',','.'); ?>,-</td>
        <td>
          <?php if($tr->tgl_pengembalian == "0000-00-00"){
            echo "-";
          }else{
            echo date('d/m/Y', strtotime($tr->tgl_pengembalian));
          } ?>
        </td>

        <td>
          <?php if($tr->tgl_pengembalian == "0000-00-00"){
            echo "Belum Kembali";
          }else{
            echo "Kembali";
          }?>
        </td>

        <td>
          <?php if($tr->status_rental == "Dibatalkan"){
            echo "Dibatalkan";
          }elseif($tr->tgl_pengembalian == "0000-00-00"){
            echo "Belum Selesai";
          }else{
            echo "Selesai";
          }?>
        </td>

        <td>
          <center>
            <?php if(empty($tr->bukti_pembayaran)){ ?>
              <button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
            <?php }
            else{ ?>
              <a class="btn btn-sm btn-primary" href="<?= base_url('admin/transaksi/pembayaran/'.$tr->id_rental); ?>"><i class="fas fa-check-circle"></i></a>
            <?php } ?>
          </center>
        </td>

        <td>
          Rp.<?= number_format($tr->harga + $tr->total_denda, 0, ',', '.'); ?>,-
        </td>
        
        <td>
          <?php if($tr->status_rental == "Dibatalkan"){
            echo "-";
          }else{ ?>
            <div class="row">
              <a class="btn btn-sm btn-success mr-2" href="<?= base_url('admin/transaksi/transaksi_selesai/'.$tr->id_rental) ?>"><i class="fas fa-check"></i></a>
              <a onclick="return confirm('Yakin batal?')" class="btn btn-sm btn-danger" href="<?= base_url('admin/transaksi/batal_transaksi/'.$tr->id_rental . '?redirect=transaksi') ?>"><i class="fas fa-times"></i></a>
            </div>
          <?php } ?>
        </td>
      </tr>

      <?php endforeach; ?>
    </table>
  </section>
</div>
