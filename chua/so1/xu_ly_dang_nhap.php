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
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'admin' & $password == 'admin'){
            $_SESSION['username'] = 'admin';
            header('Location: trang_chu.php');
        }else{
            header('Location: error.php');
        }
    ?>
</body>
</html>