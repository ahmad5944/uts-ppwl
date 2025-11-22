<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
	<div class="app-brand demo">
		<a href="index.html" class="app-brand-link">
			<span class="app-brand-logo demo">
				<!-- ...existing SVG code... -->
			</span>
			<span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
		</a>
		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>
	<div class="menu-inner-shadow"></div>
	<ul class="menu-inner py-1">
		<!-- Dashboard -->
		<li class="menu-item{{ request()->is('/dashboard') ? ' active' : '' }}">
			<a href="/dashboard" class="menu-link">
				<i class="menu-icon tf-icons bx bx-home-circle"></i>
				<div data-i18n="Analytics">Dashboard</div>
			</a>
		</li>
		<!-- Master -->
		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Master</span>
		</li>
		<li class="menu-item{{ request()->is('categories*') ? ' active open' : '' }}">
			<a href="#" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-package"></i>
				<div data-i18n="Authentications">Kategori</div>
			</a>
			<ul class="menu-sub" style="{{ request()->is('categories*') ? 'display:block;' : '' }}">
				<li class="menu-item{{ request()->routeIs('categories.create') ? ' active' : '' }}">
					<a href="{{ route('categories.create') }}" class="menu-link">
						<div data-i18n="Basic">Tambah Kategori</div>
					</a>
				</li>
				<li class="menu-item{{ request()->routeIs('categories.index') ? ' active' : '' }}">
					<a href="{{ route('categories.index') }}" class="menu-link">
						<div data-i18n="Basic">List Kategori</div>
					</a>
				</li>
			</ul>
		</li>
		<li class="menu-item{{ request()->is('products*') ? ' active open' : '' }}">
			<a href="#" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-category"></i>
				<div data-i18n="Authentications">Katalog Produk</div>
			</a>
			<ul class="menu-sub" style="{{ request()->is('products*') ? 'display:block;' : '' }}">
				<li class="menu-item{{ request()->routeIs('products.create') ? ' active' : '' }}">
					<a href="{{ route('products.create') }}" class="menu-link">
						<div data-i18n="Basic">Tambah Produk</div>
					</a>
				</li>
				<li class="menu-item{{ request()->routeIs('products.index') ? ' active' : '' }}">
					<a href="{{ route('products.index') }}" class="menu-link">
						<div data-i18n="Basic">List Produk</div>
					</a>
				</li>
			</ul>
		</li>
		<!-- Transaksi -->
		<li class="menu-header small text-uppercase">
			<span class="menu-header-text">Transaksi</span>
		</li>
		<li class="menu-item">
			<a href="cards-basic.html" class="menu-link">
				<i class="menu-icon tf-icons bx bx-collection"></i>
				<div data-i18n="Basic">Daftar Pesanan</div>
			</a>
		</li>
		<li class="menu-item">
			<a href="javascript:void(0)" class="menu-link menu-toggle">
				<i class="menu-icon tf-icons bx bx-box"></i>
				<div data-i18n="User interface">Pembayaran</div>
			</a>
			<ul class="menu-sub">
				<li class="menu-item">
					<a href="ui-accordion.html" class="menu-link">
						<div data-i18n="Accordion">Daftar Pembayaran</div>
					</a>
				</li>
				<li class="menu-item">
					<a href="ui-alerts.html" class="menu-link">
						<div data-i18n="Alerts">Verifikasi Pembayaran</div>
					</a>
				</li>
			</ul>
		</li>
	</ul>
</aside>
