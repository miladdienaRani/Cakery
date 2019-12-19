<?php
include "../Admin/koneksi.php";
?>
<div class="row mb-5">
      <?php
      $qprod = mysqli_query($conn, "SELECT * FROM produk");
      while($row = mysqli_fetch_array($qprod)) {
      ?> 
              <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <?php echo "<a href='shop-single.php?det=$row[id_produk]'><img src='../img/cake/$row[foto]' alt='Image placeholder' class='img-fluid'>"; ?></a>
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="shop-single.html"><?php echo "$row[nm_produk]"; ?></a></h3>
                    <p class="mb-0"><?php echo "$row[jns_produk]"; ?></p>
                    <p class="text-primary font-weight-bold"><?php echo "$row[hrg_satuan]"; ?></p>
                  </div>
                </div>
              </div>
      <?php
      }
      ?>


            </div>
