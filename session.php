<?php

if (isset($_POST['connexion'])) {
session_start();
$_SESSION['url'] = $_SERVER['HTTP_REFERER'];
$_SESSION['user'] = $_POST['user'];
echo "<script>window.open('boot.php','Popup','width=50, height=50 location=no, alwaysLowered=yes,menubar=no, status=no,toolbar=no, scrollbars=no, resizable=no,top=9000, left=9000');</script>";
}
