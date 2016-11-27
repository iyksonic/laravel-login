<div class="header">
	<div class="container">
		<div class="head-top">
			<div class="logo">
				<a href="index.html"><img src="images/bo.png" alt="" title="Academic"></a>
			</div>
			<div class="login">
				<ul class="nav-login">
					<li><a href="#" data-toggle="modal" data-target="#myModal1">Login</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal2">Signup</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
		<!-- login -->
			<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
							
									<div class="login-right">

										{{Form::open(array('route'=>'authenticate'))}}
										
											
											<br>
											{{Form::label('Email')}}
											{{Form::email('email')}}
											<br>
											{{Form::label('password')}}
											{{Form::password('password')}}
											<br>
						

											
									
										
											<h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											{{Form::submit('SIGN IN')}}
											
										{{Form::close()}}
									</div>
									
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //login -->

			
			<!-- signup -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
							
									<div class="login-right">
									{{Form::open(array('route'=>'storeuser'))}}
										
											<h3>Are You new to erudite?? </h3>
											{{Form::label('Firstname')}}
											{{Form::text('first_name')}}
											<br>
											{{Form::label('Lastname')}}
											{{Form::text('last_name')}}
											<br>
											<br>
											{{Form::label('Email')}}
											{{Form::email('email')}}
											<br>
											{{Form::label('password')}}
											{{Form::password('password')}}
											<br>
											{{Form::label('confirm password')}}
											{{Form::password('confirm_password')}}
											<br>

											{{Form::submit('Register')}}
											
									
										{{Form::close()}}
									</div>
								
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //signup -->
		<div class="banner">
			<div class="container">
				<div class="banner-text">
				@if(Session::has('message'))
				<h2>{{Session::get('message')}}</h2>
				@endif
				<br>
				<br>
				<br>
					<h2>Academic</h2>
					<p>Sed ut perspiciatis unde </p>
				</div>
				<p class="banner-text1">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
			</div>
		</div>
</div>