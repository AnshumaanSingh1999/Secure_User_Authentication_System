<?php
session_start();
error_reporting(0);
$uname = $_POST['uname2'];
$pass = $_POST['pass2'];
if($uname && $pass){
$db_connection = mysqli_connect("localhost", "root", "", "user_authentication_system");
		$username = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $uname)));
		$password = htmlspecialchars(strip_tags(mysqli_real_escape_string($db_connection, $pass)));
    $_POST = array();
		$query = "SELECT * FROM details WHERE username = '" . $username. "' AND password = '" . $password . "'"; 
$result = mysqli_query($db_connection,$query);
$row = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["username"] = $row['username'];
} 
else {
$msg = "Invalid Username or Password.";
echo "<meta http-equiv='refresh' content='2'>";

}
if(isset($_SESSION["username"])) {
header("Location:home.php");
}
}
?>