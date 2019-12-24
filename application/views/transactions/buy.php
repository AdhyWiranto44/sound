<div class="container" style="margin-top: 100px;">
	<div class="row">
		<div class="col-md-12 col-lg-6 mb-3">
			<div class="card">
				<div class="card-body">
					<form method="post" action="<?= base_url('transaction/checkout') ?>">
						<p class="h5"><i class="far fa-user text-dark d-inline mr-2"></i><?= $user['name']; ?></p>
						<div class="form-group" style="font-family: Arial, Helvetica, sans-serif;">
							<label for="alamat">Alamat</label>
							<textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
						</div>
						<div class="form-group">
							<label for="telp">No. Telepon</label>
							<input type="text" class="form-control" id="telp" name="telp" maxlength="13" min="0" required>
						</div>
						<div class=" form-group">
							<label for="kurir">Pilih Kurir</label>
							<select class="form-control" id="kurir" name="kurir" style="font-family: Arial, Helvetica, sans-serif;">
								<?php foreach ($kurir as $k) : ?>
									<option value="<?= $k['id']; ?>" style="font-family: Arial, Helvetica, sans-serif;"><?= $k['nama_kurir']; ?>(Rp <?= number_format($k['biaya']); ?>,-)</option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label class="mt-2" for="metode">Pilih Metode Pembayaran</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="metode" id="" value="Internet Banking" checked>
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
						<a class="btn btn-danger mr-2" href="<?= base_url('transaction/deleteallcartproduct'); ?>">Batal</a>
						<button type="submit" class="btn btn-warning">Konfirmasi Pesanan</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-lg-6 mb-3">
			<div class="card">
				<div class="card-body">
					<h6>Daftar Pesanan</h6>
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>#</th>
								<th>Gambar</th>
								<th>Nama Produk</th>
								<th>Jumlah</th>
								<th></th>
								<th>Harga</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php $j = 1; ?>
							<?php foreach ($item as $i) : ?>
								<tr>
									<th scope="row"><?= $j; ?></th>
									<td><img class="d-inline border mr-2 mb-2" src="<?= base_url('assets/products/') . $i['tipe_produk'] . '/' . $i['gambar_produk']; ?>" style="height: 40px;"></td>
									<td>
										<h6 class="d-inline"><?= $i['nama_produk']; ?></h6>
									</td>
									<td>
										<p><b><?= $i['quantity']; ?></b></p>
									</td>
									<td>
										<p>x</p>
									</td>
									<td>
										<p><b>Rp <?= number_format($i['harga_produk']); ?>,-</b></p>
									</td>
									<td style="font-family: roboto;"><a href="<?= base_url('transaction/deleteonecartproduct/') . $i['id_headset']; ?>" class="badge badge-danger" style="font-family: roboto;">Cancel</a></td>
								</tr>
								<?php $j++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>
					<h4 class="border-top pt-2">Total : Rp <?= number_format($total); ?>,-</h4>
					<small class="form-text text-muted" style="font-family: roboto;">Belum termasuk ongkos kirim</small>
				</div>
			</div>
		</div>
	</div>
</div>