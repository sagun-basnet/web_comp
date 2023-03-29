<?php
    session_start(); // start a new session or resume an existing one

    if(!isset($_SESSION['uname']) || !isset($_SESSION['pass']) || !isset($_SESSION['type'])){
      // if the user is not logged in, redirect to the login page
      header("Location: main.php");
      exit();
    }
?>
<?php
    include '../connect.php';
    if(isset($_GET['deleteid'])){
        $fid = $_GET['deleteid'];

        $sql="DELETE FROM `faculty` WHERE id='$fid'";
        mysqli_query($conn,$sql);
        header('location:addFaculty');
    }
?>