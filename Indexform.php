<?php
if(isset($_POST['name'])) {
$servername = "localhost";
$username = "root";
$password = "";

//Create connection
$con = mysqli_connect($servername, $username, $password, "trip");

// check connection
if(!$con){
    die("connecton to this database failed due to" . mysqli_connect_error());

}
//echo "success connecting to the database";



// database connection

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];


$sql="INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', CURRENT_TIMESTAMP)";

//echo $sql;

if($con->query($sql) ==true){
    echo "successfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}

}
$con->close();
//mysqli_close($con);

?>