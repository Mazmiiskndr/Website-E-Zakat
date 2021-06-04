
<div class="page-heading">
	<h3><i class="bi bi-pen-fill"></i> Tambah Artikel</h3>
</div>
<div class="page-content">
	<section class="row">
		<div class="col-12 col-lg-12">

			<div class="row">
				<section class="section">
					<form action="<?= base_url('admin/artikel/tambah_artikel_aksi') ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-8">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Tambah Artikel</h4>
									</div>

									<div class="card-body">
										<div class="form-group">
											<label for="">Judul Artikel</label>
											<input type="text" class="form-control title" name="judul_artikel" required>
											<?= form_error('judul_artikel', '<small class="text-danger" style="color: red;">','</small>'); ?>
										</div>
										<div class="form-group">
											<label for="">Slug Artikel</label>
											<input type="text" class="form-control slug" readonly name="slug_artikel">
										</div>
										<div class="form-group">
											<label for="">Deskripsi Artikel</label>
											<textarea id="summernote" name="deskripsi_artikel" required></textarea>
											<?= form_error('deskripsi_artikel;', '<small class="text-danger" style="color: red;">','</small>'); ?>
										</div>



									</div>
								</div>
							</div>

							<div class="col-4">
								<div class="card">


									<div class="card-body">
										<div class="form-group">
											<label for="">Image</label>
											<input type="file" name="gambar" value="<?= set_value('gambar') ?>" class="form-control" required>

										</div>
										<div class="form-group">
											<label for="">Nama Mustahiq</label>
											<select name="nama_mustahiq" id="" class="form-select">
												<option value="">-- Pilih Mustahiq --</option>
												<?php foreach($mustahiq as $m){ ?>

													<option value="<?= $m->nama_penerima ?>"><?= $m->nama_penerima ?></option>
												<?php } ?>
											</select>
										</div>
										
									</div>

								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-lg btn-primary btn-block"><i class="fa fa-plus"></i> Publish</button>
									<a href="<?= base_url('admin/artikel') ?>" class="btn btn-lg btn-danger btn-block mt-3"><i class="fa fa-backward"></i> Kembali</a>
								</div>
							</div>

						</div>
					</form>
				</section>
			</div>
		</div>
	</section>
</div>
