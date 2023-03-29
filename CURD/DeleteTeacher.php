<?php
    session_start(); // start a new session or resume an existing one

    if(!isset($_SESSION['uname']) || !isset($_SESSION['pass']) || !isset($_SESSION['type'])){
      // if the user is not logged in, redirect to the login page
      header("Location: main.php");
      exit();
    }
?>
<?php
    require('../connect.php');
    @$tid=$_GET['tid'];

    $sql="delete from `teacher` where tid=$tid";

    $result=mysqli_query($conn,$sql);
    header('location:DisplayTeacher.php');
?>