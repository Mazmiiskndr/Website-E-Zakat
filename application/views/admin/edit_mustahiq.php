
<div class="page-heading">

	<h3><i class="fa fa-edit"></i> Update Mustahiq</h3>

</div>
<div class="page-content">
	<section class="row">
		<div class="col-12 col-lg-12">

			<div class="row">
				<section class="section">
					<?php foreach($detail as $row){ ?>
						<form action="<?= base_url('admin/mustahiq/update_mustahiq_aksi') ?>" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-8">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">Update Mustahiq</h4>
										</div>

										<div class="card-body">
											<div class="form-group">
												<label for="">Nama Penerima</label>
												<input type="hidden" class="form-control" name="id_mustahiq" value="<?= $row->id_mustahiq ?>">
												<input type="text" class="form-control" name="nama_penerima" value="<?= $row->nama_penerima ?>" required>
												
											</div>
											<div class="form-group">
												<label for="">Nama Yayasan</label>
												<input type="text" class="form-control" name="nama_yayasan" value="<?= $row->nama_yayasan ?>" required>
											</div>
											<div class="form-group">
												<label for="">Alamat Mustahiq</label>
												<textarea class="form-control" name="alamat_mustahiq" required><?= $row->alamat_mustahiq ?></textarea>
												
											</div>

											
											
										</div>
									</div>
								</div>

								<div class="col-4">
									<div class="card">
										

										<div class="card-body">
											<div class="form-group">
												<label for="">Jumlah Penyaluran Zakat</label>
												<input type="text" class="form-control" name="jumlah_zakat" value="<?= $row->jumlah_zakat ?>" required>
											</div>
											
											<div class="form-group">
												<label for="">Tanggal Penyaluran</label>
												<input type="date" class="form-control" name="tgl_penyaluran" value="<?= $row->tgl_penyaluran ?>" required>
												<?= form_error('tgl_penyaluran', '<small class="text-danger" style="color: red;">','</small>'); ?>
											</div>





										</div>

									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-lg btn-primary btn-block"><i class="fa fa-edit"></i> Update</button>
										<a href="<?= base_url('admin/mustahiq') ?>" class="btn btn-lg btn-danger btn-block mt-3"><i class="fa fa-backward"></i> Kembali</a>
									</div>
								</div>

							</div>
						</form>
					<?php } ?>
				</section>
			</div>
		</div>
	</section>
</div>
