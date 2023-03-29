<?php
    include '../connect.php';
    if(isset($_GET['deleteid'])){
        $fid = $_GET['deleteid'];

        $sql="DELETE FROM `faculty` WHERE id='$fid'";
        mysqli_query($conn,$sql);
        header('location:addFaculty');
    }
?>