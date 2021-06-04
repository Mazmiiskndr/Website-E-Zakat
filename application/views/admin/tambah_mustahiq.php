
<div class="page-heading">
	<h3><i class="fa fa-plus"></i> Tambah Mustahiq</h3>
</div>
<div class="page-content">
	<section class="row">
		<div class="col-12 col-lg-12">

			<div class="row">
				<section class="section">
					<form action="<?= base_url('admin/mustahiq/tambah_mustahiq_aksi') ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-8">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Tambah Mustahiq</h4>
									</div>

									<div class="card-body">
										<div class="form-group">
											<label for="">Nama Penerima</label>
											<input type="text" class="form-control title" name="nama_penerima" required>
											<?= form_error('nama_penerima', '<small class="text-danger" style="color: red;">','</small>'); ?>
										</div>
										<div class="form-group">
											<label for="">Nama Yayasan</label>
											<input type="text" class="form-control" name="nama_yayasan" required>
											<?= form_error('nama_yayasan', '<small class="text-danger" style="color: red;">','</small>'); ?>
										</div>
										
										<div class="form-group">
											<label for="">Alamat Mustahiq</label>
											<textarea  name="alamat_mustahiq" class="form-control" required></textarea>
											<?= form_error('alamat_mustahiq;', '<small class="text-danger" style="color: red;">','</small>'); ?>
										</div>



									</div>
								</div>
							</div>

							<div class="col-4">
								<div class="card">


									<div class="card-body">
										<div class="form-group">
											<label for="">Jumlah Penyaluran Zakat</label>
											<input type="text" class="form-control" name="jumlah_zakat" required>
											<?= form_error('jumlah_zakat', '<small class="text-danger" style="color: red;">','</small>'); ?>
										</div>
										<div class="form-group">
											<label for="">Tanggal Penyaluran</label>
											<input type="date" class="form-control" name="tgl_penyaluran" required>
											<?= form_error('tgl_penyaluran', '<small class="text-danger" style="color: red;">','</small>'); ?>
										</div>
									
										
									</div>

								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-lg btn-primary btn-block"><i class="fa fa-plus"></i> Tambah</button>
									<a href="<?= base_url('admin/mustahiq') ?>" class="btn btn-lg btn-danger btn-block mt-3"><i class="fa fa-backward"></i> Kembali</a>
								</div>
							</div>

						</div>
					</form>
				</section>
			</div>
		</div>
	</section>
</div>
