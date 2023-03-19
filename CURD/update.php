<?php
    include '../connect.php';
    $id=$_GET['updateid'];
    $sql = "SELECT * from `registration` where id=$id";
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
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $rpass = $_POST["rpass"];

        $sql = "UPDATE `registration` SET `id`=$id,`name`='$fname $lname',`email`='$email',`password`='$pass',`address`='$address',`gender`='$gender',`contact`='$contact',`parent_name`='$pname',`parent_contact`='$pcontact',`faculty`='$faculty' where id=$id";
    
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

            <h2>Signup</h2>
            <div class="names gap ">
                <input type="text" placeholder="First name" name="fname" value="<?php echo $fname?>">
                <input type="text" placeholder="Last name" name="lname" value="<?php echo $lname?>">
            </div>
            <div class="address">
                <input type="text" name="address" placeholder="Enter address" value="<?php echo $address?>">
            </div>

            <div class="gender">
                Gender:
                &nbsp;<input type="radio" name="gender" id="male" value="male">male
                &nbsp; &nbsp;
                <input type="radio" name="gender" id="female" value="female">Female
                &nbsp; &nbsp;
                <input type="radio" name="gender" id="others" value="others">others
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
                    <option value="" selected="selected">--Select Faculty--</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="BBS">BBS</option>
                    <option value="BSW">BSW</option>
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