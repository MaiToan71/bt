<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'de2';

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn){
        die("connection fail:").mysqli_connect_error();
    }
    

    $user = $_POST['txtusername'];
    $pass = $_POST['txtpassword'];
   

    $query = mysqli_query($conn,"SELECT * FROM login WHERE username='".$user. "' and password='".$user."' ");
    if (mysqli_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại.";
        exit;
    }
    $row = mysqli_fetch_array($query);

    if ($pass != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại.";
        exit;
    }

    $_SESSION['username'] = $user;
    echo "Xin chào " . $user . ". Bạn đã đăng nhập thành công.";
    die();
     
   
?>
</body>
</html>