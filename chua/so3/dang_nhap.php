<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOGIN!!</h1>
    <form action="xy_ly_dang_nhap_1.php" method="post" name="myform" onsubmit="return validateForm()">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="txtusername"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="txtpassword"></td>
            </tr>
            <td>
                <td></td>
                <td><input type="submit"></td>
            </td>
        </table>
    </form>
    <script>
        function validateForm(){
            var username = document.forms['myform']['txtusername'].value;
            if(username==''){
                alert("username khong de trong");
                return false;
            }

            var password = document.forms['myform']['txtpassword'].value;
            if(password==''){
                alert('password khong de trong');
                return false;
            }
        }
    </script>
</body>
</html>