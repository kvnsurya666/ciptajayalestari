<?= $this->extend('layout/default'); ?>

<?= $this->section('title'); ?>
<title>CIPTA JAYA LESTARI</title>
<?= $this->endSection(); ?>

<?= $this->section('home'); ?>
    <div class="container-fluid">
      <div id="carouselSlide" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/img/Banner/newproducts.jpg" class="d-block w-100" alt="Gambar 1" />
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row mt-4">
        <div class="col">
          <h2>Produk terbaru kami</h2>
        </div>    
      </div>
      <div class="row">
      
        <?php foreach ($barang as $key => $value) : ?>
        
        <div class="col-md-3 product-men">
			    <div class="product-shoe-info">
				    <div class="men-pro-item">
					    <div class="men-thumb-item">
						      <img class="img" src="<?= base_url(); ?>/assets/img/barang/<?= $value->gambar_barang; ?>" alt="">
						    <div class="men-cart-pro">
							    <div class="inner-men-cart-pro">
								    <a href="<?= site_url('katalog/detail/' . $value->id_barang); ?>" class="link-product-add-cart">Detail</a>
							    </div>
						    </div>
						    <div class="product-new-top">
							     <img class="logo" src="<?= base_url(); ?>/assets/img/logo/<?= $value->gambar_merk; ?>" alt="">
							  </div>												
					    </div>
              <div class="card card-body mb-4">
                  <p class="card-title text-center" style="color:#012970 ;">
                    <?= $value->nama_barang; ?>
                  </p>
              </div>
				    </div>
			    </div>
		    </div>
          
        <?php endforeach; ?>
      
        <?= $pager->links('default', 'pagination') ?>
		  </div>
    </div>
<?= $this->endSection(); ?>