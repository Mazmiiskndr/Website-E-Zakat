
<div class="page-heading">

	<h3><i class="fa fa-edit"></i> Update Artikel</h3>
	

</div>
<div class="page-content">
	<section class="row">
		<div class="col-12 col-lg-12">

			<div class="row">
				<section class="section">
					<?php foreach($detail as $row){ ?>
						<form action="<?= base_url('admin/artikel/update_artikel_aksi') ?>" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-8">
									<div class="card">
										<div class="card-header">
											<h4 class="card-title">Update Artikel</h4>
										</div>

										<div class="card-body">
											<div class="form-group">
												<label for="">Judul Artikel</label>
												<input type="hidden" class="form-control title" name="id_artikel" value="<?= $row->id_artikel ?>">
												<input type="text" class="form-control title" name="judul_artikel" value="<?= $row->judul_artikel ?>">
												
											</div>
											<div class="form-group">
												<label for="">Slug</label>
												<input type="text" class="form-control slug" readonly name="slug_artikel" value="<?= $row->slug_artikel ?>">
											</div>
											<div class="form-group">
												<label for="">Contents</label>
												<textarea id="summernote" name="deskripsi_artikel"><?= $row->deskripsi_artikel ?></textarea>
												
											</div>

											
											
										</div>
									</div>
								</div>

								<div class="col-4">
									<div class="card">
										

										<div class="card-body">
											<div class="form-group">
												<label for="">Image</label>
												<input type="file" name="gambar" value="<?= set_value('gambar') ?>" class="form-control">

											</div>
											<div class="form-group">
											<label for="">Nama Mustahiq</label>
											<select name="nama_mustahiq" id="" class="form-select">
												<option value="<?= $row->nama_mustahiq ?>"><?= $row->nama_mustahiq ?></option>
												<?php foreach($mustahiq as $m){ ?>

													<option value="<?= $m->nama_penerima ?>"><?= $m->nama_penerima ?></option>
												<?php } ?>
											</select>
										</div>
											

									

											
										</div>

									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-lg btn-primary btn-block"><i class="fa fa-edit"></i> Update</button>
										<a href="<?= base_url('admin/artikel') ?>" class="btn btn-lg btn-danger btn-block mt-3"><i class="fa fa-backward"></i> Kembali</a>
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
