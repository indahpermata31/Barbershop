<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
		<div class="navbar-wrapper ">
			<div class="navbar-brand header-logo">
				<a href="index.html" class="b-brand">
					<img src="{{ asset('assets/images/logo.svg') }}" alt="" class="logo images">
					<img src="{{ asset('assets/images/logo-icon.svg') }}" alt="" class="logo-thumb images">
				</a>
				<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			</div>
			<div class="navbar-content scroll-div">
				<ul class="nav pcoded-inner-navbar">
					<li class="nav-item pcoded-menu-caption">
						<label>Navigation</label>
					</li>
					<li class="nav-item {{ request()->routeIs('home.index')?'active':'' }}">
						<a href="{{ route('home.index') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
					</li>
					<li class="nav-item {{ request()->routeIs('stylist.index')?'active':'' }}">
						<a href="{{ route('stylist.index') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Stylist</span></a>
					</li>
                    <li class="nav-item {{ request()->routeIs('pelanggan.index')?'active':'' }}">
						<a href="{{ route('pelanggan.index') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Pelanggan</span></a>
					</li>
					<li class="nav-item {{ request()->routeIs('layanan.index')?'active':'' }}">
						<a href="{{ route('layanan.index') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Layanan</span></a>
					</li>
					<li class="nav-item {{ request()->routeIs('style.index')?'active':'' }}">
						<a href="{{ route('style.index') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Style</span></a>
					</li>
					<li class="nav-item {{ request()->routeIs('reservasi.index')?'active':'' }}">
						<a href="{{ route('reservasi.index') }}" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Reservasi</span></a>
					</li>
					{{-- <li class="nav-item pcoded-menu-caption">
						<label>Chart & Maps</label>
					</li>
					<li class="nav-item">
						<a href="chart-morris.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
					</li>
					<li class="nav-item">
						<a href="map-google.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
					</li>
					<li class="nav-item">
						<a href="tbl_bootstrap.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>Pages</label>
					</li> --}}
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
						<ul class="pcoded-submenu">
							{{-- <li class=""><a href="/login" class="" target="_blank">Sign up</a></li> --}}
							<li class=""><a href="/login" class="" target="_blank">Sign in</a></li>
						</ul>
					</li>
					{{-- <li class="nav-item"><a href="sample-page.html" class="nav-link"><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li>
					<li class="nav-item disabled"><a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li> --}}
				</ul>
				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Upgrade to pro</h6>
						<p>upgrade for get full themes and 30min support</p>
						<a href="https://codedthemes.com/item/flash-able-bootstrap-admin-template/" target="_blank" class="btn btn-gradient-primary btn-sm text-white m-0">Upgrade</a>
					</div>
				</div>
			</div>
		</div>
	</nav>