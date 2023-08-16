
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
echo "<h2>The following message has been recorded</h2>";
echo "<br>";
echo "<h3>Name  : $name</h3>";
echo "<h3>Email  : $email</h3>";
echo "<h3>Message  : $message</h3>";
echo "<br>";
if($con->query($sql)==true){
    echo "<h3>Submitted Successfully</h3>";
}        
else{
    echo "ERROR $sql <br> $con->error"; 
}
$con->close();
?>
