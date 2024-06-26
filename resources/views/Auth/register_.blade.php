<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
		<title>Essence - Fashion Ecommerce Template</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!-- Favicon  -->
		<link rel="icon" href="img/core-img/favicon.ico">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/stylenew.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		
	</head>
	<body>
		
		<div class="wrapper">
				
        		<!-- SECTION 1 -->
                <section>
					<div style="margin-bottom:50px;width:700px;">
						{{$errors}}
									@if(session()->has('message'))
									<div class="alert alert-success">
										{{ session()->get('message') }}
									</div>
								@endif
					</div>
					<div class="inner">
						<div class="image-holder">
							<img src="img/form-wizard-1.jpg" alt="">
						</div>
						<div style="padding: 5px">
							<a  style="background:#cbebad;position:absolute;margin-left:350px;border-radius: 15px;padding: 10px;width:100px; border:none;text-align: center;"href="login_">LOGIN </a> 
						</div>
						<div class="form-content">
							<div class="form-header">
								<h3>Registration</h3>
							</div>
							<p>Please fill with your details</p>

							
							<div class="">
								<div class="form-holder">
									<input type="text" id="name" placeholder="Name" name="name" class="form-control"onkeypress='validate1(event)'>
								</div>
							
							</div>
							<div class="">
								<div class="form-holder">
									<input type="text" id="email" placeholder="Your Email" name="email"class="form-control">
								</div>
								<div class="form-holder">
									<input type="password" id="password" placeholder="Password" name="password" class="form-control">
								</div>
							</div>
							<div class="">
								<div class="form-holder">
									<input type="TEXT" id="phoneno" placeholder="Phone Number"name="phoneno" class="form-control"onkeypress='validate(event)'>
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
								<input id="submit" type="submit"style="background:#cbebad;position:absolute;left:55%;border-radius: 15px;padding: 10px;width:100px;border:none;">
							</div>
						</div>
					</div>
                </section>
			 </div>
					</div>
                </section>
		</div>

		<!-- JQUERY -->
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
		<script src="js/main.js"></script>
		<script>
			

		//email validation
            $("#submit").click(function() {
           var email= $("#email").val()
           var regex2 = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                 if(!email.match(regex2))
                    {
						return false;
                    alert("enter email properly")
                }
			});

			//password validation
			$("#password").keyup(function() {
					var maxChars = 10;
					if ($(this).val().length > maxChars) {
						$(this).val($(this).val().substr(0, maxChars));
						
						alert("This field can take a maximum of 10 characters");
					}
			});

			//phone number validation
			$("#phoneno").keyup(function() {
					var maxChars = 10;
					if ($(this).val().length > maxChars) {
						$(this).val($(this).val().substr(0, maxChars));
						
						alert("This field can take a maximum of 10 characters");
					}
			});




				// phone input validation using keypress
				function validate(evt) {
				var theEvent = evt || window.event;

				// Handle paste
				if (theEvent.type === 'paste') {
					key = event.clipboardData.getData('text/plain');
				} else {
				// Handle key press
					var key = theEvent.keyCode || theEvent.which;
					key = String.fromCharCode(key);
				}
				var regex=/^[0-9]+$/;
				if( !regex.test(key) ) {
					theEvent.returnValue = false;
					if(theEvent.preventDefault) theEvent.preventDefault();
				}
				}



				// name input validation using keypress

				function validate1(evt) {
				var theEvent = evt || window.event;

				// Handle paste
				if (theEvent.type === 'paste') {

					key = event.clipboardData.getData('text/plain');
				} else {
				// Handle key press
					var key = theEvent.keyCode || theEvent.which;
					key = String.fromCharCode(key);
				}
				var regex=/^[a-zA-Z ]+$/;
				if( !regex.test(key) ) {
					theEvent.returnValue = false;
					if(theEvent.preventDefault) theEvent.preventDefault();
				}
				}


				// email input validation using keypress
				// function validate2(evt) {
				// 	var theEvent = evt || window.event;
				
					
				// 	// Handle paste
				// 	if (theEvent.type === 'paste') {
				// 		key = event.clipboardData.getData('text/plain');
				// 	} else {
				// 		// Handle key press
						
				// 		var key = theEvent.keyCode || theEvent.which;
						
				// 		key = String.fromCharCode(key);
				// 	}
				// 	var regex=/^\b[A-Z0-9._]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
				// 	if( !regex.test(key)) {
				// 		theEvent.returnValue = false;
				// 		if(theEvent.preventDefault) theEvent.preventDefault();
				// 	}
				// }

		</script>

		<script>
			
			// ajax call
			$('#submit').click(function(){
				var name=$('#name').val();
				var email=$('#email').val();
				var password=$('#password').val()
				var phoneno=$('#phoneno').val()
			if(name=="" || email=="" || password=="" ||  phoneno==""){
				alert("please filled all the data");
				return false
			}		 
	$.ajax({
		type: "post",
		url: "/register_",
		data:{
			'name':name,
			'email':email,
			'password':password,
			'phoneno':phoneno,
			_token:"{{csrf_token()}}"
		},
		success: function(data) {
			if(data.code == 200){
				window.location.href = "login_";
				alert(data.message);
			}else{
				alert(data.message);
			}
			
		}
		
		});
	});
		</script>
</body>
</html>
