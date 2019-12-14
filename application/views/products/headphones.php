<div class="container" style="margin-top: 70px;">
	<h3 class="d-inline my-3"><?= $title; ?></h3>
	<div class="row mt-2">
		<?php foreach ($headphones as $headphone) : ?>
			<div class="col-sm-3 mb-2">
				<div class="card rounded-0">
					<img class="card-img-top rounded-0" src="<?= base_url('assets/products/headphone/') . $headphone['gambar_produk']; ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><a class="text-dark" href="<?= base_url('Products/detailProduct/') . $headphone['id_headset']; ?>"><?= $headphone['nama_produk']; ?></a></h5>
						<p class="card-text">Rp <?= $headphone['harga_produk'];  ?></p>
						<a href="<?= base_url('Transaction/pesanan/') . $headphone['id_headset']; ?>" class="btn btn-warning mb-2 rounded-0 w-100">Buy</a>
						<a href="#" class="btn btn-outline-warning rounded-0 w-100">Add to cart</a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>