<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'divisibility';
$primul = "";
$ultimul = "";
$iteratii = "";

$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!isset($_POST['submit'])) {
    $primul = $_POST['sinitial'];
    $ultimul = $_POST['sfinal'];
    $iteratii = $_POST['siteratii'];

    $query = "INSERT INTO numbers(first,last,iteration)VALUES ('$primul','$ultimul','$iteratii')";
    mysqli_query($conn, $query);
    header('location: index.php');
}
$results=mysqli_query($conn,"SELECT * FROM numbers");
?>
    
