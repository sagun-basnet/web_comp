<?php
require('../connect.php');
include('head.php');

@$tid = $_GET['tid'];
$sql= "select * from `teacher` WHERE tid=$tid";
$result= mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);
$fname= $row['fname'];
$lname= $row['lname'];
$email= $row['email'];
$phone= $row['phone'];

if(isset($_POST['update'])){
    $tid= $_POST['tid'];
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $sql="UPDATE `teacher` SET `fname`='[$fname]',`lname`='[$lname]',`email`='[$email]',`phone`='[$phone]' WHERE tid='$tid'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "updated successfully";
    }
    else{
        echo "update failed";
    }
    header("location:DisplayTeacher.php");

}
?>
 <div class="wrapper">
        <form class="form-signin" action="#" method="POST">
            <h2 class="form-signin-heading">Update teacher details</h2>
            <input type="text" class="form-control mt-4" name="fname" placeholder="Enter First Name" value="<?php echo $fname ?>" required="" autofocus="" />
            <input type="text" class="form-control mt-4" name="lname" placeholder="Enter Last Name" value="<?php echo $lname ?>" required="" autofocus="" />
            <input type="Email" class="form-control mt-4" name="email" placeholder="Enter your email address" value="<?php echo $email ?>" required="" autofocus="" />
            <input type="number" class="form-control mt-4" name="phone" placeholder="Enter your phone number" value="<?php echo $phone ?>" required="" autofocus="" />
            <!-- <input type="password" class="form-control mt-4" name="password" placeholder="Enter password" required="" autofocus="" />
            <input type="password" class="form-control mt-4" name="rpassword" placeholder="Re-enter your password" required="" autofocus="" /> -->
            <button class="btn btn-lg btn-primary btn-block mt-4" type="submit" name="update">Update</button>
        </form>
    </div>
<?php include('footer.php'); ?>