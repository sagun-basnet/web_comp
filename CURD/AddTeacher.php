<?php
require('../connect.php');
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $sql="INSERT INTO `teacher`(`fname`, `lname`, `email`, `phone`, `password`) VALUES ('$fname','$lname','$email','$phone','$password')";
    $result=mysqli_query($conn,$sql);
    header('location:DisplayTeacher.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login/registration form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/fstyle.css">
</head>

<body>
    <div class="wrapper">
        <form class="form-signin" action="#" method="POST">
            <h2 class="form-signin-heading">Add Teacher</h2>
            <input type="text" class="form-control mt-4" name="fname" placeholder="Enter First Name" required="" autofocus="" />
            <input type="text" class="form-control mt-4" name="lname" placeholder="Enter Last Name" required="" autofocus="" />
            <input type="Email" class="form-control mt-4" name="email" placeholder="Enter your email address" required="" autofocus="" />
            <input type="number" class="form-control mt-4" name="phone" placeholder="Enter your phone number" required="" autofocus="" />
            <input type="password" class="form-control mt-4" name="password" placeholder="Enter password" required="" autofocus="" />
            <input type="password" class="form-control mt-4" name="rpassword" placeholder="Re-enter your password" required="" autofocus="" />
            <button class="btn btn-lg btn-primary btn-block mt-4" type="submit" name="submit">Add</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>