<?php
    include("db_config.php");
    if($_SERVER['REQUEST_METHOD']==="POST"){
        if(isset($_POST['parsed'])){
            $id=$_POST['parsed'];
            $up=$_POST['update'];
            $update1=$_POST['update1'];
            $sql="UPDATE student set Name='$up',Faculty='$update1' WHERE ID='$id'";
            $result=$conn->query($sql);
            header('location:student.php');
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <form class="m-4" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <h1>Update your information</h1>
        <input type="text" class="form-control mb-3" name="update" placeholder="enter your updated value...">
        <input type="text" class="form-control" name="update1" placeholder="enter your updated value...">
        <?php
        include('db_config.php');
        if($_SERVER['REQUEST_METHOD']==="POST"){
            if(isset($_POST['btn'])){
                $id=$_POST['btn'];
            }
        }
        ?>
        <button type="submit" class="mt-3 btn btn-success" name="parsed" value="<?=$id?>">Update</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>