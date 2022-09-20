<?php
    include('db_config.php');
        $sql="SELECT * FROM student";
        $result=$conn->query($sql);
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
        <form class='m-4' action="save_student.php" method="POST">
            <h1>Student Records</h1>
            <label for="name" class="form-label fw-bold">Name:</label>
            <input type="text" class="form-control  mb-2" name="name" placeholder="enter the student name...">
            <label for="faculty" class="form-label fw-bold">Faculty:</label>
            <input type="text" class="form-control" name="faculty" placeholder="enter the faculty...">
            <button type="submit" name="store" class="btn btn-primary mt-4">ADD</button>
        </form>
        <table class="table m-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Faculty</th>
      <th scope="col">Edit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        while($row=$result->fetch_assoc()){?>
            <tr>
            <th scope="row"><?php echo $row['ID']?></th>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Faculty']?></td>
            <form action="update.php" method="POST">
            <td><button type="submit" name="btn" class="btn btn-success" value="<?=$row['ID']?>">Update</button></td>
            </form>
            <form action="delete.php" method="POST">
            <td><button type="submit" name="btn" class="btn btn-danger" value="<?=$row['ID']?>">Delete</button></td>
            </form>
          </tr>
       <?php } ?>
  </tbody>
</table>  
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>