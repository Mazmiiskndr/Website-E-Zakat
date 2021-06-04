<div class="page-heading">
	<h3><i class="fa fa-university"></i> Detail Contact</h3>
</div>
<div class="page-content">
	<section class="row">
		<div class="col-12 col-lg-12">
			<div class="row">
				<?php foreach($detail as $row){ ?>
					<section class="section">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Detail Contact</h4>
								<p ><?= $row->nama  ?></p>
								<p ><?= $row->email  ?></p>
							</div>
							<div class="card-body">
								<p><?= $row->deskripsi ?></p>
								<div class="mt-3">
									<a href="<?= base_url('admin/contact') ?>" class="btn btn-danger">Back</a>
								</div>
							</div>
						</div>
					</section>
				<?php } ?>
			</div>
		</div>
	</section>
</div>
