<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
	<div class="menu">
		<ul class="list">
			<li>
				<div class="user-info">
					<div class="image"><a href="/profile"><img src="/assets/images/gabe.jpg" alt="User"></a></div>
					<div class="detail">
						@auth
						<h4>{{Auth::user()->firstname}} {{Auth::user()->lastname}}</h4>
						<small>{{Str::ucfirst(Auth::user()->role)}}</small>
						@endauth

					</div>

					<br />
				</div>
			</li>
			<li class="header">MAIN</li>
			<li class="active open"><a href="/dashboard"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
			<li><a href="javascript:void(0);" class="menu-toggle"><i
						class="zmdi zmdi-balance-wallet"></i><span>Packages</span> </a>
				<ul class="ml-menu">
					<li><a href="{{route('package.list')}}">List Packages</a></li>
					<li><a href="{{ route('package.add')}}">Create Package</a></li>
				</ul>
			</li>
			<li class="{{ request()->routeIs('amenity.list')? 'active': ''}} open"><a href="{{route('amenity.list')}}"><i
						class="zmdi zmdi-balance-wallet"></i><span>Amenities</span></a>
			</li>
			<!-- <li><a href="javascript:void(0);" class="menu-toggle"><i
						class="zmdi zmdi-balance-wallet"></i><span>Amenities</span> </a>
				<ul class="ml-menu">
					<li><a href="{{route('amenity.list')}}">List Amenities</a></li>
					<li><a href="{{route('amenity.add')}}">Add Amenities</a></li>
				</ul>
			</li> -->
			<li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city"></i><span>Properties</span> </a>
				<ul class="ml-menu">
					<li><a href="/properties">List Properties</a></li>
					{{--  <li><a href="/properties/grid">Properties Grid view</a></li> --}}
					<li><a href="{{ route('property.add')}}">Add Property</a></li>
					<li><a href="property/details">Property Detail</a></li>
				</ul>
			</li>
			<li class=""><a href="{{route('category.list')}}"><i class="zmdi zmdi-city"></i><span>Categories</span></a></li>
			<li><a href="javascript:void(0);" class="menu-toggle"><i
						class="zmdi zmdi-accounts-outline"></i><span>Agents</span> </a>
				<ul class="ml-menu">
					<li><a href="{{ route('agent.view') }}">All Agents</a></li>
					<li><a href="{{ route('agent.add') }}">Add Agent</a></li>
					<li><a href="{{ route('agent.profile')}}">Agent Profile</a></li>
				</ul>
			</li>
	</div>
	</div>

	<div class="menu">
		<div class="list">
			<li class="open"><a href="/" style="color: #f96332"><i class="zmdi zmdi-arrow-left"></i><span>BACK TO
						HOMEPAGE</span></a></li>
			</ul>
		</div>
</aside>