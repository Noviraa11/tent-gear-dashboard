<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Input Data tenda</h1>
    </div>

    <div class="card">
      <div class="card-body">

        <form matrastion="<?= base_url('admin/data_tenda/tambah_tenda_aksi') ?>" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Tipe tenda</label>
                <select name="kode_tipe" id="" class="form-control">
                  <option value="">--Pilih Tipe tenda--</option>
                  <?php foreach($tipe as $tp): ?>
                  <option value="<?= $tp->kode_tipe ?>"><?= $tp->nama_tipe; ?></option>
                  <?php endforeach; ?>
                </select>
                <?= form_error('kode_tipe', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Merek</label>
                <input type="text" name="merek" class="form-control">
                <?= form_error('merek', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">kapasitas</label>
                <input type="text" name="kapasitas" class="form-control">
                <?= form_error('kapasitas', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Warna</label>
                <input type="text" name="warna" class="form-control">
                <?= form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Matras</label>
                <select name="matras" id="" class="form-control">
                  <option value="">--Pilih--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('matras', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">selimut</label>
                <select name="selimut" id="" class="form-control">
                  <option value="">--Pilih--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('selimut', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">lampu</label>
                <select name="lampu" id="" class="form-control">
                  <option value="">--Pilih--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('lampu', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">hammock</label>
                <select name="hammock" id="" class="form-control">
                  <option value="">--Pilih--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?= form_error('hammock', '<div class="text-small text-danger">', '</div>') ?>
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Harga Sewa perhari</label>
                <input type="number" name="harga" class="form-control">
                <?= form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Denda</label>
                <input type="number" name="denda" class="form-control">
                <?= form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
              </div>

              <div class="form-group">
                <label for="">Status</label>
                <select name="status" id="" class="form-control">
                  <option value="">--Pilih Status--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
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
      </div>
    </div>


  </section>
</div>