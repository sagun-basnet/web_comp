<?php
    require('../connect.php');
    @$tid=$_GET['tid'];

    $sql="delete from `teacher` where tid=$tid";

    $result=mysqli_query($conn,$sql);
    header('location:DisplayTeacher.php');
?>