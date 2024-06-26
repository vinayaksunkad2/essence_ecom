<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
		<title>Essence - Fashion Ecommerce Template</title>

		<!-- Favicon  -->
		<link rel="icon" href="img/core-img/favicon.ico">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/stylenew.css">
		
	</head>
	<body>
		
		<div class="wrapper">
			<form action="essence-sign-up" method="post" >
				@csrf
				<div style="margin-bottom:50px;width:700px;">
					{{$errors}}
								@if(session()->has('message'))
								<div class="alert alert-success">
									{{ session()->get('message') }}
								</div>
							@endif
				</div>
				@csrf
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
					<div class="inner">
						<div class="image-holder">
							<img src="img/form-wizard-1.jpg" alt="">
						</div>
						<div style="padding: 5px">
							<a  style="background:#cbebad;position:absolute;margin-left:350px;border-radius: 15px;padding: 10px;width:100px; border:none;text-align: center;"href="login">LOGIN </a> 
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Registration</h3>
							</div>
							<p>Please fill with your details</p>

							
							<div class="">
								<div class="form-holder">
									<input type="text" placeholder="Name" name="name" class="form-control">
								</div>
							
							</div>
							<div class="">
								<div class="form-holder">
									<input type="text" placeholder="Your Email" name="email"class="form-control">
								</div>
								<div class="form-holder">
									<input type="password" placeholder="Password" name="password" class="form-control">
								</div>
							</div>
							<div class="">
								<div class="form-holder">
									<input type="TEXT" placeholder="Phone Number"name="phoneno" class="form-control">
								</div>
								<div class="form-holder" style="align-self: flex-end; transform: translateY(4px);">
									
								</div>
							</div>
							<div class="checkbox-circle mt-24">
								<label>
									<input type="checkbox" name="checkbtn" checked>  Please accept <a href="#">terms and conditions ?</a>
									<span class="checkmark"></span>
								</label>
							</div>
							<div>
								<input type="submit"style="background:#cbebad;position:absolute;left:55%;border-radius: 15px;padding: 10px;width:100px;border:none;">
							</div>
						</div>
					</div>
                </section>
			 </div>
					</div>
                </section>
            </form>
		</div>

		<!-- JQUERY -->
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
		<script src="js/main.js"></script>
</body>
</html>
