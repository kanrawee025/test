<?php
    $conn = mysqli_connect("localhost", "root", "api");
    $response = array();
    if($conn){
        $sql = "select * from user";
        $result = mysqli_query($con,$sql);
        if($result){
            $x = 0;
            while ($row = mysql_fetch_assoc($result)){
                $response[$x]['id'] = $row['id'];
                $response[$x]['name'] = $row['name'];
                $response[$x]['age'] = $row['age'];
                $respomnse[$x]['email'] = $row['email'];
                $x++;
            }
            echo
        }
    }