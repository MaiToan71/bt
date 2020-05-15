<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $id=$_GET['id'];

     $conn = mysqli_connect('localhost','root','','de2');
     if(!$conn){
         die("connection failed:").mysqli_connect_error();

     }
     
     $query = "SELECT * FROM  book WHERE id=".$id;

     $sql = mysqli_query($conn,$query);
     $row = mysqli_fetch_assoc($sql);

    ?>
    <form action="xu_ly.php" method="post">
        id: <input type="text" name="id" value="<?php echo $row['id']; ?>"> <br>
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"> <br>
        Price: <input type="text" name="price" value="<?php echo $row['price']; ?>"> <br>
        Author: <input type="text" name="author" value="<?php echo $row['author']; ?>"> <br>
        <input type="submit" value="Update"> <br>
    </form>
</body>
</html>