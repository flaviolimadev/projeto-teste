<html lang="en"><head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body _c_t_j1="1">

	<style type="text/css">
		.btn-google::before, .btn-face::before {
		    content: "";
		    display: block;
		    position: absolute;
		    z-index: -1;
		    width: 100%;
		    height: 100%;
		    border-radius: 10px;
		    top: 0;
		    left: 0;
		    background: #a64bf4;
		    background: -webkit-linear-gradient(
		45deg
		, #00dbde, #fc00ff);
		    background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
		    background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
		    background: linear-gradient(
		45deg
		, #4caf50, #8bc34a);
		    opacity: 0;
		    -webkit-transition: all 0.4s;
		    -o-transition: all 0.4s;
		    -moz-transition: all 0.4s;
		    transition: all 0.4s;
		}


		.focus-input100 {
		    position: absolute;
		    display: block;
		    width: calc(100% + 2px);
		    height: calc(100% + 2px);
		    top: -1px;
		    left: -1px;
		    pointer-events: none;
		    border: 1px solid #8bc34a;
		    border-radius: 10px;
		    visibility: hidden;
		    opacity: 0;
		    -webkit-transition: all 0.4s;
		    -o-transition: all 0.4s;
		    -moz-transition: all 0.4s;
		    transition: all 0.4s;
		    -webkit-transform: scaleX(1.1) scaleY(1.3);
		    -moz-transform: scaleX(1.1) scaleY(1.3);
		    -ms-transform: scaleX(1.1) scaleY(1.3);
		    -o-transform: scaleX(1.1) scaleY(1.3);
		    transform: scaleX(1.1) scaleY(1.3);
		}

		.login100-form-btn::before {
		    content: "";
		    display: block;
		    position: absolute;
		    z-index: -1;
		    width: 100%;
		    height: 100%;
		    border-radius: 10px;
		    top: 0;
		    left: 0;
		    background: #a64bf4;
		    background: -webkit-linear-gradient(
		45deg
		, #00dbde, #fc00ff);
		    background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
		    background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
		    background: linear-gradient(
		45deg
		, #8bc34a, #4caf50);
		    opacity: 0;
		    -webkit-transition: all 0.4s;
		    -o-transition: all 0.4s;
		    -moz-transition: all 0.4s;
		    transition: all 0.4s;
		}
	</style>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://multiwin.com.br/wp-content/uploads/2021/08/bg-blurred.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33" style="padding-top: 20px;">
				<form class="login100-form validate-form flex-sb flex-w" action="pag.php">
					<span class="login100-form-title p-b-53" style="padding-bottom: 20px;">
						<img src="https://multiwin.com.br/wp-content/uploads/2021/06/LOGONOEXTREMOFDP-1024x947.png" style="max-width: 20%;">
					</span>


					  
					<a id="mensal" href="#" class="btn-google m-b-20" style="width: 100%; ">
						R$ 397,00
					</a>
					<a id="anual" href="#" class="btn-google m-b-20" style="width: 100%;display: none;">
						R$ 697,00
					</a>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Nome Completo
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9" style="padding-bottom: 0px;padding-top: 10px;">
						<span class="txt1">
							CPF
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9" style="padding-bottom: 0px;padding-top: 10px;">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-31 p-b-9" style="padding-bottom: 0px;padding-top: 10px;">
						<span class="txt1">
							Contato
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
					</div>
					
					

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Finalizar compra
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Multiwin - By Ctrlser
						</span>

						
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>


	<script type="text/javascript">
		function mensal(){
			document.getElementById("mensal").style.display = "";
			document.getElementById("anual").style.display = "none";
		}

		function anual(){
			document.getElementById("mensal").style.display = "none";
			document.getElementById("anual").style.display = "";
		}


	</script>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body></html>