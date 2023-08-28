<?php
require_once("baglan.php");
unset($_SESSION("kullaniciadi"));
session_destroy();
header("Location:index.php");
exit();

?>