<?php
require_once 'connection.php';
if(!isset($_GET['id'])){
    header("location:index.php");
}
$id = $_GET['deleteid'];
$sql = mysqli_query($connection,
        "update records set is_deleted=1 where user_id='{$id}'")
        or died(mysqli_error($connection));
        
        if($sql)
        {
            echo "<script>alert('Record Deleted');window.location='index.php';</script>";
        }
?>