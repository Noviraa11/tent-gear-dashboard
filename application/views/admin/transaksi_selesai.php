<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Transaksi Selesai</h1>
    </div>

    <?php foreach($transaksi as $tr): ?>
    <form action="<?= base_url('admin/transaksi/transaksi_selesai_aksi'); ?>" method="post">
      <input type="hidden" name="id_rental" value="<?= $tr->id_rental; ?>">
      <input type="hidden" name="id_tenda" value="<?= $tr->id_tenda; ?>">
      <input type="hidden" name="tgl_kembali" value="<?= $tr->tgl_kembali; ?>">
      <input type="hidden" name="denda" value="<?= $tr->denda; ?>">
      <div class="form-group">
        <label for="">Tanggal Pengembalian</label>
        <input type="date" name="tgl_pengembalian" class="form-control" value="<?= $tr->tgl_pengembalian; ?>">
      </div>
      <div class="form-group">
  <label for="status_pengembalian">Status Pengembalian</label>
  <select name="status_pengembalian" id="status_pengembalian" class="form-control">
    <option value="<?php echo $tr->status_pengembalian; ?>"><?php echo $tr->status_pengembalian; ?></option>
    <option value="Kembali">Kembali</option>
    <option value="Belum Kembali">Belum Kembali</option>
  </select>
</div> 

<div class="form-group">
  <label for="status_rental">Status Rental</label>
  <select name="status_rental" id="status_rental" class="form-control">
    <option value="<?php echo $tr->status_rental; ?>"><?php echo $tr->status_rental; ?></option>
    <option value="Selesai">Selesai</option>
    <option value="Belum Selesai">Belum Selesai</option>
  </select>
</div>

      <button type="submit" class="btn btn-success">Save</button>
    </form>
    <?php endforeach; ?>

  </section>
</div>