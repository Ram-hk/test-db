<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PHP CRUD application</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
    </head>
    <body>
        <nav class="navbar justify-content-center nav-light">Add new user</nav>
        <div class="container ">
            <h1> Add New User</h1>
            <form action="" method="post">
                <div class="row"><div class="form-group mb-3 col">
                  <label for="userName" class="form-label">name</label>
                  <input type="text" class="form-control" name="userName" aria-describedby="userName" required>                 

                </div>
                <div class="form-group mb-3 col">
                  <label for="userMobile" class="form-label">mobile</label>
                  <input type="test" class="form-control" name="userMobile" required>
                </div></div>
                
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <a href="index.php" class="btn btn-danger">cancel</a>
              </form>            
       </div>

            <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
<?php
include "db_config.php";
if ($conn) {
   

 if(isset($_POST['submit']))
{
   $name = $_POST['userName'];
   $mobile = $_POST['userMobile'];

    $sql="insert into student_test(name,mobile) values('$name','$mobile')";
   
    $result = mysqli_query($conn,$sql);
   if ($result) {
      header('location: index.php?msg=New record inserted successfull');
   }
   else {
      echo "<p class='text-danger'>failed to insertion</br>";
   }
}}
?>