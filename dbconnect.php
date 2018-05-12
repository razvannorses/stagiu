<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'divisibility';
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
    die("erro in connection");
}
echo "connect succesfull";
mysqli_close($conn);
?>