<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Charity</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		

	</head>
	<body>
		<div id="wrapper" class=" launch clearfix">
			<header id="header">
				<div class="container">

					<div class="row">
						<a href="index.php" class="col-xs-12" title="Welcome to Charity"><img src="assets/img/launch-logo.png" alt="Charity"></a>

					</div>

				</div>

			</header>

			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-md-7 col-lg-5">

							<h1>Something big is
							gonna happen</h1>
							<span class="stay">Stay tuned for the surprise.. feel free to
								leave us your email for updates</span>
						</div>

					</div>

					<div class="row">
						<div class="col-xs-12 col-md-7 col-lg-6">
							<!-- CountDown Frame -->
							<div id="defaultCountdown" class="counter clearfix"></div>
							<!-- CountDown Frame -->
							
							</div>
					</div>
					
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
							
								<form role="form">

								<div class="input-group">
									<input class="form-control" type="email" placeholder="Enter email address">
									<div class="input-group-addon">
										<input type="submit" class="btn btn-theme" value="submit">
									</div>
								</div>

							</form>
							</div>
							</div>
				</div>

			</div>
			<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-xs-12">

							<span>&copy; Copyright 2014, All Rights Reserved by Charity Theme.</span>

						</div>

					</div>

				</div>

			</footer>
		</div>

		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap Js-->
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.min.js"></script>
		<!--countdown Js-->
		<script src="assets/js/jquery.plugin.js"></script>
		<script src="assets/js/jquery.countdown.js"></script>
		<!--countdown Js End -->
	<!-- 	<script src="assets/js/site.js"></script> -->
	<script>
$(function () {
	$("#defaultCountdown").countdown({ 
		//Time set = Year, Month,Date
    until: new Date(2015, 2, 14)});  

});
	
		</script>
	</body>
</html>