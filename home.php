<?php
session_start();
error_reporting(0);
?>
<html>
<head>
<title>User Authentication System</title>
<script src="linksfunctionality.js"></script>
</head>
<body>
<?php
if($_SESSION["username"]) {
?>
Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?>.  <button id="logout" onclick="myFunction2()" type="button">Logout</button>   
<?php
}else header("Location:index.php");
?>
</body>
</html>