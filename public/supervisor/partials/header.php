<?php 
	session_start();
	if (empty($_SESSION["idkaryawan"])) {
		header("location:../../index.php");
	}

	if ($_SESSION["hakakses"] == 1) {
		echo '<script>window.location.replace("../webmaster/index.php");</script>';
	} else if ($_SESSION["hakakses"] == 3) {
		echo '<script>window.location.replace("../karyawan/index.php");</script>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PT.IBP | WEBMASTER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../asset/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="../../asset/css/datatables.min.css">
	<link rel="stylesheet" href="../../asset/css/style.css">
	<script src="../../asset/js/jquery.min.js"></script>
</head>
<body class="conten">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><b>PT. IBP</b></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
					<li><a href="profil.php">PROFIL</a></li>
					<li><a href="ubah-password.php">UBAH PASSWORD</a></li>
					<li><a href="lihat-tema-tbt.php">TEMA TBT</a></li>
					<li><a href="../../incl/logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
				</ul>
			</div>
		</div>
	</nav>