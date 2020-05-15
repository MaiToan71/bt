<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <?php
        $conn = mysqli_connect('localhost', 'root','', 'de2');

        if(!$conn){
            die("connection failed:").mysqli_connect_error();
        }

        $query = "SELECT * FROM search";

        $sql = mysqli_query($conn, $query);

    ?>
        <table>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Delete</th>
            </tr>
           
            <?php
                while( $row = mysqli_fetch_assoc($sql)){
    
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Age']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('xoa khong?');">Delete</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </form>
    
</body>
</html>