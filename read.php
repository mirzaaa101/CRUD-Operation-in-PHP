<?php
    include('db_conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add Student</a>
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl</th>
                    <th scope="col">Dept</th>
                    <th scope="col">Name</th>
                    <th scope="col">NID</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Address</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM student";
                    $select = mysqli_query($conn, $sql);

                    if($select){
                        while($row = mysqli_fetch_assoc($select)){
                            $id = $row['s_id'];
                            $dept = $row['dept'];
                            $name = $row['name'];
                            $nid = $row['nid'];
                            $dob = $row['birth'];
                            $address = $row['address'];
                            echo '
                            <tr>
                                <th scope="row">'.$id.'</th>
                                    <td>'.$dept.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$nid.'</td>
                                    <td>'.$dob.'</td>
                                    <td>'.$address.'</td>
                                    <td><button class="btn btn-primary"><a href="update.php?update_id='.$id.'" class="text-light">Update</a></button></td>
                                    <td><button class="btn btn-danger"><a href="delete.php?dlt_id='.$id.'" class="text-light">Delete</a></button></td>
                            </tr>
                            ';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>