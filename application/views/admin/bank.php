<div class="page-heading">
	<h3><i class="fa fa-university"></i> Data Bank</h3>
</div>
<div class="page-content">
	<section class="row">
		<div class="col-12 col-lg-12">
			<div class="row">
				<section class="section">
					<form action="<?= base_url('admin/bank/update_bank_aksi') ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-8">
								<?= $this->session->flashdata('pesan'); ?>
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Data Bank</h4>
									</div>

									<div class="card-body">
										<div class="form-group">
											<label for="">Nama Bank</label>
											<input type="hidden" class="form-control" name="id_bank" value="<?= $id_bank ?>">
											<input type="text" class="form-control" name="nama_bank" value="<?= $nama_bank ?>" required>

										</div>
										<div class="form-group">
											<label for="">Nama Yayasan</label>
											<input type="text" class="form-control" name="nama_rekening" value="<?= $nama_rekening ?>" required>
										</div>
										<div class="form-group">
											<label for="">Alamat Mustahiq</label>
											<input type="text" class="form-control" name="nomor_rekening" value="<?= $nomor_rekening ?>" required>

										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-lg btn-primary btn-block"><i class="fa fa-edit"></i> Update</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</section>
</div>
