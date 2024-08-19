
<div style="height: 40px;"></div>

<section class="blog-posts grid-system">
  <div class="container">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="all-blog-posts">
      <div class="row">

        <?php foreach($tenda as $mb): ?>
          <?php if($mb->status == "1"): ?>  <!-- Hanya tampilkan tenda yang tersedia -->
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="<?= base_url('assets/upload/') . $mb->gambar ?>" alt="">
                </div>
                <div class="down-content">
                  <a href="offers.html"><h4><?= $mb->merek; ?></h4></a>
                  <span>Rp. <?= number_format($mb->harga,0,',','.'); ?>,-</span> <strong>per hari</strong>

                  <div class="row">
                    <?php if($mb->kapasitas == '1'){ ?>
                      <a href="#" class="badge badge-success m-1"><i class="fa fa-check-square"></i> kapasitas</a>
                      <?php } 
                    else{ ?>
                      <a href="#" class="badge badge-danger m-1"><i class="fa fa-times-circle"></i> kapasitas</a>
                    <?php } ?>

                    <?php if($mb->selimut == '1'){ ?>
                      <a href="#" class="badge badge-success m-1"><i class="fa fa-check-square"></i> selimut</a>
                      <?php } 
                    else{ ?>
                      <a href="#" class="badge badge-danger m-1"><i class="fa fa-times-circle"></i> selimut</a>
                    <?php } ?>

                    <?php if($mb->lampu == '1'){ ?>
                      <a href="#" class="badge badge-success m-1"><i class="fa fa-check-square"></i> lampu</a>
                      <?php } 
                    else{ ?>
                      <a href="#" class="badge badge-danger m-1"><i class="fa fa-times-circle"></i> lampu</a>
                    <?php } ?>

                    <?php if($mb->hammock == '1'){ ?>
                      <a href="#" class="badge badge-success m-1"><i class="fa fa-check-square"></i> hammock</a>
                      <?php } 
                    else{ ?>
                      <a href="#" class="badge badge-danger m-1"><i class="fa fa-times-circle"></i> hammock</a>
                    <?php } ?>
                  </div>

                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <a href="<?= base_url('customer/rental/tambah_rental/'.$mb->id_tenda) ?>"> Rental</a></li>
                          <li><a href="<?= base_url('customer/data_tenda/detail_tenda/'.$mb->id_tenda) ?>"> | Detail</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<!-- <div style="height: 180px;"></div> -->