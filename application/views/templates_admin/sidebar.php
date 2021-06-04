<div id="app">
	<div id="sidebar" class="active">
		<div class="sidebar-wrapper active">
			<div class="sidebar-header">
				<div class="d-flex justify-content-between">
					<div class="logo">
						<a href="<?= base_url('admin') ?>"><i class="fa fa-handshake" aria-hidden="true"></i> <strong>E - Zakat</strong></a>
					</div>
					<div class="toggler">
						<a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
					</div>
				</div>
			</div>
			<div class="sidebar-menu">
				<ul class="menu">
					<li class="sidebar-title">Menu</li>

					<li class="sidebar-item <?= $this->uri->uri_string() === 'admin' ? 'active' : '' ?>">
						<a href="<?= base_url('admin') ?>" class='sidebar-link'>
							<i class="bi bi-grid-fill"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="sidebar-item <?= $this->uri->uri_string() === 'admin/bank' ? 'active' : '' ?>">
						<a href="<?= base_url('admin/bank') ?>" class='sidebar-link'>
							<i class="fa fa-university"></i>
							<span>Bank</span>
						</a>
					</li>
					<li class="sidebar-item <?= $this->uri->uri_string() === 'admin/artikel' ? 'active' : '' ?>">
						<a href="<?= base_url('admin/artikel') ?>" class='sidebar-link'>
							<i class="bi bi-file-earmark-bar-graph"></i>
							<span>Artikel Zakat</span>
						</a>
					</li>

					<li class="sidebar-item <?= $this->uri->uri_string() === 'admin/muzakki' ? 'active' : '' ?>">
						<a href="<?= base_url('admin/muzakki') ?>" class='sidebar-link'>
							<i class="bi bi-people-fill"></i>
							<span>Data Muzakki</span>
						</a>
					</li>
					<li class="sidebar-item <?= $this->uri->uri_string() === 'admin/mustahiq' ? 'active' : '' ?>">
						<a href="<?= base_url('admin/mustahiq') ?>" class='sidebar-link'>
							<i class="bi bi-person-circle"></i>
							<span>Data Mustahiq</span>
						</a>
					</li>
					<li class="sidebar-item <?= $this->uri->uri_string() === 'admin/transaksi' ? 'active' : '' ?>">
						<a href="<?= base_url('admin/transaksi') ?>" class='sidebar-link'>
							<i class="bi bi-cash"></i>
							<span>Data Transaksi</span>
						</a>
					</li>

					<li class="sidebar-item <?= $this->uri->uri_string() === 'admin/contact' ? 'active' : '' ?>">
						<a href="<?= base_url('admin/contact') ?>" class='sidebar-link'>
							<i class="bi bi-envelope-open-fill"></i>
							<span>Contact</span>
						</a>
					</li>

					<li class="sidebar-item <?= $this->uri->uri_string() === 'admin/laporan_transaksi' ? 'active' : '' ?>">
						<a href="<?= base_url('admin/laporan_transaksi') ?>" class='sidebar-link'>
							<i class="bi bi-info-circle-fill"></i>
							<span>Laporan Transaksi</span>
						</a>
					</li>
                    </li>
                    <li class="sidebar-item">
						<a href="#" class='sidebar-link' data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
							<i class="bi bi-box-arrow-left"></i>
							<span>Logout</span>
						</a>
					</li>

				</ul>
			</div>
			<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
		</div>
	</div>
	<div id="main">
		<header class="mb-3">
			<a href="#" class="burger-btn d-block d-xl-none">
				<i class="bi bi-justify fs-3"></i>
			</a>
		</header>


