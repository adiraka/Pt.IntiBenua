<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PT. INTI BENUA PERKASATAMA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/style.css">
	<script src="asset/js/jquery.min.js"></script>
</head>
<body class="login-page">
	<div class="jumbotron text-center login-tron">
		<h2>PT. INTI BENUA PERKASATAMA</h2>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
					<p class="login-text">
						Login first to start a new session :
					</p>
				</div>
			</div>
			<div class="row text-left">
				<div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
					<div class="panel panel-default">
						<div class="panel-body">
							<form action="incl/login.php" role="form" method="post">
								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" class="form-control" name="username" id="username">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" name="password" id="password">
								</div>
								<div class="form-group login-btn">
									<button class="btn btn-default btn-block">LOGIN</button>
								</div>
							</form>
						</div>
						<div class="panel-footer text-right">
							2016 @ Allright Reserved
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>