<aside class="left-sidebar">
	<div class="scroll-sidebar">
		<nav class="sidebar-nav">
			<ul id="sidebarnav">
				<li>
					<div class="user-profile dropdown m-t-20">
						<div class="user-pic">
							<img src="{{ asset(Auth::user()->avatar) }}" alt="users" class="rounded-circle img-fluid" />
						</div>
						<div class="user-content hide-menu m-t-10">
							<h5 class="m-b-10 user-name font-medium">{{ Auth::user()->name }}</h5>
							<a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false"><i class="ti-settings"></i></a>
							<a href="javascript:void(0)" title="Logout" class="btn btn-circle btn-sm"><i class="ti-power-off"></i></a>
							<div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="javascript:void(0)">
									<i class="ti-settings m-r-5 m-l-5"></i> Account Setting
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="javascript:void(0)">
									<i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
								</a>
							</div>
						</div>
					</div>
				</li>

				<li class="nav-small-cap">
					<i class="mdi mdi-dots-horizontal"></i>
					<span class="hide-menu">Personal</span>
				</li>
				<li class="sidebar-item">
					<a href="{{ route('admin.dashboard') }}" class="sidebar-link">
						<i class="icon-Car-Wheel"></i>
						<span class="hide-menu"> Dashboard</span>
					</a>
				</li>

				<li class="nav-small-cap">
					<i class="mdi mdi-dots-horizontal"></i>
					<span class="hide-menu">Master Data</span>
				</li>
				<li class="sidebar-item">
					<a href="{{ route('admin.registrant') }}" class="sidebar-link">
						<i class="icon-Add-User "></i>
						<span class="hide-menu"> Registrant</span>
					</a>
				</li>

				<li class="nav-small-cap">
					<i class="mdi mdi-dots-horizontal"></i>
					<span class="hide-menu">Webpage Settings</span>
				</li>
				<li class="sidebar-item">
					<a href="{{ route('admin.setting') }}" class="sidebar-link">
						<i class="icon-Gears-2"></i>
						<span class="hide-menu"> Setting</span>
					</a>
				</li>
				<li class="sidebar-item">
					<a href="{{ route('admin.slider') }}" class="sidebar-link">
						<i class="icon-Full-View"></i>
						<span class="hide-menu"> Sliders</span>
					</a>
				</li>

			</ul>
		</nav>
	</div>
</aside>