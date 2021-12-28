<!doctype html>
<html lang="en">


<!-- Mirrored from creatantech.com/demos/codervent/laravel-vertical/authentication-signin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 01:25:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ asset('') }}">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Dashtreme - Multipurpose Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme1">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="assets/images/logo-img.png" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign in</h3>
										<p>Don't have an account yet? <a href="authentication-signup.html">Sign up
												here</a>
										</p>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-light" href="javascript:;"> <span
												class="d-flex justify-content-center align-items-center">
												<img class="me-2" src="assets/images/icons/search.svg" width="16"
													alt="Image Description">
												<span>Sign in with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-light"><i
												class="bx bxl-facebook"></i>Sign in with Facebook</a>
									</div>
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
										<hr />
									</div>
									<div class="form-body">
										<form class="row g-3">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control" id="inputEmailAddress"
													placeholder="Email Address">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter
													Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0"
														id="inputChoosePassword" value="12345678"
														placeholder="Enter Password"> <a href="javascript:;"
														class="input-group-text bg-transparent"><i
															class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox"
														id="flexSwitchCheckChecked" checked>
													<label class="form-check-label"
														for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end"> <a
													href="authentication-forgot-password.html">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-light"><i
															class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr />
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			</ul>
		</div>
	</div>
	<!--end switcher-->


	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>

	<script>
		$(".switcher-btn").on("click", function () {
			$(".switcher-wrapper").toggleClass("switcher-toggled")
		}), $(".close-switcher").on("click", function () {
			$(".switcher-wrapper").removeClass("switcher-toggled")
		}),


			$('#theme1').click(theme1);
		$('#theme2').click(theme2);
		$('#theme3').click(theme3);
		$('#theme4').click(theme4);
		$('#theme5').click(theme5);
		$('#theme6').click(theme6);
		$('#theme7').click(theme7);
		$('#theme8').click(theme8);
		$('#theme9').click(theme9);
		$('#theme10').click(theme10);
		$('#theme11').click(theme11);
		$('#theme12').click(theme12);
		$('#theme13').click(theme13);
		$('#theme14').click(theme14);
		$('#theme15').click(theme15);


		function theme1() {
			$('body').attr('class', 'bg-theme bg-theme1');
		}

		function theme2() {
			$('body').attr('class', 'bg-theme bg-theme2');
		}

		function theme3() {
			$('body').attr('class', 'bg-theme bg-theme3');
		}

		function theme4() {
			$('body').attr('class', 'bg-theme bg-theme4');
		}

		function theme5() {
			$('body').attr('class', 'bg-theme bg-theme5');
		}

		function theme6() {
			$('body').attr('class', 'bg-theme bg-theme6');
		}

		function theme7() {
			$('body').attr('class', 'bg-theme bg-theme7');
		}

		function theme8() {
			$('body').attr('class', 'bg-theme bg-theme8');
		}

		function theme9() {
			$('body').attr('class', 'bg-theme bg-theme9');
		}

		function theme10() {
			$('body').attr('class', 'bg-theme bg-theme10');
		}

		function theme11() {
			$('body').attr('class', 'bg-theme bg-theme11');
		}

		function theme12() {
			$('body').attr('class', 'bg-theme bg-theme12');
		}

		function theme13() {
			$('body').attr('class', 'bg-theme bg-theme13');
		}

		function theme14() {
			$('body').attr('class', 'bg-theme bg-theme14');
		}

		function theme15() {
			$('body').attr('class', 'bg-theme bg-theme15');
		}
	</script>
</body>


<!-- Mirrored from creatantech.com/demos/codervent/laravel-vertical/authentication-signin by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Apr 2021 01:25:53 GMT -->

</html>