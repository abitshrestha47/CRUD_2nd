<?php
    include('db_config.php');
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST['name'];
        $faculty=$_POST['faculty'];
        $sql="INSERT INTO student(Name,Faculty) VALUES ('$name','$faculty')";
        $result=$conn->query($sql);
    }
    header('location:student.php');
?>