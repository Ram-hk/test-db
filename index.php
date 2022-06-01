<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD application</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Data Tables -->


</head>

<body>
    <nav class="navbar justify-content-center nav-light fs-3 mb-5" style="background-color:#CFF4AC ;">Complete PHP CRUD operation</nav>
    
    <div class="container">
    <?php
        if (isset($_GET['msg'])) {

            $msg = $_GET['msg'];
            
        echo 
        
        "<div class='alert alert-warning alert-dismissible fade show' role='alert'>"
        .$msg."
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    
    }
    ?>  
        <p class="text-primary">To insert data click this button</p>
        <a href="insert_data.php" class="btn btn-primary">Add</a><br><br>

        <table class="table table-striped table-hover text-center" id="datatable">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Action</th>
                </tr>

            </thead>
            <tbody>
                <?php
                include "db_config.php";
                if ($conn) {
                    $sql = "select * from student_test";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr class="">
                                <td scope="row"><?php echo $row['id']; ?></td>
                                <td scope="row"><?php echo $row['name']; ?></td>
                                <td scope="row"><?php echo $row['mobile']; ?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa fa-edit fs-5 me-3"></i></a>
                                    <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa fa-archive fs-5 me-3"></i></a>
                                </td>
                            </tr>

                <?php  }
                    }
                } ?>




            </tbody>
        </table>
    </div>



    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- dataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</body>

</html>