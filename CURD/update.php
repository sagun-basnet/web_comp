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
    $id=$_GET['updateid'];
    $sql = "SELECT * from `registered` where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $parts = explode(" ", $name);
    $fname = $parts[0]; 
    $lname = $parts[1];
    $email=$row['email'];
    $pass=$row['password'];
    $address=$row['address'];
    $gender=$row['gender'];
    $contact=$row['contact'];
    $pname=$row['parent_name'];
    $pcontact=$row['parent_contact'];
    $faculty=$row['faculty'];


    if(isset($_POST['submit'])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"]; 
        $gender = $_POST["gender"];
        $contact = $_POST["contact"];
        $pname = $_POST["pname"];
        $pcontact = $_POST["pcontact"];
        $faculty = $_POST["faculty"];
        $sem = $_POST["semester"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $rpass = $_POST["rpass"];

        $sql = "UPDATE `registered` SET `id`=$id,`name`='$fname $lname',`email`='$email',`password`='$pass',`address`='$address',`gender`='$gender',`contact`='$contact',`parent_name`='$pname',`parent_contact`='$pcontact',`faculty`='$faculty' where id=$id";
    
        if(mysqli_query($conn,$sql)){
            
            header('location:display.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Regtration form</title>
</head>

<body>
    <div id="reg_formDiv">
        <form action="" method="POST">

            <h2>Update</h2>
            <div class="names gap ">
                <input type="text" placeholder="First name" name="fname" value="<?php echo $fname?>">
                <input type="text" placeholder="Last name" name="lname" value="<?php echo $lname?>">
            </div>
            <div class="address">
                <input type="text" name="address" placeholder="Enter address" value="<?php echo $address?>">
            </div>

            <div class="gender">
                Gender:
                &nbsp;<input type="radio" name="gender" id="male" value="male"<?php if($gender=="male"){echo "checked";} ?>>male
                &nbsp; &nbsp;
                <input type="radio" name="gender" id="female" value="female"<?php if($gender=="female"){echo "checked";} ?>>Female
                &nbsp; &nbsp;
                <input type="radio" name="gender" id="others" value="others" <?php if($gender=="others"){echo "checked";} ?>>others
            </div>
            <div class="contact">
                <input type="number" placeholder="Enter contact no" name="contact" value="<?php echo $contact?>">
            </div>
            <div class="parent gap">
                <input type="text" placeholder="Parent full name" name="pname"  value="<?php echo $pname?>"/>
                <input type="text" placeholder="Parent contact number" name="pcontact" value="<?php echo $pcontact?>">
            </div>
            <div class="faculty">
                <select name="faculty" id="">
                    <option selected disabled hidden>--Select Faculty--</option>
                    <option value="BCA" <?php if($faculty=="BCA"){echo "selected";} ?>>BCA</option>
                    <option value="BHM" <?php if($faculty=="BHM"){echo "selected";} ?>>BHM</option>
                    <option value="BBA" <?php if($faculty=="BBA"){echo "selected";} ?>>BBA</option>
                    <option value="BBS" <?php if($faculty=="BBS"){echo "selected";} ?>>BBS</option>
                    <option value="BSW" <?php if($faculty=="BSW"){echo "selected";} ?>>BSW</option>
                </select>
                <select name="semester" id="">
                    <option value="" selected disabled hidden>--Select Semester--</option>
                    <option value="1st" <?php if($sem=="1st"){echo "selected";} ?>>First</option>
                    <option value="2nd" <?php if($sem=="2nd"){echo "selected";} ?>>Second</option>
                    <option value="3rd" <?php if($sem=="3rd"){echo "selected";} ?>>Third</option>
                    <option value="4th" <?php if($sem=="4th"){echo "selected";} ?>>Forth</option>
                    <option value="5th" <?php if($sem=="5th"){echo "selected";} ?>>Fifth</option>
                    <option value="6th" <?php if($sem=="6th"){echo "selected";} ?>>Sixth</option>
                    <option value="7th" <?php if($sem=="7th"){echo "selected";} ?>>Seventh</option>
                    <option value="8th" <?php if($sem=="8th"){echo "selected";} ?>>Eigth</option>
                </select>
            </div>
            <div class="email">
                <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email?>">
            </div>

            <div class="Pass gap">
                <input type="password" placeholder="Password" name="pass" value="<?php echo $pass?>">
                <input type="password" placeholder="Re-Password" name="rpass" value="<?php echo $pass?>">
            </div>

            <input id="btn" class="send" name="submit" type="submit" value="Update">
        </form>
    </div>
</body>

</html>