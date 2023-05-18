<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- boothsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font-awseome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PHP CRUD Application</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5 bg-primary bg-gradient text-white">
        PHP complete CRUD application
    </nav>

    <div class="container">
        <?php
            if(isset($_GET['msg'])){
                $msg = $_GET['msg'];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                '.$msg.';
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div> ';
            }
        ?>
        <a href="add.php" class="btn btn-dark mb-3">ADD New</a>

    <table class="table table-hover text-center">
        <!-- headline -->
        <thead class="table-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>
            </tr>
        </thead>

        <!-- list start -->
    <tbody>
        <?php
            include("db_conn.php");
            $sql = "SELECT * FROM `crud`";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                ?>
        <tr>
            <th><?php echo $row['id'] ?></th>
            <th><?php echo $row['first_name'] ?></th>
            <th><?php echo $row['last_name'] ?></th>
            <th><?php echo $row['email'] ?></th>
            <th><?php echo $row['gender'] ?></th>

            <!-- <td>Mark</td>
            <td>Otto</td>
            <td>name@gmail.com</td>
            <td>male</td> -->
            <td>
                <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>

            </tr>
        <tr>


                <?php
            }
        ?>
    </tbody>
    </table>

    </div>

<!-- boothsrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>