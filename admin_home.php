<?php
session_start();
include('dbcon.php');
if(isset($_SESSION["email"])){
    
    echo '<h3>Login Success, Welcome -Admin- '.$_SESSION["email"].'</h3>';
   
     
}
else{
    header("location:login.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
</head>
<body>
<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Project Name</th>
                <th>Description</th>
                <th>Deadline</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM user_input ";
                $statment = $conn->prepare($query);
                $statment->execute();

                $statment->setFetchMode(PDO::FETCH_OBJ);
                $result = $statment->fetchAll();
                if($result)
                {       
                    foreach($result as $row)
                    {
                         ?>
                            <tr>
                                  <td><?= $row->name; ?></td>
                                  <td><?= $row->email; ?></td>
                                  <td><?= $row->phone; ?></td>
                                  <td><?= $row->project_name; ?></td>
                                  <td><?= $row->description; ?></td>
                                  <td><?= $row->date; ?></td>
                                
                            </tr>
                         <?php
                    }
                }
                else
                {
                    ?>
                        <tr>
                            <td colspan="8">No record found</td>
                        </tr>
                    <?php
                }
            ?>
           
        </tbody>
    </table>
    <a href="logout.php" class="btn btn-danger">LogOut</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
