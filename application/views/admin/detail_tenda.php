<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Detail tenda</h1>
    </div>
  </section>

  <?php foreach($detail as $dt): ?>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-5">
            <img width="110%;" src="<?= base_url('assets/upload/'). $dt->gambar; ?>" alt="">
          </div>
          <div class="col-md-7">
            <table class="table">
              <tr>
                <td>Tipe tenda</td>
                <td>
                  <?php 
                    if($dt->kode_tipe == "DM"){
                      echo "Dome";
                    }
                    elseif($dt->kode_tipe == "PL"){
                      echo "tenda pleton";
                    }
                    elseif($dt->kode_tipe == "GLP"){
                      echo "Glamping";
                    }  
                    elseif($dt->kode_tipe == "GD"){
                      echo "Geodesic dome";
                    }
                    elseif($dt->kode_tipe == "TN"){
                      echo "Tunnel"; 
                    }
                    elseif($dt->kode_tipe == "TR"){
                      echo "Tenda Ridge";   
                    }
                    else{ ?>
                      <span class="text-danger">Tipe tenda belum terdaftar</span>
                    <?php }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Merek</td>
                <td><?= $dt->merek; ?></td>
              </tr>
              <tr>
                <td>Kapasitas</td>
                <td><?= $dt->kapasitas; ?></td>
              </tr>
              <tr>
                <td>Warna</td>
                <td><?= $dt->warna; ?></td>
              </tr>
              <tr>
                <td>Harga Sewa</td>
                <td>Rp. <?= number_format($dt->harga, 0, ',', '.'); ?>,-</td>
              </tr>
              <tr>
                <td>Denda</td>
                <td>Rp. <?= number_format($dt->denda, 0, ',', '.'); ?>,-</td>
              </tr>
              <tr>
                <td>Status</td>
                <td>
                  <?php
                  if($dt->status == "0"){ ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Tersedia</span>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>matras</td>
                <td>
                  <?php
                  if($dt->matras == "0"){ ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Tersedia</span>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Selimut</td>
                <td>
                  <?php
                  if($dt->Selimut == "0"){ ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Tersedia</span>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Lampu</td>
                <td>
                  <?php
                  if($dt->Lampu == "0"){ ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Tersedia</span>
                  <?php } ?>
                </td>
              </tr>
              <tr>
                <td>Hammock</td>
                <td>
                  <?php
                  if($dt->Hammock == "0"){ ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>                 
                  <?php }
                  else{ ?>
                    <span class="badge badge-primary">Tersedia</span>
                  <?php } ?>
                </td>
              </tr>
            </table>

            <a href="<?= base_url('admin/data_tenda'); ?>" class="btn btn-sm btn-danger ml-4">Kembali</a>
            <a href="<?= base_url('admin/data_tenda/update_tenda/').$dt->id_tenda; ?>" class="btn btn-sm btn-primary">Update</a>
          </div>
        </div>
      </div>
    </div>

  <?php endforeach; ?>
</div>