<?php
    include('db_conn.php');

    if(isset($_POST['submit'])){
        $dept = $_POST['dept'];
        $name = $_POST['name'];
        $nid = $_POST['nid'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];

        $sql = "INSERT INTO `student`(`dept`, `name`, `nid`, `birth`, `address`)
                VALUES ('$dept','$name','$nid','$dob','$address')";

        $insert = mysqli_query($conn, $sql);

    if($insert){
        header('location:read.php');
    }
    else{
        echo "Error in Insertion";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>CRUD Operation</title>
</head>
<body>
    <div class="container my-5">
        <form method="POST">
            <div class="mb-3">
                <label for="DEPT" class="form-label">DEPT</label>
                <input type="text" class="form-control" name="dept">
            </div>
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="NID" class="form-label">NID</label>
                <input type="text" class="form-control" name="nid">
            </div>
            <div class="mb-3">
                <label for="DOB" class="form-label">DOB</label>
                <input type="date" class="form-control" name="dob">
            </div>
            <div class="mb-3">
                <label for="Address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>