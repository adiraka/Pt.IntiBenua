<?php 
	session_start();
	session_unset();
	session_destroy();
	echo '<script>alert("Terima kasih telah menggunakan aplikasi ini dengan baik !");window.location.replace("../index.php");</script>';
?>