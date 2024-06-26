<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

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
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder" style="height: 374px">
							<img src="img/form-wizard-1.jpg" alt="">
						</div>
                        <div style="padding: 5px">
                            <a  style="background:#cbebad;position:absolute;margin-left:300px;border-radius: 15px;padding: 10px;width:100px; border:none;text-align: center;"href="register_">SIGN UP</a> 
                        </div>
						<div class="form-content" >
                            <div class="form-header">
                                <h3>LOGIN</h3>
							</div>
							<div >
                                <div class="form-holder" style="padding-bottom: 30px;padding-top: 30px;">
									<input type="text" placeholder="Your Email" name="email" id="email" class="form-control">
								</div>
								<div class="form-holder">
									<input type="password" placeholder="Password" name="password" id="password" class="form-control">
								</div>
							
							<div style="padding-top: 50px;">
								<input id="submit" type="submit"style="background:#cbebad;position:absolute;left:55%;border-radius: 15px;padding: 10px;width:100px;">
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
			$('#submit').click(function(){
				var email=$('#email').val();
				var password=$('#password').val()
				
				
			if(email=="" || password==""){
				alert("please filled all the data");
				return false
			}
			
				$.ajax({
					type: "post",
					url: "/logined",
					data:{
						'email':email,
						'password':password,
						_token:"{{csrf_token()}}"
					},
						success: function(data) {
							if(data.status == 200){
							window.location.href = "home";
							alert("Successfully LoggedIn");
				}else{
					alert(data.message);
				}
			}
				});
				
				 
		});
		</script>
</body>
</html>
