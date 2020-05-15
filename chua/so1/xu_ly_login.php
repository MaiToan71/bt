<?php
session_start();

$conn = mysqli_connect('localhost','root','','de2');

$userid = $_POST['userid'];
$password = $_POST['passwd'];

$query = "SELECT * FROM login WHERE username ='".$userid."' and password ='".$password."' ";

$sql = mysqli_query($conn, $query);

if (mysqli_num_rows($sql) == 0) {
    echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.";
    exit;
}

$row = mysqli_fetch_assoc($sql);

if($password !== $row['password']){
    echo "sai mk";
    exit;
}

$_SESSION['username']=$userid;
header('Location: trang_chu.php');
die();

?>