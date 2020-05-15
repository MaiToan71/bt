<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="xu_ly_tim_kiem.php" method="get" name="myform" onsubmit="return validateForm()">
        Form: <input type="number" name="start">TO: <input type="number" name="end"> <input type="submit" value="Search">
    </form>
    <script>
        function validateForm(){
            var start = document.forms['myform']['start'].value;
            if(start==''){
                alert("chua nhap so bat dat");
                return false;
            }

            var end = document.forms['myform']['end'].value;
            if(end==''){
                alert("chua nhap so ket thuc");
                return false;
            }
        }
    </script>
</body>
</html>