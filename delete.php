<?php
    include('db_conn.php');
    if(isset($_GET['dlt_id'])){
        $id = $_GET['dlt_id'];
        $sql = "DELETE FROM `student` WHERE s_id = $id";

        $delete = mysqli_query($conn, $sql);
        if($delete){
            header('location:read.php');
        }
        else{
            echo "Failed";
        }
    }
?>