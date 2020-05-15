<?php
$conn = mysqli_connect('localhost', 'root','', 'de2');

if(!$conn){
    die("connection failed:").mysqli_connect_error();
}

$get_id = $_GET['id'];

$query = "DELETE FROM search where id=".$get_id;

mysqli_query($conn, $query);

header('Location: xu_ly_delete.php');
?>