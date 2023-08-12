<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";
$con = mysqli_connect($server,$username,$password,$dbname);
if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}

echo "Connection established successfully.";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO `portfoliodata` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message');";
echo $sql;
echo "<br><br>";
echo "The following message has been recorded";
echo "<br>";
echo "Name  : $name <br>";
echo "Email  : $email <br>";
echo "Message  : $message <br>";
echo "<br>";
if($con->query($sql)==true){
    echo "Submitted Successfully";
}        
else{
    echo "ERROR $sql <br> $con->error"; 
}
$con->close();
?>
