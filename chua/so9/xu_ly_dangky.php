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

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query = "INSERT INTO doctor(name, email, address) VALUES ('".$name."','".$email."', '".$address."') " ;
    
    $sql = mysqli_query($conn, $query);
    if ($sql) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $query2 = "SELECT*FROM doctor" ;
      $sql2 = mysqli_query($conn, $query2);
?>
    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Address</td>
        </tr>

        <?php 
       
            while($row = mysqli_fetch_assoc($sql2)){        
        ?>

        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['address'] ?></td>
        </tr>
        
        <?php
            
        }
        ?>
    </table>
    
</body>
</html>
