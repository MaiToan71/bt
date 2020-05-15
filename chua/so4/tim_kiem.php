<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Search customer information!</h1>
    <form action="tim_kiem_ten.php" method="get" name="myform" onsubmit= "return validateForm()">
        Name: <input type="text" name="txtName"> <input type="submit" value="Search">
    </form>
</body>
<script>
    function validateForm(){
        var input = document.forms['myform']['txtName'].value;
        if(input == ''){
            alert("chua nhap");
            return false;
        }
    }
</script>

</html>