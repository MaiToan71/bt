<?php
    $conn = mysqli_connect('localhost', 'root', '', 'de2');
    if(!$conn){
        die("connection failed:").mysqli_connect_error();
    }
    $search =$_GET['txtName'];

    $query = "SELECT * FROM search WHERE  Name like '%$search%' ";

    $sql= mysqli_query($conn, $query);

    $num = mysqli_num_rows($sql);

    if($num>0 && $search !== ''){
        echo "kq: ";
        echo '<table border="1" cellspacing="0" cellpadding="10">';
        while ($row = mysqli_fetch_assoc($sql)) {
            echo '<tr>';
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['Name']}</td>";
                echo "<td>{$row['Age']}</td>";
                echo "<td>{$row['Address']}</td>";
              
            echo '</tr>';
        }
        echo '</table>';
         } 
             else {
                    echo "Khong tim thay ket qua!";
                }
    

?>