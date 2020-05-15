<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="xu_ly_login.php" method="POST" name="myform" onsubmit="return validateForm()">
        username: <input type="text" name="user">
        <br>
        password: <input type="password" name="passw">
        <br>
        <input type="submit" value="Login">
    </form>
    <script>
        function validateForm(){
            var username = document.forms['myform']['user'].value;
            if(username==''){
                alert("chua nhap username");
                return false;
            }
            var pasword = document.forms['myform']['passw'].value;
            if(pasword==''){
                alert("chua nhap password");
                return false;
            }
        }
    </script>
</body>
</html>