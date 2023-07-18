<?php
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server,$username, $password);
if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}

echo "Connection established successfully.";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO `portfolio`.`portfoliodata` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";
echo $sql;
?>
