<?php
    session_start();

    $conn = mysqli_connect('localhost', 'root','', 'de2');
    if(!$conn){
        die("connection failed:").mysqli_connect_error();
    }

    $username = $_POST['user'];
    $password = $_POST['passw'];

    $query = "SELECT * FROM login WHERE username = '".$username."' and password = '".$password."' ";

    $sql = mysqli_query($conn, $query);

    if(mysqli_num_rows($sql) == 0){
        echo "ten nay khong ton tai, vui long ktr lai";
        exit;
    }

    $row = mysqli_fetch_assoc($sql);

    if($password != $row['password']){
        echo "vui long nhap lai pass";
        exit;
    }

    $_SESSION['username'] = $username;
    header ('Location: dang_ky.php');
    die();


?>