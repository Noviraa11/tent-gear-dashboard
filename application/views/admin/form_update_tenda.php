<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Update Data tenda</h1>
    </div>

    <div class="card">
      <div class="card-body">

        <?php foreach($tenda as $mb): ?>

        <form action="<?= base_url('admin/data_tenda/update_tenda_aksi') ?>" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Tipe tenda</label>
                <input type="hidden" name="id_tenda" value="<?= $mb->id_tenda; ?>">
                <select name="kode_tipe" id="" class="form-control">
                  <option value="<?= $mb->kode_tipe ?>"><?= $mb->nama_tipe ?></option>
                  <?php foreach($tipe as $tp): ?>
                  <option value="<?= $tp->kode_tipe ?>"><?= $tp->nama_tipe; ?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('kode_tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Merek</label>
                <input type="text" name="merek" class="form-control" value="<?= $mb->merek ?>">
                <?= form_error('merek', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Kapasitas</label>
                <input type="text" name="kapasitas" class="form-control" value="<?= $mb->kapasitas ?>">
                <?= form_error('kapasitas', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Warna</label>
                <input type="text" name="warna" class="form-control" value="<?= $mb->warna ?>">
                <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Matras</label>
                <select name="matras" id="" class="form-control">
                  <option <?php if($mb->matras == "1"){echo "selected='selected'";} echo $mb->matras; ?> value="1">Tersedia</option>
                  <option <?php if($mb->matras == "0"){echo "selected='selected'";} echo $mb->matras; ?> value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('matras', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              
              <div class="form-group">
                <label for="">Selimut</label>
                <select name="selimut" id="" class="form-control">
                  <option <?php if($mb->selimut == "1"){echo "selected='selected'";} echo $mb->selimut; ?> value="1">Tersedia</option>
                  <option <?php if($mb->selimut == "0"){echo "selected='selected'";} echo $mb->selimut; ?> value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('selimut', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              
              <div class="form-group">
                <label for="">Lampu</label>
                <select name="lampu" id="" class="form-control">
                  <option <?php if($mb->lampu == "1"){echo "selected='selected'";} echo $mb->lampu; ?> value="1">Tersedia</option>
                  <option <?php if($mb->lampu == "0"){echo "selected='selected'";} echo $mb->lampu; ?> value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('lampu', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              
              <div class="form-group">
                <label for="">Hammock</label>
                <select name="hammock" id="" class="form-control">
                  <option <?php if($mb->hammock == "1"){echo "selected='selected'";} echo $mb->hammock; ?> value="1">Tersedia</option>
                  <option <?php if($mb->hammock == "0"){echo "selected='selected'";} echo $mb->hammock; ?> value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('hammock', '<div class="text-small text-danger">', '</div>') ?>
              </div>
            </div>

              <div class="form-group">
                <label for="">Harga</label>
                <input type="number" name="harga" class="form-control" value="<?= $mb->harga ?>">
                <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              <div class="form-group">
                <label for="">Denda</label>
                <input type="number" name="denda" class="form-control" value="<?= $mb->denda ?>">
                <?= form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" class="form-control">
                  <option <?php if($mb->status == "1"){echo "selected='selected'";} echo $mb->status; ?> value="1">Tersedia</option>
                  <option <?php if($mb->status == "0"){echo "selected='selected'";} echo $mb->status; ?> value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('status', '<div class="text-small text-danger">', '</div>') ?>
              </div>
              
              <div class="form-group">
                <label for="">Gambar</label>
                <input type="file" name="gambar" class="form-control">
              </div>

              <button type="submit" class="btn btn-primary mt-4">Simpan</button>
              <button type="reset" class="btn btn-success mt-4">Reset</button>
            </div>
          </div>
        </form>

        <?php endforeach; ?>
      </div>
    </div>

  </section>
</div>