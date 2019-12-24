<div class="container" style="margin-top: 70px;">

	<div class="row" style="margin-top: 50px;">
		<div class="col-4 mt-3 mx-auto">
			<?= $this->session->flashdata('message'); ?>
		</div>
	</div>

	<h3 class="d-inline my-3"><?= $title; ?></h3>
	<div class="row mt-2">
		<?php foreach ($earphones as $earphone) : ?>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-2">
				<div class="card mb-3">
					<div class="gambarProduk">
						<a href="<?= base_url('products/detail/') . $earphone['id_headset']; ?>">
							<img class="card-img-top on-hover" src="<?= base_url('assets/products/earphone/') . $earphone['gambar_produk']; ?>" alt="Card image cap">
						</a>
					</div>
					<div class="card-body">
						<h5 class="card-title mb-0"><a class="text-dark" href="<?= base_url('products/detail/') . $earphone['id_headset']; ?>"><?= $earphone['nama_produk']; ?></a></h5>

						<p class="card-text">Rp <?= number_format($earphone['harga_produk']); ?>,-</p>
						<a href="<?= base_url('transaction/buy/') . $earphone['id_headset']; ?>" class="btn btn-warning mb-2 rounded w-100">Buy</a>
						<a href="<?= base_url('transaction/addtocart/') . $earphone['id_headset']; ?>" class="btn btn-outline-warning rounded w-100">Add to cart</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<?= $this->pagination->create_links(); ?>
</div>