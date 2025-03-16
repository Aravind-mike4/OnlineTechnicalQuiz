/*
<?php
//all the variables defined here are accessible in all the files that include this one
$con= new mysqli('localhost','root','','project')or die("Could not connect to mysql".mysqli_error($con));
?>
*/


<?php
$host = "localhost";
$user = "root";
$password = ""; 
$database = "project";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
?>
