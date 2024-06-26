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
	</head>
	<body>
		<div class="wrapper">
            <form action="shop" method="any" >
                @csrf
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
                        <div class="image-holder" style="height: 374px">
							<img src="img/form-wizard-1.jpg" alt="">
						</div>
                        <div style="padding: 5px">
                            <a  style="background:#cbebad;position:absolute;margin-left:300px;border-radius: 15px;padding: 10px;width:100px; border:none;text-align: center;"href="register">SIGN UP</a> 
                        </div>
						<div class="form-content" >
                            <div class="form-header">
                                <h3>LOGIN</h3>
							</div>
							<div >
                                <div class="form-holder" style="padding-bottom: 30px;padding-top: 30px;">
									<input type="text" placeholder="Your Email" name="email" class="form-control">
								</div>
								<div class="form-holder">
									<input type="password" placeholder="Password" name="password" class="form-control">
								</div>
							
							<div style="padding-top: 50px;">
								<input type="submit"style="background:#cbebad;position:absolute;left:55%;border-radius: 15px;padding: 10px;width:100px;">
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
