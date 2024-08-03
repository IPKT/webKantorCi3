<?php
	error_reporting(0);
	$mysqli = mysqli_connect("localhost","root","","bmkg_petir") or die ("Database tidak terkoneksi");
	mysqli_query($mysqli);
?>