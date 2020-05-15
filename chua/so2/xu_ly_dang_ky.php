<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'de2';

    $conn =  mysqli_connect($servername, $username,$password,$db);

    if(!$conn){
        die('Connection failed:').mysqli_connect_error();
    }

    $name = $_POST['name'];
    $email = $_POST['email_address'];
    $subject = $_POST['subject'];
    $msg = $_POST['your_msg'];

    $sql = "INSERT INTO dangky(name,emai, subject, message) VALUES ('".$name."','".$email."','".$subject."', '".$msg."' )";
    if(mysqli_query($conn, $sql) == TRUE){
       header('Location: trang_chu.php');
    }else{
        echo "error".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
?>