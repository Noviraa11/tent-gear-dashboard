<footer> <!-- Footer -->
<img src="<?= base_url('assets/assets_shop') ?>/images/logo.png" alt=""> <!-- (Logo dan teks tentang perusahaan) -->
    <p class="aboutus"> Tent Gear Adventure adalah platform untuk sewa peralatan camping digital sejak tahun 2024, menghadirkan kualitas tanpa batas bagi para pendaki. Dengan fokus pada inovasi teknologi dan keunggulan layanan, kami menyediakan solusi terbaik untuk memenuhi kebutuhan alat camping Anda. Bergabunglah dengan kami dan jelajahi semua Alam secara lebih mengesankan dan menyenangkan.</p>
    <div class="vertical-line"></div> <!-- Garis vertikal pemisah -->
    <div class="sosmed"> <!-- Ikuti kami di media sosial -->
      <p class="follow">Follow Our Sosmed</p> <!-- (Tautan ke media sosial) -->
      <a href="https://www.instagram.com/tentgear?igsh=aWlrcmF4b2F2ZXNs&utm_source=qr"><i class="fab fa-instagram"></i></a>
      <!-- <a href="https://www.tiktok.com/@tentgear.adventure"><i class="fab fa-tiktok"></i></a> -->
      <a href="https://shopee.com/"><i class="fas fa-shopping-bag"></i></a>
      <a href="https://www.youtube.com/@TentGearAdventure"><i class="fab fa-youtube"></i></a>
    </div>
    <hr class="horizontal"> <!-- Garis horizontal pemisah -->
    <p class="copyright">&copy; 2024 Tent Gear Adventure. All Rights Reserved.</p> <!-- Hak cipta -->
  </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/assets_shop') ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="<?= base_url('assets/assets_shop') ?>/js/custom.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/js/owl.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/js/slick.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/js/isotope.js"></script>
    <script src="<?= base_url('assets/assets_shop') ?>/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>