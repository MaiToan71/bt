<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost','root','','de2');
        if(!$conn){
            die("connection failed:").mysqli_connect_error();

        }

        $query= "SELECT * FROM book";


        $sql = mysqli_query($conn,$query);

    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Author</th>
            <th>Edit</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($sql)){
        ?>
        <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['author'] ?></td>
                <td> <a href="edit.php?id=<?php echo $row['id'] ?>">edit</a> </td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>