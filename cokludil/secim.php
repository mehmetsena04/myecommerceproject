<?php
session_start();
$GelenDilSecimi = $_GET['DilSecimi'];
$_SESSION['SiteDili'] = $GelenDilSecimi;
header("location:index.php");
exit();



?>