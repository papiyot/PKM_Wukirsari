	<!DOCTYPE html>
	@include('layouts.head')
		<body>
			<header id="header">
				<div class="header-top">
					<div class="container">
			  		<div class="row align-items-center">
			  			<div class="col-lg-6 col-sm-6 col-6 header-top-right">
							<div class="header-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
			  			</div>
			  		</div>
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="{{ url('/') }}">Beranda</a></li>
				          <li><a href="{{ url('/agenda') }}">Agenda</a></li>
				          <li><a href="{{ url('/paket') }}">Paket Wisata</a></li>
				          <li><a href="{{ url('/galeri') }}">Galeri</a></li>
				          <li><a href="{{ url('/kontak') }}">Contact Person</a></li>
                            @guest
				          <li><a href="{{ url('/login') }}">Login</a> </li>
                            @else
				          <li class="menu-has-children"><a href="">Profile</a>
				            <ul>
				            	  <li><a href="elements.html">Logout</a></li>
				            </ul>
				          </li>
                            @endguest
				        </ul>
				      </nav><!-- #nav-menu-container -->
					</div>
				</div>
			</header><!-- #header -->

            @yield('content')
            @include('layouts.Footer')
			@include('layouts.js')
		</body>
	</html>
