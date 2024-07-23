<?php 
$server = "localhost";
$user = "root";
$password = "";
$db = "nisha_contact";

$conn = mysqli_connect($server, $user, $password, $db);

if($conn){
    echo "<h1>Database connected successfully</h1>";
}else{
    echo "Error in DataBase";
};
?>
