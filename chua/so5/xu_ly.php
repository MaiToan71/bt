<?php
      $conn = mysqli_connect('localhost','root','','de2');
      if(!$conn){
          die("connection failed:").mysqli_connect_error();
 
      }

      $id=$_POST['id'];
      $name =$_POST['name'];
      $price =$_POST['price'];
      $author=$_POST['author'];

      $query = "UPDATE book SET name='".$name."', price='".$price."', author='".$author."'
      WHERE id='".$id."' ";
      $sql= mysqli_query($conn, $query);
      header('Location: hien_thi.php');
?>
