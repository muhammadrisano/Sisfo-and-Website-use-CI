 <!-- berita -->
 <section class="berita bg-gray" id="berita">
     <h2 class="text-center">Berita Terbaru</h2>
     <hr class="garis-judul">
     <div class="container">
         <div class="row">
             <div class="row justify-content-md-center">
                 <div class="col-md-9 ">
                     <?php foreach ($berita as $brt) : ?>
                         <ul class="list-unstyled">
                             <div class="judul-berita">
                                 <h3><?= $brt['judul']; ?></h3>
                             </div>

                             <li class="media">

                                 <div class="row">
                                     <div class="col-md-5">
                                         <img src="<?= base_url(); ?>assets/images/berita/<?= $brt['foto']; ?>" class="mr-3 img-thumbnail" alt="...">
                                     </div>
                                     <div class="col-md-7">
                                         <div class="media-body pl-2">
                                             <h5 class="mt-0 mb-1">Kategori : <span> <?= $brt['nama_kategori']; ?></span></h5>
                                             <?= $brt['isi']; ?>
                                             <hr>
                                             <h6 class="mt-0 mb-1">Tanggal : <span><?= $brt['created_at']; ?></span></h6>
                                             <h6 class="mt-0 mb-1">Dilihat Oleh : <span><?= $brt['jumlah_lihat']; ?> Orang</span></h6>
                                             <h6 class="mt-0 mb-1">Penulis : <span><?= $brt['penulis']; ?></span></h6>
                                             <br>
                                             <a href="http://" class="btn btn-sman4"><i class="fas fa-search-plus"></i> Lihat Selengkapnya</a>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     <?php endforeach; ?>

                 </div>
             </div>
         </div>

     </div>
 </section>

 <!-- end berita -->