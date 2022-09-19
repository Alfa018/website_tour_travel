                <header class="default-header">
                	<nav class="navbar navbar-expand-lg  navbar-light" style="background-color: #2c2f33;">
                		<div class="container">
                			<a class="navbar-brand" href="/">
                				<img src="assets/user/img/logo1.png" width="50px" height="50px">
                				<!-- PILAR WISATA INDONESIA -->
                			</a>
                			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                				<span class="text-white lnr lnr-menu"></span>
                			</button>

                			<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                				<ul class="navbar-nav">
                					<li class="nav-item"><a href="{{url('/')}}">Home</a></li>
                					<li class="nav-item"><a href="{{url('about')}}">About</a></li>
                					<li class="nav-item"><a href="{{url('paket')}}">Package</a></li>
                					<li class="nav-item"><a href="{{url('gallery')}}">Gallery</a></li>
                					<li class="nav-item"><a href="/">Gallery</a></li>
                					<!-- <li><a href="#contact">Contact</a></li> -->
                					@auth
                					<li>
                						<div class="user-area dropdown float-right">
                							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                								<!-- <img class="user-avatar rounded-circle" src="{{asset('images/avatar/1.png')}}" alt="User Avatar"> -->
                							</a>
                							<!-- <div class="user-menu dropdown-menu"> -->
                							<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown" style="color: white;">
                								<a class="nav-link" href="{{url('profile')}}" style="color: white;">My Profile <span class="badge badge-pill badge-danger"></span><i class="dropdown-item-icon ti-dashboard"></i></a>
                								<a class="nav-link" href="{{url('transaction')}}" style="color: white;">Transaction<i class="dropdown-item-icon ti-comment-alt"></i></a>
                								<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); 
													document.getElementById('logout-form').submit();" style="color: white;" >
                									<i class="fa fa-power-off"></i> Logout
                								</a>
                							</div>
                							<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                								@csrf
                							</form>
                							<!-- </div> -->
                						</div>
                					</li>
                					@else
                					<li class="nav-item"><a href="{{url('register')}}">REGISTER</a></li>
                					<li class="nav-item"><a href="{{url('login')}}">LOGIN</a></li>
                					@endauth
                				</ul>
                			</div>
                		</div>
                	</nav>
                </header>