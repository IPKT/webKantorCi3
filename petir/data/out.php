<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    };
	unset($_SESSION['NIP']);
	session_destroy();
	echo "<script>
		location.href='../index.html';
		</script>";
?>