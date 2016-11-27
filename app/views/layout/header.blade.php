<!-- <div class="header">

<div class="nav-top"> -->
			<div class="container">
				<div class="nav1">
					<div class="navbar1">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
		 
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav cl-effect-8">
								<li ><a>
									
								@if(Auth::check())
								{{"Hello ".Auth::user()->first_name }}
								@endif
								</a></li>
								<li ><a class="active" href="{{url('home')}}">Home</a></li>
								<li><a href="{{url('about')}}">About</a></li>
								<li><a href="{{url('portfolio')}}">Portfolio</a></li>
								<li><a href="{{url('scodes')}}">Short Codes</a></li>
								<li><a href="{{url('contact')}}">Contact</a></li>	
								<li><a href="{{url('logout')}}">LOGOUT</a></li>	

							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
					<!-- start search-->
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div> 
			</div> 
		</div> 
</div> 

@yield('design')
	