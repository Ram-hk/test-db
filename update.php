<?php
        include "db_config.php";
               


            if (isset($_POST['update'])) {
                $id = $_GET['id'];
                $name = $_POST['userName'];
                $mobile = $_POST['userMobile'];

                $sql = "UPDATE `student_test` SET `name`='$name',`mobile`='$mobile' WHERE `id`= $id";

                $result = mysqli_query($conn, $sql);
                if ($result) {
                    header('location: index.php?msg=Record Updated successfull');
                } else {
                    echo "<p class='text-danger'>failed to insertion</br>";
                }
            }
        
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP CRUD application</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar justify-content-center nav-light">update  user</nav>
    <div class="container ">
        <h1> Update Existing User</h1>
        <?php 
            $id = $_GET['id'];
            $sql_query = "SELECT * FROM student_test WHERE id=$id LIMIT 1";
            $result12 = mysqli_query($conn,$sql_query);
            $row = mysqli_fetch_assoc($result12);
        
        ?>
        <form action="" method="post">
            <div class="row">
                <div class="form-group mb-3 col">
                    <label for="userName" class="form-label">name</label>
                    <input type="text" class="form-control" name="userName" value="<?php echo $row['name'] ?>" required>

                </div>
                <div class="form-group mb-3 col">
                    <label for="userMobile" class="form-label">mobile</label>
                    <input type="test" class="form-control" name="userMobile" value="<?php echo $row['mobile'] ?>" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name="update">update</button>
            <a href="index.php" class="btn btn-danger">cancel</a>
        </form>
       
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>