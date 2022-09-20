<?php
    $conn=new mysqli('localhost:47','root','','student_rec');
    if($conn->connect_error){
        die($conn->connect_error);
    }
    // echo "success";
?>