<?php
    include('db_config.php');
    if($_SERVER['REQUEST_METHOD']==="POST"){
        $id=$_POST['btn'];
       $sql="DELETE FROM student WHERE ID='$id'";
       $result=$conn->query($sql);
    }
    header('location:student.php');
?>