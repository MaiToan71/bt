<?php
    $conn = mysqli_connect('localhost','root','','de2');

    if(!$conn){
        die("connection failed:").mysqli_connect_error();
    }

    $numStart = $_GET['start'];
    $numEnd = $_GET['end'];

    $query = "SELECT * FROM search  WHERE Age > '".$numStart."' and Age < '".$numEnd."'  ";

    $sql = mysqli_query($conn, $query);

    $num = mysqli_num_rows($sql);

    if($num>0  && $numStart !== '' && $numEnd !==''){
        echo 'kq';
        echo '<table border="1" cellspacing="0" cellpadding="10">';
        while($row = mysqli_fetch_assoc($sql)){
            echo '<tr>';
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['Name']}</td>";
                echo "<td>{$row['Age']}</td>";
                echo "<td>{$row['Address']}</td>";
          
            echo '</tr>';
        }
        echo '</table>';
    }else{
        echo "khong tim thay";
    }


?>