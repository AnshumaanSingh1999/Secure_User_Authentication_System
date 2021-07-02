<?php
session_start();
error_reporting(0);
unset($_SESSION["username"]);
header("Location:index.php");
?>
