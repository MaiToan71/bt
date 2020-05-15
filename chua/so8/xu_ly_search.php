<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost', 'root','','de2');

    if(!$conn){
        die("Connection failed:").mysqli_connect_error();
    }

    $get_name = $_GET['name'];

    $sql = "SELECT * FROM search Where Name like '%$get_name%' ";

    $sql = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($sql);

    if($num>0 && $get_name !== ''){
        echo 'kq:';
        echo '<table border="1" cellspacing="0" cellpadding="10">';
        while($row = mysqli_fetch_assoc($sql)){
            echo '<tr>';
                echo "<td>{$row['id']} </td>";
                echo "<td>{$row['Name']} </td>";
                echo "<td>{$row['Age']} </td>";
                echo "<td>{$row['Address']} </td>";
            echo '</tr>';
        }
        echo '</table>';
    }
    else{
        echo "khong tim thay";
    }

?>

sech
</body>
</html>
