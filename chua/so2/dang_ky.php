<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xu_ly_dang_ky.php" method="post" id="myform" onsubmit="return validateForm()">
        <table>
            <tr>
                <td><li>Name:</li></td>
            </tr>
            <tr>
                <td><input type="text"  name="name"></td>
            </tr>
            <tr>
                <td><li>Email Address:</li></td>
            </tr>
            <tr>
                <td><input type="text" name="email_address"></td>
            </tr>
            <tr>
                <td><li>Subject:</li></td>
            </tr>
            <tr>
                <td><input type="text" name="subject"></td>
            </tr>
            <tr>
                <td><li>Your Message:</li></td>
            </tr>
            <tr>
                <td><input name="your_msg" style="height: 70px;">

                </td>
            </tr>
            <tr>
                <td><input type="submit"></td>
            </tr>
        </table>
    </form>
    <script>
        function validateForm(){
            var txtname = document.forms['myform']['name'].value;
            if(txtname == ''){
                alert("name must be filled out");
                return false
            }

            var txtMailAddress = document.forms['myform']['email_address'].value;
            if(txtMailAddress == ''){
                alert("email_address must be filled out");
                return false
            }

            var txtsubject = document.forms['myform']['subject'].value;
            if(txtsubject == ''){
                alert("subject must be filled out");
                return false
            }

            var txtyourmsg = document.forms['myform']['your_msg'].value;
            if(txtyourmsg == ''){
                alert("your_msg must be filled out");
                return false
            }

        }
    </script>
</body>
</html>