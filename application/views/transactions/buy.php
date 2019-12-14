<div class="container" style="margin-top: 100px;">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-body">
					<form method="post" action="<?= base_url('transaction/konfirmasipesanan') ?>">
						<div class="row">
							<div class="col-sm-6 mb-3">
								<p class="h5"><i class="far fa-user text-dark d-inline mr-2"></i><?= $user['name']; ?></p>
								<div class="form-group" style="font-family: Arial, Helvetica, sans-serif;">
									<label for="alamat">Alamat</label>
									<textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label for="telp">No. Telepon</label>
									<input type="text" class="form-control" id="telp" name="telp">
								</div>
								<div class="form-group">
									<label for="kurir">Pilih Kurir</label>
									<select class="form-control" id="" name="" style="font-family: Arial, Helvetica, sans-serif;">
										<?php foreach ($kurir as $k) : ?>
											<option value="<?= $k['id']; ?>" style="font-family: Arial, Helvetica, sans-serif;"><?= $k['nama_kurir']; ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="form-group">
									<label class="mt-2" for="metode">Pilih Metode Pembayaran</label>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="metode" id="" value="Internet Banking">
										<label class="form-check-label" for="radio" style="font-family: Arial, Helvetica, sans-serif;">
											Internet Banking
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="metode" id="" value="Mobile Banking">
										<label class="form-check-label" for="radio" style="font-family: Arial, Helvetica, sans-serif;">
											Mobile Banking
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="metode" id="" value="Transfer ATM">
										<label class="form-check-label" for="radio" style="font-family: Arial, Helvetica, sans-serif;">
											Transfer ATM
										</label>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Confirm Order</button>
							</div>
							<div class="col-sm-4">
								<h6>Daftar Pesanan</h6>
								<div class="card">
									<div class="card-body">
										<?php foreach ($item as $i) : ?>
											<!-- HARUSNYA PAKAI TABLE -->
											<img class="d-inline border mr-2 mb-2" src="<?= base_url('assets/products/') . $i['tipe_produk'] . '/' . $i['gambar_produk']; ?>" style="height: 40px;">
											<h6 class="d-inline"><?= $i['nama_produk']; ?></h6>
											<br>
										<?php endforeach; ?>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>