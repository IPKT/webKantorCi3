<?php
session_set_cookie_params(0);
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } ;
if(empty($_SESSION['NIP']) && empty($_SESSION['Statuspengguna']))
{
echo "<script>
		alert('Anda harus login');location.href='index.html';
		</script>";
}
?>